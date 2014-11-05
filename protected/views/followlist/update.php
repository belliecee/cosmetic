<?php
/* @var $this FollowlistController */
/* @var $model followlist */

$this->breadcrumbs=array(
	'Followlists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List followlist', 'url'=>array('index')),
	array('label'=>'Create followlist', 'url'=>array('create')),
	array('label'=>'View followlist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage followlist', 'url'=>array('admin')),
);
?>

<h1>Update followlist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>