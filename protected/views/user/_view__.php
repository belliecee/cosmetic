<?php
/* @var $this UserController */
/* @var $data user */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('givenname')); ?>:</b>
	<?php echo CHtml::encode($data->givenname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registereddate')); ?>:</b>
	<?php echo CHtml::encode($data->registereddate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($data->updatedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_time_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_time_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officephone')); ?>:</b>
	<?php echo CHtml::encode($data->officephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cellphone')); ?>:</b>
	<?php echo CHtml::encode($data->cellphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homephone')); ?>:</b>
	<?php echo CHtml::encode($data->homephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile')); ?>:</b>
	<?php echo CHtml::encode($data->profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacity')); ?>:</b>
	<?php echo CHtml::encode($data->capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_monday')); ?>:</b>
	<?php echo CHtml::encode($data->available_monday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_tuesday')); ?>:</b>
	<?php echo CHtml::encode($data->available_tuesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_wednesday')); ?>:</b>
	<?php echo CHtml::encode($data->available_wednesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_thursday')); ?>:</b>
	<?php echo CHtml::encode($data->available_thursday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_friday')); ?>:</b>
	<?php echo CHtml::encode($data->available_friday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_saturday')); ?>:</b>
	<?php echo CHtml::encode($data->available_saturday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_sunday')); ?>:</b>
	<?php echo CHtml::encode($data->available_sunday); ?>
	<br />

	*/ ?>

</div>