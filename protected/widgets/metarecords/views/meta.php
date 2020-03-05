<?php if(!empty($metaTitle)){ ?>
<title><?php echo $metaTitle; 
//echo Yii::t('paspic',trim($metaTitle),Yii::app()->getLanguage());
?>
</title>
<?php } ?>

<?php if(!empty($metaDescription)){ ?>
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="keywords" content="<?php echo $metaKeywords; ?>">
<?php } ?>
