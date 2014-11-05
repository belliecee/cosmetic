<?php
/* @var $this PointmanagementController */
/* @var $model pointmanagement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pointmanagement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->textField($model,'point'); ?>
		<?php echo $form->error($model,'point'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'written_date'); ?>
		<?php echo $form->textField($model,'written_date'); ?>
		<?php echo $form->error($model,'written_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review_id'); ?>
		<?php echo $form->textField($model,'review_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'review_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved_on'); ?>
		<?php echo $form->textField($model,'approved_on'); ?>
		<?php echo $form->error($model,'approved_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved_by'); ?>
		<?php echo $form->textField($model,'approved_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'approved_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->