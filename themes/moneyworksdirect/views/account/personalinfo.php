<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>"register-form ng-pristine ng-isolate-scope ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern ng-valid-email ng-pending ng-invalid-min-length ng-invalid-contains-symbol"),
));
$dob1DMY=$dob1YY=$dob1MM=$dob1DD='';
$dob2DMY=$dob2YY=$dob2MM=$dob2DD='';
$ssn1YY=$ssn1MM=$ssn1DD='';
$ssn2YY=$ssn2MM=$ssn2DD='';
/*if($model->owner_1_dob != '0000-00-00' && $model->owner_1_dob != ''){
	$dob1 = explode('-',$model->owner_1_dob);
	$dob1DD = (isset($dob1[2]))?$dob1[2]:'';
	$dob1MM = (isset($dob1[1]))?$dob1[1]:'';
	$dob1YY = (isset($dob1[0]))?$dob1[0]:'';
	$dob1DMY = $dob1DD.'-'.$dob1MM.'-'.$dob1YY;
}
if($model->owner_2_dob != '0000-00-00' && $model->owner_2_dob != ''){
	$dob2 = explode('-',$model->owner_2_dob);
	$dob2DD = (isset($dob2[2]))?$dob2[2]:'';
	$dob2MM = (isset($dob2[1]))?$dob2[1]:'';
	$dob2YY = (isset($dob2[0]))?$dob2[0]:'';
	$dob2DMY = $dob2DD.'-'.$dob2MM.'-'.$dob2YY;
} */
if($model->owner_1_ssn != ''){
	$ssn1 = explode('-',$model->owner_1_ssn);
	$ssn1DD = $ssn1[0];
	$ssn1MM = $ssn1[1];
	$ssn1YY = $ssn1[2];
}
if($model->owner_2_ssn != ''){
	$ssn2 = explode('-',$model->owner_2_ssn);
	$ssn2DD = $ssn2[0];
	$ssn2MM = $ssn2[1];
	$ssn2YY = $ssn2[2];
}
 ?>
	<!-- ngIf: isSLOEnabled() -->
	<!-- STUDENT LOAN REFINANCE -->
	<!-- ngIf: ctrl.Loan.isStudentLoanRefinance() -->
	<div class="box card ng-scope" ng-if="ctrl.Loan.isStudentLoanRefinance()">
		<hgroup class="h1">
			<h1>Personal Info : Owner</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'owner_1_name'); ?>				
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
						<?php echo $form->textField($model,'owner_1_name',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Name", 'required'=>'required','value'=>$userData->fname.' '.$userData->lname )); ?>
						<?php ////echo $form->error($model,'owner_1_name'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'owner_1_title'); ?>
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
						<?php echo $form->textField($model,'owner_1_title',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner Title", 'required'=>'required' )); ?>
						<?php ////echo $form->error($model,'owner_1_title'); ?>
						
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'owner_1_dob'); ?>
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
							<?php //echo $form->textField($model,'owner_1_dob',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Cash Advance With", 'required'=>'required' )); ?>
							
							<!--<input class="mm autotab ng-pristine ng-untouched ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-auto-tab="" est-grad-date="month" id="grad_date_month" value="<?php //echo $dob1MM;?>"  maxlength="2" name="owner1_dob2" next-input-id="grad_date_year" ng-model="ctrl.QuickRateScoreModel.attributes.grad_month" placeholder="MM" required type="text">
							
																			<div class="connector">/</div><input class="mm autotab ng-pristine ng-untouched ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-auto-tab="" est-grad-date="month" maxlength="2" name="owner1_dob1" next-input-id="grad_date_year" ng-model="ctrl.QuickRateScoreModel.attributes.grad_month" placeholder="DD" value="<?php //echo $dob1DD;?>" required type="text">
																			<div class="connector">/</div>
																			<input class="yyyy ng-pristine ng-untouched autotab ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-grad-date="year" maxlength="4" name="owner1_dob3" placeholder="YYYY" required type="text" value="<?php //echo $dob1YY;?>" > -->
						<?php echo $form->textField($model,'owner_1_dob',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"dd-mm-yyyy", 'required'=>'required' )); ?>
							
						<?php //////echo $form->error($model,'owner_1_dob'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'owner_1_ssn'); ?>
					<div class="group wide-input-group-mmyyyy-range ng-pristine ng-untouched ng-valid ng-isolate-scope">
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
						
							<input value="<?php echo $ssn1DD;?>" autocomplete="off" class="icon-security-shield  autotab ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" est-auto-tab="" id="owner1_ssn1" maxlength="3" name="owner1_ssn1" next-input-id="ssn2" ng-model="number.ssn1" placeholder="xxx" required size="10" type="password">
							<div class="connector">-</div>
							<input value="<?php echo $ssn1MM;?>" class="autotab ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" autocomplete="off" est-auto-tab="" id="owner1_ssn2" maxlength="2" name="owner1_ssn2" next-input-id="ssn3" ng-model="number.ssn2" placeholder="xx" required type="password">
							<div class="connector">-</div>
							<input value="<?php echo $ssn1YY;?>" autocomplete="off" class="autotab mid-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-touched" id="owner1_ssn3" maxlength="4" name="owner1_ssn3" placeholder="xxxx" required type="password">
																		</div>
																	</div>
						
					
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'owner_1_home_address'); ?>
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
						<?php echo $form->textField($model,'owner_1_home_address',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner Home Address", 'required'=>'required' )); ?>
						<?php ////echo $form->error($model,'owner_1_home_address'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'owner_1_home_phone'); ?>
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
						
						<?php echo $form->textField($model,'owner_1_home_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner Home Phone", 'required'=>'required','value'=>$userData->phone_number )); ?>
						<?php ////echo $form->error($model,'owner_1_home_phone'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'owner_1_cell_phone'); ?>
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
						<?php echo $form->textField($model,'owner_1_cell_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner Mobile Phone")); ?>
						<?php ////echo $form->error($model,'owner_1_cell_phone'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'owner_1_email'); ?>
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
						<?php echo $form->textField($model,'owner_1_email',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner Email")); ?>
						<?php ////echo $form->error($model,'owner_1_email'); ?>
					</div>
				</div>
				<div class="row owner_1_own_or_rent input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'owner_1_own_or_rent'); ?>
						<div class="group">
						<div class="select-list">
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
						<?php echo $form->dropDownList($model,'owner_1_own_or_rent',array('Own'=>'Own','Rent'=>'Rent'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner Own or Rent")); ?>
						<?php ////echo $form->error($model,'owner_1_own_or_rent'); ?>
						</div>
					</div>
				</div>
				<div class="row owner_1_payment input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment" style="display:<?php echo ($model->owner_1_own_or_rent=='Rent')?'block':'none';?>">
					
						<?php echo $form->labelEx($model,'owner_1_payment'); ?>
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
						<?php echo $form->textField($model,'owner_1_payment',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Amount")); ?>
						<?php ////echo $form->error($model,'owner_1_payment'); ?>
						
					</div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'owner_1_years_there'); ?>
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
						<?php echo $form->textField($model,'owner_1_years_there',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner Mobile Phone")); ?>
						<?php ////echo $form->error($model,'owner_1_years_there'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'owner_1_drivers_license'); ?>
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
						<?php echo $form->textField($model,'owner_1_drivers_license',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner Drivers License" )); ?>
						<?php ////echo $form->error($model,'owner_1_drivers_license'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'owner_1_drivers_license_state'); ?>
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
						<?php echo $form->textField($model,'owner_1_drivers_license_state',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner License State")); ?>
						<?php ////echo $form->error($model,'owner_1_drivers_license_state'); ?>
						
					</div>
				</div>
				
				</div></div>
			<?php if($userData->is_sole_owner ==0){ ?>
				<div class="box card ng-scope" ng-if="ctrl.Loan.isStudentLoanRefinance()">
		<hgroup class="h1">
			<h1>Personal Info : Owner #2</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
				
				
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'owner_2_name'); ?>				
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
						<?php echo $form->textField($model,'owner_2_name',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Name")); ?>
						<?php ////echo $form->error($model,'owner_2_name'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'owner_2_title'); ?>
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
						<?php echo $form->textField($model,'owner_2_title',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner #1 Title")); ?>
						<?php ////echo $form->error($model,'owner_2_title'); ?>
						
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'owner_2_dob'); ?>
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
							<?php //echo $form->textField($model,'owner_2_dob',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Cash Advance With", 'required'=>'required' )); ?>
							<!--<input value="<?php //echo $dob2MM;?>" class="mm autotab ng-pristine ng-untouched ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-auto-tab="" est-grad-date="month" id="grad_date_month" maxlength="2" name="owner2_dob2" next-input-id="grad_date_year" ng-model="ctrl.QuickRateScoreModel.attributes.grad_month" placeholder="MM"  type="text">
							
																			<div class="connector">/</div><input class="autotab mm ng-pristine ng-untouched ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-auto-tab="" est-grad-date="month" maxlength="2" name="owner2_dob1" next-input-id="grad_date_year" ng-model="ctrl.QuickRateScoreModel.attributes.grad_month" placeholder="DD" value="<?php //echo $dob2DD;?>"  type="text">
																			<div class="connector">/</div>
																			<input class="yyyy ng-pristine ng-untouched autotab ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" est-grad-date="year" maxlength="4" name="owner2_dob3" ng-model="ctrl.QuickRateScoreModel.attributes.grad_year" placeholder="YYYY" value="<?php //echo $dob2YY;?>"  type="text"> -->
						<?php echo $form->textField($model,'owner_2_dob',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"dd-mm-yyyy"  )); ?>
							
						<?php //////echo $form->error($model,'owner_2_dob'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'owner_2_ssn'); ?>
					<div class="group wide-input-group-mmyyyy-range ng-pristine ng-untouched ng-valid ng-isolate-scope">
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
						
							<input value="<?php echo $ssn2DD;?>" autocomplete="off" class="icon-security-shield  autotab ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" est-auto-tab="" id="owner2_ssn1" maxlength="3" name="owner2_ssn1" next-input-id="ssn2" ng-model="number.ssn1" placeholder="xxx"  size="10" type="password">
							<div class="connector">-</div>
							<input value="<?php echo $ssn2MM;?>" class="ng-pristine autotab ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" autocomplete="off" est-auto-tab="" id="owner2_ssn2" maxlength="2" name="owner2_ssn2" next-input-id="ssn3" ng-model="number.ssn2" placeholder="xx"  type="password">
							<div class="connector">-</div>
							<input value="<?php echo $ssn2YY;?>" autocomplete="off" class="autotab mid-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-touched" id="owner2_ssn3" maxlength="4" name="owner2_ssn3" placeholder="xxxx" type="password">
																		</div>
																	</div>
						
					
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'owner_2_home_address'); ?>
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
						<?php echo $form->textField($model,'owner_2_home_address',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner #1 Home Address")); ?>
						<?php ////echo $form->error($model,'owner_2_home_address'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="annual_income">
					<?php echo $form->labelEx($model,'owner_2_home_phone'); ?>
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
						
						<?php echo $form->textField($model,'owner_2_home_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner #1 Home Phone" )); ?>
						<?php ////echo $form->error($model,'owner_2_home_phone'); ?>						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'owner_2_cell_phone'); ?>
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
						<?php echo $form->textField($model,'owner_2_cell_phone',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner #1 Mobile Phone" )); ?>
						<?php ////echo $form->error($model,'owner_2_cell_phone'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'owner_2_email'); ?>
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
						<?php echo $form->textField($model,'owner_2_email',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner #1 Email" )); ?>
						<?php ////echo $form->error($model,'owner_2_email'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'owner_2_own_or_rent'); ?>
						<div class="group">
						<div class="select-list">
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
						<?php echo $form->dropDownList($model,'owner_2_own_or_rent',array('Own'=>'Own','Rent'=>'Rent'),array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner #1 Own or Rent")); ?>
						<?php ////echo $form->error($model,'owner_2_own_or_rent'); ?>
						</div>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'owner_2_payment'); ?>
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
						<?php echo $form->textField($model,'owner_2_payment',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Amount")); ?>
						<?php ////echo $form->error($model,'owner_2_payment'); ?>
						
					</div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'owner_2_years_there'); ?>
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
						<?php echo $form->textField($model,'owner_2_years_there',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner #1 Mobile Phone")); ?>
						<?php ////echo $form->error($model,'owner_2_years_there'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'owner_2_drivers_license'); ?>
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
						<?php echo $form->textField($model,'owner_2_drivers_license',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Owner #1 Drivers License")); ?>
						<?php ////echo $form->error($model,'owner_2_drivers_license'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'owner_2_drivers_license_State'); ?>
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
						<?php echo $form->textField($model,'owner_2_drivers_license_State',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Owner #1 License State")); ?>
						<?php ////echo $form->error($model,'owner_2_drivers_license_State'); ?>
						
					</div>
				</div>
	</div>
</div>

<?php } ?>
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