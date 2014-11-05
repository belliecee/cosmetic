<?php
/* @var $this WebboardcommentController */
/* @var $model webboardcomment */

$this->breadcrumbs=array(
	'Webboardcomments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List webboardcomment', 'url'=>array('index')),
	array('label'=>'Create webboardcomment', 'url'=>array('create')),
	array('label'=>'View webboardcomment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage webboardcomment', 'url'=>array('admin')),
);
?>

<h1>Update webboardcomment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>