<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>"register-form ng-pristine ng-isolate-scope ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern ng-valid-email ng-pending ng-invalid-min-length ng-invalid-contains-symbol"),
)); ?>
	<!-- ngIf: isSLOEnabled() -->
	<!-- STUDENT LOAN REFINANCE -->
	<!-- ngIf: ctrl.Loan.isStudentLoanRefinance() -->
	<div class="box card ng-scope" ng-if="ctrl.Loan.isStudentLoanRefinance()">
		<hgroup class="h1">
			<h1>References</h1>
			<aside class="required">Optional</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'bank_name_branch'); ?>				
				<div class="group">
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
						<?php echo $form->textField($model,'bank_name_branch',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Branch Name",'maxlength'=>25 )); ?>
						<?php //echo $form->error($model,'bank_name_branch'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'bank_name_branch_contact'); ?>
					<div class="group">
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
						<?php echo $form->textField($model,'bank_name_branch_contact',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Branch Contact")); ?>
						<?php //echo $form->error($model,'bank_name_branch_contact'); ?>
						
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'bank_name_branch_phone'); ?>
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
							<?php echo $form->textField($model,'bank_name_branch_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Phone Number")); ?>
						<?php //echo $form->error($model,'bank_name_branch_phone'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'trade_reference_1'); ?>
					<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_1',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Trade Reference #1",'maxlength'=>25)); ?>
						<?php //echo $form->error($model,'trade_reference_1'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'trade_reference_1_contact'); ?>
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
						<?php echo $form->textField($model,'trade_reference_1_contact',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Reference Contact #1")); ?>
						<?php //echo $form->error($model,'trade_reference_1_contact'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'trade_reference_1_phone'); ?>
					<div class="group">
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
						
						<?php echo $form->textField($model,'trade_reference_1_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Reference #1 Phone")); ?>
						<?php //echo $form->error($model,'trade_reference_1_phone'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'trade_reference_2'); ?>
						<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_2',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Reference #2",'maxlength'=>25)); ?>
						<?php //echo $form->error($model,'trade_reference_2'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'trade_reference_2_contact'); ?>
					<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_2_contact',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Ref#2 Contact")); ?>
						<?php //echo $form->error($model,'trade_reference_2_contact'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'trade_reference_2_phone'); ?>
						<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_2_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Ref#2 Phone")); ?>
						<?php //echo $form->error($model,'trade_reference_2_phone'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'trade_reference_3'); ?>
						<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_3',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Ref #3",'maxlength'=>25)); ?>
						<?php //echo $form->error($model,'trade_reference_3'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'trade_reference_3_contact'); ?>
					<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_3_contact',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Ref#3 Contact")); ?>
						<?php //echo $form->error($model,'trade_reference_3_contact'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'trade_reference_3_phone'); ?>
						<div class="group">
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
						<?php echo $form->textField($model,'trade_reference_3_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Ref#3 Phone")); ?>
						<?php //echo $form->error($model,'trade_reference_3_phone'); ?>
						
					</div>
				</div>
				
	</div>
</div>
<div class="row action-row">
	<a href="<?php echo Yii::app()->createUrl('account/bizlocation');?>" class="primary-skinny-button-inverted bckbtn">Back</a>
	<button class="hero-button-with-arrow ng-isolate-scope" type="submit" style="width:60%" >
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Continue</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>