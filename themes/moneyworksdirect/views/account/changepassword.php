<div class="inner-body-container">
<div class="container">
<div class="row">
<div class="col-md-25">
	<?php include_once('left.php');?>
</div>
<div class="col-md-75">
<div class="body-heading text-left account-heading"> <span class="left-align "><?php echo strip_tags(Yii::t('paspic','change_password',Yii::app()->getLanguage()));  ?></span> </div>
  <?php
						$form = $this->beginWidget('CActiveForm', array(
							'id' => 'user-form',
							'enableClientValidation' => true,
							'clientOptions' => array(
								'validateOnSubmit' => true,
							),
						));
						?>                   
                      
					
						<div class="login-box grey-box no-mar">
							
  							 <?php  if (Yii::app()->user->hasFlash('success')){  ?>
    <div class="row">
      <div class="col-xs-100 col-sm-100 col-md-100">
        <div class="alert alert-success"> <?php echo Yii::app()->user->getFlash('success'); ?> </div>
      </div>
    </div>
    <?php } ?>
    <?php  if (Yii::app()->user->hasFlash('error')){  ?>
    <div class="row">
      <div class="col-xs-100 col-sm-100 col-md-100">
        <div class="alert alert-danger"> <?php echo Yii::app()->user->getFlash('error'); ?> </div>
      </div>
    </div>
    <?php } ?>
    <div class="row">
            <?php echo $form->labelEx($model,'current_password',array('class'=>"col-md-30"));?>
        <div class="col-md-70">
          <div class="form-group"> <?php echo $form->passwordField($model, 'current_password', array('class' => 'form-control  input-lg', 'autofocus')); ?>
							<?php echo $form->error($model, 'current_password'); ?></div>
        </div>
    </div>
    <div class="row">
    <?php echo $form->labelEx($model,'new_password',array('class'=>"col-md-30"));?>
        <div class="col-md-70">
          <div class="form-group"><?php echo $form->passwordField($model, 'new_password', array('class' => 'form-control  input-lg')); ?>
							<?php echo $form->error($model, 'new_password'); ?></div>
        </div>
    </div>
		<div class="row">
     <?php echo $form->labelEx($model,'confirm_password',array('class'=>"col-md-30"));?>
        <div class="col-md-70">
          <div class="form-group"><?php echo $form->passwordField($model, 'confirm_password', array('class' => 'form-control  input-lg')); ?>
							<?php echo $form->error($model, 'confirm_password'); ?></div>
        </div>
    </div>	
 <div class="row" >
      <div class="form-group col-xs-100 col-sm-100 col-md-100">
      <div class="row">
		       <div class="col-md-80"></div>
        <div class="col-md-20">
          <div class="form-group"> <?php echo CHtml::submitButton(strip_tags(Yii::t('paspic','submit',Yii::app()->getLanguage())),array('class'=>"sky-blue button btn-block btn pull-right")); ?></div>
        </div>
        </div>
      </div>
    </div>
	
                    
  						    <div class="clearfix"></div>             
                        </div>
              
        <?php $this->endWidget(); ?>
		  
		  
		  </div>
</div>
</div>
<div class="clearfix"></div>
</div>