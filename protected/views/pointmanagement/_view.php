<?php
/* @var $this PointmanagementController */
/* @var $data pointmanagement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('point')); ?>:</b>
	<?php echo CHtml::encode($data->point); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('written_date')); ?>:</b>
	<?php echo CHtml::encode($data->written_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review_id')); ?>:</b>
	<?php echo CHtml::encode($data->review_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved_on')); ?>:</b>
	<?php echo CHtml::encode($data->approved_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved_by')); ?>:</b>
	<?php echo CHtml::encode($data->approved_by); ?>
	<br />


</div>