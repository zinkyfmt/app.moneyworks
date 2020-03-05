<?php 
class AccountController extends Controller
{
	public $commonMethodsComponent;
	public $layout='//layouts/main';
	public $model,$userModel;
	public function init(){
		$this->commonMethodsComponent = new CommonMethods();
		parent::init();
	}
	
	public function actionIndex(){		
			$this->redirect(Yii::app()->createUrl('account/businessinfo'));		
	}
	
	public function actionBusinessinfo(){
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
		/*$url = Settings::getRedirectUrl();
		if($url != ''){
			$this->redirect($url);	
		}*/
		$user_id = Yii::app()->user->getState('user_id');
		if($user_id){
			$model = UsersBusinessInfo::model()->find('user_id='.$user_id);
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersBusinessInfo();
				}else{
					$this->redirect($url);
				}
			}
		}else{
			$model = new UsersBusinessInfo();
		}
		
		if(isset($_POST['UsersBusinessInfo'])){ 
			$model->attributes = $_POST['UsersBusinessInfo'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					$apiData = array();
					$apiData = $model->attributes;
					unset($apiData['id']);
					unset($apiData['user_id']);
					$apiData['email']=Yii::app()->user->getState('user_email');
					
					CommonMethods::dataSubmissionToVelocify($apiData);
					Yii::app()->user->setFlash('success', "Your business info has been saved successfully.");
					//$this->redirect(Yii::app()->createUrl('account/financials'));
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
		$userData = Users::model()->findByPk(Yii::app()->user->getState('user_id'));
		$this->userModel = $userData;
		$model->legal_name = $userData->business_name;
		$this->render('businessinfo',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionFinancials(){
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
		/*$url = Settings::getRedirectUrl();
		if($url != ''){
			$this->redirect($url);	
		}*/
		
		$user_id = Yii::app()->user->getState('user_id');
		if($user_id){
			$model = UsersFinancials::model()->find('user_id='.$user_id);
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersFinancials();
				}else{
					$this->redirect($url);
				}
			}
		}else{
			$model = new UsersFinancials();
		}	
				
		if(isset($_POST['UsersFinancials'])){
			$model->attributes = $_POST['UsersFinancials'];	
			$model->balance = $_POST['UsersFinancials']['balance'];
			//print_r($model->attributes);exit;
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					//Save financials documents
					$documents = CUploadedFile::getInstancesByName('UsersFinancialsDocuments[file]');
					$documentCounter = count($documents);
 
            // proceed if the documents have been set
            if (isset($documents) && $documentCounter > 0) { 
                // go through each uploaded image
                foreach ($documents as $doc => $file) {
					$fileName = preg_replace("/[^A-Za-z0-9\_\-\.]/", '', $file->name);
					$fileName = str_replace(' ','_',$fileName);
					$filePath = 'upload/financials/'.$fileName;
					$fileType = CommonMethods::getFileExtension($file);
                    if ($file->saveAs(Yii::getPathOfAlias('webroot').'/'.$filePath)) {
                        // add it to the main model now
                        $modelDocuments = new UsersFinancialsDocuments();
                        $modelDocuments->filename = $file->name; //filename is just what I chose to call it in my model
                        $modelDocuments->user_id = $model->user_id; 
                        $modelDocuments->filepath = $filePath; 
                        $modelDocuments->file_type = $fileType ; 
						$modelDocuments->save();
                    }                    
                }
				
				$modelDocuments = UsersFinancialsDocuments::model()->findAll('user_id='.$user_id);
				$linkContent = '';
				if(!empty($modelDocuments)){
										
					$currentTime = date('Y-m-d h:i:s');
					$userData = Users::model()->findByPk($user_id);
					$userData->document_link_sent_at = $currentTime;
					$userData->save();
					
					$agentModel = Agents::model()->findByPk($userData->agent_id);
					$receiverEmail = $agentModel->email;
					//$receiverEmail = 'nick@moneyworksdirect.com';
					/* Verification email */
					$MailComponent = new MailComponent;			
					$subject = $userData->fname." ".$userData->lname." has uploaded documents.";
					
					$templateContent = "Hello ".$agentModel->fname.",<br /><br /> ".$userData->fname." ".$userData->lname." with ".$userData->business_name." has uploaded documents via the online application. Please click the following link to download the documents.<br />";
					$templateContent .= Yii::app()->getBaseUrl(true).'/documents/get/id/'.$user_id.'/token/'.md5($user_id);
					
					$MailComponent->mailsend($receiverEmail, 'Money Works  Direct', $subject, $templateContent, '','Money Works Direct');
				}
            }		
					
			// Send Data to Velocify Api
			$apiData = array();
			$apiData = $model->attributes;
			unset($apiData['id']);
			unset($apiData['user_id']);
			$apiData['email']=Yii::app()->user->getState('user_email');
			
			CommonMethods::dataSubmissionToVelocify($apiData);
			
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
		$this->userModel = $userData;
		if(empty($model)){
			$model->gross_annual_sales=str_replace(',','',$userData->gross_annual_sales);
			$model->cash_advance = ($userData->has_current_balance)?'Yes':'No';
			$model->cash_advance_with = $userData->balance_from_what_company;
			$model->balance = str_replace(',','',$userData->balance_outstanding);
		}
		$this->render('financials',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionGdriveapi(){
		$user_id = Yii::app()->user->getState('user_id');
		if(!$user_id){
			$this->redirect(Yii::app()->getBaseUrl(true));
		}
		$modelDocuments = UsersFinancialsDocuments::model()->findAll('user_id='.$user_id.' AND is_uploaded="0"');
		
		if(!empty($modelDocuments)){		
			$url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			$url = $url_array[0];
			
			require_once (Yii::app()->basePath.'/vendor/google-api-php-client/src/Google_Client.php');
			require_once (Yii::app()->basePath.'/vendor/google-api-php-client/src/contrib/Google_DriveService.php');
			$client = new Google_Client();
			$client->setClientId('894372676987-jfnpivdbktdb1lrretpe8s72q0di31vd.apps.googleusercontent.com');
			$client->setClientSecret('L5M_VxmSz5y4RtuDKSbBl9gl');
			$client->setRedirectUri($url);
			$client->setScopes(array('https://www.googleapis.com/auth/drive'));
			
			
			if (isset($_GET['code'])) {
				echo "hello"; echo $_GET['code'];exit;
				$_SESSION['accessToken'] = $client->authenticate($_GET['code']);
				header('location:'.$url);exit;
			} elseif (!isset($_SESSION['accessToken'])) {
				echo "hi";
				$client->authenticate();
				exit;
			}
			echo $_SESSION['accessToken'];
			
			//echo $client->getAccessToken();exit;
			
			//print_r($client);exit;
			$files= array();
			
			if (isset($_SESSION['accessToken'])) {
				$client->setAccessToken($_SESSION['accessToken']);
				$service = new Google_DriveService($client);
				$finfo = finfo_open(FILEINFO_MIME_TYPE);
				$file = new Google_DriveFile();
				$userData = Users::model()->findByPk($user_id);
				
				if($userData->gdrive_folder_id == ''){
					//Setup the Folder to Create
					$file->setTitle($userData->business_name);
					$file->setDescription($userData->business_name);
					$file->setMimeType('application/vnd.google-apps.folder');
					try {
					//create the company folder 
					$createdFolder = $service->files->insert($file, array(
						'mimeType' => 'application/vnd.google-apps.folder',
					));
					} catch (Exception $e) {
						print "An error occurred: " . $e->getMessage();
					}
					//print_r($createdFolder);exit;
					//UPdate Folder Id in the user's table
					$folderId = $createdFolder['id'];
					$userData->gdrive_folder_id = $createdFolder['id'];
					$userData->save();
				}else{
					$folderId = $userData->gdrive_folder_id;
				}
				
				
				//Set the ProjectsFolder Parent
				$parent = new Google_ParentReference();
				$parent->setId($folderId);
				$file->setParents(array($parent));
				
				foreach ($modelDocuments as $fileObj){
					$docsModel = UsersFinancialsDocuments::model()->findByPk($fileObj->id);
					$file_path = $fileObj->filepath;
					$mime_type = finfo_file($finfo, $file_path);
					$file->setTitle($fileObj->filename);
					$file->setDescription($mime_type);
					$file->setMimeType($mime_type);
					
					try {
					$service->files->insert(
						$file,
						array(
							'data' => file_get_contents($file_path),
							'mimeType' => $mime_type,
							'uploadType' => 'media',
						)
					);
					} catch (Exception $e) {
						print "An error occurred: " . $e->getMessage();
					}
					
					$docsModel->is_uploaded='1';
					$docsModel->save();
					//echo "<pre>";print_r($docsModel);
				}
				finfo_close($finfo);
				
			}
			
		}
		Yii::app()->user->setFlash('success', "Your financial info has been saved successfully.");
		$this->redirect(Yii::app()->createUrl('account/personalinfo'));
	}
	
	public function actionPersonalinfo(){
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
		/*$url = Settings::getRedirectUrl();
		if($url != ''){
			$this->redirect($url);	
		}*/
		
		$user_id = Yii::app()->user->getState('user_id');
		if($user_id){
			$model = UsersPersonalInfo::model()->find('user_id='.$user_id);
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersPersonalInfo();
				}else{
					$this->redirect($url);
				}	
			}
		}else{
			$model = new UsersPersonalInfo();
		}
		
		
		if(isset($_POST['UsersPersonalInfo'])){
			$model->attributes = $_POST['UsersPersonalInfo'];
			$model->owner_1_dob = $_POST['owner1_dob3'].'-'.$_POST['owner1_dob2'].'-'.$_POST['owner1_dob1'];
			if(isset($_POST['owner2_dob3'])){
				$model->owner_2_dob = $_POST['owner2_dob3'].'-'.$_POST['owner2_dob2'].'-'.$_POST['owner2_dob1'];
			}
			$model->owner_1_ssn = $_POST['owner1_ssn1'].'-'.$_POST['owner1_ssn2'].'-'.$_POST['owner1_ssn3'];
			if(isset($_POST['owner2_ssn1'])){
				$model->owner_2_ssn = $_POST['owner2_ssn1'].'-'.$_POST['owner2_ssn2'].'-'.$_POST['owner2_ssn3'];
			}
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					$apiData = array();
					$apiData = $model->attributes;
					unset($apiData['id']);
					unset($apiData['user_id']);
					$apiData['email']=Yii::app()->user->getState('user_email');
					
					CommonMethods::dataSubmissionToVelocify($apiData);
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
		$this->userModel = $userData;
		
		$model->owner_1_email = $userData->email;
		$this->render('personalinfo',array('model'=>$model,'userData'=>$userData));
	}
	
	public function actionBizlocation(){
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
		/*$url = Settings::getRedirectUrl();
		if($url != ''){
			$this->redirect($url);	
		}*/
		
		$user_id = Yii::app()->user->getState('user_id');
		if($user_id){
			$model = UsersBizLocation::model()->find('user_id='.$user_id);
			
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersBizLocation();
				}else{
					$this->redirect($url);
				}	
			}
		}else{
			$model = new UsersBizLocation();
		}
		
		if(isset($_POST['UsersBizLocation'])){
			$model->attributes = $_POST['UsersBizLocation'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					$apiData = array();
					$apiData = $model->attributes;
					unset($apiData['id']);
					unset($apiData['user_id']);
					$apiData['email']=Yii::app()->user->getState('user_email');
					
					CommonMethods::dataSubmissionToVelocify($apiData);
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
		$userData = Users::model()->findByPk($user_id);
		$this->userModel = $userData;
		$model->monthly_rent = str_replace(',','',$model->monthly_rent);
		$this->render('bizlocation',array('model'=>$model));
	}
	
	public function actionReferences(){
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
		/*$url = Settings::getRedirectUrl();
		if($url != ''){
			$this->redirect($url);	
		}
		$model = new UsersReferences();*/
		
		$user_id = Yii::app()->user->getState('user_id');
		if($user_id){
			$model = UsersReferences::model()->find('user_id='.$user_id);
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersReferences();
				}else{
					$this->redirect($url);
				}	
			}
		}else{
			$model = new UsersReferences();
		}
		
		
		if(isset($_POST['UsersReferences'])){
		
			$model->attributes = $_POST['UsersReferences'];	
			$model->user_id = Yii::app()->user->getState('user_id');
			$this->performAjaxValidation($model);
			if($model->validate()){
				if ($model->save()) {
					if(!empty($model)){
						$apiData = array();
						$apiData = $model->attributes;
						unset($apiData['id']);
						unset($apiData['user_id']);
						$apiData['email']=Yii::app()->user->getState('user_email');			
						CommonMethods::dataSubmissionToVelocify($apiData);
					}
					$fileName = $this->generatePdf();
					Yii::app()->user->setFlash('success', "Your references has been saved successfully.");
					$userModel = Users::model()->findByPk(Yii::app()->user->getState('user_id'));
					$userModel->pdf_path = $fileName;
					$userModel->save();
					$this->redirect(Yii::app()->createUrl('account/uploads'));
								
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
		$userData = Users::model()->findByPk($user_id);
		$this->userModel = $userData;
		$this->render('references',array('model'=>$model));
	}
	
	public function actionChangePassword(){
	
		
		
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
						$url = Settings::getRedirectUrl();
						if($url != ''){
							$this->redirect($url);	
						}else{
							$this->redirect(Yii::app()->createUrl('account/businessinfo'));
						}
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
		$this->redirect(Yii::app()->getBaseUrl(true));
	}
	
	public function actionForgotPassword(){
		
		if(!Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->createUrl('account/businessinfo'));
		}
		$model = new Users;
		
		if(Yii::app()->request->getParam('Users')){
			$usersData = Yii::app()->request->getParam('Users');
			
			$email = addslashes($usersData['email']);			
			$userObj = Users::model()->findByAttributes(array("email" =>$email));
			if(!empty($userObj)){
				$URL = Yii::app()->getBaseUrl(true);
			
				/* Verification email */
				$MailComponent = new MailComponent;
				$tempPassword = uniqid();
				$md5Password = md5($tempPassword);
				
				$resetLink = "<a href='" . $URL ."'>Click here</a> to login.";
				$signature = Settings::get('email_signature');
				$siteemail = Settings::get('contact_email');
				$sitename = Settings::get('contact_email');
				
				$checkParameter = array('{FirstName}','{Password}', '{ResetLink}','{siteemail}','{sitename}', '{Signature}');
				$replaceMailParameter = array($userObj->fname,$tempPassword, $resetLink,$siteemail,$sitename,$signature);
				$templateContent = $MailComponent->prepairmail(3, $checkParameter, $replaceMailParameter);
				$MailComponent->mailsend($userObj->email,'Money Works  Direct', $templateContent['subject'], $templateContent['content'] );
			
				$userObj->password = $md5Password;
				$userObj->save();
				
				Yii::app()->user->setFlash('forgotsuccess', "An Email is sent to your email successfully with new generated password. Please login with using that credentials.");
				//echo $templateContent['content'];exit;
				$this->redirect(Yii::app()->getBaseUrl(true));
			}else{
				Yii::app()->user->setFlash('forgoterror', "There is no account registered with this email.");
				$this->redirect(Yii::app()->getBaseUrl(true));
			}
		}
		
		$this->render('forgotpassword', array('model' => $model));
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
		$agentModel = Agents::model()->findByPk($userData->agent_id);
       	$filename               =   $userData->business_name.".pdf";
        $owner1_dob = explode('-',$userPersonalData->owner_1_dob);
        $owner2_dob = explode('-',$userPersonalData->owner_2_dob);
		$o1dob 	=	($userPersonalData->owner_1_dob != '0000-00-00')?$owner1_dob[1].'-'.$owner1_dob[2].'-'.$owner1_dob[0]:'';
		$o2dob 	=	($userPersonalData->owner_2_dob != '0000-00-00')?$owner2_dob[1].'-'.$owner2_dob[2].'-'.$owner2_dob[0]:'';
		
        $text    =   '<table width="950" border="0" style="border:1px solid #000;font-family:arial;" cellpadding="0" cellspacing="0" >
				  <tr>
					
					<td width="45%"><img src="images/logo.jpg" alt=""/></td>
					<td style="font-size:13px;" width="55%"><strong>ADMINISTRATIVE FORM PLEASE FAX TO:1.646.417.5809</strong><br>
				Sales Rep: '.$agentModel->fname.'</td>
  </tr>
  </table>
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-family:arial;" >
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="3" cellspacing="0" style="font-size:12px;">
    <tr>
		<td><table width="950" cellspacing="0" cellpadding="0" border="0"><tr>
		<td width="22%">DBA Name</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->dba_name.'</td>
		<td width="15%" >Legal Name</td>
		<td width="35%" style="border-bottom:1px solid #000; padding-right:5px;">'.$userBusinessData->legal_name.'</td>
		</tr></table></td>
  </tr>
  
  <tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" border="0" style="font-size:12px;"><tr>
		<td width="22%">Type of Business</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->type_of_business.'</td>
		<td width="15%" >Tax ID</td>
		<td width="20%" style="border-bottom:1px solid #000;">'.$userBusinessData->tax_id.'</td>
		<td width="15%" align="right">'.$userBusinessData->business.'</td>
	</tr></table></td>	
  </tr>
  <tr><td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" style="font-size:12px;"><tr>
    <td width="21%">Full Business Address</td>
    <td width="79%" style="border-bottom:1px solid #000;">'.$userBusinessData->business_address.'</td>
	</tr></table></td>	
</tr>
<tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0"><tr>
		<td width="21%">Full Billing Address</td>
		<td width="79%" style="border-bottom:1px solid #000;">'.$userBusinessData->full_billing_address.'</td>
	</tr></table></td>
  </tr>
<tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0"><tr>
		<td width="22%">Phone at Location</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->phone_at_location.'</td>
		<td width="10%" align="center">Best Phone</td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userBusinessData->best_phone.'</td>
		<td width="12%" align="center">Fax</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userBusinessData->fax.'</td>
	</tr></table></td>
  </tr>
  
   <tr>
		<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" border="0"><tr>
			<td width="22%">Business Email</td>
			<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->business_email.'</td>
			<td width="15%" align="center" style="padding-right:10px">Website</td>
			<td width="35%" style="border-bottom:1px solid #000;">'.$userBusinessData->website.'</td>
		</tr></table></td>
  </tr>
 
  <tr>
	<td style="width:100%"><table width="950" cellpadding="0" cellspacing="0"><tr>
		<td width="21%">Years In Business</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userData->years_in_business.'</td>
		<td width="18%" align="center">Average Ticket</td>
		<td width="12%" style="border-bottom:1px solid #000;">&nbsp;</td>
		<td width="20%" align="center">Gross Annual Sales</td>
		<td width="18%" style="border-bottom:1px solid #000;">'.$userData->gross_annual_sales.'</td>
	</tr></table></td>
  </tr>
 
  <tr>
	<td><table width="950" ><tr>
		<td width="35%">Do you currently have cash advance?</td>
		<td width="15%" align="center">'.$userFinancialData->cash_advance.'</td>
		<td width="15%">With who?</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->cash_advance_with.'</td>
		<td width="15%" align="right">Balance</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->balance.'</td>
	</tr></table></td></tr>
  <tr><td ><table width="950" ><tr>
    <td width="35%" >Current Credit Card Processor</td>
    <td width="17%" style="border-bottom:1px solid #000;">'.$userFinancialData->current_credit_card_processor.'</td>
    <td width="31%" align="center">Average Processing Volume</td>
    <td width="17%" style="border-bottom:1px solid #000;">'.$userFinancialData->avg_processing_volume.'</td></table></td></tr>
  </tr>';
  
  $text    .='  <tr><td ><table width="950"><tr>
    <td width="15%">Last Month Vol.</td>
    <td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->last_month_vol.'</td>
    <td width="15%" align="center">#of Tickets</td>
    <td width="10%" style="border-bottom:1px solid #000;"></td>
    <td width="15%" align="center">2nd Month Vol.</td>
    <td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->second_month_vol.'</td>
    <td width="15%" align="center">#of Tickets</td>
    <td width="10%" style="border-bottom:1px solid #000;"></td>
  </tr></table></td></tr>
  <tr>
    <td ><table width="950"><tr>
    <td width="15%">3rd Month Vol.</td>
    <td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->third_month_vol.'</td>
    <td width="15%"  align="center">#of Tickets</td>
    <td width="10%" style="border-bottom:1px solid #000;"></td>
    <td width="15%" align="center">4th Month Vol.</td>
    <td width="10%" style="border-bottom:1px solid #000;">'.$userFinancialData->fourth_month_vol.'</td>
    <td width="15%" align="center">#of Tickets</td>
    <td width="10%" style="border-bottom:1px solid #000;"></td>
  </tr></table></td></tr>';
  $text    .='</table>   
  	</td>
  </tr>
  </table>
  
  
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-family:arial;">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;"> 
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:12px;font-family:arial;">
    
  <tr>
    <td width="17%" ><strong>Owner #1 Name</strong></td>
	<td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_name.'</td>
    <td width="10%" align="center" >Title</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_title.'</td>
  </tr>
  
  <tr>
    <td width="17%">Date of Birth</td>
    <td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$o1dob.'</td>
    <td width="10%" align="center" >SSN</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_ssn.'</td>
	
  </tr>
  <tr>
    <td width="17%" >Full Home Address</td>
    <td width="83%" colspan="5" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="17%">Home Phone</td>
		<td width="18%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_home_phone.'</td>
		<td width="15%">Cell Phone</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="20%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_email.'</td>
   
   
  </tr>
 
   <tr><td colspan="6" style="width:100%"><table width="950" cellspacing="0" border="0" cellpadding="0">
   <tr>
		<td width="18%"><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td width="80%">Own/Rent</td><td width="20%" align="right">$</td></tr></table></td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_payment.' '.$userPersonalData->owner_1_own_or_rent.'</td>
		<td width="15%" align="center">Years There</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_years_there.'</td>
		<td width="14%">Drivers Lience #</td>
		<td width="16%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_drivers_license.'</td>
		<td width="10%">State</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_drivers_license_state.'</td>
  </tr></table></td></tr>

	<tr><td colspan="6" width="100%">&nbsp;</td></tr>
  
    <tr>
    <td width="17%" ><strong>Owner #2 Name</strong></td>
	<td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_name.'</td>
    <td width="10%" align="center">Title</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_title.'</td>
  </tr>
  
  <tr>
    <td width="17%">Date of Birth</td>
    <td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$o2dob.'</td>
    <td width="10%" align="center">SSN</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_ssn.'</td>
	
  </tr>
  <tr>
    <td width="17%" >Full Home Address</td>
    <td width="83%" colspan="5" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="17%">Home Phone</td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_home_phone.'</td>
		<td width="10%">Cell Phone</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="35%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_email.'</td>
   
   
  </tr>
 
   <tr><td colspan="6" width="100%"><table width="950" cellspacing="0" cellpadding="0" >
		<tr>
		<td width="18%"><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td width="80%">Own/Rent</td><td width="20%" align="right">$</td></tr></table></td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_own_or_rent.'</td>
		<td width="15%" align="center">Years There</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_years_there.'</td>
		<td width="14%">Drivers Lience #</td>
		<td width="16%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_drivers_license.'</td>
		<td width="10%">State</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_drivers_license_State.'</td>
		</tr></table></td>
  </tr> </table>
  </td></tr></table>
  
  <table width="950" border="0" cellpadding="0" cellspacing="0" style="font-size:12px;font-family:arial;">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:12px;">
    
  <tr><td width="100%"><table width="950" cellpadding="0" cellspacing="0">
		<tr><td width="18%">Business Home Based?</td>
		<td width="10%" style="border-bottom:1px solid #000;" align="center">'.$userBizlocationData->business_home_based.'</td>
		<td width="18%">Location: Lease/Own</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userBizlocationData->location.'</td>
		<td width="12%">Lease Term</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userBizlocationData->lease_term.'</td>
		<td width="12%">Monthly Rent</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userBizlocationData->monthly_rent.'</td>
   </tr>
   </table></td></tr>
    <tr><td width="100%"><table width="950" cellpadding="0" cellspacing="0">
	<tr>
		<td width="20%">Landlord / Mortgage Co.</td>
		<td width="30%" style="border-bottom:1px solid #000;">'.$userBizlocationData->landlord_mortgage_co.'</td>
		<td width="25%" align="center">Contact</td>
		<td width="25%" style="border-bottom:1px solid #000;">'.$userBizlocationData->landlord_mortgage_co_contact.'</td>
		</tr></table></td>
  </tr>
  <tr><td width="100%"><table width="950" cellpadding="0" cellspacing="0">
   <tr>
		<td width="20%">Contact Phone</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userBizlocationData->landlord_mortgage_co_contact_phone.'</td>
		<td width="15%" align="center">Cell</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userBizlocationData->landlord_mortgage_co_contact_cell.'</td>
		<td width="15%" align="center">Email</td>
		<td width="20%" style="border-bottom:1px solid #000;">'.$userBizlocationData->landlord_mortgage_co_contact_email.'</td>  
</tr></table></td>		
  </tr>
  </table></td>
   
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:12px;font-family:arial;">
    
  <tr>
	<td width="15%">Bank Name/Branch</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->bank_name_branch.'</td>
	<td width="10%" align="center">Contact</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->bank_name_branch_contact.'</td>
	<td width="10%" align="center">Phone</td>
	<td width="25%" style="border-bottom:1px solid #000;">'.$userReferencesData->bank_name_branch_phone.'</td>
   
  </tr>
	<tr>
	<td width="15%">Trade Reference#1</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_1.'</td>
	<td width="10%" align="center">Contact</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_1_contact.'</td>
	<td width="10%" align="center">Phone</td>
	<td width="25%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_1_phone.'</td>
   
  </tr>
    <tr>
	<td width="15%" >Trade Reference#2</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_2.'</td>
	<td width="10%" align="center">Contact</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_2_contact.'</td>
	<td width="10%" align="center">Phone</td>
	<td width="25%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_2_phone.'</td>
   
  </tr>
  
  <tr>
	<td width="15%" >Trade Reference#3</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_3.'</td>
	<td width="10%" align="center">Contact</td>
	<td width="20%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_3_contact.'</td>
	<td width="10%" align="center">Phone</td>
	<td width="25%" style="border-bottom:1px solid #000;">'.$userReferencesData->trade_reference_3_phone.'</td>   
  </tr>
  </table>
</td></tr>
  </table>
  <table width="950" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:justify;font-family:arial;">
    <tr>
    <td>
      I hereby represent that all the above information is true and understand that making false statements might be considered fraud. By providing the above information, the applicant(s) authorize you to whom this application is made or your agents to investigate my/our financial responsibility and credit worthiness, specifically principal and corporate entities, and will provide financial statements, tax returns, etc. as you deem necessary. A photocopy of this authorization will be deemed as acceptable for release of credit information. I/We authorize Money Works Direct, Inc. to receive pertinet information regarding the commercial lease for the above referenced location from my leasing company and or agent. I/we authorize you to update my/our credit profile from time to time in the future, as you deem appropriate. By signing below, each of the aboe listed business and business ownet/officer (individually and collectiverly, "you") authorize Money Works Direct and each of its representatives, successors, assigns and designees ("Recipients") that may be involved with or acquire commercial loans having daily repayment features or purchases of future receivables including Merchant Cash Advance transcation, including without limitation the application therefor (collectively, "Transcation") to obtain consumer or personal, business and investigative reports and other information about you, including credit card processor statements and bank statements, from one or more consumer reporting agencies, such as TransUnion, Experian and Equifax, and from other credit bureaus, banks, creditors and other third parties. You also authorize Money Works Direct to transmit this application form, along with any of the foregoing informaiton obtained in connection with this application, to any or all of the Recipients for the foregoing purposes. You also consent to the release, by any creditor or financial institution, of any information relating to any of you, to Money Works Direct and to each of the Recipients, on its own behalf.
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
     <table width="950" border="0" cellpadding="10" cellspacing="0" style="font-size:12px;font-family:arial;">
    <tr>
		<td width="15%" >Signature#1</td>
		<td width="25%" style="border-bottom:1px solid #000;"></td>
		<td width="15%">Printed Name</td>
		<td width="25%" style="border-bottom:1px solid #000;">'.$userData->fname.' '.$userData->lname.'</td>
		<td width="10%">Date</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.date('m/d/Y').'</td>  

    </tr>
      
</table></td></tr></table>
  
  ';        

        $mpdf = new mPDF('utf-8', 'Letter', 0, '', 10, 10, 5, 5, 5,0);
        $mpdf->WriteHTML($text);
		$mpdf->fontdata = array(
			"opensans" => array(
			'R' => 'OpenSans-Regular.ttf'
			));
        $content = $mpdf->Output("upload/docusign-pdf/".$filename,"F");
       
        $path   =   "upload/docusign-pdf/";
        return $file = $path.$filename;
               
    }
	
	public function actionDocusign(){
		$user_id = Yii::app()->user->getState('user_id');
		if(!$user_id){
			$this->redirect(Yii::app()->getBaseUrl(true));
		}
	 require_once(Yii::app()->basePath.'/vendor/docusign-php-client/autoload.php');
	// DocuSign account credentials & Integrator Key
	
	$usersData = Users::model()->findByPk($user_id);
	$usersBusinessData = UsersBusinessInfo::model()->find('user_id='.$user_id);
    $username = "app@moneyworksdirect.com";
    $password = "@moneyworks1";
    $integrator_key = "6f2bad03-61fd-4a29-a0d2-2c213916e52b";
    $host = "https://na2.docusign.net/restapi";

    // create a new DocuSign configuration and assign host and header(s)
    $config = new DocuSign\eSign\Configuration();
    $config->setHost($host);
    $config->addDefaultHeader("X-DocuSign-Authentication", "{\"Username\":\"" . $username . "\",\"Password\":\"" . $password . "\",\"IntegratorKey\":\"" . $integrator_key . "\"}");

    /////////////////////////////////////////////////////////////////////////
    // STEP 1:  Login() API
    /////////////////////////////////////////////////////////////////////////

    // instantiate a new docusign api client
    $apiClient = new DocuSign\eSign\ApiClient($config);

    // we will first make the Login() call which exists in the AuthenticationApi...
    $authenticationApi = new DocuSign\eSign\Api\AuthenticationApi($apiClient);

    // optional login parameters
    $options = new \DocuSign\eSign\Api\AuthenticationApi\LoginOptions();

    // call the login() API
    $loginInformation = $authenticationApi->login($options);

    // parse the login results
    if(isset($loginInformation) && count($loginInformation) > 0)
    {
        // note: defaulting to first account found, user might be a 
        // member of multiple accounts
        $loginAccount = $loginInformation->getLoginAccounts()[0];
        if(isset($loginInformation))
        {
            $accountId = $loginAccount->getAccountId();
            if(!empty($accountId))
            {
                //echo "Account ID = $accountId\n";
            }
        }
    } 

    /////////////////////////////////////////////////////////////////////////
    // STEP 2:  Create & Send Envelope with Embedded Recipient
    /////////////////////////////////////////////////////////////////////////

    // set recipient information
    $recipientName = $usersData->fname." ".$usersData->lname;
    $recipientEmail = $usersData->email;

    // configure the document we want signed
    $documentFileName = $usersData->pdf_path;
    $documentName = str_replace(' ','_',$usersBusinessData->legal_name).".pdf";

    // instantiate a new envelopeApi object
    $envelopeApi = new DocuSign\eSign\Api\EnvelopesApi($apiClient);

    // Add a document to the envelope
    $document = new DocuSign\eSign\Model\Document();
    $document->setDocumentBase64(base64_encode(file_get_contents($documentFileName)));
    $document->setName($documentName);
    $document->setDocumentId("1");

    // Create a |SignHere| tab somewhere on the document for the recipient to sign
    $signHere = new \DocuSign\eSign\Model\SignHere();
    $signHere->setXPosition("100");
    $signHere->setYPosition("685");
    $signHere->setDocumentId("1");
    $signHere->setPageNumber("1");
    $signHere->setRecipientId($usersData->id);

    // add the signature tab to the envelope's list of tabs
    $tabs = new DocuSign\eSign\Model\Tabs();
    $tabs->setSignHereTabs(array($signHere));

    // add a signer to the envelope
    $signer = new \DocuSign\eSign\Model\Signer();
    $signer->setEmail($recipientEmail);
    $signer->setName($recipientName);
    $signer->setRecipientId($usersData->id);
    $signer->setTabs($tabs);
    $signer->setClientUserId($usersData->id);  // must set this to embed the recipient!

    // Add a recipient to sign the document
    $recipients = new DocuSign\eSign\Model\Recipients();
    $recipients->setSigners(array($signer));
    $envelop_definition = new DocuSign\eSign\Model\EnvelopeDefinition();
    $envelop_definition->setEmailSubject("[DocuSign PHP SDK] - Please sign this doc");

    // set envelope status to "sent" to immediately send the signature request
    $envelop_definition->setStatus("sent");
    $envelop_definition->setRecipients($recipients);
    $envelop_definition->setDocuments(array($document));

    // create and send the envelope! (aka signature request)
    $envelop_summary = $envelopeApi->createEnvelope($accountId, $envelop_definition, null);
   // echo "$envelop_summary\n";
//exit;
    /////////////////////////////////////////////////////////////////////////
    // STEP 3:  Request Recipient View (aka signing URL)
    /////////////////////////////////////////////////////////////////////////

    // instantiate a RecipientViewRequest object
    $recipient_view_request = new \DocuSign\eSign\Model\RecipientViewRequest();

    // set where the recipient is re-directed once they are done signing
    $recipient_view_request->setReturnUrl(Yii::app()->getBaseUrl(true).'/account/docusignresponse');

    // configure the embedded signer 
    $recipient_view_request->setUserName($recipientName);
    $recipient_view_request->setEmail($recipientEmail);

    // must reference the same clientUserId that was set for the recipient when they 
    // were added to the envelope in step 2
    $recipient_view_request->setClientUserId($usersData->id);

    // used to indicate on the certificate of completion how the user authenticated
    $recipient_view_request->setAuthenticationMethod("email");

    // generate the recipient view! (aka embedded signing URL)
    $signingView = $envelopeApi->createRecipientView($accountId, $envelop_summary->getEnvelopeId(), $recipient_view_request);
	
    $signing_url =  $signingView->getUrl();
	$this->redirect($signing_url);
	}
	
	public function actionDocusignresponse(){
	
		$user_id = Yii::app()->user->getState('user_id');
		$event = Yii::app()->request->getParam('event');
		if($event == 'signing_complete'){
			$model = Users::model()->findByPk($user_id);
			$model->document_signed = '1';
			$model->save();
			
			
			
			$agentModel = Agents::model()->findByPk($model->agent_id);
			$receiverEmail = $agentModel->email;
			//$receiverEmail = 'nick@moneyworksdirect.com';
			/* Verification email */
			$MailComponent = new MailComponent;			
			$subject = $model->fname." ".$model->lname." has sent you their application.";
			$usersBusinessData = UsersBusinessInfo::model()->find('user_id='.$user_id);
			
			$templateContent = "Hello ".$agentModel->fname.",<br /><br /> ".$model->fname." ".$model->lname." with ".$model->business_name." has completed and signed the online application. Please click the following link to find the PDF in google drive. The file name is ".str_replace(' ','_',$usersBusinessData->legal_name).".pdf<br />";
			
			$templateContent .= "https://drive.google.com/a/moneyworksdirect.com/folderview?id=0B_ZwwWs_F7oVUG5BNlBIRzVzdm8&usp=sharing";
			
			
			$MailComponent->mailsend($receiverEmail, 'Money Works  Direct', $subject, $templateContent, '','Money Works Direct');
			
			$this->redirect(Yii::app()->createUrl('thankyou/index'));
		}else{
			$this->redirect(Yii::app()->createUrl('thankyou/failure'));
		}
		
	}
	
	public function actionUploads(){
		
		if(Yii::app()->user->isGuest){
			$this->redirect(Yii::app()->getBaseUrl(true));
		};
				
		$user_id = Yii::app()->user->getState('user_id');
		/*if($user_id){
			$model = UsersFinancials::model()->find('user_id='.$user_id);
			if(empty($model)){
				$url = Settings::getRedirectUrl();
				if($url==''){
					$model = new UsersFinancials();
				}else{
					$this->redirect($url);
				}
			}
		}else{
			$model = new UsersFinancials();
		}	
			*/	
			
			//echo "<pre>";print_r($_FILES);exit;
		if(isset($_FILES['UsersFinancialsDocuments'])){
			
			//Save financials documents
			$documents = CUploadedFile::getInstancesByName('UsersFinancialsDocuments[file]');
			$documentCounter = count($documents);
 
            // proceed if the documents have been set
            if (isset($documents) && $documentCounter > 0) { 
                // go through each uploaded image
                foreach ($documents as $doc => $file) {
					$fileName = preg_replace("/[^A-Za-z0-9\_\-\.]/", '', $file->name);
					$fileName = str_replace(' ','_',$fileName);
					$filePath = 'upload/financials/'.$fileName;
					$fileType = CommonMethods::getFileExtension($file);
                    if ($file->saveAs(Yii::getPathOfAlias('webroot').'/'.$filePath)) {
                        // add it to the main model now
                        $modelDocuments = new UsersFinancialsDocuments();
                        $modelDocuments->filename = $file->name; //filename is just what I chose to call it in my model
                        $modelDocuments->user_id = $user_id; 
                        $modelDocuments->filepath = $filePath; 
                        $modelDocuments->file_type = $fileType ; 
						$modelDocuments->save();
                    }                    
                }
				
				$modelDocuments = UsersFinancialsDocuments::model()->findAll('user_id='.$user_id);
				$linkContent = '';
				if(!empty($modelDocuments)){
										
					$currentTime = date('Y-m-d h:i:s');
					$userData = Users::model()->findByPk($user_id);
					$userData->document_link_sent_at = $currentTime;
					$userData->save();
					
					$agentModel = Agents::model()->findByPk($userData->agent_id);
					//$receiverEmail = $agentModel->email;
					$receiverEmail = 'vnkmrjain@gmail.com';
					/* Verification email */
					$MailComponent = new MailComponent;			
					$subject = $userData->fname." ".$userData->lname." has uploaded documents.";
					
					$templateContent = "Hello ".$agentModel->fname.",<br /><br /> ".$userData->fname." ".$userData->lname." with ".$userData->business_name." has uploaded documents via the online application. Please click the following link to download the documents.<br />";
					$templateContent .= Yii::app()->getBaseUrl(true).'/documents/get/id/'.$user_id.'/token/'.md5($user_id);
					
					$MailComponent->mailsend($receiverEmail, 'Money Works  Direct', $subject, $templateContent, '','Money Works Direct');
				}
            }		
					
			// Send Data to Velocify Api
			/*$apiData = array();
			$apiData = $model->attributes;
			unset($apiData['id']);
			unset($apiData['user_id']);
			$apiData['email']=Yii::app()->user->getState('user_email');
			
			CommonMethods::dataSubmissionToVelocify($apiData);
			*/
				Yii::app()->user->setFlash('success', "Your financial documents has been saved successfully.");
				$this->redirect(Yii::app()->createUrl('account/docusign'));
				
		}
		$user_id = Yii::app()->user->getState('user_id');
		$userData = Users::model()->findByPk($user_id);
		$this->userModel = $userData;
		
		//$this->render('uploads',array('model'=>$model,'userData'=>$userData));
		$this->render('uploads',array('userData'=>$userData));
	}
}