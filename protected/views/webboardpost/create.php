<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */

$this->breadcrumbs=array(
	'Webboardposts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List webboardpost', 'url'=>array('index')),
	array('label'=>'Manage webboardpost', 'url'=>array('admin')),
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>

<h1>Webboard New Post</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>