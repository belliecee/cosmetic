<?php
/* @var $this AuthitemController */
/* @var $model authitem */

$this->breadcrumbs=array(
	'Authitems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List authitem', 'url'=>array('index')),
	array('label'=>'Manage authitem', 'url'=>array('admin')),
);
?>

<h1>Create authitem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>