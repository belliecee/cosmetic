<?php
/* @var $this FollowlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Followlists',
);

$this->menu=array(
	array('label'=>'Create followlist', 'url'=>array('create')),
	array('label'=>'Manage followlist', 'url'=>array('admin')),
);
?>

<h1>Followlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
