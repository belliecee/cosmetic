
<?php


/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */

//Yii::import('bootstrap.helpers.TbArray');

$labelStyle = " float:right;margin: 0 10px 0 0; ";
?>
<script>
    $(function(){
              $("#usersex").prop('2');
              
              
              $.validator.addMethod(
                    "regex",
                    function(value, element, regexp) {
                        var re = new RegExp(regexp);
                        return this.optional(element) || re.test(value);
                    },
                    "Please check your input."
            );
            var emailpattern = "/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/";
            $("#emailfield").rules("add", emailpattern);
    
    
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
</style>

<div id="registration_container">
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
                    echo $form->textFieldControlGroup($model, 'username', array('label' => false,
                   )
                     );
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
                    echo $form->textFieldControlGroup($model, 'email', array('label' => false), array('class')
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>

<?php // PASSWORD ?>        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> Password <span class="required">*</span></div>
            </td>
            <td>
                <?php
                    echo $form->passwordFieldControlGroup($model, 'password', array('label' => false), array('id'=>'password')
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
                    echo $form->passwordFieldControlGroup($model, 'password_repeat', array('label' => false), array('class')
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>
        
    </table>
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
                    
                   echo $form->dropDownListControlGroup($model, 'occupation',array('พนักงานบริษัท', 'พนักงานบริษัท (เครื่องสำอาง)', 'ทำธุรกิจส่วนตัว', 'ทำธุรกิจเกี่ยวกับเครื่องสำอาง', 'Makeup Artist', 'ช่างเสริมสวย','ราชการ / รัฐวิสาหกิจ','นักเรียน / นักศึกษา','อื่นๆ'), array('label' => false)); 
             
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
                                        <input type="checkbox" name="chk_group[]" value="มีสิว" />มีสิว<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="รูขุมขนกว้าง" />รูขุมขนกว้าง<br />
                                    </td>
                                    
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ริ้วรอยบนใบหน้า"  />ริ้วรอยบนใบหน้า<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หน้าขาวใส" />หน้าขาวใส<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                         <input type="checkbox" name="chk_group[]" value="มีสิวตามตัว" />มีสิวตามตัว<br />
                                    </td>
                                    <td>
                                         <input type="checkbox" name="chk_group[]" value="แผลเป็นบนใบหน้าหรือตามร่างกาย" />แผลเป็นบนใบหน้าหรือตามร่างกาย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมบาง" />ผมบาง<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หนังศีรษะแพ้ง่าย" />หนังศีรษะแพ้ง่าย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมเสีย" />ผมเสีย<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="มีกลิ่นตัว" />มีกลิ่นตัว<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="มือและเท้าแห้ง" />มือและเท้าแห้ง<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="บำรุงเล็บมือและเล็บเท้า" />บำรุงเล็บมือและเล็บเท้า<br />
                                    </td>
                              </tr>
                              
                     </table>
                                      
                
                <?php
        /*        
                    echo $form->checkBoxListControlGroup($model, 'skin', array(
                    'มีสิว',
                    'รูขุมขนกว้าง',
                    'ริ้วรอยบนใบหน้า',
                    'หน้าขาวใส',
                    'ผิวขาวใส',
                    'แผลเป็นบนใบหน้าหรือตามร่างกาย',
                    'มีสิวตามตัว',
                    'ผมบาง',
                    'หนังศีรษะแพ้ง่าย',
                    'ผมเสีย',
                    'มีกลิ่นตัว',
                    'มือและเท้าแห้ง',
                    'เล็บมือและเล็บเท้า',
                    
                   ), 
                    array('label'=>false)
                   );
         * 
         */ 
                ?>
              

            </td>   
        </tr> 
        
    </table>
    
    
    
    <table>
        <tr>
            <td><?php echo $this->renderPartial("usercondition");?></td>
        </tr>
         <tr>
         <td class="firstrow chk_accept_row" ><br/>
                 <?php
                    echo $form->checkBoxControlGroup($model, 'checkaccept', array('label' => "ข้าพเจ้าได้อ่านทำความเข้าใจและยอมรับในเงื่อนไขและข้อจำกัดในการใช้งานแล้ว",
                   )
                     );
                ?>
                
         </td>
          
        </tr>
 
    </table>
    
    
 
     
   
    <?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton('Continue', array('style'=>'float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        
    ));
    ?>
</fieldset>


<?php $this->endWidget(); ?>





</div>