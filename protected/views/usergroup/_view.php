<?php
/* @var $this UsergroupController */
/* @var $data usergroup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enquiry_create')); ?>:</b>
	<?php echo CHtml::encode($data->enquiry_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enquiry_read')); ?>:</b>
	<?php echo CHtml::encode($data->enquiry_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enquiry_update')); ?>:</b>
	<?php echo CHtml::encode($data->enquiry_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enquiry_delete')); ?>:</b>
	<?php echo CHtml::encode($data->enquiry_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorprocess_create')); ?>:</b>
	<?php echo CHtml::encode($data->vendorprocess_create); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorprocess_read')); ?>:</b>
	<?php echo CHtml::encode($data->vendorprocess_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorprocess_update')); ?>:</b>
	<?php echo CHtml::encode($data->vendorprocess_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorprocess_delete')); ?>:</b>
	<?php echo CHtml::encode($data->vendorprocess_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quoh_create')); ?>:</b>
	<?php echo CHtml::encode($data->quoh_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quoh_read')); ?>:</b>
	<?php echo CHtml::encode($data->quoh_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quoh_update')); ?>:</b>
	<?php echo CHtml::encode($data->quoh_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quoh_delete')); ?>:</b>
	<?php echo CHtml::encode($data->quoh_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poh_create')); ?>:</b>
	<?php echo CHtml::encode($data->poh_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poh_read')); ?>:</b>
	<?php echo CHtml::encode($data->poh_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poh_update')); ?>:</b>
	<?php echo CHtml::encode($data->poh_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poh_delete')); ?>:</b>
	<?php echo CHtml::encode($data->poh_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit_create')); ?>:</b>
	<?php echo CHtml::encode($data->deposit_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit_read')); ?>:</b>
	<?php echo CHtml::encode($data->deposit_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit_update')); ?>:</b>
	<?php echo CHtml::encode($data->deposit_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit_delete')); ?>:</b>
	<?php echo CHtml::encode($data->deposit_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potovendor_create')); ?>:</b>
	<?php echo CHtml::encode($data->potovendor_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potovendor_read')); ?>:</b>
	<?php echo CHtml::encode($data->potovendor_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potovendor_update')); ?>:</b>
	<?php echo CHtml::encode($data->potovendor_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potovendor_delete')); ?>:</b>
	<?php echo CHtml::encode($data->potovendor_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_create')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_read')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_update')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_delete')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_delete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_create')); ?>:</b>
	<?php echo CHtml::encode($data->payment_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_read')); ?>:</b>
	<?php echo CHtml::encode($data->payment_read); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_update')); ?>:</b>
	<?php echo CHtml::encode($data->payment_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_delete')); ?>:</b>
	<?php echo CHtml::encode($data->payment_delete); ?>
	<br />

	*/ ?>

</div>