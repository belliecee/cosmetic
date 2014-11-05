<?php

/* @var $this UserController */
/* @var $model user */
?>




<?php


/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */

//Yii::import('bootstrap.helpers.TbArray');

$labelStyle = " float:right;margin: 0 10px 0 0; ";
?>
<script>
         $(function(){
              
               $("#complete_and_conntinue").click(function(){
                     window.location.href = "<?php echo $this->createUrl('site/index') ; ?>";
               });
          });

</script>
<style>
   
    
    #registration_container{
        width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    input,select,textarea{margin-top:10px !important;}
    table tr td.firstrow{width:170px;}
    .add-on{margin-top:10px !important;}
    fieldset{
        /*margin: 10px 0 0 0 ;*/
        margin: 0 auto;
        margin-top: 50px;
        width: 700px !important;
        height: 300px;
        /*border: 1px dashed rgb(190,235,223);*/
        border: 1px dashed rgba(185, 188, 187, 1);
        border-radius: 7px;
    }
    input[type="radio"], input[type="checkbox"]
    {
      margin: 0 7px !important;
      margin-top: 3px !important;
    }
    .form-actions{
        margin-bottom: 0;
    }
    th.next, th.prev, th.dow,th.switch{
        border-radius: 0;
    }
    .red_title{
        vertical-align: middle;font-size: 22px;font-family:'Batang','Browallia New','Tahoma','Serif'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); 
        padding-left:20px; padding-bottom: 15px;
    }
  
    td{
        padding-top: 15px;padding-bottom: 15px;
    }
    td:nth-child(1){
        max-width: 200px;
        
        border-bottom: solid 1px white;
         background-color: rgba(220, 233, 255, 1);
         border-right: solid 1px white;
        
    }
    td:nth-child(2){
        max-width: 200px;
        padding-left: 30px;
        background-color: rgba(245, 245, 245, 1);
        border-bottom: solid 1px white;
    }
    .interested{
         background-color: rgba(245, 245, 245, 1) !important;
         border: none !important;
    }
    #complete_title{
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: 60px;
        text-align: center;
        color: #F26E6F;
        font-size: 24px;
    }
     #complete_detail{
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
         text-align: center;
          color:     #6E6E6E;
}
    }
    
</style>

<div id="registration_container">
<!--<div class="title2" style="padding-top: 20px;border-bottom: none;font-family:'Batang','Browallia New','Tahoma','Serif';">ข้อมูลบัญชีผู้ใช้งาน</div>-->
<!--<div class="bottomline"></div>-->
<!--  -------------- MENU BAR  ------------------- -->
<?php
//$this->renderPartial("//item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<fieldset>
<div id ="complete_title">
     ยินดีต้อนรับสู่ Cosmetic Web
</div>


<div id ="complete_detail">
      สวัสดีคุณ <?php echo $model->username; ?>
      ตอนนี้คุณได้รับ Point ไว้ร่วมสนุก 50 points 
      
</div>
    <div id='complete_and_conntinue' class="btn  btn-large btn-block btn-success" style="margin-left: 200px !important; margin-top: 40px !important ;width:300px;">Continue</div>
</fieldset>

</div>