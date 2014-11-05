<?php
/* @var $this WishlistController */
/* @var $model wishlist */

$this->breadcrumbs=array(
	'Wishlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List wishlist', 'url'=>array('index')),
	array('label'=>'Manage wishlist', 'url'=>array('admin')),
);
?>

<h1>Create wishlist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>