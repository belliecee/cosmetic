<?php
/* @var $this UsergroupController */
/* @var $model usergroup */

$this->breadcrumbs=array(
	'Usergroups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List usergroup', 'url'=>array('index')),
	array('label'=>'Manage usergroup', 'url'=>array('admin')),
);
?>

<h1>Create usergroup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>