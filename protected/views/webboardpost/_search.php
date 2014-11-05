<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topic'); ?>
		<?php echo $form->textArea($model,'topic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posting_datetime'); ?>
		<?php echo $form->textField($model,'posting_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link_id'); ?>
		<?php echo $form->textField($model,'link_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voteNum'); ?>
		<?php echo $form->textField($model,'voteNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fblike'); ?>
		<?php echo $form->textField($model,'fblike'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googleplus'); ?>
		<?php echo $form->textField($model,'googleplus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tweet'); ?>
		<?php echo $form->textField($model,'tweet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_on'); ?>
		<?php echo $form->textField($model,'update_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->