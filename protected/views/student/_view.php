<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stuId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stuId), array('view', 'id'=>$data->stuId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactNo')); ?>:</b>
	<?php echo CHtml::encode($data->contactNo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('regDate')); ?>:</b>
	<?php echo CHtml::encode($data->regDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paidStatus')); ?>:</b>
	<?php echo CHtml::encode($data->paidStatus); ?>
	<br />

	*/ ?>

</div>