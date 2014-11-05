<?php
/* @var $this WebboardcommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Webboardcomments',
);

$this->menu=array(
	array('label'=>'Create webboardcomment', 'url'=>array('create')),
	array('label'=>'Manage webboardcomment', 'url'=>array('admin')),
);
?>

<h1>Webboardcomments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
