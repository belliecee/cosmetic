<?php
/* @var $this ItemController */
/* @var $model item */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reviewNum'); ?>
		<?php echo $form->textField($model,'reviewNum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avgVote'); ?>
		<?php echo $form->textField($model,'avgVote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_on'); ?>
		<?php echo $form->textField($model,'create_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultVote'); ?>
		<?php echo $form->textField($model,'resultVote'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marketPrice'); ?>
		<?php echo $form->textField($model,'marketPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maker'); ?>
		<?php echo $form->textField($model,'maker',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'makerComment'); ?>
		<?php echo $form->textArea($model,'makerComment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volume'); ?>
		<?php echo $form->textField($model,'volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ingredient'); ?>
		<?php echo $form->textArea($model,'ingredient',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remark'); ?>
		<?php echo $form->textArea($model,'remark',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facebookLike'); ?>
		<?php echo $form->textField($model,'facebookLike'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tweet'); ?>
		<?php echo $form->textField($model,'tweet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googlePlus'); ?>
		<?php echo $form->textField($model,'googlePlus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>10,'maxlength'=>10)); ?>
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