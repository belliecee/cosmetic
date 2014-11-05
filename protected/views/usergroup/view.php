<?php
/* @var $this UsergroupController */
/* @var $model usergroup */

$this->breadcrumbs=array(
	'Usergroups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List usergroup', 'url'=>array('index')),
	array('label'=>'Create usergroup', 'url'=>array('create')),
	array('label'=>'Update usergroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete usergroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage usergroup', 'url'=>array('admin')),
);
?>

<h1>View usergroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'enquiry_create',
		'enquiry_read',
		'enquiry_update',
		'enquiry_delete',
		'vendorprocess_create',
		'vendorprocess_read',
		'vendorprocess_update',
		'vendorprocess_delete',
		'quoh_create',
		'quoh_read',
		'quoh_update',
		'quoh_delete',
		'poh_create',
		'poh_read',
		'poh_update',
		'poh_delete',
		'deposit_create',
		'deposit_read',
		'deposit_update',
		'deposit_delete',
		'potovendor_create',
		'potovendor_read',
		'potovendor_update',
		'potovendor_delete',
		'delivery_create',
		'delivery_read',
		'delivery_update',
		'delivery_delete',
		'payment_create',
		'payment_read',
		'payment_update',
		'payment_delete',
	),
)); ?>
