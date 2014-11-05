<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<style>
    
    
    #thepanel{
        margin-top: 40px;
        min-width: 1100px;
    }
    .login_form{
        float:left;width:350px;
        background-color: rgba(246, 246, 246, 1);
        padding: 30px 50px 30px 50px;
        width: 470px;
        min-height: 350px;    
        
        
    }
    .login_header{
       font-size: 24px;
	font-family: Verdana, Geneva, sans-serif;
	color: #F26E6F;
      
    }
    
    .grey_color
    {
       font-family:'tahoma';
        font-size: 13px;
        line-height: 1.42857;
        color: #6E6E6E;	
        text-align: justify;
/*        font-weight: bold;*/
    }
</style>

<div class="index_content" style=" margin: 20px 0 20px 0; /*border: 1px solid rgb(217,217,217);border-radius: 5px;*/ padding: 0 70px 0 0;width:1000px; min-height: 500px;">

<div class="title2" style="margin-top:50px;border-bottom: none;">ยินดีต้อนรับสู่ Cosmetic Web</div>
<div class="bottomline"></div>





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

<div id="thepanel" >

<!--SIGN IN PANEL-->

<div id="signin_panel" class="login_form" style="margin-left: 50px;" >

    <span class="login_header">
           Member Log in
    </span>
     <div style="margin-top:20px;" class="grey_color">
           Login as a member
    </div>
    
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
                <span style="font-size:14px; float: left;margin-top:15px;"><i class="fa fa-users" style="padding-left:20px;color:#6E6E6E"></i> 
                </span>&nbsp;&nbsp;
                <div style="margin-left:30px; float: left;">
                 <?php
                    echo $form->textFieldControlGroup($model, 'username', array('label' => false,'style'=>'width:250px;height:30px;margin-left:-15px;','placeholder'=>"Username")
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
                </div>
		
	</div>

	<div class="row" style="width:350px;margin:0 auto; ">
		&nbsp;&nbsp;&nbsp;&nbsp;
                
		<span style="font-size:14px; float: left;margin-top:15px;"><i class="fa fa-lock" style="padding-left:25px;color:#6E6E6E"></i>  </span>&nbsp;&nbsp;&nbsp;
                <div style="margin-left:30px; float: left;">
                   <?php echo $form->passwordFieldControlGroup($model,'password', array('label' => false, 'style'=>'width:250px;height:30px;margin-left:-15px;','placeholder'=>"Password")); ?>
		
		</div>
	</div>
       <div class="row buttons" style="margin-left:250px;cursor: pointer;">
           <a hre="#">ลืมรหัสผ่าน</a>
        </div>
<?php
/*
	<div class="row rememberMe"  style="width:300px;margin-left:0;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
  */
?>
	<div class="row buttons" style="width:250px;margin-left:70px;margin-top:10px">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
            
                  <?php echo TbHtml::submitButton('Login',array('color' => TbHtml::BUTTON_COLOR_PRIMARY,'style'=>'width:120px')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<!--SIGN UP PANEL-->

<div id="signup_panel" class="login_form" style="margin-left: 30px;">
<span class="login_header">
           New Member
    </span>
     <div style="margin-top:20px;" class="grey_color">
         <p><b>Create an Account</b></p>
         <p style="width: 350px;">
             By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
         </p>
    </div>
   <div class="row buttons" style="width:250px;margin-left:120px;margin-top: 30px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;
              <a href="<?php echo $this->createUrl("user/create"); ?>"><div class="btn btn-success"><i class="fa fa-user"></i> Create Account</div></a>
                    
	</div> 

</div><!-- form -->

<div style="clear:both;"></div>


</div>
</div>
