<?php
/* @var $this ReviewController */
/* @var $model review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List review', 'url'=>array('index')),
	array('label'=>'Create review', 'url'=>array('create')),
	array('label'=>'Update review', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage review', 'url'=>array('admin')),
);
?>

<h1>View review #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'comment',
		'vote',
		'reviewvote',
		'result',
		'fblike',
		'googleplus',
		'create_on',
		'create_by',
	),
)); ?>
