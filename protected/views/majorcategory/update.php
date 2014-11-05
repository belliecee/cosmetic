<?php
/* @var $this MajorcategoryController */
/* @var $model majorcategory */

$this->breadcrumbs=array(
	'Majorcategories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List majorcategory', 'url'=>array('index')),
	array('label'=>'Create majorcategory', 'url'=>array('create')),
	array('label'=>'View majorcategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage majorcategory', 'url'=>array('admin')),
);
?>

<h1>Update majorcategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>