<!doctype html>
<html class="class="no-js"">
<head>
<meta charset="utf-8">
<?php 
	$this->beginWidget('application.widgets.metarecords.Metarecords');
	$this->endWidget(); 
?>
<link rel="shortcut icon" href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/favicon.ico" type="image/x-icon">
<link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/icons.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/product-slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
jQuery('header').ready(function(){
     var header_height = jQuery('header').height();
       jQuery('#body-container').css('padding-top',header_height+'px');
    });
    jQuery(window).resize(function(){
     var header_height = jQuery('header').height();
       jQuery('#body-container').css('padding-top',header_height+'px');
    });
	</script>
<!--<script type="text/javascript">
jQuery('.right-video').ready(function(){
	if(jQuery(window).width() >= 768){
		 	var container_height = jQuery('.right-video').height();
		   jQuery('.left-section').css('height',container_height+'px');
	}
});
jQuery(window).resize(function(){
	if(jQuery(window).width() >=768){
		var container_height = jQuery('.right-video').height();
 		jQuery('.left-section').css('height',container_height+'px');
	}
});
</script>-->
<script src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/modernizr.js" type="text/javascript"></script>
 <script type="text/javascript">
            Modernizr.load([{
                    load: '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
                    complete: function() {
                        if (!window.jQuery) {
                            Modernizr.load('<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/jquery');
                        }
                    }
                },
                {
                    load: ['<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/bootstrap.js', '<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/stylesheet/normalize.css'],
                    complete: function() {
                    }
                }, {
                    test: Modernizr.mq('only all'),
                    nope: '<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/respond.src.js'
                }
            ]);
        </script>
</head>
<body>
<div class="wrapper">
  <header>
    <div class="row-fluid">
      <div class="col-md-10 col-sm-50"> <a href="<?php echo Yii::app()->getBaseUrl(true);?>" class="logo"><img src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/logo.jpg" alt="Ta Load"></a> </div>
      <div class="col-md-30 col-sm-50">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'action' => Yii::app()->createUrl('video/search'),
			'method' => 'get',
			'id'=>'video-search-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation'=>false,									
			'clientOptions'=>array('onSubmit'=>true),
			'htmlOptions'=>array('role'=>'form'),
		)); ?>
			<div class="search-box">
			   <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input name="searchtext" type="text" value="<?php echo Yii::app()->request->getParam('searchtext'); ?>">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form> 
			</div>
		<?php $this->endWidget(); ?>
      </div>
      <div class="col-md-60 col-sm-100">
        <div class="header-right">
          <div class="button-area"> 
			<?php if(Yii::app()->user->isGuest){ ?>
				<a href="<?php echo Yii::app()->createUrl('account/login');?>" class="red button">Login</a><a class="sky-blue button" href="<?php echo Yii::app()->createUrl('account/create');?>">Register</a>
		  <?php }else{ ?>
				
		  <?php } ?>
		  </div>
		  <?php if(!Yii::app()->user->isGuest){ ?>
          <div class="user-login">
		  
			<?php echo Yii::app()->user->getState('fullname');?><a aria-expanded="false" role="button" aria-haspopup="true" data-toggle="dropdown" class="dropdown-toggle" href="#" id="drop2">
              <?php if(Yii::app()->user->getState('user_pic') != ''){ ?>
				<img src="<?php echo Yii::app()->getBaseUrl(true).'/'.Yii::app()->user->getState('user_pic');?>">
			<?php } else{ ?>
					<i class="fa fa-user fa-3x"></i>
			<?php } ?></a>
               <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
              
                <li role="presentation"><a href="<?php echo Yii::app()->createUrl('account/editprofile');?>" tabindex="-1" role="menuitem">Edit Profile</a></li>
                <li role="presentation"><a href="<?php echo Yii::app()->createUrl('account/changepassword');?>" tabindex="-1" role="menuitem">Change Password</a></li>
                <li class="divider" role="presentation"></li>
                <li role="presentation"><a href="<?php echo Yii::app()->createUrl('account/logout');?>" tabindex="-1" role="menuitem">Logout</a></li>
              </ul>
           </div>
		   <?php } ?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </header>
  <div id="body-container">
    <div class="container">
      <div class="row">
        <div class="col-md-100 col-sm-100">
			<?php echo $content;?>
                </div>
        
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="clearfix"></div>
<footer>
<div class="col-md-33 col-sm-33 col-xs-100"><div class="copyright">@ Copyright at TA Load. All rights reserved</div></div>
<div class="col-md-34 col-sm-34 col-xs-100">  <a href="<?php echo Yii::app()->createUrl('cms/detail',array('slug'=>'about-us'));?>">About Us</a>|<a href="<?php echo Yii::app()->createUrl('cms/contact');?>">Contact Us</a>|<a href="<?php echo Yii::app()->createUrl('cms/detail',array('slug'=>'terms-conditions'));?>">Terms & Conditions</a>|<a href="<?php echo Yii::app()->createUrl('cms/detail',array('slug'=>'privacy'));?>">Privacy Policy</a></div>
<div class="col-md-33 col-sm-33 col-xs-100"> <div class="follow-us"><span>Follow Us:</span><a href="#" class="facebook"></a><a href="#" class="twitter"></a></div></div>
 </footer>
<!-- box slider file --> 
<script src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/box-crousel.js" type="text/javascript"></script> 
<script src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/js/box-crousel01.js" type="text/javascript"></script> 
</body>
</html>
