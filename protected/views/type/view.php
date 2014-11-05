<?php
/* @var $this TypeController */
/* @var $model type */

$this->breadcrumbs=array(
	'Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List type', 'url'=>array('index')),
	array('label'=>'Create type', 'url'=>array('create')),
	array('label'=>'Update type', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete type', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage type', 'url'=>array('admin')),
);
?>

<h1>View type #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type_id',
		'name',
		'address',
		'create_on',
		'create_by',
	),
)); ?>
