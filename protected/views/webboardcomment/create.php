<?php
/* @var $this WebboardcommentController */
/* @var $model webboardcomment */

$this->breadcrumbs=array(
	'Webboardcomments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List webboardcomment', 'url'=>array('index')),
	array('label'=>'Manage webboardcomment', 'url'=>array('admin')),
);
?>

<h1>Create webboardcomment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>