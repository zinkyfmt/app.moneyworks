<div class="inner-body-container">
    <div class="container">
              <div class="row">
        <div class="col-md-100">
                  <div class="login">
            <h2><?php echo strip_tags(Yii::t('paspic','forgot_password',Yii::app()->getLanguage()));  ?></h2>            
			<p><?php echo strip_tags(Yii::t('paspic','we_will_send_you_reset_password_link_your_email',Yii::app()->getLanguage()));  ?>.</p>	
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
                        <label class="required" for="Users_email">Email</label>
							<div class="form-group">								 
							 <?php echo $form->emailField($model, 'xmail', array('class' => 'form-control  input-lg', 'placeholder' => "Enter your email id", 'autofocus')); ?>
							<?php echo $form->error($model, 'xmail'); ?>     
						  </div>
						</div>
					</div>
					<div class="pull-right">
					<button class="default button" type="submit">Submit</button>
					<button class="default button" type="button" onClick="javascript:window.location.href='<?php echo Yii::app()->createUrl('account/login');?>'">Cancel</button></div>
					
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