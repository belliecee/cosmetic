<?php
/* @var $this UploadedimgController */
/* @var $model uploadedimg */

$this->breadcrumbs=array(
	'Uploadedimgs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List uploadedimg', 'url'=>array('index')),
	array('label'=>'Create uploadedimg', 'url'=>array('create')),
	array('label'=>'Update uploadedimg', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete uploadedimg', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage uploadedimg', 'url'=>array('admin')),
);
?>

<h1>View uploadedimg #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'imgtype',
		'imgcategory',
		'description',
		'create_on',
		'create_by',
		'update_on',
		'update_by',
	),
)); ?>
