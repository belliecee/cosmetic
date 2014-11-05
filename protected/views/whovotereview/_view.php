<?php
/* @var $this WhovotereviewController */
/* @var $data whovotereview */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_id')); ?>:</b>
	<?php echo CHtml::encode($data->review_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_on')); ?>:</b>
	<?php echo CHtml::encode($data->update_on); ?>
	<br />


</div>