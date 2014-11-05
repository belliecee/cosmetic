<?php
/* @var $this AuthitemController */
/* @var $model authitem */

$this->breadcrumbs=array(
	'Authitems'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List authitem', 'url'=>array('index')),
	array('label'=>'Create authitem', 'url'=>array('create')),
	array('label'=>'Update authitem', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete authitem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage authitem', 'url'=>array('admin')),
);
?>

<h1>View authitem #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'type',
		'description',
		'bizrule',
		'data',
	),
)); ?>
