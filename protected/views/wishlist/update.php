<?php
/* @var $this WishlistController */
/* @var $model wishlist */

$this->breadcrumbs=array(
	'Wishlists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List wishlist', 'url'=>array('index')),
	array('label'=>'Create wishlist', 'url'=>array('create')),
	array('label'=>'View wishlist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage wishlist', 'url'=>array('admin')),
);
?>

<h1>Update wishlist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>