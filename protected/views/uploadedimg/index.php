<?php
/* @var $this UploadedimgController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uploadedimgs',
);

$this->menu=array(
	array('label'=>'Create uploadedimg', 'url'=>array('create')),
	array('label'=>'Manage uploadedimg', 'url'=>array('admin')),
);
?>

<h1>Uploadedimgs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
