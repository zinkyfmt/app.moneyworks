<?php 
class AccountController extends Controller
{
	public $commonMethodsComponent;
	public $layout='//layouts/main';
	public $model;
	public function init(){
		$this->commonMethodsComponent = new CommonMethods();
		parent::init();
	}
	
	public function actionIndex(){
		
			$this->redirect(Yii::app()->createUrl('account/businessinfo'));
		
	}
	
	public function actionBusinessinfo(){
		if(Yii::app()->user->isGuest){
			//$this->redirect(Yii::app()->createUrl('index'));
		};
		$model = new UsersBusinessInfo();
		
		if(isset($_POST['UsersBusinessInfo'])){
			$model->attributes = $_POST['UsersBusinessInfo'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					Yii::app()->user->setFlash('success', "Your business info has been saved successfully.");
					$this->redirect(Yii::app()->createUrl('account/financials'));
				}
			}else{
				$html ='<ul>';
					
				foreach($model->getErrors() as $error){
					$html = "<li>".$error[0]."</li>"; 
				}
				$html .= "</ul>";
				Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
			}
		}
		$this->model = $model;
		$userData = Users::model()->findByPk(Yii::app()->user->getState('user_id'));
		$this->render('businessinfo',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionFinancials(){
		if(Yii::app()->user->isGuest){
			//$this->redirect(Yii::app()->createUrl('index'));
		};
		
		$model = new UsersFinancials();
		
		if(isset($_POST['UsersFinancials'])){
			$model->attributes = $_POST['UsersFinancials'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					Yii::app()->user->setFlash('success', "Your financial info has been saved successfully.");
					$this->redirect(Yii::app()->createUrl('account/personalinfo'));
				}
			}else{
				$html ='<ul>';
					
					foreach($model->getErrors() as $error){
						$html = "<li>".$error[0]."</li>"; 
					}
					$html .= "</ul>";
					Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
			}
		}
		
		$this->model = $model;
		$user_id = Yii::app()->user->getState('user_id');
		$userData = Users::model()->findByPk($user_id);
		$this->render('financials',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionPersonalinfo(){
		if(Yii::app()->user->isGuest){
			//$this->redirect(Yii::app()->createUrl('index'));
		};
		$model = new UsersPersonalInfo();
		//echo "<pre>";print_r($_POST);exit;
		
		if(isset($_POST['UsersPersonalInfo'])){
			$model->attributes = $_POST['UsersPersonalInfo'];
			$model->owner_1_dob = $_POST['owner1_dob3'].'-'.$_POST['owner1_dob2'].'-'.$_POST['owner1_dob1'];
			$model->owner_2_dob = $_POST['owner2_dob3'].'-'.$_POST['owner2_dob2'].'-'.$_POST['owner2_dob1'];
			
			$model->owner_1_ssn = $_POST['owner1_ssn1'].'-'.$_POST['owner1_ssn2'].'-'.$_POST['owner1_ssn3'];
			$model->owner_2_ssn = $_POST['owner2_ssn1'].'-'.$_POST['owner2_ssn2'].'-'.$_POST['owner2_ssn3'];
			
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					Yii::app()->user->setFlash('success', "Your personal info has been saved successfully.");
					$this->redirect(Yii::app()->createUrl('account/bizlocation'));
				}
			}else{
				$html ='<ul>';
					
					foreach($model->getErrors() as $error){
						$html = "<li>".$error[0]."</li>"; 
					}
					$html .= "</ul>";
					Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
			}
		}
		
		$this->model = $model;
		$user_id = Yii::app()->user->getState('user_id');
		$userData = Users::model()->findByPk($user_id);
		
		$this->render('personalinfo',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionBizlocation(){
		if(Yii::app()->user->isGuest){
			//$this->redirect(Yii::app()->createUrl('index'));
		};
		$model = new UsersBizLocation();
		
		if(isset($_POST['UsersBizLocation'])){
			$model->attributes = $_POST['UsersBizLocation'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					Yii::app()->user->setFlash('success', "Your business location info has been saved successfully.");
					$this->redirect(Yii::app()->createUrl('account/references'));
				}
			}else{
				$html ='<ul>';
					
					foreach($model->getErrors() as $error){
						$html = "<li>".$error[0]."</li>"; 
					}
					$html .= "</ul>";
					Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
			}
		}
		$this->model = $model;
		$this->render('bizlocation',array('model'=>$model));
	}
	
	public function actionReferences(){
		if(Yii::app()->user->isGuest){
			//$this->redirect(Yii::app()->createUrl('index'));
		};
		$model = new UsersReferences();
		
		
		if(isset($_POST['UsersReferences'])){
			$model->attributes = $_POST['UsersReferences'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					$fileName = $this->generatePdf();
					Yii::app()->user->setFlash('success', "Your references has been saved successfully.");
					
					//header("Content-type: application/octet-stream");
					//header("Content-Disposition: attachment; filename=\"".$fileName."\""); // use 'attachment' to force a file download
					
					$this->redirect(Yii::app()->createUrl('account/references'));
				}
			}else{
				$html ='<ul>';
					
					foreach($model->getErrors() as $error){
						$html = "<li>".$error[0]."</li>"; 
					}
					$html .= "</ul>";
					Yii::app()->user->setFlash('error', "There are some errors:<br />".$html);
			}
		}
		$this->model = $model;
		$this->render('references',array('model'=>$model));
	}
	
