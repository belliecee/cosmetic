<?php
/* @var $this MajorcategoryController */
/* @var $model majorcategory */

$this->breadcrumbs=array(
	'Majorcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List majorcategory', 'url'=>array('index')),
	array('label'=>'Manage majorcategory', 'url'=>array('admin')),
);
?>

<h1>Create majorcategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>