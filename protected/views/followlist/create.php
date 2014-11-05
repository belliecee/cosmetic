<?php
/* @var $this FollowlistController */
/* @var $model followlist */

$this->breadcrumbs=array(
	'Followlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List followlist', 'url'=>array('index')),
	array('label'=>'Manage followlist', 'url'=>array('admin')),
);
?>

<h1>Create followlist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>