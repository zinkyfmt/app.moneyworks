<?php 
class Metarecords extends CWidget
{
	public function run() {
		$metaObj = array();
		$metaTitle = '';
		$metaKeywords = '';
		$metaDescription = '';
		$slug = Yii::app()->request->getParam('slug');
		if($slug != ''){
			$metaObj = MetaData::model()->find("slug = '".$slug."'");	
			$metaTitle = $metaObj->meta_title;
			$metaKeywords = $metaObj->meta_keywords;
			$metaDescription = $metaObj->meta_description;
			
		}
		else{
//			$metaTitle = Settings::get('meta_title');
//			$metaKeywords = Settings::get('meta_keywords');
//			$metaDescription = Settings::get('meta_description');
                    if($this->getController()->getPageTitle()!=''){
                        $metaTitle = $this->getController()->getPageTitle();
                    }else{
                        $metaTitle = Settings::get('meta_title');
			$metaKeywords = Settings::get('meta_keywords');
                    $metaDescription = Settings::get('meta_description');
                    
                    }
		}
		
		if(file_exists(Yii::app()->themeManager->basePath.'/'.Yii::app()->theme->name.'/views/widgets/'.strtolower(__CLASS__).'/meta.php')){
					$this->render('webroot.themes.'.Yii::app()->theme->name.'.views.widgets.'.strtolower(__CLASS__).'.meta',array('metaObj'=>$metaObj,'metaTitle'=>$metaTitle,'metaKeywords'=>$metaKeywords,'metaDescription'=>$metaDescription));
			}else{	
				$this->render('meta',array('metaObj'=>$metaObj,'metaTitle'=>$metaTitle,'metaKeywords'=>$metaKeywords,'metaDescription'=>$metaDescription));
			}
	}
}