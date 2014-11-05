
<?php


/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */

//Yii::import('bootstrap.helpers.TbArray');

$labelStyle = " float:right;margin: 0 10px 0 0; ";
?>

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
        width: 700px !important;
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
    .registration_fieldset select,input[type="text"],[type="password"]{
        width: 300px;
    }
    .registration_fieldset select,input[type="text"],[type="password"]{
        width: 300px;
    }
    .input-append .add-on, .input-prepend .add-on{
        height: 20px;
    }
    .chk_accept_row{
        padding-left: 50px; 
        
    }
     
     input[type="checkbox"] {
         //margin: 0 7px 0px !important;
    }
    p.help-block{
        
    }
    fieldset {
    margin: 0px auto;
    width: 100% !important;
    border: 1px dashed #B9BCBB;
    border-radius: 7px;
}
</style>

<div id="registration_container" style="width:100% !important;margin-left:0;margin-right:0;">
<div class="title2" style="padding-top: 20px;border-bottom: none;font-family:'Batang','Browallia New','Tahoma','Serif';">ข้อมูลบัญชีผู้ใช้งาน</div>
<!--<div class="bottomline"></div>-->
<!--  -------------- MENU BAR  ------------------- -->
<?php
//$this->renderPartial("//item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
       
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

<fieldset class="registration_fieldset">

    <div class="red_title" >บัญชีผู้ใช้งาน</div><br/>
    
    <table>
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> Username <span class="required">*</span></div>
            </td>
<?php // USERNAME ?>              
            <td>
                <?php
                    echo CHtml::encode($model->username);
                ?>
            </td>   
        </tr>
        
