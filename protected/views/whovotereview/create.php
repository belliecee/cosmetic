<?php
/* @var $this WhovotereviewController */
/* @var $model whovotereview */

$this->breadcrumbs=array(
	'Whovotereviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List whovotereview', 'url'=>array('index')),
	array('label'=>'Manage whovotereview', 'url'=>array('admin')),
);
?>

<h1>Create whovotereview</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>