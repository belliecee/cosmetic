<?php
/* @var $this WebboardcommentController */
/* @var $model webboardcomment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'webboardcomment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_datetime'); ?>
		<?php echo $form->textField($model,'comment_datetime'); ?>
		<?php echo $form->error($model,'comment_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_id'); ?>
		<?php echo $form->textField($model,'link_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'link_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'post_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'voteNum'); ?>
		<?php echo $form->textField($model,'voteNum'); ?>
		<?php echo $form->error($model,'voteNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fblike'); ?>
		<?php echo $form->textField($model,'fblike'); ?>
		<?php echo $form->error($model,'fblike'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'googleplus'); ?>
		<?php echo $form->textField($model,'googleplus'); ?>
		<?php echo $form->error($model,'googleplus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tweet'); ?>
		<?php echo $form->textField($model,'tweet'); ?>
		<?php echo $form->error($model,'tweet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_on'); ?>
		<?php echo $form->textField($model,'update_on'); ?>
		<?php echo $form->error($model,'update_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'update_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->