<?php // EMAIL ?>         
        <tr>
            <td class="firstrow">
                <div id="emailfield" style='<?php echo $labelStyle; ?>'> Email <span class="required">*</span></div>
            </td>
            <td>
                <?php
                    echo $form->textFieldControlGroup($model, 'email', array('label' => false), array('id'=>'emailfield')
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>

<?php // PASSWORD ?>        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> New Password <span class="required">*</span></div>
            </td>
            <td>
                <?php
                    echo $form->passwordFieldControlGroup($model, 'newpassword', array('label' => false), array('id'=>'passwordfield')
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>
<?php // CONFIRM PASSWORD ?>          
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> Confirm Password <span class="required">*</span></div>
            </td>
            <td>
                <?php
                    echo $form->passwordFieldControlGroup($model, 'password_repeat', array('label' => false), array('id'=>'confirmfield')
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>
        
    </table> 
<!--End of User Information--> 

    <div class="red_title" >ข้อมูลอื่นๆ</div><br/>
    <table> 

        
<?php // Birth Day ?>          
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>วันเดือนปีเกิด</div>
            </td>
            <td>
                       <div class="input-append">
                        <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                                'model' => $model,
                                'attribute'=>'birthdate',
                                'pluginOptions' => array(
                                    'format' => 'yyyy-mm-dd'
                                )
                            ));
                         
                        ?>
                            <span class="add-on"><icon class="icon-calendar"></icon></span>
                        </div>
            </td>   
        </tr>        

        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>เพศ</div>
            </td>
            <td>
                <?php 
                    echo $form->inlineRadioButtonListControlGroup($model, 'sex', array(
                    'ไม่ระบุ',
                    'หญิง',
                    'ชาย',
                    
                    
                ), array('label' => false)); ?>
            </td>   
        </tr>   
        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>อาชีพ</div>
            </td>
            <td>
                <?php
                    
                   echo $form->dropDownListControlGroup($model, 'occupation',
                            array('พนักงานบริษัท', 'พนักงานบริษัท (เครื่องสำอาง)', 'ทำธุรกิจส่วนตัว', 'ทำธุรกิจเกี่ยวกับเครื่องสำอาง', 'Makeup Artist', 'ช่างเสริมสวย','ราชการ / รัฐวิสาหกิจ','นักเรียน / นักศึกษา','อื่นๆ'), array('label' => false)); 
             
                ?>
            </td>   
        </tr>   
        
        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>รายได้ต่อเดือน</div>
            </td>
            <td>
                <?php
                   echo $form->dropDownListControlGroup($model, 'income',
                            array('ต่ำกว่า 10,000 บาท', '10,000 ถึง 30,000 บาท', '30,001 ถึง 50,000 บาท', '50,001 ถึง 100,000 บาท', '50,001 ถึง 100,000 บาทขึ้นไป'), array('label' => false)); 
                ?>
            </td>   
        </tr> 
         <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>สภาพผิวหน้า</div>
            </td>
            <td>
               <?php
                   echo $form->dropDownListControlGroup($model, 'skin',
                            array('ผิวธรรมดา', 'ผิวมัน', 'ผิวแห้ง', 'ผิวผสม', 'ผิวแพ้ง่าย', 'ผิวแพ้ง่าย'), array('label' => false)); 
                ?>
            </td>   
        </tr> 
        
        <tr>
            <td  class="firstrow" style="vertical-align:top">
                <div style='<?php echo $labelStyle; ?>'>ความสนใจ</div>
            </td>
            <td>
                    <?php
                            $other = explode(",", $model->otherskin);
                    ?>
                     <table>
                              <tr>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="มีสิว" <?php if(in_array("มีสิว", $other)){echo "checked='checked'";} ?> />มีสิว<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="รูขุมขนกว้าง" <?php if(in_array("รูขุมขนกว้าง", $other)){echo "checked='checked'";} ?>/>รูขุมขนกว้าง<br />
                                    </td>
                                    
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ริ้วรอยบนใบหน้า" <?php if(in_array("ริ้วรอยบนใบหน้า", $other)){echo "checked='checked'";} ?> />ริ้วรอยบนใบหน้า<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หน้าขาวใส" <?php if(in_array("หน้าขาวใส", $other)){echo "checked='checked'";} ?> />หน้าขาวใส<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                         <input type="checkbox" name="chk_group[]" value="มีสิวตามตัว" <?php if(in_array("มีสิวตามตัว", $other)){echo "checked='checked'";} ?> />มีสิวตามตัว<br />
                                    </td>
                                    <td>
                                         <input type="checkbox" name="chk_group[]" value="แผลเป็นบนใบหน้าหรือตามร่างกาย" <?php if(in_array("แผลเป็นบนใบหน้าหรือตามร่างกาย", $other)){echo "checked='checked'";} ?> />แผลเป็นบนใบหน้าหรือตามร่างกาย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมบาง" <?php if(in_array("ผมบาง", $other)){echo "checked='checked'";} ?> />ผมบาง<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หนังศีรษะแพ้ง่าย" <?php if(in_array("หนังศีรษะแพ้ง่าย", $other)){echo "checked='checked'";} ?> />หนังศีรษะแพ้ง่าย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมเสีย" <?php if(in_array("ผมเสีย", $other)){echo "checked='checked'";} ?> />ผมเสีย<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="มีกลิ่นตัว" <?php if(in_array("มีกลิ่นตัว", $other)){echo "checked='checked'";} ?> />มีกลิ่นตัว<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="มือและเท้าแห้ง" <?php if(in_array("มือและเท้าแห้ง", $other)){echo "checked='checked'";} ?> />มือและเท้าแห้ง<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="บำรุงเล็บมือและเล็บเท้า" <?php if(in_array("บำรุงเล็บมือและเล็บเท้า", $other)){echo "checked='checked'";} ?> />บำรุงเล็บมือและเล็บเท้า<br />
                                    </td>
                              </tr>
                              
                     </table>
                                      
                
         
              

            </td>   
        </tr> 
        
    </table>
<!--Authenticate user with current password-->
    <div class="red_title" ></div><br/>
     <table>
            
    <?php // Current PASSWORD ?>        
            <tr>
                <td class="firstrow">
                    <div style='<?php echo $labelStyle; ?>'>รหัสผ่านปัจจุบัน<span class="required">*</span></div>
                </td>
                <td>
                    <?php
                        echo $form->passwordFieldControlGroup($model, 'authenpassword', array('label' => false), array('id'=>'password')
                                 /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                         );
                    ?>
                </td>   
            </tr>
        </table> 
<!--End of User Information--> 

    
   
    
    
 
     
   
    <?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton('Save', array('style'=>'float:right;margin-right:20px;width:100px;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::button('Back', array('id'=>'back_btn','style'=>'width:100px;float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_INVERSE)),
    ));
    ?>
</fieldset>


<?php $this->endWidget(); ?>





</div>
<script>
    $(function(){
              $("#usersex").prop('1');
              //$("#passwordfield").val('');
               $("#back_btn").click(function(){
                     window.location.href = "<?php echo $this->createUrl('view',array("membername"=>$model->username)) ; ?>";
               });
          
    });

</script>