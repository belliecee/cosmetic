<?php
/* @var $this WishlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wishlists',
);

$this->menu=array(
	array('label'=>'Create wishlist', 'url'=>array('create')),
	array('label'=>'Manage wishlist', 'url'=>array('admin')),
);
?>

<h1>Wishlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