	public function actionCreate()
	{
		if(!Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->createUrl('/'));
		}
		
        $model = new Users;
        $pageTitle = 'User Registration';
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
       // $model->gender = 'm';
        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];			
            $model->username = $model->email;
            $uploadedfile = CUploadedFile::getInstance($model, 'profile_pic');
			$model->is_active = 'f';
			if($model->validate()){
            if ($model->save()) {
				
				$URL = Yii::app()->getBaseUrl(true);
			
				/* Verification email */
				$MailComponent = new MailComponent;
				$token = UserIdentity::md5_encrypt(time(),'',16);
				
				$verifyLink = "<a href=" . $URL . '/account/verify/?token=' . rawurlencode($token) . '&id=' . $model->id . ">Verification Link</a>";
				$checkParameter = array('{FirstName}', '{Verification Link}');
				$replaceMailParameter = array($model->fname, $verifyLink);
				$templateContent = $MailComponent->prepairmail(1, $checkParameter, $replaceMailParameter);
				$MailComponent->mailsend($model->email, 'Paspic', $templateContent['subject'], $templateContent['content'], '');
			
				$model->token = $token;
			
                if (!empty($uploadedfile)) {
                    if (!file_exists(YiiBase::getPathOfAlias("webroot") . '/uploads/profile_pics')) {
                        mkdir(YiiBase::getPathOfAlias("webroot") . '/uploads/profile_pics', 0777, true);
                    }
                    $fileName = time() . '_' . $uploadedfile;
                    $uploadedfile->saveAs(Yii::app()->basePath . '/../uploads/profile_pics/' . $fileName);
                    $thumbname = pathinfo($fileName);
                    $model->profile_pic = 'uploads/profile_pics/' . $fileName;
                }
				$model->save();
                $authAssignment = new AuthAssignment;
                $authAssignment->itemname = 'user';
                $authAssignment->userid = $model->id;
                $authAssignment->data = 'N;';
                if($authAssignment->save()){
					$model = new Users();
				
					Yii::app()->user->setFlash('success', "Thank you for signing up to Taload. In order to continue setting up of your account, we have sent an email to the address you provided. If our email has been identified as Spam, please remember to add us to your safe list.");
					$this->redirect(Yii::app()->createUrl('account/create'));
				}else{
					echo "<pre>";print_r($authAssignment->getErrors());die(' - Error');
				}
				} else {
					Yii::app()->user->setFlash('error', "There are some errors while registering");
				}
			}
			else {
					//echo "<pre>";print_r($model->getErrors());exit;
					Yii::app()->user->setFlash('error', "There are some errors while registering");
				}
        }
		$default_country_obj = Configuration::model()->find("keyword = 'default_country'");
		$default_country = $default_country_obj->value;
		$model->country = $default_country;
		
		$script = "$(document).ready(function(){
			jQuery('#country').change(function() {
			    getstatelisting(this.value);
            });
		});
		function getstatelisting(countryCode){
			if(countryCode!=''){
				jQuery('#state').html(\"<option value=''>Loading...</option>\");
				jQuery.ajax({
						'type': 'POST',
						'url' : '".Yii::app()->createUrl("account/statelisting")."',
						'data': 'countryCode='+countryCode+'&CSRF_SYSTEM_TOKEN=".Yii::app()->request->csrfToken."', 
						success: function (data) {
							jQuery('#state').html(data);
						},
			    });
			}
		}";
		Yii::app()->clientScript->registerScript('StateListing', $script, CClientScript::POS_END);
		$this->render('create', array('model' => $model, 'pageTitle' => $pageTitle));		
	}
	
	public function actionEditprofile()
	{
			Yii::app()->clientScript->registerMetaTag("Paspic.com", 'author');
		
		Yii::app()->clientScript->registerMetaTag("support@paspic.co.uk", 'contact');
		
		Yii::app()->clientScript->registerMetaTag("index, follow", 'robots');
		
		Yii::app()->clientScript->registerMetaTag("Exxite CMS and Web Publication System (c) Bal&aacute;zs Faa", 'generator');
		
		Yii::app()->clientScript->registerMetaTag("http://www.paspic.com/copyright.php", 'rights');
		
		//$this->layout = "//layouts/inner";
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->createUrl('account/login'));
		}
		Yii::app()->clientScript->registerScriptFile($this->commonMethodsComponent->publishFrontAssets() . '/js/jquery.maskedinput.js', CClientScript::POS_END);
                
		$user_mid = Yii::app()->user->getState('user_mid');   
		if($user_mid) {		
		$model = Users::model()->find('mid="'.$user_mid.'"');
		        
		$oldPassword = $model->xpass;
		$pageTitle = 'Edit User Profile';
       
		if (isset($_POST['Users'])) {
			$model->attributes = $_POST['Users'];
            $valided = $model->validate();               
                        
			if($valided){
				if ($model->save()) {
					Yii::app()->user->setState('user_firstname', $model->xname);
					Yii::app()->user->setState('user_lastname', $model->xfamilyname);	
					Yii::app()->user->setState('fullname', $model->xname . " " . $model->xfamilyname);		  			
										
					Yii::app()->user->setFlash('success', "Your profile updated successfully.");
				} else {
					Yii::app()->user->setFlash('error', "There are some errors while updating your profile");
				}
			 }
                        
        }
		$stateListing = CommonMethods::getstatelist($model->xcountry); 
		$cs=Yii::app()->clientScript;
		$cs->scriptMap=array(
			'jquery-1.11.1.min.js'=>false
		);		
		
		$script = "
		var firstAtLoad = 0;
		$(document).ready(function(){
			jQuery('#Users_xmobile').mask('999-999-9999');
			jQuery('#Users_xcountry').change(function() {
			    getstatelisting(this.value);
            });
			
		});
		";
		$cs->registerScript('StateListing', $script, CClientScript::POS_END);
				
		$this->render('editprofile', array('model' => $model, 'pageTitle' => $pageTitle,'stateList'=>$stateListing));
		} else {
			$this->redirect(Yii::app()->createUrl('account/login'));
		}	
	}
	
	public function actionChangePassword(){
	
		Yii::app()->clientScript->registerMetaTag("Paspic.com", 'author');
		
		Yii::app()->clientScript->registerMetaTag("support@paspic.co.uk", 'contact');
		
		Yii::app()->clientScript->registerMetaTag("index, follow", 'robots');
		
		Yii::app()->clientScript->registerMetaTag("Exxite CMS and Web Publication System (c) Bal&aacute;zs Faa", 'generator');
		
		Yii::app()->clientScript->registerMetaTag("http://www.paspic.com/copyright.php", 'rights');
		
		//$this->layout = "//layouts/inner";
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->createUrl('account/login'));
		}
		$user_id	=	Yii::app()->user->getState('user_id');
		$model=Users::model()->findByPk($user_id);
		$model->scenario = 'changepassword';
		if(Yii::app()->request->getParam('Users')){
			$usersData = Yii::app()->request->getParam('Users');			
			$model->current_password = $usersData['current_password'];
			$model->new_password = $usersData['new_password'];
			$model->confirm_password = $usersData['confirm_password'];

			// validate user input and redirect to the previous page if valid
			if($model->validate()){
				$model->xpass = UserIdentity::md5_encrypt($usersData['new_password']);
				if($model->save()){
					Yii::app()->user->setFlash('success', "Password changed successfully.");
					$this->redirect(Yii::app()->createUrl('account/changepassword'));
				}else{
					Yii::app()->user->setFlash('error', "Some error occured, Please try again.");
					$this->redirect(Yii::app()->createUrl('account/changepassword'));
				}
			}
		}
		
		$this->render('changepassword', array('model' => $model));
	}
	
	
	
	public function actionVerify() {
		if(Yii::app()->request->getParam('token')){
			$token = rawurldecode(Yii::app()->request->getParam('token'));
			$id = Yii::app()->request->getParam('id');
			
			$usersObj = Users::model()->findByPk($id);
			if(!empty($usersObj)){
				if($usersObj->is_active == 'f'){
					if($usersObj->token == $token){
						$usersObj->is_active = 't';
						$usersObj->token = '';
						$URL = Yii::app()->getBaseUrl(true);
			
						/* Verification email */
						$MailComponent = new MailComponent;
						
						$checkParameter = array('{FirstName}', '{Sitename}', '{Registered Email}');
						$replaceMailParameter = array($usersObj->fname,$URL, $usersObj->email);
						$templateContent = $MailComponent->prepairmail(2, $checkParameter, $replaceMailParameter);
						$MailComponent->mailsend($usersObj->email, 'Taload', $templateContent['subject'], $templateContent['content'], '');
						
						$usersObj->save();
						
						Yii::app()->user->setFlash('success', "Thank you for completing the Sign-up process, You account is now activated. A welcome mail is also sent to your Email-Id.");
						$this->redirect(Yii::app()->createUrl('account/login'));
					}else{
						Yii::app()->user->setFlash('error', "The token is Invalid or expired.");
						$this->redirect(Yii::app()->createUrl('account/create'));
					}
				}else{
					Yii::app()->user->setFlash('success', "Your account is already activated.");
					$this->redirect(Yii::app()->createUrl('account/create'));
				}
				
			}else{
				Yii::app()->user->setFlash('error', "A problem has been occurred while check user availability. Please try again.");
				$this->redirect(Yii::app()->createUrl('account/create'));
			}
		}
	}
	public function actionUserdashboard() {
        $session = Yii::app()->session;
        
        $cartModel = new Cart();

        if (!Yii::app()->user->isGuest) {			
            $photos = $cartModel->findAll(array('condition'=>'xuser="' . Yii::app()->user->getState('user_mid').'" AND ordered="0"','order'=>'id DESC'));
        }		
		else {
            $this->redirect(Yii::app()->createUrl('account/login'));
        }

        //$photos = $session['photos'];		
        $this->render('dashboard', array('photos' => $photos));
    }
	public function actionLogin() {
		
		$this->pageTitle = "Login";
	
		$session	= Yii::app()->session;
		$tempSession = session_id();
			
		if(!Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->createUrl('account/businessinfo'));
		}
        $model = new LoginForm('Front');		
        // if it is ajax validation request
        $this->performAjaxValidation($model);
		
		// collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
			
            //print_r($model->validate());die;
            // validate user input and redirect to the previous page if valid
            if ($model->validate()) {
                if ($model->login()) {
					if(Yii::app()->request->getParam('referer')){
						$referer	=	Yii::app()->request->getParam('referer');
						$this->redirect(Yii::app()->createUrl($referer.'/index'));
					}else{					
						$this->redirect(Yii::app()->createUrl('account/index'));
					}
                }
            }else{
				Yii::app()->user->setFlash('error', "Email address or Password is incorrect. Please try again.");
			}
        }
		// display the login form
        $this->render('login', array('model' => $model));
    }
	
	public function actionLogout(){
		Yii::app()->user->logout(false);		
		$this->redirect(Yii::app()->createUrl('account/login'));
	}
	
	public function actionForgotPassword(){
	
		
		$this->pageTitle = "Password at Paspic  |Make Passport Photos | Baby's First Passport";
		
		if(!Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		}
		$model = new Users;
		if(Yii::app()->request->getParam('Users')){
			$usersData = Yii::app()->request->getParam('Users');
			
			$email = addslashes($usersData['xmail']);			
			$userObj = Users::model()->findByAttributes(array("xmail" =>$email));
			if(!empty($userObj)){
				$URL = Yii::app()->getBaseUrl(true);
			
				/* Verification email */
				$MailComponent = new MailComponent;
				$token = UserIdentity::md5_encrypt(time(),'',16);
				
				$resetLink = "<a href=" . $URL . '/account/resetpassword/?token=' . rawurlencode($token) . '&id=' . $userObj->id . ">Reset Password Link</a>";
				$signature = Settings::get('email_signature');
				
				$checkParameter = array('{FirstName}', '{ResetLink}','{siteemail}','{sitename}', '{Signature}');
				$replaceMailParameter = array($userObj->xname, $resetLink,'support@paspic.com','Paspic.com',$signature);
				$templateContent = $MailComponent->prepairmail(3, $checkParameter, $replaceMailParameter);
				$MailComponent->mailsend($userObj->xmail, 'Paspic', $templateContent['subject'], $templateContent['content'], '');
			
				$userObj->reset_token = $token;
				$userObj->save();
				
				Yii::app()->user->setFlash('success', "An Email is sent to your Email-Id successfully with reset link. Please follow the instructions in mail to reset your password.");
				//echo $templateContent['content'];exit;
				$this->redirect(Yii::app()->createUrl('account/forgotpassword'));
			}else{
				Yii::app()->user->setFlash('error', "There is no account registered with this Email-Id.");
				$this->redirect(Yii::app()->createUrl('account/forgotpassword'));
			}
		}
		
		$this->render('forgotpassword', array('model' => $model));
	}
	
	public function actionResetPassword(){
		if(Yii::app()->request->getPost('Users')){
			$usersData = Yii::app()->request->getPost('Users');
			
			$id = Yii::app()->request->getParam('id');

			$model = Users::model()->findByPk($id);
			$model->scenario = 'resetpassword';
			
			$model->new_password = $usersData['new_password'];
			$model->confirm_password = $usersData['confirm_password'];

			// validate user input and redirect to the previous page if valid
			if($model->validate()){
				$model->xpass = UserIdentity::md5_encrypt($usersData['new_password']);
				$model->reset_token = '';
				if($model->save()){
					Yii::app()->user->setFlash('success', "Password changed successfully.");
					$this->redirect(Yii::app()->createUrl('account/login'));
				}else{
					Yii::app()->user->setFlash('error', "Some error occured, Please try again.");
				}
			}
			$this->render('resetpassword', array('model' => $model));
		}
	
		if(Yii::app()->request->getParam('token')){
			$token = rawurldecode(Yii::app()->request->getParam('token'));
			$id = Yii::app()->request->getParam('id');

			$usersObj = Users::model()->findByPk($id);
			$usersObj->scenario = 'resetpassword';
			if(!empty($usersObj)){
				if($usersObj->reset_token == $token){
					$this->render('resetpassword', array('model' => $usersObj));
				}else{
					Yii::app()->user->setFlash('error', "You are unable to reset your password. Password reset requires the use of a valid reset token.");
					$this->redirect(Yii::app()->createUrl('account/login'));
				}
			}else{
				Yii::app()->user->setFlash('error', "A problem has been occurred while check user availability. Please try again.");
				$this->redirect(Yii::app()->createUrl('account/login'));
			}
		}
	}

	 protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-index-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
	
	protected function generatePdf(){
		            
        $user_id = Yii::app()->user->getState('user_id');
		$userData = Users::model()->findByPk($user_id);
		$userBusinessData = UsersBusinessInfo::model()->find('user_id='.$user_id);
		$userFinancialData = UsersFinancials::model()->find('user_id='.$user_id);
		$userPersonalData = UsersPersonalInfo::model()->find('user_id='.$user_id);
		$userBizlocationData = UsersBizLocation::model()->find('user_id='.$user_id);
		$userReferencesData = UsersReferences::model()->find('user_id='.$user_id);
		
       	$filename               =   md5(uniqid(time())).".pdf";
        
        $logo = '';
        //if(isset($invoiceSettings->logo_image) && $invoiceSettings->logo_image != ''){
            
            //$logo    = '<img src="'. Yii::app()->getBaseUrl() .'/upload/company-logo/'.$invoiceSettings->logo_image.'" style="height:165px;"/>';
           
        //}
		$logo    = '<img src="'. Yii::app()->getBaseUrl() .'/images/logo.jpg" />';
		//$style='<style>@page *{margin-top: 0cm;margin-bottom: 0cm;margin-left: 0cm;margin-right: 0cm;}</style>';

        $text    =   '<table width="950" border="0" cellpadding="0" >
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><img src="images/logo.jpg" alt=""/></td>
    <td style="font-size:16px; line-height:25px"><strong>ADMINISTRATIVE FORM PLEASE FAX TO:1.646.417.5809</strong><br>
Sales Rep: Julian Giannuzzi</td>
  </tr>
  </table></td>
  </tr>
  <tr>
    <td height="2"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="0" cellspacing="0" style="font-size:16px;">
    <tr>
    <td width="25%">DBA Name</td>
    <td width="25%">'.$userBusinessData->dba_name.'</td>
    <td width="15%" >Legal Name</td>
    <td width="35%" colspan="3">'.$userBusinessData->legal_name.'</td>
  </tr>
  
  <tr>
    <td width="20%">Type of Business</td>
    <td width="30%">'.$userBusinessData->type_of_business.'</td>
    <td width="10%">Tax ID</td>
    <td width="10%">'.$userBusinessData->tax_id.'</td>
    <td width="15%"  >Corp/LLC/Sole Prop</td>
    <td width="15%">'.$userBusinessData->business.'</td>
  </tr>
  <tr>
    <td width="25%">Full Business Address</td>
    <td colspan="5">'.$userBusinessData->business_address.'</td>
</tr>
<tr>
    <td width="25%">Full Billing Address</td>
    <td colspan="5">'.$userBusinessData->full_billing_address.'</td>
  </tr>
<tr>
    <td width="20%">Phone at Location</td>
    <td width="30%">'.$userBusinessData->phone_at_location.'</td>
    <td width="10%">Best Phone</td>
    <td width="10%">'.$userBusinessData->best_phone.'</td>
    <td width="15%" >Fax</td>
    <td width="15%">'.$userBusinessData->fax.'</td>
  </tr>
  
   <tr>
	<td width="25%">Business Email</td>
	<td width="25%" >'.$userBusinessData->business_email.'</td>
    <td width="25%" >Website</td>
    <td width="25%" colspan="3">'.$userBusinessData->website.'</td>
  </tr>
 
  <tr><td colspan="6"><table width="950" cellpadding="0" cellspacing="0"><tr>
    <td width="25%">Years In Business</td>
    <td width="29%" >'.$userData->years_in_business.'</td>
    <td width="18%">Average Ticket</td>
    <td width="10%">&nbsp;</td>
    <td width="13%">Gross Annual Sales</td>
    <td width="10%" >'.$userData->gross_annual_sales.'</td>
  </tr></table></td></tr>
 
  <tr><td colspan="6"><table width="950" ><tr>
    <td width="25%">Do you currently have cash advance? Y / N</td>
    <td width="10%" >'.$userFinancialData->cash_advance.'</td>
    <td width="15%">With who?</td>
    <td width="15%">'.$userFinancialData->cash_advance_with.'</td>
    <td width="15%">Balance</td>
    <td width="20%" >'.$userFinancialData->balance.'</td>
  </tr></table></td></tr>
  <tr><td colspan="6"><table width="950" ><tr>
    <td width="25%" >Current Credit Card Processor</td>
    <td width="25%">'.$userFinancialData->current_credit_card_processor.'</td>
    <td width="25%">Average Processing Volume</td>
    <td width="25%">'.$userFinancialData->avg_processing_volume.'</td></table></td></tr>
  </tr>
  
   <tr><td colspan="6"><table width="950"><tr>
    <td width="15%">Last Month Vol.</td>
    <td width="10%">'.$userFinancialData->last_month_vol.'</td>
    <td width="15%">#of Tickets</td>
    <td width="10%"></td>
    <td width="15%">2nd Month Vol.</td>
    <td width="10%">'.$userFinancialData->second_month_vol.'</td>
    <td width="15%">#of Tickets</td>
    <td width="10%"></td>
  </tr></table></td></tr>
  <tr>
    <td colspan="6"><table width="950"><tr>
    <td width="15%">3rd Month Vol.</td>
    <td width="10%">'.$userFinancialData->third_month_vol.'</td>
    <td width="15%">#of Tickets</td>
    <td width="10%"></td>
    <td width="15%">4th Month Vol.</td>
    <td width="10%">'.$userFinancialData->fourth_month_vol.'</td>
    <td width="15%">#of Tickets</td>
    <td width="10%"></td>
  </tr></table></td></tr>
 
  </table>
   
  	</td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:16px;">
    <tr>
  <tr>
    <td width="20%" ><strong>Owner #1 Name</strong></td>
	<td width="30%" colspan="3">'.$userPersonalData->owner_1_name.'</td>
    <td width="20%" >Title</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_1_title.'</td>
  </tr>
  
  <tr>
    <td width="20%">Date of Birth</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_1_dob.'</td>
    <td width="20%">SSN</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_1_ssn.'</td>
	
  </tr>
  <tr>
    <td width="20%" >Full Home Address</td>
    <td width="80%" colspan="7">'.$userPersonalData->owner_1_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="20%" colspan="2">Home Phone</td>
		<td width="15%">'.$userPersonalData->owner_1_home_phone.'</td>
		<td width="15%">Cell Phone</td>
		<td width="15%">'.$userPersonalData->owner_1_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">'.$userPersonalData->owner_1_email.'</td>
   
   
  </tr>
 
   <tr>
		<td width="12%">Own/Rent  $</td>
		<td width="13%">'.$userPersonalData->owner_1_own_or_rent.'</td>
		<td width="12%">Years There</td>
		<td width="13%">'.$userPersonalData->owner_1_years_there.'</td>
		<td width="12%">Drivers License #</td>
		<td width="13%">'.$userPersonalData->owner_1_drivers_license.'</td>
		<td width="12%">State</td>
		<td width="13%">'.$userPersonalData->owner_1_drivers_license_state.'</td>
  </tr>

    <tr>
    <td width="20%" ><strong>Owner #2 Name</strong></td>
	<td width="30%" colspan="3">'.$userPersonalData->owner_2_name.'</td>
    <td width="20%" >Title</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_2_title.'</td>
  </tr>
  
  <tr>
    <td width="20%">Date of Birth</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_2_dob.'</td>
    <td width="20%">SSN</td>
    <td width="30%" colspan="3">'.$userPersonalData->owner_2_ssn.'</td>
	
  </tr>
  <tr>
    <td width="20%" >Full Home Address</td>
    <td width="80%" colspan="7">'.$userPersonalData->owner_2_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="20%" colspan="2">Home Phone</td>
		<td width="15%">'.$userPersonalData->owner_2_home_phone.'</td>
		<td width="15%">Cell Phone</td>
		<td width="15%">'.$userPersonalData->owner_2_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">'.$userPersonalData->owner_2_email.'</td>
   
   
  </tr>
 
   <tr>
		<td width="12%">Own/Rent  $</td>
		<td width="13%">'.$userPersonalData->owner_2_own_or_rent.'</td>
		<td width="12%">Years There</td>
		<td width="13%">'.$userPersonalData->owner_2_years_there.'</td>
		<td width="12%">Drivers License #</td>
		<td width="13%">'.$userPersonalData->owner_2_drivers_license.'</td>
		<td width="12%">State</td>
		<td width="13%">'.$userPersonalData->owner_2_drivers_license_State.'</td>
  </tr>
  
  </table>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:16px;">
    
  <tr>
		<td width="12%">Business Home Based? Y/N</td>
		<td width="13%">'.$userBizlocationData->business_home_based.'</td>
		<td width="12%">Location: Lease/Own</td>
		<td width="13%">'.$userBizlocationData->location.'</td>
		<td width="12%">Lease Term</td>
		<td width="13%">'.$userBizlocationData->lease_term.'</td>
		<td width="12%">Monthly Rent</td>
		<td width="13%">'.$userBizlocationData->monthly_rent.'</td>
   </tr>
    <tr>
		<td width="20%">Landlord / Mortgage Co.</td>
		<td width="30%" colspan="2">'.$userBizlocationData->landlord_mortgage_co.'</td>
		<td width="20%">Contact</td>
		<td width="30%" colspan="2">'.$userBizlocationData->landlord_mortgage_co_contact.'</td>
  </tr>
  
   <tr>
		<td width="20%" colspan="2">Contact Phone</td>
		<td width="15%">'.$userBizlocationData->landlord_mortgage_co_contact_phone.'</td>
		<td width="15%">Cell</td>
		<td width="15%">'.$userBizlocationData->landlord_mortgage_co_contact_cell.'</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">'.$userBizlocationData->landlord_mortgage_co_contact_email.'</td>   
  </tr>
  </table></td>
   
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:16px;">
    
  <tr>
	<td width="20%">Bank Name/Branch</td>
	<td width="15%">'.$userReferencesData->bank_name_branch.'</td>
	<td width="15%">Contact</td>
	<td width="15%">'.$userReferencesData->bank_name_branch_contact.'</td>
	<td width="15%">Phone</td>
	<td width="20%" >'.$userReferencesData->bank_name_branch_phone.'</td>
   
  </tr>
	<tr>
	<td width="20%">Trade Reference#1</td>
	<td width="15%">'.$userReferencesData->trade_reference_1.'</td>
	<td width="15%">Contact</td>
	<td width="15%">'.$userReferencesData->trade_reference_1_contact.'</td>
	<td width="15%">Phone</td>
	<td width="20%">'.$userReferencesData->trade_reference_1_phone.'</td>
   
  </tr>
    <tr>
	<td width="20%" >Trade Reference#2</td>
	<td width="15%">'.$userReferencesData->trade_reference_2.'</td>
	<td width="15%">Contact</td>
	<td width="15%">'.$userReferencesData->trade_reference_2_contact.'</td>
	<td width="15%">Phone</td>
	<td width="20%" >'.$userReferencesData->trade_reference_2_phone.'</td>
   
  </tr>
  
  <tr>
	<td width="20%" >Trade Reference#3</td>
	<td width="15%">'.$userReferencesData->trade_reference_3.'</td>
	<td width="15%">Contact</td>
	<td width="15%">'.$userReferencesData->trade_reference_3_contact.'</td>
	<td width="15%">Phone</td>
	<td width="20%" >'.$userReferencesData->trade_reference_3_phone.'</td>   
  </tr>
  </table>
</td></tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:16px;">
    <tr>
    <td>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      
       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </td>
    </tr>
    </table>
  
    </td>
    </tr>
     <tr>
    <td height="5"></td>
  </tr>
   <tr>
    <td>
     <table width="950" border="0" cellpadding="10" cellspacing="0" style="font-size:16px;">
    <tr>
		<td width="20%" >Signature#1</td>
		<td width="15%">.......</td>
		<td width="15%">Printed Name</td>
		<td width="15%">......</td>
		<td width="15%">Date</td>
		<td width="20%" >..........</td>  

    </tr>
    <tr>
		<td width="20%" >Signature#2</td>
		<td width="15%">.......</td>
		<td width="15%">Printed Name</td>
		<td width="15%">......</td>
		<td width="15%">Date</td>
		<td width="20%" >..........</td> 
    </tr>
   
</table></td></tr></table>';        

        $mpdf = new mPDF('utf-8', 'Letter', 0, '', 10, 10, 5, 5, 5,0);
        $mpdf->WriteHTML($text);
		$mpdf->fontdata = array(
			"opensans" => array(
			'R' => 'OpenSans-Regular.ttf'
			));
        $content = $mpdf->Output("upload/test-pdf/".$filename,"F");
       
        $path   =   "upload/test-pdf/";
        return $file = $path.$filename;
               
    }
	
	
	
	
	

}