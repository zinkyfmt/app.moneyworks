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
			<h1>Business Info</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'dba_name'); ?>				
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
						<?php echo $form->textField($model,'dba_name',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter DBA Name", 'required'=>'required')); ?>
						<?php //echo $form->error($model,'dba_name'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'legal_name'); ?>
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
						<?php echo $form->textField($model,'legal_name',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Legal Name", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'legal_name'); ?>
						
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'type_of_business'); ?>
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
							<?php echo $form->textField($model,'type_of_business',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Type of Business", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'type_of_business'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'tax_id'); ?>
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
						<?php echo $form->textField($model,'tax_id',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Tax ID", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'tax_id'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'business'); ?>
					
					<div class="group">
					<div class="select-list">
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
						<?php echo $form->dropDownList($model,'business',array('Corp'=>'Corp','LLC'=>'LLC','Sole Prop'=>'Sole Prop'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-touched", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'business'); ?>
					</div></div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'business_address'); ?>
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
						
						<?php echo $form->textField($model,'business_address',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Ex. 123 Main St, New York, NY 10036", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'business_address'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'full_billing_address'); ?>
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
						<?php echo $form->textField($model,'full_billing_address',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Full Billing Address")); ?>
						<?php //echo $form->error($model,'full_billing_address'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'phone_at_location'); ?>
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
						<?php echo $form->textField($model,'phone_at_location',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Phone at Location
", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'phone_at_location'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'best_phone'); ?>
						<div class="group info-container">
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
						<?php echo $form->textField($model,'best_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Best Phone")); ?>
						<?php //echo $form->error($model,'best_phone'); ?>
						
					</div>
				</div>

				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'business_email'); ?>
						<div class="group info-container">
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
						<?php echo $form->textField($model,'business_email',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Business Email")); ?>
						<?php //echo $form->error($model,'business_email'); ?>
						
					</div>
				</div><div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'website'); ?>
						<div class="group info-container">
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
						<?php echo $form->textField($model,'website',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Website")); ?>
						<?php //echo $form->error($model,'website'); ?>
						
					</div>
				</div>
	</div>
</div>
<div class="row action-row">
	<a href="<?php echo Yii::app()->getBaseUrl(true);?>" class="primary-skinny-button-inverted bckbtn">Back</a>
	<button class="hero-button-with-arrow ng-isolate-scope" type="submit" style="width:60%" >
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Continue</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>