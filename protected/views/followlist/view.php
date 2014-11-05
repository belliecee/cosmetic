<?php
/* @var $this FollowlistController */
/* @var $model followlist */

$this->breadcrumbs=array(
	'Followlists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List followlist', 'url'=>array('index')),
	array('label'=>'Create followlist', 'url'=>array('create')),
	array('label'=>'Update followlist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete followlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage followlist', 'url'=>array('admin')),
);
?>

<h1>View followlist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'other_id',
		'remark',
		'create_on',
		'create_by',
	),
)); ?>
