<?php
/* @var $this UploadedimgController */
/* @var $model uploadedimg */

$this->breadcrumbs=array(
	'Uploadedimgs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List uploadedimg', 'url'=>array('index')),
	array('label'=>'Create uploadedimg', 'url'=>array('create')),
	array('label'=>'View uploadedimg', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage uploadedimg', 'url'=>array('admin')),
);
?>

<h1>Update uploadedimg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>