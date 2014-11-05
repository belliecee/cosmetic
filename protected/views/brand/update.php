<?php
/* @var $this BrandController */
/* @var $model brand */

//$this->breadcrumbs=array(
//	'Brands'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);

$this->menu=array(
	array('label'=>'List brand', 'url'=>array('index')),
	array('label'=>'Create brand', 'url'=>array('create')),
	array('label'=>'View brand', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage brand', 'url'=>array('admin')),
);
?>

<h1>Update brand <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>