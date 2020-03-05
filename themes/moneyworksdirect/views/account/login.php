<div class="inner-body-container">
    <div class="container">
              <div class="row">
        <div class="col-md-100">
                  <div class="login">
            <h2><?php echo strip_tags(Yii::t('paspic','signin',Yii::app()->getLanguage()));?></h2>
            <p><?php echo strip_tags(Yii::t('paspic','signin_subtitle',Yii::app()->getLanguage()));?></p>
			<?php 
						$form = $this->beginWidget('CActiveForm', array(
							'id' => 'front-user-form',
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
						<?php echo $form->labelEx($model, 'xmail');?>
                       
								  <div class="form-group">
								  <?php echo $form->emailField($model, 'xmail', array('class' => 'form-control  input-lg', 'placeholder' => "E-mail", 'autofocus')); ?>
									<?php echo $form->error($model, 'xmail'); ?>
						  </div>
                          <?php echo $form->labelEx($model, 'xpass');?>
								  <div class="form-group">
							<?php echo $form->passwordField($model, 'xpass', array('class' => 'form-control  input-lg', 'placeholder' => "Password")); ?>
							<?php echo $form->error($model, 'xpass'); ?>
						  </div>
                          <button class="default button pull-right" type="submit"><?php echo strip_tags(Yii::t('paspic','login_subtitle',Yii::app()->getLanguage()));?></button>
					<a href="<?php echo Yii::app()->createUrl('account/forgotpassword');?>" class="forgot-password"><?php echo strip_tags(Yii::t('paspic','forgot_password_title',Yii::app()->getLanguage()));?></a>
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