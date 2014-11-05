<?php
/* @var $this PointmanagementController */
/* @var $model pointmanagement */

$this->breadcrumbs=array(
	'Pointmanagements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List pointmanagement', 'url'=>array('index')),
	array('label'=>'Create pointmanagement', 'url'=>array('create')),
	array('label'=>'View pointmanagement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage pointmanagement', 'url'=>array('admin')),
);
?>

<h1>Update pointmanagement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>