<?php
/* @var $this PointmanagementController */
/* @var $model pointmanagement */

$this->breadcrumbs=array(
	'Pointmanagements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List pointmanagement', 'url'=>array('index')),
	array('label'=>'Manage pointmanagement', 'url'=>array('admin')),
);
?>

<h1>Create pointmanagement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>