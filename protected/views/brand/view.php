<?php
/* @var $this BrandController */
/* @var $model brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List brand', 'url'=>array('index')),
	array('label'=>'Create brand', 'url'=>array('create')),
	array('label'=>'Update brand', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete brand', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage brand', 'url'=>array('admin')),
);
?>

<h1>View brand #<?php echo $model->id; ?></h1>

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
