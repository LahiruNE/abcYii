<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->stuId=>array('view','id'=>$model->stuId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Register New Student', 'url'=>array('create')),
	array('label'=>'View Student', 'url'=>array('view', 'id'=>$model->stuId)),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
?>

<h1>Update Student <?php echo $model->stuId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>