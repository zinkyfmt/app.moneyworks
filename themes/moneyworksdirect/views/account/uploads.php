<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-index-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>"register-form ng-pristine ng-isolate-scope ng-invalid-required ng-valid-maxlength ng-valid-max ng-valid-parse ng-invalid-min ng-valid-pattern ng-valid-email ng-pending ng-invalid-min-length ng-invalid-contains-symbol",'enctype'=>'multipart/form-data'),
)); ?>
	<!-- ngIf: isSLOEnabled() -->
	<!-- STUDENT LOAN REFINANCE -->
	<!-- ngIf: ctrl.Loan.isStudentLoanRefinance() -->
	<!----------start of code--------------------------------------------------->
<div class="row box card upload-file-section" style="min-height:300px">
    
	<hgroup class="h1">
			<h1>Upload Documents</h1>
			<aside class="required">Optional</aside>
		</hgroup>
		
		
    <a href="#" id="chooseFile">Choose Files</a>
    <div class="input-elements">
        <input type="file" accept="file_extension|image/*|application/msword|application/pdf|application/vnd.ms-excel|application/vnd.ms-powerpoint|text/plain" name="UsersFinancialsDocuments[file][]" multiple="" id="UsersFinancialsDocuments_file_0" />
    </div>

</div>
<!----------end of code-->
	
	
<div class="row action-row">
	<a href="<?php echo Yii::app()->createUrl('account/references');?>" class="primary-skinny-button-inverted bckbtn">Back</a>
	<button class="hero-button-with-arrow ng-isolate-scope" type="submit" style="width:60%" >
		<!-- ngIf: loading -->
		<div class="button-transclude" ng-transclude=""><span class="ng-scope">Finish</span>
		</div>
	</button>
</div>
<!-- Debug -->
<!-- End Debug -->
<?php $this->endWidget(); ?>

<script type="text/javascript">
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
};
window.filesInputsNo = 1;
$(document).ready(function(){
    $('#chooseFile').on('click' , function(clickEvent){
        clickEvent.preventDefault();
        var fileInputs = $('div.input-elements input[type="file"]');
        for(var i=0,len=fileInputs.length;i<len;i++){
			console.log(fileInputs.get(i).files.length);
            if(fileInputs.get(i).files.length===0){
                $(fileInputs.get(i)).click();
                break;
            }
        }
        fileInputs.off('change').on('change',function(fileChange){
			//alert(this.files.length);
            if(this.files.length > 0){
				for (var x = 0; x < this.files.length; x++) {
					var newRow = '<div class="file-info row input-row">\
									   <span class="file-name">'+this.files[x].name+'</span> \
									   <span class="file-size">'+bytesToSize(this.files[x].size)+'</span> \
									   <span class="remove-file"></span> \
								   </div><div class="clearfix"></div>';
					$(newRow).appendTo('.upload-file-section');
					$('<input type="file" name="UsersFinancialsDocuments[file][]" id="UsersFinancialsDocuments_file_'+window.filesInputsNo+'" />').appendTo('.upload-file-section .input-elements');
					window.filesInputsNo++;
				}
            }
            $('.remove-file').off('click').on('click',function(removeEvent){
                removeEvent.preventDefault();
                var rowIndex = $('.file-info.input-row').index($(this).parent())+1;
                $('.upload-file-section .input-elements input').remove('input:nth-of-type('+rowIndex+')');
                $(this).parent().remove();
            });
        });
    });
    
});
</script>