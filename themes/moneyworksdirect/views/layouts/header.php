<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js gt-ie8"> <![endif]-->
<!--[if IE]> <!-->
<html class="no-js">
<!-- <![endif]-->
<html style="display: block;" class="no-js">
<!-- <![endif]-->

<head>

  <meta content="NOINDEX" name="ROBOTS">
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  
  <?php 
	$this->beginWidget('application.widgets.metarecords.Metarecords');
	$this->endWidget(); 

$objClientScript = Yii::app()->clientScript;
$objClientScript->scriptMap=array(
 'jquery.js'=>false,
);
Yii::app()->clientScript->registerCssFile($this->commonMethodsComponent->publishFrontAssets() . '/styles/jquery-ui.css', CClientScript::POS_END);
$objClientScript->registerScriptFile('https://code.jquery.com/jquery-1.12.0.min.js',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile($this->commonMethodsComponent->publishFrontAssets() . '/js/jquery-ui.js', CClientScript::POS_END);
$objClientScript->registerScriptFile($this->commonMethodsComponent->publishFrontAssets().'/js/common-scripts.js',CClientScript::POS_END);
$objClientScript->registerScriptFile($this->commonMethodsComponent->publishFrontAssets().'/js/jquery.maskedinput.js',CClientScript::POS_END);
$objClientScript->registerScriptFile($this->commonMethodsComponent->publishFrontAssets().'/js/autoNumeric.js',CClientScript::POS_END);
Yii::app()->clientScript->coreScriptPosition=CClientScript::POS_END;
?>
  
  <title>Business Funding Solutions from MoneyWorks Direct</title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
  
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/styles/icons.data.svg.css" rel="stylesheet">
  
 
 

  <link rel="stylesheet" href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/styles/main.21b7fe04.css">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/favicon.c2ecc566.ico" rel="shortcut icon" sizes="16x16 32x32 48x48 64x64">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/favicon.c2ecc566.ico" rel="shortcut icon" type="image/x-icon">
  <!--[if IE]> <link rel="shortcut icon" href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/favicon.c2ecc566.ico"> <![endif]-->
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/256x256.5e1e8b2d.png" rel="apple-touch-icon">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/16x16.fb904b5d.png" rel="apple-touch-icon" sizes="16x16">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/32x32.91a4042f.png" rel="apple-touch-icon" sizes="32x32">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/48x48.20c19337.png" rel="apple-touch-icon" sizes="48x48">
  <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon/128x128.4b37c632.png" rel="apple-touch-icon" sizes="128x128">
  <noscript>
    <link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/icons/icons.fallback.css" rel="stylesheet">
  </noscript> 
  <!-- / Optimizely on the Student Application -->
  <style>
	.errorMessage{ color: #f00;
    margin-bottom: 10px;}
	
	.alert-success{
		background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
	}
	.alert{
		  border: 1px solid transparent;
		border-radius: 4px;
		margin-bottom: 20px;
		padding: 15px;
	}
	
  </style>
  
  <script type="text/javascript">
	$(function() {
		$('.phone').mask('(999) 999-9999',{clearIfNotMatch: true});
		$('.money').autoNumeric('init'); 
		$('.mm').mask('99',{clearIfNotMatch: true});
		$('.yyyy').mask('9999',{clearIfNotMatch: true});
		$('.date').mask('99-99-9999',{clearIfNotMatch: true});
		
			//Required attribute fallback
$('#users-index-form').submit(function() {
//if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {alert('Its Safari');}
  if (navigator.userAgent.indexOf('Safari') != -1) {
	
   //If required attribute is not supported or browser is Safari (Safari thinks that it has this attribute, but it does not work), then check all fields that has required attribute
   var invalid = false;
   var current = 0;
   $("#users-index-form [required]").each(function(index) {
	$(this).css('border','none');
    if (!$(this).val()) {
	
     //If at least one required value is empty, then ask to fill all required fields.
     $(this).css('border','2px solid #f00');
    // invalid = true;
		$(this).focus();
		return false;
    }
   }); 
   /*if(invalid){
		$('#users-index-form [required]').scrollTop();
		return false;
   }*/
  }
  return true; //This is a test form and I'm not going to submit it
}); 
	});
	
	// Checks if attribute is supported by a browser
function attributeSupported(attribute) {
	//alert(attribute in document.createElement("input"));
  return (attribute in document.createElement("input"));
}

</script>
</head>
<?php  $controller = Yii::app()->controller->id;
 $action = Yii::app()->controller->action->id; ?>
<body>
<div id="olark" style="display: none;">
    <olark>
      <iframe id="olark-loader" frameborder="0"></iframe>
    </olark>
  </div>

  <div class="page-wrap ng-scope" id="student-app" ng-app="clientWww.student" ng-controller="MainController">
 
	<div class="ng-scope" id="nav-view" ui-view="nav"><div class="ng-scope" id="dashboard-nav">
  <div class="nav-section-left">
    <div class="nav-block logo-block">
      <a href="<?php echo Yii::app()->getBaseUrl(true);?>"><img src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/logo.png" alt="MoneyWorksDirect" /></a>
    </div>
    <!-- ngIf: nav.showNavigationTabs -->
  </div>
  
  
  <div class="nav-section-right">
    <div class="nav-block user-account-menu in loginopan">
		<?php if(Yii::app()->user->getState('user_id')){?>
			<a href="<?php echo Yii::app()->createUrl('account/logout');?>">Sign Out</a>
		<?php } else{ ?>
			<a class="loginopan">Sign In</a>
		<?php } ?>
    </div>
    <div class="nav-block user-account-menu ng-hide">
      <div class="user-image icon-li-nouser-icon">
        <img alt="Profile image" ng-src="">
      </div>
      <a class="client-info ng-binding"> </a>
      <div class="dropdown-icon icon-icon-arrow-down-grey"></div>
      <nav class="ng-hide" ng-show="nav.accountMenuVisible">
        <a class="nav-item icon-user-nav-myloans" ng-click="nav.goToDefaultState()">My Loans</a>
        <!-- ngIf: nav.showNavigationTabs -->
        <a href="#/settings" class="nav-item icon-user-nav-settings" ui-sref="settings.account">Account Settings</a>
        <div class="nav-separator"></div>
        <a class="nav-item icon-user-nav-faq" href="https://help.earnest.com" target="_blank">Help Center</a>
        <a class="nav-item icon-user-nav-signout" est-prevent-default="" href="#" id="logout" ng-click="nav.logout()">Sign Out</a>
      </nav>
    </div>
    <div class="nav-block">
      <a class="nav-alert icon-header-help cbtn"></a>
      <div class="nav-alert icon-header-alert ng-hide" ng-hide="true"></div>
    </div>
  </div>
</div>
</div>
 
 
    <div class="app-wrap" id="main">
			<!-- ngIf: alerts.items.length -->
			<div class="app-primary-view-wrap">
				<!-- uiView: layout -->
				<div class="app-primary-view ng-scope" ui-view="layout">
				<div class="ng-scope" id="profile-view" ng-class="{'partnership-profile-page' : $state.params.source &amp;&amp; currentState.name === 'profile.start'}">
            <!-- uiView: preheader -->
			<?php if(Yii::app()->controller->id != 'thankyou'){?>
            <div class="ng-scope" id="pre-header" ui-view="preheader"></div>
            <!-- uiView: header -->
            <div class="ng-scope" id="profile-header" ui-view="header">
              <div class="layer ng-scope" est-loan-header-step-scroll="" id="profile-header-layer">
			  
                <div class="width-wrap">
                  <hgroup class="h1">
                    <h1 class="ng-binding">
						<?php $wording='';$i=1; 
						$action = Yii::app()->controller->action->id;
							if($action == 'index'){
								$wording='Funding Details';
												$i=1;
								}
							if($action == 'businessinfo'){	$wording='Business Info';
												$i=2;
							}
							if($action == 'financials'){ $wording='Financial Details';
												$i=3;}
							if($action == 'personalinfo'){ $wording='Personal Info';
												$i=3;}
							if($action == 'bizlocation'){ $wording='Business Location';
												$i=4;}
							if($action == 'references'){$wording='References';
												$i=5;
												}
							if($action == 'uploads'){$wording='Upload Financial Documents';
												$i=6;
												}
												
						?>
					
						<div class="step-number ng-binding">
						
							<?php echo $i;?>
						</div>
						<?php echo $wording;?>
      </h1>
                    <div class="current-loan" ng-show="header.showLoanAmount">
                      <div class="loan-text">
                        your amount
                      </div>
                      <div class="loan-amount ng-binding">
						<?php if(Yii::app()->controller->id == 'index'){?>
							<div class="amount"> </div>
						<?php }else{ ?>
							<div class="amount1"> <?php echo $this->userModel->amount_needed;?></div>
						<?php } ?>
                      </div>
                      <div class="edit-option-link ng-hide" ng-show="header.showEditLink">
                        <a class="icon-edit" ng-click="editLoan()">
            edit
          </a>
                      </div>
                    </div>
                  </hgroup>
                  
                </div>
              </div>
              <!-- ngIf: header.displayRateCheckNotice() -->
			  <!---- For mobile header *-->
			
				<div id="profile-header-layer-mobile" style="display:none;">
		<div class="width-wrap-mobile">
				<hgroup class="steps start">
					<div class="progress-step title">
						<h3 class="ng-binding">My Steps</h3>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'index' && $action =='index') || CommonMethods::checkStepFilled(1)){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">1</span>
						</span>
						<a href="<?php echo Yii::app()->getBaseUrl(true);?>">Funding Request</a>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'account' && $action =='businessinfo') || CommonMethods::checkStepFilled(2)){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">2</span>
						</span>
						<a href="<?php echo Yii::app()->createUrl('account/businessinfo');?>">Business Info</a>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'account' && $action =='personalinfo') || CommonMethods::checkStepFilled(4)){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">3</span>
						</span>
						<a href="<?php echo Yii::app()->createUrl('account/personalinfo');?>">Your Info</a>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'account' && $action =='bizlocation') || CommonMethods::checkStepFilled(5)){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">4</span>
						</span>
						<a href="<?php echo Yii::app()->createUrl('account/bizlocation');?>">Business Location</a>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'account' && $action =='references') || CommonMethods::checkStepFilled(6)){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">5</span>
						</span>
						<a href="<?php echo Yii::app()->createUrl('account/references');?>">References</a>
					</div>
					<div class="progress-step icon-section-divider-mobile <?php if(($controller == 'account' && $action =='uploads')){ echo "active";}?>">
						<div class="icon-circle-check-green"></div>
						<span class="header-number">
							<span class="header-number-inner">6</span>
						</span>
						<a href="<?php echo Yii::app()->createUrl('account/uploads');?>">Upload Documents</a>
					</div>
				</hgroup>
			</div>
		</div>
	
	<!--- End MOrilb header -->
            </div>
			
			
			
			
					<?php } ?>
					<div class="ng-scope" id="student-app">
						<div class="layer loan-content">
							<!-- uiView: parent -->
							<div class="ng-scope" id="dashboard" ui-view="parent">
								<div class="ng-scope" id="profile-view">
									<!-- uiView: preheader -->
									<div class="ng-scope" id="pre-header" ui-view="preheader"></div>
									<!-- uiView: header -->

									<div class="layer" id="profile-content-layer">
									
										<div class="width-wrap">
			 <?php  if (Yii::app()->user->hasFlash('success')){  ?>
			<div class="alert alert-success"><?php echo Yii::app()->user->getFlash('success'); ?></div>
		
<?php } ?>
<?php
	if(isset($this->model) && $this->model->hasErrors()){
	  echo '<div class="errorMessage">'.CHtml::errorSummary($this->model).'</div>';
	}
 ?>

											<!-- uiView: content -->
											<div class="ng-scope" id="check-rate" ui-view="content">
											
												<div class="ng-scope" id="check-rate-quote-details">
													<div class="next-to-content">