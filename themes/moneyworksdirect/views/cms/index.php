	<div class="body-heading text-left"> <span class="left-align "><?php echo strip_tags(Yii::t('paspic',trim($pageData->title),Yii::app()->getLanguage()));?></span> </div>
		
			<div class="grey-box no-mar">			
				
                                    <?php 
                                    //$lang = Yii::app()->session['defaultlanguage'];
                                    //$lang = 'en_us';
                                    //Yii::app()->setLanguage($lang);
                                    
                                    echo Yii::t('paspic',trim($pageData->description),Yii::app()->getLanguage()); 
                                    ?>
                                    <?php //echo $pageData->description;?>
                   <div class="clearfix">&nbsp;</div>             
			</div>
            
            <div class="clearfix">&nbsp;</div>