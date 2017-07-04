<?php
/* @var $this paymentController */
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

    <div class="row">
        <?php 
        echo $form->labelEx($model,'Student\'s ID');
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'attribute'=>'stuId',
            'model'=>$model,
            'sourceUrl'=>array('payment/aclist'),
            'name'=>'my_input_name',
            'options'=>array(
            'minLength'=>'2',
            ),
            'htmlOptions'=>array(
            'size'=>45,
            'maxlength'=>45,
            ),
        )); ?>
	</div>

	<div class="but">
		<?php echo CHtml::submitButton('Calculate'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

