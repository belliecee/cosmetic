<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */

$this->breadcrumbs=array(
	'Webboardposts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List webboardpost', 'url'=>array('index')),
	array('label'=>'Create webboardpost', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('webboardpost-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Webboardposts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'webboardpost-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'topic',
		'detail',
		'posting_datetime',
		'type',
		'link_id',
		/*
		'status',
		'voteNum',
		'fblike',
		'googleplus',
		'tweet',
		'update_on',
		'update_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
