<?php
/* @var $this UserController */
/* @var $model user */
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
		<?php echo $form->label($model,'givenname'); ?>
		<?php echo $form->textField($model,'givenname',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registereddate'); ?>
		<?php echo $form->textField($model,'registereddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedate'); ?>
		<?php echo $form->textField($model,'updatedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_time_login'); ?>
		<?php echo $form->textField($model,'last_time_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officephone'); ?>
		<?php echo $form->textField($model,'officephone',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cellphone'); ?>
		<?php echo $form->textField($model,'cellphone',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homephone'); ?>
		<?php echo $form->textField($model,'homephone',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profile'); ?>
		<?php echo $form->textArea($model,'profile',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_monday'); ?>
		<?php echo $form->textField($model,'available_monday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_tuesday'); ?>
		<?php echo $form->textField($model,'available_tuesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_wednesday'); ?>
		<?php echo $form->textField($model,'available_wednesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_thursday'); ?>
		<?php echo $form->textField($model,'available_thursday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_friday'); ?>
		<?php echo $form->textField($model,'available_friday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_saturday'); ?>
		<?php echo $form->textField($model,'available_saturday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_sunday'); ?>
		<?php echo $form->textField($model,'available_sunday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->