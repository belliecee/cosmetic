<?php
/* @var $this MakerController */
/* @var $model maker */

$this->breadcrumbs=array(
	'Makers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List maker', 'url'=>array('index')),
	array('label'=>'Create maker', 'url'=>array('create')),
	array('label'=>'Update maker', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete maker', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage maker', 'url'=>array('admin')),
);
?>

<h1>View maker #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'create_on',
		'create_by',
		'update_on',
		'update_by',
	),
)); ?>
