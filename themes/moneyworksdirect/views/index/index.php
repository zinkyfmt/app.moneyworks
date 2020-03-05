<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,

	
	'htmlOptions'=>array('class'=>"register-form ng-pristine ng-isolate-scope ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern ng-valid-email ng-pending ng-invalid-min-length ng-invalid-contains-symbol"),
));

if($model->amount_needed){
	$value = $model->amount_needed;
}else{
	$value = '$10000';
}
$fundingArray = array();
if($model->funding_purpose != ''){
	$fundingArray = explode(',',$model->funding_purpose);
}

?>

							
<?php echo $form->hiddenField($model,'amount_needed',array('value'=>$value )) ?>
	<!-- ngIf: isSLOEnabled() -->
	<!-- STUDENT LOAN REFINANCE -->
	<!-- ngIf: ctrl.Loan.isStudentLoanRefinance() -->
	<div class="box card ng-scope" ng-if="ctrl.Loan.isStudentLoanRefinance()">
		<hgroup class="h1">
			<h1>Funding Amount Seeking</h1>
			<aside class="required">Required</aside>
		</hgroup>
		<div class="section ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern" ng-form="details_form">
			<est-form-alert class="ng-isolate-scope" message="Some fields below require your attention" type="error">
				<div style="height: 0px;" class="form-alert error">
					<span class="ng-binding">Some fields below require your attention</span>
				</div>
			</est-form-alert>
			<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
			<div class="amount-slider loan-details-slider">
                              <div class="ng-isolate-scope" nudge-number-incremental-steps="2" nudge-starting-interval="100" id="est-amount-slider">
                                <div class="layer purpose-form-layer">
                                  <div class="purpose-form">
                                    <div class="row slider-row">
                                      <div class="slider">
                                        <!-- ngIf: !isMobileBrowser -->
                                        <div class="icon-slider-minus ng-scope" id="minus1"></div>
                                        <!-- end ngIf: !isMobileBrowser -->
                                        <!-- ngIf: isMobileBrowser -->
                                        <div class="floor-value ng-binding">$10,000</div>
                                        <slider class="ng-pristine ng-untouched ng-valid ng-isolate-scope" id="rng" step="5000">
                                          <span style="white-space: nowrap; position: absolute; display: block; z-index: 1; left: 0px; right: 0px;" class="bar full"></span>
                                          <span style="white-space: nowrap; position: absolute; display: block; z-index: 1;" class="bar steps"></span>
                                       
                                        </slider>
                                        <div class="ceiling-value ng-binding">$500,000+</div>
                                        <!-- ngIf: !isMobileBrowser -->
                                        <div class="icon-slider-plus ng-scope PLUS" id="plus1"></div>
                                        <!-- end ngIf: !isMobileBrowser -->
                                        <!-- ngIf: isMobileBrowser -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
			
			
			
			
			<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-maxlength" ng-form="education_dates">
					<?php echo $form->labelEx($model,'gross_annual_sales'); ?>
					<div class="group dollar-sign">
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
						<?php echo $form->textField($model,'gross_annual_sales',array('class'=>"money ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Amount", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'gross_annual_sales'); ?>
					</div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" >
					
						<?php echo $form->labelEx($model,'years_in_business'); ?>
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
						<?php echo $form->textField($model,'years_in_business',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off", 'placeholder'=>"Enter Years Here", 'required'=>'required','maxlength'=>'4')); ?>
						<?php //echo $form->error($model,'years_in_business'); ?>
						
					</div>
				</div>
				
			</div>
</div>
<div id="tab-outer">
                          <div id="tab-wrapper">
                            <div class="box card ng-scope" id="purpose-selection-box">
                              <hgroup class="h1">
                                <h1>Funding Purpose</h1>
                                <aside class="required">Required</aside>
                              </hgroup>
                              <section class="ng-pristine ng-invalid ng-invalid-required" ng-form="register_form_category">
                                <est-form-alert class="ng-isolate-scope" type="error">
                                  <div style="height: 0px;" class="form-alert error">
                                    <span class="ng-binding">Some fields below need your attention.</span>
                                  </div>
                                </est-form-alert>
                                <!-- ngIf: !loanMisc.category -->
                                <div class="hidden-required ng-scope">
                                  <input class="ng-pristine ng-untouched ng-invalid ng-invalid-required" value="<?php echo $model->funding_purpose;?>" name="Users[funding_purpose]" id="Users_funding_purpose" required type="hidden">
                                </div>
                                <!-- end ngIf: !loanMisc.category -->
                                <div class="purpose-options" id="nevi">
                                  <!-- ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option moving_relocation <?php if(in_array('Working Capital',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti <?php if(in_array('Working Capital',$fundingArray)){echo 'selected-link';}?>" href="#tab1">
                                      <span class="ng-binding">
                                        Working Capital
                                        </span>
                                    </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option security_deposit <?php if(in_array('Expansion',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti <?php if(in_array('Expansion',$fundingArray)){echo 'selected-link';}?>" href="#tab2">
                                      <span class="ng-binding">
                    Expansion
                  </span> </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->
                                  <div class="purpose-option engagement_wedding <?php if(in_array('Equipment',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti" href="#tab3 <?php if(in_array('Expansion',$fundingArray)){echo 'selected-link';}?>">
                                      <span class="ng-binding">
                    Equipment
                  </span> </a>
                                  </div>
                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option home_improvement <?php if(in_array('Inventory',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti <?php if(in_array('Inventory',$fundingArray)){echo 'selected-link';}?>" href="#tab4">
                                      <span class="ng-binding">
                    Inventory
                  </span>
                                    </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option vacation_honeymoon <?php if(in_array('Business AQU.',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti <?php if(in_array('Business AQU.',$fundingArray)){echo 'selected-link';}?>" href="#tab5">
                                      <span class="ng-binding">
                    Business AQU.
                  </span> </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option career_development <?php if(in_array('Advertising',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti <?php if(in_array('Advertising',$fundingArray)){echo 'selected-link';}?>" href="#tab6">
                                      <span class="ng-binding">
                    Advertising
                  </span> </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option new_job_expenses <?php if(in_array('Contracts',$fundingArray)){echo 'selected';}?>">

                                    <a class="ti <?php if(in_array('Contracts',$fundingArray)){echo 'selected-link';}?>" href="#tab7">
                                      <span class="ng-binding">
                    Contracts
                  </span>
                                    </a>
                                  </div>

                                  <!-- end ngRepeat: item in categoryOptions -->

                                  <div class="purpose-option other <?php if(in_array('Other',$fundingArray)){echo 'selected';}?>">
                                    <a class="ti lasti <?php if(in_array('Other',$fundingArray)){echo 'selected-link';}?>" href="#tab8">
                                      <span class="ng-binding">
                    Other
                  </span>
                                    </a>

                                  </div>
                                  <!-- end ngRepeat: item in categoryOptions -->
                                </div>
                                
                              </section>
                            </div>
                          </div></div>
<div class="box card register-box ng-scope" >
	<hgroup class="h1">
		<h1>Funding Purpose Details</h1>
		<aside class="required">Required</aside>
	</hgroup>
	<div class="section ng-pristine ng-valid-email ng-invalid-required ng-pending ng-invalid-min-length ng-invalid-contains-symbol ng-valid-parse" ng-form="loanpurpose_details_form">
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_agent_id">
				<?php echo $form->labelEx($model,'agent_id'); ?>
		
				
				<div class="group">
				<div class="select-list">
					<div class="info ng-isolate-scope" est-pop-up="" input="Users_agent_id" validation-message="ctrl.errorMessages.Users_agent_id">
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
						<?php echo $form->dropDownList($model,'agent_id',Agents::model()->getAgents(),array('empty' => 'Select an Agent','options'=>array($agentId=>array('selected'=>'selected')),'class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'required'=>'required' )); ?>
						
					</div>
				</div>
				</div>
	
			<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="Users_business_name">
				<?php echo $form->labelEx($model,'business_name'); ?>
		
				
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
						<?php echo $form->textField($model,'business_name',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched", 'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Business Name", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'business_name'); ?>
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<!-- ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-scope ng-isolate-scope ng-invalid ng-invalid-required ng-valid-parse" ng-form="last_name">
					<?php echo $form->labelEx($model,'fname'); ?>
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
						<?php echo $form->textField($model,'fname',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'ng-model'=>"ctrl.userData.last_name", 'placeholder'=>"Enter First Name", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'fname'); ?>
						
					</div>
				</div>
				<!-- end ngIf: !ctrl.userData.is_immutable && !expiredRate -->
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_degree">
					<?php echo $form->labelEx($model,'lname'); ?>
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
							<?php echo $form->textField($model,'lname',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'ng-model'=>"ctrl.userData.last_name", 'placeholder'=>"Enter Last Name", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'lname'); ?>
						
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" ng-form="latest_school">
					<?php echo $form->labelEx($model,'phone_number'); ?>
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
						<?php echo $form->textField($model,'phone_number',array('class'=>"phone ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Enter Phone Number", 'required'=>'required' )); ?>
						<?php //echo $form->error($model,'phone_number'); ?>
					</div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-parse ng-invalid-min" ng-form="refinance_amount">
					<?php echo $form->labelEx($model,'is_sole_owner'); ?>
					
					<div class="radio-button-list">
                                    <input class="ng-pristine ng-untouched ng-valid sole_owner" id="Users_is_sole_owner_yes" name="Users[is_sole_owner]" value="1" checked="checked" type="radio">
                                    <label for="Users_is_sole_owner_yes">Yes</label>
                                    <input class="ng-pristine ng-untouched ng-valid sole_owner" id="Users_is_sole_owner_no" name="Users[is_sole_owner]" value="0" <?php if($model->is_sole_owner=='0'){ echo 'checked="checked"';}?> type="radio">
                                    <label for="Users_is_sole_owner_no">No</label>                                    
                                    
                                  </div>	
					
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required is_sole" style="display:<?php echo ($model->is_sole_owner=='0')?'block':'none';?>">
					<?php echo $form->labelEx($model,'percentage_share'); ?>
					<div class="group">
						<div class="info ng-isolate-scope" >
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
						<?php echo $form->textField($model,'percentage_share',array('class'=>" ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'ng-model'=>"ctrl.userData.last_name", 'placeholder'=>"Enter Share Percentage" )); ?>
						
					</div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'does_lease_or_own'); ?>
					<div class="radio-button-list">
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_does_lease_or_own_yes" name="Users[does_lease_or_own]" value="1" checked="checked" type="radio">
                                    <label for="Users_does_lease_or_own_yes">Yes</label>
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_does_lease_or_own_no" name="Users[does_lease_or_own]" value="0" type="radio">
                                    <label for="Users_does_lease_or_own_no">No</label>                                    
                                    
                                  </div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'is_current_with_payments'); ?>
					<div class="radio-button-list">
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_is_current_with_payments_yes" name="Users[is_current_with_payments]" value="1" checked="checked" type="radio">
                                    <label for="Users_is_current_with_payments_yes">Yes</label>
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_is_current_with_payments_no" name="Users[is_current_with_payments]" value="0" type="radio">
                                    <label for="Users_is_current_with_payments_no">No</label>                                    
                                    
                                  </div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'has_federal_liens'); ?>
					<div class="radio-button-list">
                                    <input class="ng-pristine ng-untouched ng-valid federal_liens" id="Users_has_federal_liens_yes" name="Users[has_federal_liens]" value="1" <?php if($model->has_federal_liens=='1'){ echo 'checked="checked"';}?>  type="radio">
                                    <label for="Users_has_federal_liens_yes">Yes</label>
                                    <input <?php if($model->has_federal_liens !='1'){ echo 'checked="checked"';}?> class="ng-pristine ng-untouched ng-valid federal_liens" id="Users_has_federal_liens_no"  name="Users[has_federal_liens]" value="0" type="radio">
                                    <label for="Users_has_federal_liens_no">No</label>                                    
                                    
                                  </div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse show_federal" ng-form="housing_payment" style="display:<?php echo ($model->has_federal_liens=='1')?'block':'none';?>">
					
						<?php echo $form->labelEx($model,'is_on_payment_plan'); ?>
					<div class="radio-button-list">
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_is_on_payment_plan_yes" name="Users[is_on_payment_plan]" value="1" type="radio">
                                    <label for="Users_is_on_payment_plan_yes">Yes</label>
                                    <input class="ng-pristine ng-untouched ng-valid" id="Users_is_on_payment_plan_no" checked="checked"  name="Users[is_on_payment_plan]" value="0" type="radio">
                                    <label for="Users_is_on_payment_plan_no">No</label>                                    
                                    
                                  </div>
				</div>
				
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required ng-valid-max ng-valid-min ng-valid-parse" ng-form="housing_payment">
					
						<?php echo $form->labelEx($model,'has_current_balance'); ?>
					<div class="radio-button-list">
                                    <input <?php if($model->has_current_balance =='1'){ echo 'checked="checked"';}?> class="ng-pristine ng-untouched ng-valid Users_has_current" id="Users_has_current_balance_yes" name="Users[has_current_balance]" value="1" type="radio">
                                    <label for="Users_has_current_balance_yes">Yes</label>
                                    <input class="ng-pristine ng-untouched ng-valid Users_has_current" id="Users_has_current_balance_no" <?php if($model->has_current_balance !='1'){ echo 'checked="checked"';}?>  name="Users[has_current_balance]" value="0" type="radio">
                                    <label for="Users_has_current_balance_no">No</label>                                    
                                    
                                  </div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required is_current_balance" style="display:<?php echo ($model->has_current_balance=='1')?'block':'none';?>" >
					<?php echo $form->labelEx($model,'balance_from_what_company'); ?>
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
						<?php echo $form->textField($model,'balance_from_what_company',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'placeholder'=>"Company 1, Company 2")); ?>
						<?php //echo $form->error($model,'balance_from_what_company'); ?>
					</div>
				</div>
				<div class="row input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required is_current_balance" style="display:<?php echo ($model->has_current_balance=='1')?'block':'none';?>;">
					<?php echo $form->labelEx($model,'balance_outstanding'); ?>
					<div class="group">
						<div class="info ng-isolate-scope" >
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
						<?php echo $form->textField($model,'balance_outstanding',array('class'=>"ng-pristine ng-invalid ng-invalid-required ng-valid-parse ng-touched",'autocapitalize'=>"on", 'autocorrect'=>"off",'ng-model'=>"ctrl.userData.last_name", 'placeholder'=>'$XX, $XX' )); ?>
						<?php //echo $form->error($model,'balance_outstanding'); ?>
					</div>
				</div>
				
				
		
	</div>
</div>
<?php if(!Yii::app()->user->getState('user_id')){?>
<div class="box card register-box ng-scope" ng-if="!ctrl.isExistingClient">
	<hgroup class="h1">
		<h1>Create Account</h1>
		<aside class="required">Required</aside>
	</hgroup>
	<div class="section ng-pristine ng-valid-email ng-invalid-required ng-pending ng-invalid-min-length ng-invalid-contains-symbol ng-valid-parse" ng-form="register_details_form">
		<est-form-alert class="ng-isolate-scope" message="Some fields below require your attention" type="error">
			<div style="height: 0px;" class="form-alert error">
				<span class="ng-binding">Some fields below require your attention</span>
			</div>
		</est-form-alert>
		<!-- ngIf: ctrl.alerts.items.length -->
		<div class="row input-row ng-pristine ng-isolate-scope ng-valid-email ng-invalid ng-invalid-required" ng-form="email">
			<?php echo $form->labelEx($model,'email'); ?>
			<div class="group">
				<div class="info ng-isolate-scope" est-pop-up="" input="email" validation-message="ctrl.errorMessages.email">
					<div class="popup-wrapper">
						<div class="popup-section slide-up">
							<div class="popup ">
								<div class="arrow"></div>
								<p class="ng-binding" ng-bind-html="message"></p>
							</div>
						</div>
						<div class="icon-field_info"></div>
					</div>
				</div>
				<?php echo $form->textField($model,'email',array('class'=>"ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required",'autocapitalize'=>"off", 'autocomplete'=>"off", 'autocorrect'=>"off",'ng-model'=>"ctrl.userData.email", 'placeholder'=>"Enter Email Address", 'required'=>'required')); ?>
				<?php //echo $form->error($model,'email'); ?>
			</div>
		</div>
		<!-- ngIf: showPasswordRequirements -->
		<div class="row input-row ng-pristine ng-isolate-scope ng-invalid-required ng-pending ng-invalid-min-length ng-invalid-contains-symbol corners" ng-class="{corners: !showPasswordRequirements}" ng-form="password" toggle="showPasswordRequirements">
			<?php echo $form->labelEx($model,'password'); ?>
			<div class="group">
				<?php echo $form->passwordField($model,'password',array('class'=>"password ng-pristine ng-untouched ng-invalid-required ng-pending ng-invalid-min-length ng-invalid-contains-symbol",'autocomplete'=>"off",  'est-password'=>"", 'est-password-field-toggle'=>"",'ng-model'=>"ctrl.userData.password", 'placeholder'=>"Create Secure Password", 'required'=>'required' )); ?>
				<?php //echo $form->error($model,'password'); ?>
				
			</div>
		</div>
		<div class="row validate-password" ng-class="{hide: showPasswordRequirements}">
			<div class="block" ng-class="{valid: containsLetter}">
				<div class="icon-needed"></div>
				<div class="icon-check-green"></div>
				<p>At least 1 letter</p>
			</div>
			<div class="block wide" ng-class="{valid: containsSymbol}">
				<div class="icon-needed"></div>
				<div class="icon-check-green"></div>
				<p>1 number or special character</p>
			</div>
			<div class="block" ng-class="{valid: minLength}">
				<div class="icon-needed"></div>
				<div class="icon-check-green"></div>
				<p>10 character min.</p>
			</div>
		</div>

		<div class="row footer-row">
			<div class="loan-rate-quote-summary-footer login-link">
				<p>
					<a class="lmop"><span class="cta-arrow">→&nbsp;&nbsp;</span>Already have an account? Sign In</a>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- end ngIf: !ctrl.isExistingClient -->
<?php } ?>

<div class="row action-row">
	<button class="hero-button-with-arrow ng-isolate-scope" type="submit">
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Continue</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>

<?php 
	if(Yii::app()->user->getState('user_id')){	
		$sliderVal = str_replace('k','',str_replace(',','',(str_replace('$','',$this->model->amount_needed))));
	}else{
		$sliderVal = 1;
	}
	Yii::app()->clientScript->registerScript('id', '
		$("document").ready(function(){
			window.formatComma2 = function(val) {
        return val.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
      };


      // Create a new jQuery UI Slider element
      // and set some default parameters.
      $("#rng").slider({
        range: "min",
        value: '.$sliderVal.',
        min: 10000,
        max: 500000,
		step: 5000,
        current: 1,
        slide: function(event, ui) {
		console.log(ui.value);
			if(ui.value <100000){
				if(ui.value == 10000){
					var sliderVal = formatComma2(ui.value);
				}else{
					var sliderVal = formatComma2(ui.value+5000);
				}
			}else{
				if(ui.value == 500000){
					var sliderVal = formatComma2(ui.value);
				}else{
					var sliderVal = formatComma2(ui.value+5000);
				}
			}
          // While sliding, update the value in the #amount div element
          $(".amount").html("$" + sliderVal);
          $(".fam1").html("$" + sliderVal);
          $(".lam1").html("$" + sliderVal);
          $(".fam2").html("$" + sliderVal);
          $(".lam2").html("$" + sliderVal);
          $(".fam3").html("$" + sliderVal);
          $(".lam3").html("$" + sliderVal);
		  $("#Users_amount_needed").val("$" + sliderVal);

        }
      });

      // Set the initial slider amount in the #amount div element
      var value = $("#rng").slider("value");
	  console.log(value);
	  if(value <100000){
				if(value == 10000){
					var sliderVal = formatComma2(value);
				}else{
					var sliderVal = formatComma2(value+5000);
				}
			}else{
				if(value == 500000){
					var sliderVal = formatComma2(value);
				}else{
					var sliderVal = formatComma2(value+5000);
				}
			}
      //console.log("$" + formatComma(parseInt(value) * 1000));
      $(".amount").html("$" + value);
      $(".fam1").html("$" + sliderVal);
      $(".lam1").html("$" + sliderVal);
      $(".fam2").html("$" + sliderVal);
      $(".lam2").html("$" + sliderVal);
      $(".fam3").html("$" + sliderVal);
      $(".lam3").html("$" + sliderVal);
	  
	  
	  $("#plus1").click(function () {
		//$("#rng").slider();
		var value = $("#rng").slider("value");
		console.log(value);
		var step = $("#rng").slider("option", "step");
		$("#rng").slider("value", value +5000);
		if(value <95000){
				/*if(value == 10000){
					var sliderVal = formatComma2(value);
				}else{*/
					var sliderVal = formatComma2(value+5000);
				//}
			}else{
				if(value == 500000){
					var sliderVal = formatComma2(value);
				}else{
					var sliderVal = formatComma2(value+5000);
				}
			}
		
		$(".amount").html("$"+sliderVal);
		$("#Users_amount_needed").val("$" + sliderVal);
	  });

	  $("#minus1").click(function () {
		//$("#rng").slider();
		var value = $("#rng").slider("value")
		console.log(value);
		var step = $("#rng").slider("option", "step");
		if(value != 10000){
			
			if(value == 10000){
				var sliderVal = formatComma2(value);
			}else{
				var sliderVal = formatComma2(value-5000);
			}
			
			
			$("#rng").slider("value", value - 5000);
			$(".amount").html("$"+sliderVal);
			$("#Users_amount_needed").val("$" + sliderVal);
		}
	  });
		})
	',CClientScript::POS_END);	

?>