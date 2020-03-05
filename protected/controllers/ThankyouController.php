<?php 
class ThankyouController extends Controller
{
	public $commonMethodsComponent;  
	public $layout='//layouts/main';
	public $model;
	public function init(){
		$this->commonMethodsComponent = new CommonMethods();
		parent::init();
	}
	
	public function actionIndex(){
		
		$this->render('index');
	}

	public function actionFailure(){
		
		$this->render('failure');
	}
}
?>