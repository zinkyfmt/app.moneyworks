<?php

class IndexController extends Controller {

    public $commonMethodsComponent;
    public $layout = '//layouts/main';
	public $model, $businessModel, $loginModel, $userModel, $personalInfoModel;

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
//			if(empty($model)){
//				$url = Settings::getRedirectUrl();
//				$this->redirect($url);
//			}
		}else{
			$model = new Users();
		}
        if($user_id){
            $businessModel = UsersBusinessInfo::model()->find('user_id='.$user_id);
            if(empty($businessModel)){
                $businessModel = new UsersBusinessInfo();
            }
        }else{
            $businessModel = new UsersBusinessInfo();
        }

        if($user_id){
            $personalInfoModel = UsersPersonalInfo::model()->find('user_id='.$user_id);
            if(empty($personalInfoModel)){
                $personalInfoModel = new UsersPersonalInfo();
            }
        }else{
            $personalInfoModel = new UsersPersonalInfo();
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
                $loginModel->login();
                //if ($loginModel->login()) {
					//$url = Settings::getRedirectUrl();
//					$this->redirect(Yii::app()->createUrl('index'));
                //}
            }else{
				Yii::app()->user->setFlash('loginError', "Email address or Password is incorrect. Please try again.");
			}
        }

        if (isset($_POST['Users'])) {
            var_dump('Users');
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
                        //$this->redirect(Yii::app()->createUrl('account/businessinfo'));
                        if(isset($_POST['UsersBusinessInfo'])){
                            $businessModel->attributes = $_POST['UsersBusinessInfo'];
                            $businessModel->user_id = Yii::app()->user->getState('user_id');
                            $businessModel->full_billing_address = $_POST['UsersBusinessInfo']['full_billing_address'];

                            $this->performAjaxValidation($businessModel);
                            if($businessModel->validate()){
                                if ($businessModel->save()) {
                                    if(isset($_POST['UsersPersonalInfo'])){
                                        $personalInfoModel->attributes = $_POST['UsersPersonalInfo'];
                                        /*$owner1_dob = $owner2_dob = '0000-00-00';
                                        if($_POST['UsersPersonalInfo']['owner_1_dob'] != ''){
                                            $owner1_dob_arr = explode('-',$_POST['UsersPersonalInfo']['owner_1_dob']);
                                            $owner1_dob =$owner1_dob_arr[2].'-'.$owner1_dob_arr[1].'-'.$owner1_dob_arr[0];
                                        }

                                        if($_POST['UsersPersonalInfo']['owner_2_dob'] != ''){
                                            $owner2_dob_arr = explode('-',$_POST['UsersPersonalInfo']['owner_2_dob']);
                                            $owner2_dob =$owner2_dob_arr[2].'-'.$owner2_dob_arr[1].'-'.$owner2_dob_arr[0];
                                        }
                                        $model->owner_1_dob = $owner1_dob;
                                        $model->owner_2_dob = $owner2_dob;
                                        */
                                        $personalInfoModel->owner_2_dob = $_POST['UsersPersonalInfo']['owner_2_dob'];
                                        $personalInfoModel->owner_1_ssn = $_POST['owner1_ssn1'].'-'.$_POST['owner1_ssn2'].'-'.$_POST['owner1_ssn3'];
                                        $personalInfoModel->owner_1_payment = $_POST['UsersPersonalInfo']['owner_1_payment'];
                                        $personalInfoModel->owner_2_payment = $_POST['UsersPersonalInfo']['owner_2_payment'];
                                        if(isset($_POST['owner2_ssn1'])){
                                            $personalInfoModel->owner_2_ssn = $_POST['owner2_ssn1'].'-'.$_POST['owner2_ssn2'].'-'.$_POST['owner2_ssn3'];
                                        }
                                        $personalInfoModel->user_id = Yii::app()->user->getState('user_id');
                                        $this->performAjaxValidation($personalInfoModel);
                                        if($personalInfoModel->validate()){
                                            if ($personalInfoModel->save()) {
                                                $userBusinessInfoData = UsersBusinessInfo::model()->find('user_id='.$personalInfoModel->user_id);
                                                $userBusinessData = $userBusinessInfoData->attributes;

                                                unset($userBusinessData['id']);
                                                unset($userBusinessData['user_id']);

                                                $userBusinessData['email']=Yii::app()->user->getState('user_email');

                                                $userPersonalInfoData = UsersPersonalInfo::model()->find('user_id='.$personalInfoModel->user_id);
                                                $userPersonalData = $userPersonalInfoData->attributes;
                                                unset($userPersonalData['id']);
                                                unset($userPersonalData['user_id']);
                                                $apiData	=	array_merge($userBusinessData,$userPersonalData);
                                                CommonMethods::dataSubmissionToVelocify($apiData);

                                                $fileName = Settings::generatePdf();
                                                Yii::app()->user->setFlash('success', "Your personal info has been saved successfully.");
                                                $userModel = Users::model()->findByPk(Yii::app()->user->getState('user_id'));
                                                $userModel->pdf_path = $fileName;
                                                $userModel->save();
                                                $this->redirect(Yii::app()->createUrl('account/uploads'));
                                            }
                                        }else{
                                            $html ='<ul>';

                                            foreach($personalInfoModel->getErrors() as $error){
                                                $html = "<li>".$error[0]."</li>";
                                            }
                                            $html .= "</ul>";
                                            Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
                                        }
                                    }
                                    Yii::app()->user->setFlash('success', "Your business info has been saved successfully.");
                                }
                            }else{
                                $html ='<ul>';
                                foreach($businessModel->getErrors() as $error){
                                    $html = "<li>".$error[0]."</li>";
                                }
                                $html .= "</ul>";
                                Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
                            }
                        }
                    } else {
                        echo "<pre>";print_r($authAssignment->getErrors());die(' - Error');
                    }
                } else {
                    Yii::app()->user->setFlash('error', "There is some error while registering. Please try again");
                }
            } else {
                $html ='<ul>';

                foreach($model->getErrors() as $error){
                    $html = "<li>".$error[0]."</li>";
                }
                $html .= "</ul>";
                Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
//                $this->redirect(Yii::app()->createUrl('index'));
            }

        }

        if ($user_id) {
            $userData = Users::model()->findByPk($user_id);
        } else {
            $userData = new \stdClass();
            $userData->fname = '';
            $userData->lname = '';
            $userData->phone_number = '';
            $userData->is_sole_owner = 1;
        }
        $this->userModel = $userData;
		$this->model = $model;
        $this->businessModel = $businessModel;
        $this->personalInfoModel = $personalInfoModel;
		$this->loginModel = $loginModel;
        $this->render('index', array('model'=>$model,'businessModel'=> $businessModel,'agentId'=>$agentId,'userData'=>$userData, 'personalInfoModel' => $personalInfoModel));
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
