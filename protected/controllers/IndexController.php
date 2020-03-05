<?php

class IndexController extends Controller {

    public $commonMethodsComponent;
    public $layout = '//layouts/main';
	public $model,$loginModel;
    public function init() {
        $this->commonMethodsComponent = new CommonMethods();
        parent::init();
    }

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
		
		$this->pageTitle = "Business Funding Solutions From MoneyWorks Direct";
		$user_id = Yii::app()->user->getState('user_id');
		
		$agentName = Yii::app()->request->getParam('rep'); 
		$agentId = '';
		if($agentName != ''){
			if(strtolower($agentName) == 'michellef'){
				$agentName = 'Michelle F';
			}
			$agentModel = Agents::model()->find('fname="'.$agentName.'"');
			if(!empty($agentModel)){
				$agentId = $agentModel->id;
			}
		}
		
		if($user_id){
			$model = Users::model()->findByPk($user_id);
			$model->scenario ='update';
			$model->gross_annual_sales = str_replace(',','',$model->gross_annual_sales);
			
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				$this->redirect($url);	
			}
		}else{
			$model = new Users();
		}
		
		//$model = new Users();
		
		$loginModel = new LoginForm('Front');		
        
		
		// collect user input data
        if (isset($_POST['LoginForm'])) {
			// if it is ajax validation request
			$this->performAjaxValidation($loginModel);
            $loginModel->attributes = $_POST['LoginForm'];
			
            // validate user input and redirect to the previous page if valid
            if ($loginModel->validate()) {
                if ($loginModel->login()) {
					//$url = Settings::getRedirectUrl();
					$this->redirect(Yii::app()->createUrl('account/businessinfo'));					
                }
            }else{
				Yii::app()->user->setFlash('loginError', "Email address or Password is incorrect. Please try again.");
			}
        }
		
		if(isset($_POST['Users'])){
			$model->attributes = $_POST['Users'];	
			//echo "<pre>";print_r($_POST['Users']);exit;
			if(isset($_POST['Users']['password'])){
				$password = $_POST['Users']['password'];
			}
			$model->funding_purpose = $_POST['Users']['funding_purpose'];
			$model->percentage_share = $_POST['Users']['percentage_share'];
			$this->performAjaxValidation($model);
            //$model->username = $model->email;
            
			if($model->validate()){
				if ($result = $model->save()) {			
					if(!$user_id){
						$authAssignment = new AuthAssignment;
						$authAssignment->itemname = 'user';
						$authAssignment->userid = $model->id;
						$authAssignment->data = 'N;';
						$result = $authAssignment->save();
					}
					
					if($result){
						$apiData = array();
						
		$apiData['business_name'] = $model->business_name;
		$apiData['email'] = $model->email;
		$apiData['fname'] = $model->fname;
		$apiData['lname'] = $model->lname;
		$apiData['phone_number'] = $model->phone_number;
		$apiData['amount_needed'] = $model->amount_needed;
		$apiData['gross_annual_sales'] = $model->gross_annual_sales;
		$apiData['years_in_business'] = $model->years_in_business;
		$apiData['is_sole_owner'] = $model->is_sole_owner;
		$apiData['does_lease_or_own'] = $model->does_lease_or_own;
		$apiData['is_current_with_payments'] = $model->is_current_with_payments;
		$apiData['has_federal_liens'] = $model->has_federal_liens;
		$apiData['is_on_payment_plan'] = $model->is_on_payment_plan;
		$apiData['balance_from_what_company'] = $model->balance_from_what_company;
		$apiData['best_time'] = $model->best_time;
		$apiData['needs'] = $model->needs;
		
					
		if(!$user_id){					
			$modelLogin = new LoginForm('Front');
			$loginForm = array('username'=>$model->email,'password'=>$password);
			$modelLogin->username =$model->email;
			$modelLogin->password =$password;
			$modelLogin->email =$model->email;
			$modelLogin->login();						
			Yii::app()->user->setFlash('success', "Thank you for signing in to Money Works Direct.");
		}else{
			Yii::app()->user->setFlash('success', "Your information has been updated successfully.");
		}				
		CommonMethods::dataSubmissionToVelocify($apiData);
		$this->redirect(Yii::app()->createUrl('account/businessinfo'));
	}else{
		echo "<pre>";print_r($authAssignment->getErrors());die(' - Error');
		}
	} else {
			Yii::app()->user->setFlash('error', "There is some error while registering. Please try again");
		}
	}
	else {
			$html ='<ul>';
			
			foreach($model->getErrors() as $error){
				$html = "<li>".$error[0]."</li>"; 
			}
			$html .= "</ul>";
			Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
	}
	
}
		$this->model = $model;
		$this->loginModel = $loginModel;
			
        $this->render('index',array('model'=>$model,'agentId'=>$agentId));
    }

    

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
	
	protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-index-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
	
	

}
