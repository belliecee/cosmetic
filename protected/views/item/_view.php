<?php
/* @var $this ItemController */
/* @var $data item */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
	<?php echo CHtml::encode($data->brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reviewNum')); ?>:</b>
	<?php echo CHtml::encode($data->reviewNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avgVote')); ?>:</b>
	<?php echo CHtml::encode($data->avgVote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_on')); ?>:</b>
	<?php echo CHtml::encode($data->create_on); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('resultVote')); ?>:</b>
	<?php echo CHtml::encode($data->resultVote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marketPrice')); ?>:</b>
	<?php echo CHtml::encode($data->marketPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maker')); ?>:</b>
	<?php echo CHtml::encode($data->maker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('makerComment')); ?>:</b>
	<?php echo CHtml::encode($data->makerComment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume')); ?>:</b>
	<?php echo CHtml::encode($data->volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingredient')); ?>:</b>
	<?php echo CHtml::encode($data->ingredient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remark')); ?>:</b>
	<?php echo CHtml::encode($data->remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebookLike')); ?>:</b>
	<?php echo CHtml::encode($data->facebookLike); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tweet')); ?>:</b>
	<?php echo CHtml::encode($data->tweet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('googlePlus')); ?>:</b>
	<?php echo CHtml::encode($data->googlePlus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_on')); ?>:</b>
	<?php echo CHtml::encode($data->update_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	*/ ?>

</div>