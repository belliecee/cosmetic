<?php
/* @var $this WhovotereviewController */
/* @var $model whovotereview */

$this->breadcrumbs=array(
	'Whovotereviews'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List whovotereview', 'url'=>array('index')),
	array('label'=>'Create whovotereview', 'url'=>array('create')),
	array('label'=>'Update whovotereview', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete whovotereview', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage whovotereview', 'url'=>array('admin')),
);
?>

<h1>View whovotereview #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'review_id',
		'update_on',
	),
)); ?>
