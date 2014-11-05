<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */

//$this->breadcrumbs=array(
//	'Webboardposts'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
//	'Update',
//);

//$this->menu=array(
//	array('label'=>'List webboardpost', 'url'=>array('index')),
//	array('label'=>'Create webboardpost', 'url'=>array('create')),
//	array('label'=>'View webboardpost', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage webboardpost', 'url'=>array('admin')),
//);
//

?>

<h1>Update webboardpost <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>