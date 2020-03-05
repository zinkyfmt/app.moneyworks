<?php 
class CmsController extends Controller
{
	public $commonMethodsComponent;
	public function init(){
		$this->commonMethodsComponent = new CommonMethods();		
		 parent::init();
	}
	
	public function actionDetail()
	{
		Yii::app()->clientScript->registerMetaTag("Paspic.com", 'author');
		
		Yii::app()->clientScript->registerMetaTag("support@paspic.co.uk", 'contact');
		
		Yii::app()->clientScript->registerMetaTag("index, follow", 'robots');
		
		Yii::app()->clientScript->registerMetaTag("Exxite CMS and Web Publication System (c) Bal&aacute;zs Faa", 'generator');
		
		Yii::app()->clientScript->registerMetaTag("http://www.paspic.com/copyright.php", 'rights');
	
		$slug	=	Yii::app()->request->getParam('slug');
		$pageData	=	Pages::model()->with('meta')->find('meta.slug="'.$slug.'"');
		if(empty($pageData)){
			throw new CHttpException('404', 'Page Not Found!!!');
		}
		
		//echo '<pre>'; print_r($pageData); die;
		$this->render('index',array('pageData'=>$pageData));
	}
	
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		Yii::app()->clientScript->registerMetaTag("Paspic.com", 'author');
		
		Yii::app()->clientScript->registerMetaTag("support@paspic.co.uk", 'contact');
		
		Yii::app()->clientScript->registerMetaTag("index, follow", 'robots');
		
		Yii::app()->clientScript->registerMetaTag("Exxite CMS and Web Publication System (c) Bal&aacute;zs Faa", 'generator');
		
		Yii::app()->clientScript->registerMetaTag("http://www.paspic.com/copyright.php", 'rights');
		
		$this->pageTitle = "Contact Paspic |Make Passport Photos | Baby's First Passport";
		
		Yii::app()->clientScript->registerMetaTag("- Passport Photo Service, baby's first passport,  passport photos in, baby passport photo, child passport photo, UK Passport Photograph , US Passport photo , British passport photo , How to make passport photos, UK Passport Photograph Size", 'keywords');
		
		
		$model=new ContactTicket;
		if(isset($_POST['ContactTicket']))
		{ 
			$model->attributes=$_POST['ContactTicket'];
			if($model->validate())
			{
                            if($model->save()){
				$name=$model->name;
				$subject="New Ticket Generated";

				$settingsObj = Configuration::model()->find("keyword='contact_email'");
				$to = $settingsObj->value;
				$to = 'testdeveloper30@gmail.com';
				$from = $model->email;
				$fromName = $name;
				$userIP = UserIdentity::getIp();
				/* Contact email */
				$MailComponent = new MailComponent;
                                $enquiryType = ($model->enquire_type == '')?'General Enquiry':'Order Related Enquiry';
				$checkParameter = array('{Name}','{Email}','{Mid}','{URL}','{Enquire Type}','{Merchant cart ID}','{Message}');
				$replaceMailParameter = array($name, $model->email, $model->mid, $model->url, $enquiryType, $model->merchant_card_id, $model->message);
				$templateContent = $MailComponent->prepairmail(6, $checkParameter, $replaceMailParameter);
				$MailComponent->mailsend($to, $from, $enquiryType.'( Ticket No. #'.$model->mid.')', $templateContent['content'],'', $fromName);

				Yii::app()->user->setFlash('success','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->redirect(Yii::app()->createUrl('cms/contact'));
                            }else{
                                Yii::app()->user->setFlash('error','An error has been generated while submitting your contact us enquiry. Please try again.');
				$this->redirect(Yii::app()->createUrl('cms/contact'));
                            }
			}else{
                         //print_r($model->errors);   
                        }
		}
                
                $cs=Yii::app()->clientScript;
		$cs->scriptMap=array(
			'jquery-1.11.1.min.js'=>false
		);
                
		$this->render('contact',array('model'=>$model));
	}

}