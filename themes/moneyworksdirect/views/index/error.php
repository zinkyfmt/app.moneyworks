<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="container">
<div class="error-404">
<h2><?php echo $code; ?> <span>Error</span></h2>
<div class="error-detail">
<h4><?php echo CHtml::encode($message); ?></h4>
<p>We are sorry but the page you are looking for does not exist.</p>
</div>
</div>
</div>