<div class="body-heading text-left"> <span class="left-align "><?php echo strip_tags(Yii::t('paspic','contactus_menu',Yii::app()->getLanguage())); ?></span> </div>
<div class="form-area">
    <h2><?php echo strip_tags(Yii::t('paspic','send_us_email_to',Yii::app()->getLanguage())); ?> <span>Support</span> @ <a href="mailto:paspic.co.uk">paspic.co.uk</a></h2>
    <p><?php echo strip_tags(Yii::t('paspic','contact_us_enquiry_text_1',Yii::app()->getLanguage())); ?>: support @ <a href="mailto:paspic.co.uk">paspic.co.uk</a>.<br>
       <?php echo strip_tags(Yii::t('paspic','contact_us_enquiry_text_2',Yii::app()->getLanguage())); ?>.</p>
    <div class="row">
        <div class="col-md-25 col-sm-50">
            <div class="address-area">
                <h3>Paspic Limited </h3>
                The Sussex Innovation Centre
                Science Park Square
                University of Sussex
                Falmer, Brighton
                East Sussex, BN1 9SB
                United Kingdom <br>
                <br>
                <?php echo strip_tags(Yii::t('paspic','phone',Yii::app()->getLanguage())); ?>: +44 (0)1273 704416<br>
                Fax:    +44 (0)1273 704499<br>
                Paspic <?php echo strip_tags(Yii::t('paspic','map_and_directions',Yii::app()->getLanguage())); ?></div>
        </div>
        <div class="col-md-25  col-sm-50">
            <div class="address-area no-border">
                <h3>Paspic Limited </h3>
                Registered in:
                England and Wales No. 03136965 <br>
                <br>
                <span>Registered Office:</span><br>
                168 CHURCH ROAD,<br>
                HOVE, BN3 2DL<br>
                EAST SUSSEX </div>
        </div>
       
        <div class="col-md-50 col-sm-100">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'contact-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>
             <div class="clearfix">&nbsp;</div>  
            <div class="right-video">
                <div class="login-box no-padd">
                         <?php if (Yii::app()->user->hasFlash('success')) { ?>
                            <div class="row">
                                <div class="col-xs-100 col-sm-100 col-md-100">
                                    <div class="alert alert-success"> <?php echo Yii::app()->user->getFlash('success'); ?> </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (Yii::app()->user->hasFlash('error')) { ?>
                            <div class="row">
                                <div class="col-xs-100 col-sm-100 col-md-100">
                                    <div class="alert alert-danger"> <?php echo Yii::app()->user->getFlash('error'); ?> </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="row">
                            <?php echo $form->labelEx($model, 'name', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70"><div class="form-group"> 
                                            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => "form-control")); ?>
                                            <?php echo $form->error($model, 'name'); ?>
                                        </div>
                                    </div>
                        </div>                        
                        <div class="row">
                             <?php echo $form->labelEx($model, 'url', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70"><div class="form-group"> 
                                            <?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 255, 'class' => "form-control")); ?>
                                            <?php echo $form->error($model, 'url'); ?>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                            <?php echo $form->labelEx($model, 'email', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70"><div class=""> 
                                            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => "form-control")); ?>
                                            <?php echo $form->error($model, 'email'); ?>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                          <?php echo $form->labelEx($model, 'enquire_type', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70">
                                    <div class="form-group"> 
                                    <div class="select-wrapper custom-dropdown">
                                            <?php  
                                            $arrayValues = array("1"=>"General Enquiry","2"=>"Order Related Enquiry");
                                            echo $form->dropDownList($model,'enquire_type', $arrayValues, array('class' => 'form-control custom-select')); 
                                            ?> </div>
                                            <?php echo $form->error($model, 'enquire_type'); ?>
                                       
                                        </div>
                                    </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="row merchant_card_id_container" style="display: none;">
                             <?php echo $form->labelEx($model, 'merchant_card_id', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70"><div class="form-group"> 
                                            <?php echo $form->textField($model, 'merchant_card_id', array('size' => 60, 'maxlength' => 255, 'class' => "form-control")); ?>
                                            <?php echo $form->error($model, 'merchant_card_id'); ?>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                             <?php echo $form->labelEx($model, 'message', array('class' => "col-md-30")); ?>
                                    <div class="col-md-70"><div class="form-group"> 
                                            <?php echo $form->textArea($model, 'message', array('maxlength' => 255, 'class' => "form-control")); ?>
                                            <?php echo $form->error($model, 'message'); ?>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-100 col-sm-50 col-md-50">&nbsp;</div>
                            <div class="col-xs-100 col-sm-50 col-md-50">
                                <?php echo CHtml::submitButton(strip_tags(Yii::t('paspic','submit',Yii::app()->getLanguage())), array('class' => "sky-blue button btn-block btn pull-right")); ?>
                            </div>
                        </div>

                    </div>   
                    <div class="clearfix"></div>  					
                        </div>

            <?php $this->endWidget(); ?>


        </div>
    </div></div>
<script type="text/javascript">
jQuery(document).ready(function(){
   jQuery("#ContactTicket_enquire_type").change(function(){
       jQuery(".merchant_card_id_container").slideToggle("slow");
   }); 
   if(jQuery("#ContactTicket_enquire_type").val() === '2'){
       jQuery(".merchant_card_id_container").show("slow");
   }
});
</script>
