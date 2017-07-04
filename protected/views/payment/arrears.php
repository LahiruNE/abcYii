<?php
/* @var $this PaymentController */

$this->breadcrumbs=array(
	'Payment Arrears',
);

$this->menu=array(
	array('label'=>'Fees Calculation', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('Search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#student-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>
<h1>Fees Arrears</h1>
<div style="font-size:18px;color:#333;">
	Below list of students have not paid the term fee as of <?php echo date('Y-m-d');?>
</div>
<br />
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'list-grid',
	'dataProvider'=>$model->arrearsSearch(),
	'filter'=>$model,
	'columns'=>array(
		'stuId',
		'firstName',
		'lastName',
		'grade',
		'address',
		'dob',
		'contactNo',
	),
)); ?>

