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
			<h1>Business Location</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'business_home_based'); ?>				
				<div class="group">
				<div class="select-list">
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
						<?php echo $form->dropDownList($model,'business_home_based',array('No'=>'No','Yes'=>'Yes'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-touched", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'business_home_based'); ?>
					</div>
				</div></div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'location'); ?>
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
						<?php echo $form->dropDownList($model,'location',array('Leased'=>'Leased','Owned'=>'Owned'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-touched", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'location'); ?>
						
					</div></div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row leased_owned input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree" style="display:<?php echo ($model->location=='Leased')?'block':'none';?>">
					<?php echo $form->labelEx($model,'lease_term'); ?>
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
							<?php echo $form->textField($model,'lease_term',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Lease Term" )); ?>
						<?php //echo $form->error($model,'lease_term'); ?>
						
					</div>
				</div>
				<div class="row leased_owned input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school" style="display:<?php echo ($model->location=='Leased')?'block':'none';?>">
					<?php echo $form->labelEx($model,'monthly_rent'); ?>
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
						<?php echo $form->textField($model,'monthly_rent',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Amount" )); ?>
						<?php //echo $form->error($model,'monthly_rent'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'landlord_mortgage_co'); ?>
					
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
						<?php echo $form->textField($model,'landlord_mortgage_co',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Landlord/Mortgage Co")); ?>
						<?php //echo $form->error($model,'landlord_mortgage_co'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'landlord_mortgage_co_contact'); ?>
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
						
						<?php echo $form->textField($model,'landlord_mortgage_co_contact',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Landlord/Mortgage Co Contact")); ?>
						<?php //echo $form->error($model,'landlord_mortgage_co_contact'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'landlord_mortgage_co_contact_phone'); ?>
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
						<?php echo $form->textField($model,'landlord_mortgage_co_contact_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Landlord/Mortgage Co Contact Phone")); ?>
						<?php //echo $form->error($model,'landlord_mortgage_co_contact_phone'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'landlord_mortgage_co_contact_cell'); ?>
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
						<?php echo $form->textField($model,'landlord_mortgage_co_contact_cell',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Landlord/Mortgage Co Contact Cell")); ?>
						<?php //echo $form->error($model,'landlord_mortgage_co_contact_cell'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'landlord_mortgage_co_contact_email'); ?>
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
						<?php echo $form->textField($model,'landlord_mortgage_co_contact_email',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Landlord/Mortgage Co Contact email")); ?>
						<?php //echo $form->error($model,'landlord_mortgage_co_contact_email'); ?>
						
					</div>
				</div>
				
	</div>
</div>
<div class="row action-row">
	<a href="<?php echo Yii::app()->createUrl('account/personalinfo');?>" class="primary-skinny-button-inverted bckbtn">Back</a>
	<button class="hero-button-with-arrow ng-isolate-scope" style="width:60%" type="submit">
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Continue</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>