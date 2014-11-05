<?php
/* @var $this WishlistController */
/* @var $model wishlist */

$this->breadcrumbs=array(
	'Wishlists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List wishlist', 'url'=>array('index')),
	array('label'=>'Create wishlist', 'url'=>array('create')),
	array('label'=>'Update wishlist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete wishlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage wishlist', 'url'=>array('admin')),
);
?>

<h1>View wishlist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'item_id',
		'create_on',
		'create_by',
	),
)); ?>
