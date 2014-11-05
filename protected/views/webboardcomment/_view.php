<?php
/* @var $this WebboardcommentController */
/* @var $data webboardcomment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->comment_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link_id')); ?>:</b>
	<?php echo CHtml::encode($data->link_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_id')); ?>:</b>
	<?php echo CHtml::encode($data->post_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voteNum')); ?>:</b>
	<?php echo CHtml::encode($data->voteNum); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fblike')); ?>:</b>
	<?php echo CHtml::encode($data->fblike); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('googleplus')); ?>:</b>
	<?php echo CHtml::encode($data->googleplus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tweet')); ?>:</b>
	<?php echo CHtml::encode($data->tweet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_on')); ?>:</b>
	<?php echo CHtml::encode($data->update_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	*/ ?>

</div>