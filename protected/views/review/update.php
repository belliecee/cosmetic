<?php
/* @var $this ReviewController */
/* @var $model review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List review', 'url'=>array('index')),
	array('label'=>'Create review', 'url'=>array('create')),
	array('label'=>'View review', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage review', 'url'=>array('admin')),
);
?>

<h1>Update review <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>