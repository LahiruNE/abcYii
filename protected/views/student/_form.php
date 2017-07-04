<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->dropDownList($model,'grade', array('1','2','3','4','5','6','7','8','9','10')); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div clss="row">
		<?php echo $form->labelEx($model,'dob');?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
							'model'=>$model,							
        					'attribute'=>'dob',
                 			'value'=>$model->dob,
							'options'=>array(
							'showAnim'=>'fadeIn',
							'dateFormat'=>'yy-mm-dd',
							'changeMonth'=>true,
							'changeYear'=>true,
							'yearRange'=>'1990:2099',
							'minDate' => '1990-01-01', 
							'maxDate' => '2099-12-31',
							),
							'htmlOptions'=>array(
							'style'=>'height:20px;'
							),
						));
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactNo'); ?>
		<?php echo $form->textField($model,'contactNo'); ?>
		<?php echo $form->error($model,'contactNo'); ?>
	</div>

	<div clss="row">
		<?php echo $form->labelEx($model,'regDate');?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
							'model'=>$model,
        					'attribute'=>'regDate',
                 			'value'=>$model->regDate,
							'options'=>array(
							'showAnim'=>'fadeIn',
							'dateFormat'=>'yy-mm-dd',
							'changeMonth'=>true,
							'changeYear'=>true,
							'yearRange'=>'1990:2099',
							'minDate' => '1990-01-01', 
							'maxDate' => '2099-12-31',
							),
							'htmlOptions'=>array(
							'style'=>'height:20px;'
							),
						));
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paidStatus'); ?>
		<?php echo $form->checkBox($model,'paidStatus'); ?>&nbsp <span>Paid</span>
		<?php echo $form->error($model,'paidStatus'); ?>
	</div>

	<div class="but">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->