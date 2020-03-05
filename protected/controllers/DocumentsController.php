<?php 
class DocumentsController extends Controller
{
	public $commonMethodsComponent;
	public $layout='//layouts/main';
	
	public function init(){
		$this->commonMethodsComponent = new CommonMethods();
		parent::init();
	}
		
	public function actionGet(){
		$user_id = Yii::app()->request->getParam('id');
		$token = Yii::app()->request->getParam('token');
		
		if(md5($user_id) == $token){
			$userData = Users::model()->findByPk($user_id);
			$link_sent_at = $userData->document_link_sent_at;
			//$from_date = new DateTime(date('Y-m-d h:i:s'));
			//$since_start = $from_date->diff(new DateTime($link_sent_at));
			
			//$differenceInTime = $since_start->h; //in hour
			$datetime1 = date_create($link_sent_at);
			$datetime2 = date_create(date('Y-m-d H:i:s'));
		   
			$interval = date_diff($datetime1, $datetime2);
		    $y = $interval->format('%y');
		   $m = $interval->format('%m');
		   $d = $interval->format('%d');
		   $h = $interval->format('%h');
			
			
			if($y == 0 && $m ==0 && $d<=2 && $h<=23){
			
				//$modelDocuments = UsersFinancialsDocuments::model()->findAll('user_id='.$user_id.' AND is_uploaded="0"');
				$modelDocuments = UsersFinancialsDocuments::model()->findAll('user_id='.$user_id);
				$bulkDocs = array();
				if(!empty($modelDocuments)){
					foreach($modelDocuments as $docs){
						$bulkDocs[] =	$docs->filepath; 
						$docsModel = UsersFinancialsDocuments::model()->findByPk($docs->id);
						$docsModel->is_uploaded='1';
						$docsModel->save(); 
					}
				}
			
				if(!empty($bulkDocs)){
					
					$business_name = str_replace(' ','_',$userData->business_name);
					
					$business_name = preg_replace('/[^a-zA-Z0-9_]/', '', $business_name);
					
					$zipfilename = 'upload/'.$business_name.'.zip';
					$this->createfile($zipfilename,$bulkDocs);
					
					Yii::import('ext.helpers.EDownloadHelper');
				 
					// assumming I have a folder named docs under my webroot folder
					// and a file to be downloaded 'myhugefile.zip'
					EDownloadHelper::download(Yii::getPathOfAlias('webroot').'/'.$zipfilename);
					
					unlink(Yii::getPathOfAlias('webroot').'/'.$zipfilename);
				}
			}else{
				echo "The link you are looking for, has been expired. So you can't download the documents.";
			}
			
		}else{
			echo "You are not able to access this link!";
		}
	
	}
	
	protected function createfile($filename,$filelist){
	
		$zip=new ZipArchive();		
		if($zip->open($filename,ZIPARCHIVE::CREATE) !== true) {
		   return false;
		}		 
		foreach($filelist as $thefile)
		{
			if($thefile != ''){
				$imagePathArr = pathinfo($thefile);
				$newfilename = $imagePathArr['basename'];
				$zip->addFile($thefile,$newfilename);
			}
		}
		$zip->close();	 
	}
}