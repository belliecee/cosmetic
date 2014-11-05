<?php
/* @var $this MakerController */
/* @var $model maker */

$this->breadcrumbs=array(
	'Makers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List maker', 'url'=>array('index')),
	array('label'=>'Manage maker', 'url'=>array('admin')),
);
?>

<h1>Create maker</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>