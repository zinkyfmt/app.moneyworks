<div class="left-section">
            <div class="home-button"><a href="<?php echo Yii::app()->getBaseUrl(true); ?>" class="red button"><i class="fa fa-home"></i>Go to Home</a></div>			
            <h2>Categories</h2>
            
			<div class="clearfix">&nbsp;</div>
			<?php if(!Yii::app()->user->isGuest){ ?>
				<h2>My Account</h2>
				<ul class="category-nav">
					<li><a href="<?php echo Yii::app()->createUrl('account/myvideos');?>">My Videos</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('account/addvideo');?>">Upload Video</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('account/editprofile');?>">Edit Profile</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('account/changepassword');?>">Change Password</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('account/logout');?>">Logout</a></li>
				</ul>
			<?php } ?>
</div>