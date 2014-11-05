<?php
/* @var $this PointmanagementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pointmanagements',
);

$this->menu=array(
	array('label'=>'Create pointmanagement', 'url'=>array('create')),
	array('label'=>'Manage pointmanagement', 'url'=>array('admin')),
);
?>

<h1>Pointmanagements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
