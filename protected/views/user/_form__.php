<?php
/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'givenname'); ?>
		<?php echo $form->textField($model,'givenname',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'givenname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registereddate'); ?>
		<?php echo $form->textField($model,'registereddate'); ?>
		<?php echo $form->error($model,'registereddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedate'); ?>
		<?php echo $form->textField($model,'updatedate'); ?>
		<?php echo $form->error($model,'updatedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_time_login'); ?>
		<?php echo $form->textField($model,'last_time_login'); ?>
		<?php echo $form->error($model,'last_time_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officephone'); ?>
		<?php echo $form->textField($model,'officephone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'officephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cellphone'); ?>
		<?php echo $form->textField($model,'cellphone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cellphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homephone'); ?>
		<?php echo $form->textField($model,'homephone',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'homephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profile'); ?>
		<?php echo $form->textArea($model,'profile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'profile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
		<?php echo $form->error($model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_monday'); ?>
		<?php echo $form->textField($model,'available_monday'); ?>
		<?php echo $form->error($model,'available_monday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_tuesday'); ?>
		<?php echo $form->textField($model,'available_tuesday'); ?>
		<?php echo $form->error($model,'available_tuesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_wednesday'); ?>
		<?php echo $form->textField($model,'available_wednesday'); ?>
		<?php echo $form->error($model,'available_wednesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_thursday'); ?>
		<?php echo $form->textField($model,'available_thursday'); ?>
		<?php echo $form->error($model,'available_thursday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_friday'); ?>
		<?php echo $form->textField($model,'available_friday'); ?>
		<?php echo $form->error($model,'available_friday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_saturday'); ?>
		<?php echo $form->textField($model,'available_saturday'); ?>
		<?php echo $form->error($model,'available_saturday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_sunday'); ?>
		<?php echo $form->textField($model,'available_sunday'); ?>
		<?php echo $form->error($model,'available_sunday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->