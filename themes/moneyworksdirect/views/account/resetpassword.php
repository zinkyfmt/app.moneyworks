<div class="inner-body-container">
    <div class="container">
              <div class="row">
        <div class="col-md-100">
                  <div class="login">
            <h2><?php echo strip_tags(Yii::t('paspic','reset_password',Yii::app()->getLanguage()));?></h2>            		
            <?php
				$form = $this->beginWidget('CActiveForm', array(
					'id' => 'user-form',
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
					),
				));
			?>
             <div class="row">
				<div class="col-md-100 col-sm-100">
					<?php  if (Yii::app()->user->hasFlash('success')){  ?>
					<div class="alert-success"><?php echo Yii::app()->user->getFlash('success'); ?></div>
					<?php } ?>
					<?php  if (Yii::app()->user->hasFlash('error')){  ?>
					<div class="errorMessage"><?php echo Yii::app()->user->getFlash('error'); ?></div>
					<?php } ?>
					<div class="row">
				
						<div class="col-md-100">
								<?php echo $form->labelEx($model, 'new_password');?>
								  <div class="form-group">								 
									<?php echo $form->passwordField($model, 'new_password', array('class' => 'form-control  input-lg', 'autocomplete' => "off")); ?>
									<?php echo $form->error($model, 'new_password'); ?>    
								 </div>
								 <?php echo $form->labelEx($model, 'confirm_password');?>
								  <div class="form-group">								 
									<?php echo $form->passwordField($model, 'confirm_password', array('class' => 'form-control  input-lg', 'autocomplete' => "off")); ?>
									<?php echo $form->error($model, 'confirm_password'); ?>   
								 </div>
								 <div class="form-group">
								 <?php echo CHtml::submitButton(strip_tags(Yii::t('paspic','submit',Yii::app()->getLanguage())), array('class' => 'sky-blue btn button pull-right')); ?>
								 </div>
						</div>
					</div>
					
				</div>
                    </div>
					<?php $this->endWidget(); ?>
            <div class="clearfix"></div>
          </div>
                </div>
      </div>
              <div class="clearfix"></div>
            </div>
  </div>		  