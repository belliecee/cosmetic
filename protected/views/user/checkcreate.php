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
               $("#back_btn").click(function(){
                     window.location.href = "<?php echo $this->createUrl('editinfo') ; ?>";
               });
               $("#complete_btn").click(function(){
                     window.location.href = "<?php echo $this->createUrl('completecreate') ; ?>";
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

<fieldset>

    <div class="red_title" >บัญชีผู้ใช้งาน</div><br/>
    
    <table>
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> Username <span class="required">*</span></div>
            </td>
<?php // USERNAME ?>              
            <td>
                <?php
                    echo TbHtml::encode($model->username);
                ?>
            </td>   
        </tr>
        
<?php // EMAIL ?>         
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'> Email <span class="required">*</span></div>
            </td>
            <td>
                <?php
                  
                    echo TbHtml::encode($model->email);
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
                      
                        <?php 
                            echo TbHtml::encode($model->birthdate);
                         
                        ?>
                           
            </td>   
        </tr>        

        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>เพศ</div>
            </td>
            <td>
                <?php   $sex = array(
                    'ไม่ระบุ',
                    'หญิง',
                    'ชาย',
                );
                      
                        if($model->sex == null){
                             $model->sex = 0;
                        }
                        echo TbHtml::encode($sex[$model->sex]); 
                ?>
            </td>   
        </tr>   
        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>อาชีพ</div>
            </td>
            <td>
                <?php
                     $occupation = array('พนักงานบริษัท', 'พนักงานบริษัท (เครื่องสำอาง)', 'ทำธุรกิจส่วนตัว', 'ทำธุรกิจเกี่ยวกับเครื่องสำอาง', 'Makeup Artist', 'ช่างเสริมสวย','ราชการ / รัฐวิสาหกิจ','นักเรียน / นักศึกษา','อื่นๆ');
                     
                      if($model->occupation == null){
                             $model->occupation = 0;
                        }
                     
                     echo TbHtml::encode($occupation[$model->occupation]); 
                 
                ?>
            </td>   
        </tr>   
        
        
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>รายได้ต่อเดือน</div>
            </td>
            <td>
                <?php
                
                            $income =    array('ต่ำกว่า 10,000 บาท', '10,000 ถึง 30,000 บาท', '30,001 ถึง 50,000 บาท', '50,001 ถึง 100,000 บาท', '50,001 ถึง 100,000 บาทขึ้นไป');
                            
                             if($model->income == null){
                                $model->income = 0;
                           }
                            echo TbHtml::encode($income[$model->income]); 
                            
                ?>
            </td>   
        </tr> 
         <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>สภาพผิวหน้า</div>
            </td>
            <td>
               <?php
               
                     $skin= array('ผิวธรรมดา', 'ผิวมัน', 'ผิวแห้ง', 'ผิวผสม', 'ผิวแพ้ง่าย', 'ผิวแพ้ง่าย');
                     
                     if($model->skin == null){
                                $model->skin = 0;
                     }
                     echo TbHtml::encode($skin[$model->skin]); 
                  
                ?>
            </td>   
        </tr> 
        
        <tr>
            <td  class="firstrow" style="vertical-align:top">
                <div style='<?php echo $labelStyle; ?>'>ความสนใจ</div>
            </td>
            <td>
                    <?php
                                                         
                           echo TbHtml::encode($model->otherskin); 
                    ?>
<!--                     <table>
                              <tr>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="มีสิว" />มีสิว<br />
                                    </td>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="รูขุมขนกว้าง" />รูขุมขนกว้าง<br />
                                    </td>
                                    
                              </tr>
                              <tr>
                                     <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="ริ้วรอยบนใบหน้า"  />ริ้วรอยบนใบหน้า<br />
                                    </td>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="หน้าขาวใส" />หน้าขาวใส<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td class='interested'>
                                         <input type="checkbox" name="chk_group[]" value="มีสิวตามตัว" />มีสิวตามตัว<br />
                                    </td>
                                    <td class='interested'>
                                         <input type="checkbox" name="chk_group[]" value="แผลเป็นบนใบหน้าหรือตามร่างกาย" />แผลเป็นบนใบหน้าหรือตามร่างกาย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="ผมบาง" />ผมบาง<br />
                                    </td>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="หนังศีรษะแพ้ง่าย" />หนังศีรษะแพ้ง่าย<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="ผมเสีย" />ผมเสีย<br />
                                    </td>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="มีกลิ่นตัว" />มีกลิ่นตัว<br />
                                    </td>
                              </tr>
                              <tr>
                                     <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="มือและเท้าแห้ง" />มือและเท้าแห้ง<br />
                                    </td>
                                    <td class='interested'>
                                        <input type="checkbox" name="chk_group[]" value="บำรุงเล็บมือและเล็บเท้า" />บำรุงเล็บมือและเล็บเท้า<br />
                                    </td>
                              </tr>
                              
                     </table>-->
                                      
                
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
        
        TbHtml::button('Continue', array('id'=>'complete_btn','style'=>'width:100px;float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
         TbHtml::button('Back', array('id'=>'back_btn','style'=>'width:100px;float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_INVERSE)),
    ));
    ?>
    
</fieldset>


<?php $this->endWidget(); ?>





</div>