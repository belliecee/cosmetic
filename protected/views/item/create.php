<?php
/* @var $this ItemController */
/* @var $model item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List item', 'url'=>array('index')),
	array('label'=>'Manage item', 'url'=>array('admin')),
);
?>

<h1>Create item</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>