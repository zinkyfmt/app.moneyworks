<!-- Start login modal -->

	<div class="est-modal  modal-login modal-enter lmo login-popup">
		<div class="modal-gray-out lmow" data-ng-click="close();"></div>
		<div style="margin-top: -149px;" class="modal-window">
			<div class="modal-top-close  icon-close clmo cdnone"></div>
			<article>
				<?php 
				$form = $this->beginWidget('CActiveForm', array(
					'id' => 'front-user-form',
					'enableClientValidation' => true,							
					'clientOptions' => array(
						'validateOnSubmit' => true,
					),
					'htmlOptions'=>array('class'=>'login-form ng-pristine ng-scope ng-valid-email ng-invalid ng-invalid-required','est-submit'=>"submit();" )
				));
				?>
				
					<hgroup class="h1 header">
						<h1>Sign In</h1>
					</hgroup>
					<div class="row content-row">
						<!-- ngIf: alerts.items.length > 0 -->
					</div>
	<?php  if (Yii::app()->user->hasFlash('loginError')){  ?>
			<style>div.login-popup{display:block;}</style>
			<div class="row content-row alert alert-warning  errorMessage"><?php echo Yii::app()->user->getFlash('loginError'); ?></div>
		
	<?php } ?>
	<?php  if (Yii::app()->user->hasFlash('forgotsuccess')){  ?>
			<style>div.login-popup{display:block;}</style>
			<div class="row content-row alert alert-success"><?php echo Yii::app()->user->getFlash('forgotsuccess'); ?></div>
		
	<?php } ?>
					
					<div class="row content-row ng-hide" ng-show="http401">
						<p>You have been signed out for security reasons.</p>
					</div>
					<div class="row wide-input-row ng-pristine ng-isolate-scope ng-valid-email ng-invalid ng-invalid-required" est-focus-element="" ng-form="email">
						<label for="login-email">Email</label>
						<div class="group">
							<div class="info ng-isolate-scope" est-pop-up="" input="email" validation-message="errorMessages.email">
								<div class="popup-wrapper" style="{position: relative}">
									<div class="popup-section slide-up" ng-class="{'slide': showPopup}">
										<div class="popup ng-hide" ng-show="showPopup">
											<div class="arrow"></div>
											<p class="ng-binding" ng-bind-html="message"></p>
										</div>
									</div>
									<div class="icon-field_info" ng-mouseenter="onMouseEnter()" ng-mouseleave="onMouseLeave()"></div>
								</div>
							</div>
							<?php echo $form->emailField($this->loginModel, 'email', array('ng-model-options'=>"{ debounce : { 'default' : 500, blur : 0 }, allowInvalid: true }", 'class'=>"ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-touched", "autofocus"=>"autofocus", "ng-model"=>"form.email", "required"=>"required")); ?>						
						</div>
					</div>
					<div class="row wide-input-row ng-pristine ng-isolate-scope ng-invalid ng-invalid-required" est-focus-element="" ng-form="password">
						<label for="login-password">Password</label>
						<div class="group">
							<div class="info ng-isolate-scope" est-pop-up="" input="password" validation-message="errorMessages.password">
								<div class="popup-wrapper" style="{position: relative}">
									<div class="popup-section slide-up" ng-class="{'slide': showPopup}">
										<div class="popup ng-hide" ng-show="showPopup">
											<div class="arrow"></div>
											<p class="ng-binding" ng-bind-html="message"></p>
										</div>
									</div>
									<div class="icon-field_info" ng-mouseenter="onMouseEnter()" ng-mouseleave="onMouseLeave()"></div>
								</div>
							</div>
							
							<?php echo $form->passwordField($this->loginModel, 'password', array('ng-model-options'=>"{ debounce : { 'default' : 500, blur : 0 }, allowInvalid: true }", 'class'=>"ng-pristine ng-invalid ng-invalid-required ng-touched", "autocomplete"=>"off", "ng-model"=>"form.password", "required"=>"required")); ?>							
						</div>
					</div>
					<div class="row action-row for-desktop">
						<div class="group login">
							<a est-prevent-default="" href="#" id="forgot-password" ng-click="forgotPassword()">Forgot Your Password?</a>
						</div>
						<div class="group">
							<button class="primary-button-with-arrow" id="login" type="submit">Sign In</button>
						</div>
					</div>
					<div class="row action-row for-mobile">
						<div class="group">
							<button class="primary-button-with-arrow" id="login" type="submit">Sign In</button>
						</div>
						<div class="group login">
							<a href="#" id="forgot-password">Forgot Your Password?</a>
						</div>
					</div>
				<?php $this->endWidget(); ?>
			</article>
			<est-loading>
				<div class="est-loading-container ng-hide" ng-show="loading">
					<div class="loading-dots">
						<div class="dot dot-left"></div>
						<div class="dot dot-center"></div>
						<div class="dot dot-right"></div>
					</div>
				</div>
			</est-loading>
		</div>
	</div>


	<!-- End login modal -->
    
