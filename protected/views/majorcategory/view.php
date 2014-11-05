<?php
/* @var $this MajorcategoryController */
/* @var $model majorcategory */

$this->breadcrumbs=array(
	'Majorcategories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List majorcategory', 'url'=>array('index')),
	array('label'=>'Create majorcategory', 'url'=>array('create')),
	array('label'=>'Update majorcategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete majorcategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage majorcategory', 'url'=>array('admin')),
);
?>

<h1>View majorcategory #<?php echo $model->id; ?></h1>

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
