<?php
/* @var $this UploadedimgController */
/* @var $model uploadedimg */

$this->breadcrumbs=array(
	'Uploadedimgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List uploadedimg', 'url'=>array('index')),
	array('label'=>'Manage uploadedimg', 'url'=>array('admin')),
);
?>

<h1>Create uploadedimg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>