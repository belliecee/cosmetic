<?php
/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */


$user_model = new user;
?>

<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($user_model); ?>

	
       

	<div class="row">
		<?php echo $form->labelEx($user_model,'password'); ?>
		<?php echo $form->passwordField($user_model,'password',array('size'=>60,'maxlength'=>256, 'placeholder'=>"New Password",'id'=>'pass01')); ?>
		<?php echo $form->error($user_model,'password'); ?>
	</div>
        
      <div class="row">
        <?php echo $form->label($user_model,'password_repeat'); ?>
        <?php echo $form->passwordField($user_model,'password_repeat',array('size'=>60,'maxlength'=>256,'placeholder'=>"Confirm Password")); ?>
        <?php echo $form->error($user_model,'password_repeat'); ?>
    </div>

	
     
<?php
/*
        <div class="row">
		<?php echo $form->labelEx($user_model,'cellphone'); ?>
		<?php echo $form->textField($user_model,'cellphone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user_model,'cellphone'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($user_model,'updatedate'); ?>
		<?php echo $form->textField($user_model,'updatedate'); ?>
		<?php echo $form->error($user_model,'updatedate'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($user_model,'registereddate'); ?>
		<?php echo $form->textField($user_model,'registereddate'); ?>
		<?php echo $form->error($user_model,'registereddate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'last_time_login'); ?>
		<?php echo $form->textField($user_model,'last_time_login'); ?>
		<?php echo $form->error($user_model,'last_time_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'officephone'); ?>
		<?php echo $form->textField($user_model,'officephone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user_model,'officephone'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($user_model,'homephone'); ?>
		<?php echo $form->textField($user_model,'homephone',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($user_model,'homephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'profile'); ?>
		<?php echo $form->textArea($user_model,'profile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($user_model,'profile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'address1'); ?>
		<?php echo $form->textField($user_model,'address1',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($user_model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'address2'); ?>
		<?php echo $form->textField($user_model,'address2',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($user_model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'city'); ?>
		<?php echo $form->textField($user_model,'city',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user_model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'country'); ?>
		<?php echo $form->textField($user_model,'country',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user_model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'postcode'); ?>
		<?php echo $form->textField($user_model,'postcode',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($user_model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'capacity'); ?>
		<?php echo $form->textField($user_model,'capacity'); ?>
		<?php echo $form->error($user_model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user_model,'available_monday'); ?>
		<?php echo $form->textField($user_model,'available_monday'); ?>
		<?php echo $form->error($user_model,'available_monday'); ?>
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
    */
?>      
	<div class="row buttons">
		<?php echo CHtml::submitButton($user_model->isNewRecord ? 'Create' : 'Save',array('class'=>'simple_button')); ?>
              <?php
              
                   
  $visi = false;
                      if(Yii::app()->user->isGuest)
                          $visi = false;
                        else{
                           $visi = user::model()->findByPk(Yii::app()->user->getId())->islevel("admin");
                        }
                        if($visi == true)
                            echo CHtml::link('<div id="Back" class="simple_button" style="display:inline-block;margin-top:10px; margin-left: 20px;">Back</div>',array("user/index"));
                        else
                            echo CHtml::link('<div id="Back" class="simple_button" style="display:inline-block;margin-top:10px; margin-left: 20px;">Back</div>',array("site/index"));
                ?>
	</div>

<?php $this->endWidget(); ?>
      
      </div><!-- form -->