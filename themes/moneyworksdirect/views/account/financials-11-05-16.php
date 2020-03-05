<style>
<?php if($model->cash_advance == 'Yes'){?>
.cash_advance{display:block;}
<?php } else{ ?>
.cash_advance{display:none;}
<?php } ?>
</style>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>"register-form ng-pristine ng-isolate-scope ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern ng-valid-email ng-pending ng-invalid-min-length ng-invalid-contains-symbol",'enctype'=>'multipart/form-data'),
)); ?>
	<!-- ngIf: isSLOEnabled() -->
	<!-- STUDENT LOAN REFINANCE -->
	<!-- ngIf: ctrl.Loan.isStudentLoanRefinance() -->
	<!----------start of code--------------------------------------------------->
<div class="row box upload-file-section">
    <h1>Upload Documents</h1>
    <a href="#" id="chooseFile">Choose Files</a>
    <div class="input-elements">
        <input type="file" name="UsersFinancialsDocuments[file][]" id="UsersFinancialsDocuments_file_0" />
    </div>
</div>
<!----------end of code-->
	
	<div class="box card ng-scope" ng-if="ctrl.Loan.isStudentLoanRefinance()">
		<hgroup class="h1">
			<h1>Financials</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'gross_annual_sales'); ?>				
				<div class="group dollar-sign">
					<div class="info ng-isolate-scope" est-pop-up="" input="Users_business_name" validation-message="ctrl.errorMessages.Users_business_name">
						<div class="popup-wrapper">
							<div class="popup-section slide-up">
								<div class="popup ng-hide">
									<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>									
						<?php echo $form->textField($model,'gross_annual_sales',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'gross_annual_sales'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'cash_advance'); ?>
					
					<div class="group">
					<div class="select-list">
						<div class="info ng-isolate-scope" est-pop-up="" input="last_name" validation-message="ctrl.errorMessages.last_name">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup ng-hide">
										<div class="arrow"></div>
										<p class="ng-binding"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>
						<?php echo $form->dropDownList($model,'cash_advance',array('Yes'=>'Yes','No'=>'No'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Cash Advance", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'cash_advance'); ?>
						</div>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row cash_advance input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'cash_advance_with'); ?>
					<div class="group">
						
							<div class="info ng-isolate-scope" est-pop-up="" input="latest_degree" validation-message="ctrl.errorMessages.latest_degree">
								<div class="popup-wrapper">
									<div class="popup-section slide-up">
										<div class="popup ng-hide">
											<div class="arrow"></div>
											<p class="ng-binding" ng-bind-html="message"></p>
										</div>
									</div>
									<div class="icon-field_info"></div>
								</div>
							</div>
							<?php echo $form->textField($model,'cash_advance_with',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Cash Advance With Whom")); ?>
						<?php //echo $form->error($model,'cash_advance_with'); ?>
						
					</div>
				</div>
				<div class="row cash_advance input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'balance'); ?>
					<div class="group dollar-sign">
						<div class="info ng-isolate-scope" est-pop-up="" input="latest_school" validation-message="ctrl.errorMessages.latest_school">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup ng-hide">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>
						<?php echo $form->textField($model,'balance',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount")); ?>
						<?php //echo $form->error($model,'balance'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'current_credit_card_processor'); ?>
					<div class="group">
						<div class="info ng-isolate-scope" est-pop-up="" input="gradmonth,gradyear" validation-message="ctrl.errorMessages.grad_date">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup ng-hide">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>
						<?php echo $form->textField($model,'current_credit_card_processor',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Current Credit Card Processor", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'current_credit_card_processor'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'avg_processing_volume'); ?>
					<div class="group dollar-sign">
						<div class="info ng-isolate-scope" est-pop-up="" input="annual_income" validation-message="ctrl.errorMessages.annual_income">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup ng-hide">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>
						
						<?php echo $form->textField($model,'avg_processing_volume',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'avg_processing_volume'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'last_month_vol'); ?>
						<div class="group dollar-sign">
						<div class="info ng-scope ng-isolate-scope">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup pp1">
										<div class="arrow"></div>
										<p class="ng-binding"></p>
									</div>
								</div>
								<div class="icon-field_info ppb1"></div>
							</div>
						</div>				
						<?php echo $form->textField($model,'last_month_vol',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'last_month_vol'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'second_month_vol'); ?>
					<div class="group dollar-sign">
						<div class="info ng-isolate-scope">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message"></p>
									</div>
								</div>
								<div class="icon-field_info"></div>
							</div>
						</div>
						<?php echo $form->textField($model,'second_month_vol',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'second_month_vol'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'third_month_vol'); ?>
						<div class="group dollar-sign">
						<div class="info ng-scope ng-isolate-scope" est-pop-up="" info-message="housing_payment" ng-if="!housing_payment.$submitted" validation-message="ctrl.errorMessages.housing_payment">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup pp2">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message">
										</p>
									</div>
								</div>
								<div class="icon-field_info ppb2"></div>
							</div>
						</div>
						<?php echo $form->textField($model,'third_month_vol',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'third_month_vol'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'fourth_month_vol'); ?>
						<div class="group dollar-sign">
						<div class="info ng-scope ng-isolate-scope" est-pop-up="" info-message="housing_payment" ng-if="!housing_payment.$submitted" validation-message="ctrl.errorMessages.housing_payment">
							<div class="popup-wrapper">
								<div class="popup-section slide-up">
									<div class="popup pp2">
										<div class="arrow"></div>
										<p class="ng-binding" ng-bind-html="message">
										</p>
									</div>
								</div>
								<div class="icon-field_info ppb2"></div>
							</div>
						</div>
						<?php echo $form->textField($model,'fourth_month_vol',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Amount", )); ?>
						<?php //echo $form->error($model,'fourth_month_vol'); ?>
						
					</div>
				</div>
				
				
	</div>
</div>
<div class="row action-row">
	<a href="<?php echo Yii::app()->createUrl('account/businessinfo');?>" class="primary-skinny-button-inverted bckbtn">Back</a>
	<button class="hero-button-with-arrow ng-isolate-scope" type="submit" style="width:60%" >
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Continue</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>

<script type="text/javascript">
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
};
window.filesInputsNo = 1;
$(document).ready(function(){
    $('#chooseFile').on('click' , function(clickEvent){
        clickEvent.preventDefault();
        var fileInputs = $('div.input-elements input[type="file"]');
        for(var i=0,len=fileInputs.length;i<len;i++){
            if(fileInputs.get(i).files.length===0){
                $(fileInputs.get(i)).click();
                break;
            }
        }
        fileInputs.off('change').on('change',function(fileChange){
            if(this.files.length > 0){
                var newRow = '<div class="file-info row input-row">\
                                   <span class="file-name">'+this.files[0].name+'</span> \
                                   <span class="file-size">'+bytesToSize(this.files[0].size)+'</span> \
                                   <span class="remove-file"></span> \
                               </div><div class="clearfix"></div>';
                $(newRow).appendTo('.upload-file-section');
                $('<input type="file" name="UsersFinancialsDocuments[file][]" id="UsersFinancialsDocuments_file_'+window.filesInputsNo+'" />').appendTo('.upload-file-section .input-elements');
                window.filesInputsNo++;
            }
            $('.remove-file').off('click').on('click',function(removeEvent){
                removeEvent.preventDefault();
                var rowIndex = $('.file-info.input-row').index($(this).parent())+1;
                $('.upload-file-section .input-elements input').remove('input:nth-of-type('+rowIndex+')');
                $(this).parent().remove();
            });
        });
    });
    
});
</script>