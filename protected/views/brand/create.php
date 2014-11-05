<?php
/* @var $this BrandController */
/* @var $model brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List brand', 'url'=>array('index')),
	array('label'=>'Manage brand', 'url'=>array('admin')),
);
?>

<h1>Create brand</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>