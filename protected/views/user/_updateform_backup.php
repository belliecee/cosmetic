
<?php


/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */

//Yii::import('bootstrap.helpers.TbArray');

$labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;";
?>
<script>
         $(function(){
             
          });

</script>
<style>
   
    input,select,textarea{margin-top:10px !important;}
    table tr td.firstrow{width:170px;}
    .add-on{margin-top:10px !important;}
    fieldset{
        /*margin: 10px 0 0 0 ;*/
        margin: 0 auto;
        width: 700px !important;
        /*border: 1px dashed rgb(190,235,223);*/
        border: 1px dashed rgb(158,226,207);
    }
    input[type="radio"], input[type="checkbox"]
    {
      margin: 0 7px !important;
      margin-top: 3px !important;
      
      
      
    
    }
</style>

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

<fieldset>

    <div class="red_title" style="vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">Username</div><br/>
    
    <table>
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'><span class="required">*</span> Username</div>
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
                <div style='<?php echo $labelStyle; ?>'>Email</div>
            </td>
            <td>
                <?php
                    echo $form->textFieldControlGroup($model, 'email', array('label' => false)
                             /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                     );
                ?>
            </td>   
        </tr>


        
    </table>
    <div class="red_title" style="vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">ข้อมูลอื่นๆ</div><br/>
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
                                'htmlOptions'=>array('placeholder'=>'ปี-เดือน-วัน'),
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
                <?php echo $form->inlineRadioButtonListControlGroup($model, 'sex', array(
                    'ชาย',
                    'หญิง',
                    'ไม่ระบุ',
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
                     <table>
                         <?php
                            $other = explode(",", $model->otherskin);
                            ?>
                              <tr>
                                    <td>
                                        
                                        <input type="checkbox" name="chk_group[]" value="มีสิว" <?php if(in_array("มีสิว",$other)) echo "checked"; ?> />มีสิว<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="รูขุมขนกว้าง" <?php if(in_array("รูขุมขนกว้าง",$other)) echo "checked"; ?>  />รูขุมขนกว้าง<br />
                                    </td>
                                    
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ริ้วรอยบนใบหน้า" <?php if(in_array("ริ้วรอยบนใบหน้า",$other)) echo "checked"; ?> />ริ้วรอยบนใบหน้า<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หน้าขาวใส" <?php if(in_array("หน้าขาวใส",$other)) echo "checked"; ?> />หน้าขาวใส<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                         <input type="checkbox" name="chk_group[]" value="มีสิวตามตัว" <?php if(in_array("มีสิวตามตัว",$other)) echo "checked"; ?> />มีสิวตามตัว<br /> 
                                    </td>
                                    <td>
                                         <input type="checkbox" name="chk_group[]" value="แผลเป็นบนใบหน้าหรือตามร่างกาย" <?php if(in_array("แผลเป็นบนใบหน้าหรือตามร่างกาย",$other)) echo "checked"; ?> />แผลเป็นบนใบหน้าหรือตามร่างกาย<br /> 
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมบาง" <?php if(in_array("ผมบาง",$other)) echo "checked"; ?> />ผมบาง<br /> 
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="หนังศีรษะแพ้ง่าย" <?php if(in_array("หนังศีรษะแพ้ง่าย",$other)) echo "checked"; ?> />หนังศีรษะแพ้ง่าย<br /> 
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="ผมเสีย" <?php if(in_array("ผมเสีย",$other)) echo "checked"; ?> />ผมเสีย<br /> 
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="มีกลิ่นตัว" <?php if(in_array("มีกลิ่นตัว",$other)) echo "checked"; ?> />มีกลิ่นตัว<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td>
                                        <input type="checkbox" name="chk_group[]" value="มือและเท้าแห้ง" <?php if(in_array("มือและเท้าแห้ง",$other)) echo "checked"; ?> />มือและเท้าแห้ง<br />
                                    </td>
                                    <td>
                                        <input type="checkbox" name="chk_group[]" value="บำรุงเล็บมือและเล็บเท้า" <?php if(in_array("บำรุงเล็บมือและเล็บเท้า",$other)) echo "checked"; ?> />บำรุงเล็บมือและเล็บเท้า<br />
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
   

 
     
   
    <?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton('Save', array('style'=>'float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        
    ));
    ?>
    
    
    
</fieldset>



<?php $this->endWidget(); ?>






