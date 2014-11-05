<?php
/* @var $this AuthitemController */
/* @var $model authitem */

$this->breadcrumbs=array(
	'Authitems'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>'List authitem', 'url'=>array('index')),
	array('label'=>'Create authitem', 'url'=>array('create')),
	array('label'=>'View authitem', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>'Manage authitem', 'url'=>array('admin')),
);
?>

<h1>Update authitem <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>