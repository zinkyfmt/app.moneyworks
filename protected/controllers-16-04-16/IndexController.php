<?php

class IndexController extends Controller {

    public $commonMethodsComponent;
    public $layout = '//layouts/main';
	public $model;
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
		
		$this->pageTitle = "Moneydirect";
		
		$model = new Users();
		
		if(isset($_POST['Users'])){
			$model->attributes = $_POST['Users'];	
			//echo "<pre>";print_r($_POST['Users']);exit;
			$password = $_POST['Users']['password'];
			$model->funding_purpose = $_POST['Users']['funding_purpose'];
			$this->performAjaxValidation($model);
            //$model->username = $model->email;
            
			if($model->validate()){
				if ($model->save()) {			
					
					$authAssignment = new AuthAssignment;
					$authAssignment->itemname = 'user';
					$authAssignment->userid = $model->id;
					$authAssignment->data = 'N;';
					if($authAssignment->save()){
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
		
					
		
					
						$modelLogin = new LoginForm('Front');
						$loginForm = array('username'=>$model->email,'password'=>$password);
						$modelLogin->username =$model->email;
						$modelLogin->password =$password;
						$modelLogin->email =$model->email;
						
						
						$modelLogin->login();
						CommonMethods::dataSubmissionToVelocify($apiData);
						Yii::app()->user->setFlash('success', "Thank you for signing up to Money Direct Works.");
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
		
        $this->render('index',array('model'=>$model));
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