<div class="est-modal  modal-forgot-password modal-enter loginfrom" data-name="forgot-password" data-ng-controller="ForgotPasswordModalController">
  <div class="modal-gray-out cdnone" data-ng-click="close();"></div>
  <div style="margin-top: -113px;" class="modal-window">
    <div class="modal-top-close  icon-close cdnone" ng-class="[iconCloseClass]" data-ng-click="close();"></div>
    <article>
		<?php
						$form = $this->beginWidget('CActiveForm', array(
							'id' => 'user-form',
							'action'=>Yii::app()->createUrl('account/forgotpassword'),
							'enableClientValidation' => true,
							'clientOptions' => array(
								'validateOnSubmit' => true,
							),
							'htmlOptions'=>array('class'=>'forgot-password-form ng-pristine ng-scope ng-valid-email ng-invalid ng-invalid-required','est-submit'=>"submit();" )
						));
						?>
      
        <hgroup class="h1 header">
          <h1>Forgot Your Password?</h1>
        </hgroup>
		<?php  if (Yii::app()->user->hasFlash('forgoterror')){  ?>
			<style>div.modal-forgot-password{display:block;}</style>
			<div class="row content-row alert alert-warning errorMessage"><?php echo Yii::app()->user->getFlash('forgoterror'); ?></div>
		
	<?php } ?>
		
        <div class="row content-row">
          <p class="for-desktop">Enter your email address, and we will send you a link to reset your password.</p>
        </div>
        <div class="row wide-input-row ng-pristine ng-isolate-scope ng-valid-email ng-invalid ng-invalid-required" est-focus-element="" ng-form="email">
          <label for="email">Email</label>
          <div class="group">
            <div class="info ng-isolate-scope" est-pop-up="" est-show-popup="" input="email" validation-message="Login.errorMessages.email">
              <div class="popup-wrapper" style="{position: relative}">
                <div class="popup-section slide-up" ng-class="{'slide': showPopup}">
                  <div class="popup ng-hide" ng-show="showPopup">
                    <div class="arrow"></div>
                    <p class="ng-binding" ng-bind-html="message"></p>
                  </div>
                </div>
                <div class="icon-field_info" ng-mouseenter="onMouseEnter()" ng-mouseleave="onMouseLeave()"></div>
              </div>
            </div>
			<input ng-model-options="{ debounce : { 'default' : 500, blur : 0 }, allowInvalid: true }" autocomplete="off" class="email ng-pristine ng-valid-email ng-invalid ng-invalid-required ng-touched" id="Users_email" name="Users[email]" ng-model="form.email" required="required" type="email">
          </div>
        </div>
        <div class="row action-row for-desktop">
          <div class="group login">
            <a class="loginopan">
        Already have an account?
      </a>
          </div>
          <div class="group">
            <button class="primary-button-with-arrow" type="submit">Submit</button>
          </div>
        </div>
        <div class="row action-row for-mobile">
          <div class="group">
            <button class="primary-button-with-arrow" type="submit">Submit</button>
          </div>
          <div class="group login">
                  <a>
  Already have an account?
      </a>
          </div>
        </div>
     <?php $this->endWidget(); ?>
    </article>
    <est-loading>
      <div class="est-loading-container ng-hide" ng-show="loading">
        <div class="loading-dots">
          <div class="dot dot-left"></div>
          <div class="dot dot-center"></div>
          <div class="dot dot-right"></div>
        </div>
      </div>
    </est-loading>
  </div>
</div>