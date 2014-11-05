<?php
/* @var $this PointmanagementController */
/* @var $model pointmanagement */
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
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'written_date'); ?>
		<?php echo $form->textField($model,'written_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'review_id'); ?>
		<?php echo $form->textField($model,'review_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approved_on'); ?>
		<?php echo $form->textField($model,'approved_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approved_by'); ?>
		<?php echo $form->textField($model,'approved_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->