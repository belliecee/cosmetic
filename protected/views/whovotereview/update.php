<?php
/* @var $this WhovotereviewController */
/* @var $model whovotereview */

$this->breadcrumbs=array(
	'Whovotereviews'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List whovotereview', 'url'=>array('index')),
	array('label'=>'Create whovotereview', 'url'=>array('create')),
	array('label'=>'View whovotereview', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage whovotereview', 'url'=>array('admin')),
);
?>

<h1>Update whovotereview <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>