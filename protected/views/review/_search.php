<?php
/* @var $this ReviewController */
/* @var $model review */
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
		<?php echo $form->label($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vote'); ?>
		<?php echo $form->textField($model,'vote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reviewvote'); ?>
		<?php echo $form->textField($model,'reviewvote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'result'); ?>
		<?php echo $form->textField($model,'result',array('size'=>60,'maxlength'=>256)); ?>
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
		<?php echo $form->label($model,'create_on'); ?>
		<?php echo $form->textField($model,'create_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->