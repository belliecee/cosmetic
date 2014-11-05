<?php
/* @var $this MakerController */
/* @var $model maker */

$this->breadcrumbs=array(
	'Makers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List maker', 'url'=>array('index')),
	array('label'=>'Create maker', 'url'=>array('create')),
	array('label'=>'View maker', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage maker', 'url'=>array('admin')),
);
?>

<h1>Update maker <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>