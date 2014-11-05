<?php
/* @var $this WhovotereviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Whovotereviews',
);

$this->menu=array(
	array('label'=>'Create whovotereview', 'url'=>array('create')),
	array('label'=>'Manage whovotereview', 'url'=>array('admin')),
);
?>

<h1>Whovotereviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
