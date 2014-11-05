<?php
/* @var $this CategoryController */
/* @var $model category */
?>


<h1>View category #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'name',
		'description',
		'create_on',
		'create_by',
		'update_on',
		'update_by',
	),
)); ?>