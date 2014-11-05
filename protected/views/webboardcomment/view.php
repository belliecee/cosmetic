<?php
/* @var $this WebboardcommentController */
/* @var $model webboardcomment */

$this->breadcrumbs=array(
	'Webboardcomments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List webboardcomment', 'url'=>array('index')),
	array('label'=>'Create webboardcomment', 'url'=>array('create')),
	array('label'=>'Update webboardcomment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete webboardcomment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage webboardcomment', 'url'=>array('admin')),
);
?>

<h1>View webboardcomment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'detail',
		'comment_datetime',
		'type',
		'link_id',
		'post_id',
		'voteNum',
		'status',
		'fblike',
		'googleplus',
		'tweet',
		'update_on',
		'update_by',
	),
)); ?>
