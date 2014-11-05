<?php
/* @var $this PointmanagementController */
/* @var $model pointmanagement */

$this->breadcrumbs=array(
	'Pointmanagements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List pointmanagement', 'url'=>array('index')),
	array('label'=>'Create pointmanagement', 'url'=>array('create')),
	array('label'=>'Update pointmanagement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete pointmanagement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage pointmanagement', 'url'=>array('admin')),
);
?>

<h1>View pointmanagement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'point',
		'written_date',
		'review_id',
		'approved_on',
		'approved_by',
	),
)); ?>
