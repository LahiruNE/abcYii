<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->stuId,
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Register New Student', 'url'=>array('create')),
	array('label'=>'Update Student Record', 'url'=>array('update', 'id'=>$model->stuId)),
	array('label'=>'Delete Student Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stuId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
?>

<h1>View Student #<?php echo $model->stuId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stuId',
		'firstName',
		'lastName',
		'grade',
		'address',
		'dob',
		'contactNo',
		'regDate',
		'paidStatus',
	),
)); 
?>

<div class="pdf"><?php echo CHtml::link('Print Invoice',array('student/invoice','id'=>$model->stuId),array('target'=>'_blank'));?></div>
<div class="chrome-pdf"><?php echo CHtml::link('Download',array('student/invoicechrome','id'=>$model->stuId));?></div>
<div style="color:#e85a5a">Note - Viewing PDF is not supported in Chrome browser! But You can download invoice using Download button.</div>