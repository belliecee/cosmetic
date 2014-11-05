<?php
/* @var $this TypeController */
/* @var $model type */

$this->breadcrumbs=array(
	'Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List type', 'url'=>array('index')),
	array('label'=>'Manage type', 'url'=>array('admin')),
);
?>

<h1>Create type</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>