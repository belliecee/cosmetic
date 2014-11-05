<?php
/* @var $this AuthitemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Authitems',
);

$this->menu=array(
	array('label'=>'Create authitem', 'url'=>array('create')),
	array('label'=>'Manage authitem', 'url'=>array('admin')),
);
?>

<h1>Authitems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
