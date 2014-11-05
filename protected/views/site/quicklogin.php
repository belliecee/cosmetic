

<script>
    $(function(){
        
         $('input').val('');
    });
</script>
<style>
    
    .btn-primary{float:right;}
    #login-form{
        padding 5px; 10px;
        margin-left: auto;
        margin-right: auto;
    }
    
</style>
<div class="form" style="width:350px;margin-left: 50px">

    
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
        'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        
        ));
?>
<!--<fieldset style="border:none;">-->
<br/><br/><br/>
	

	<div class="row" style="width:350px;margin:0 auto;margin-top:-30px">
		&nbsp;&nbsp;&nbsp;&nbsp;
                <span style="font-size:14px; float: left;margin-top:15px;"><i class="fa fa-users" style="padding-left:20px;color:#008C90"></i> 
                </span>&nbsp;&nbsp;
                <div style="margin-left:30px; float: left;">
                 <?php
                    echo $form->textFieldControlGroup($model, 'username', array('label' => false,'style'=>'height:30px;margin-left:-15px;','placeholder'=>"Username")
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
                </div>
		
	</div>

	<div class="row" style="width:350px;margin:0 auto; ">
		&nbsp;&nbsp;&nbsp;&nbsp;
                
		<span style="font-size:14px; float: left;margin-top:15px;"><i class="fa fa-lock" style="padding-left:25px;color:#008C90"></i>  </span>&nbsp;&nbsp;&nbsp;
                <div style="margin-left:30px; float: left;">
                   <?php echo $form->passwordFieldControlGroup($model,'password', array('label' => false, 'style'=>'height:30px;margin-left:-15px;','placeholder'=>"Password")); ?>
		
		</div>
	</div>

	<div class="row rememberMe"  style="width:300px;margin-left:0;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
     
	<div class="row buttons" style="width:250px;margin-left:20px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
		<?php echo TbHtml::submitButton('Login',array('color' => TbHtml::BUTTON_COLOR_PRIMARY,'style'=>'width:120px')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

