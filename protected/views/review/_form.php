<?php
/* @var $this ReviewController */
/* @var $model review */
/* @var $form CActiveForm */


?>




<?php

$labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;";
$labelBlockStyle = " margin: 0 10px 0 0; font-weight:bold;";

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

    <div class="red_title" style="padding-bottom: 10px; ;vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dashed; border-color: rgb(217,217,217); padding-left:20px;">ระดับความพึงพอใจ</div><br/>
    
    <table>
    
<?php // Rating ?> 
        
         <tr>
            <td style="padding: 0 0 0 50px;">
                  <?php	
                        echo $form->radioButtonList($model, 'vote',array(
                                '1' => '<span style="font-weight:bold;color:orange;">1 ดาว</span>&nbsp;&nbsp;&nbsp;<span class="graytext">ไม่แนะนำเลยเพราะใช้แล้วไม่พอใจ</span>',
                                '2' => '<span style="font-weight:bold;color:orange;">2 ดาว</span>&nbsp;&nbsp;&nbsp;<span class="graytext">รู้สึกเฉยๆ เลยไม่ค่อยอยากแนะนำเท่าไร</span>',
                                '3' => '<span style="font-weight:bold;color:orange;">3 ดาว</span>&nbsp;&nbsp;&nbsp;<span class="graytext">ใช้แล้วได้ผลเป็นที่น่าพอใจในระดับหนึ่ง น่าจะแล้วแต่คนชอบ</span>',
                                '4' => '<span style="font-weight:bold;color:orange;">4 ดาว</span>&nbsp;&nbsp;&nbsp;<span class="graytext">ใช้แล้วได้ผลดีเลย อยากแนะนำให้หาซื้อมาลองใช้กันดู</span>',
                                '5' => '<span style="font-weight:bold;color:orange;">5 ดาว</span>&nbsp;&nbsp;&nbsp;<span class="graytext">ใช้ดีมากๆ หามานาน และอยากแนะนำให้เพื่อนๆใช้</span>',
                                ));
	          ?>

            </td>   
        </tr>
    </table>
    
 <div class="red_title" style="padding-bottom: 10px; ;vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dashed; border-color: rgb(217,217,217); padding-left:20px;">ซื้อมาจากร้าน</div><br/>
    
    <table>
    
<?php // Buy From ?> 
        
         <tr>
            <td style="padding: 0 0 0 50px;">
                  <?php	
                        echo $form->radioButtonList($model, 'buyfrom',array(
                                'ร้านค้าของแบรนด์' => '<span class="graytext">ร้านค้าของแบรนด์</span>',
                                'เคาน์เตอร์เครื่องสำอางในห้างสรรพสินค้า' => '<span class="graytext">เคาน์เตอร์เครื่องสำอางในห้างสรรพสินค้า</span>',
                                'วัตสัน/บู๊ทส์' => '<span class="graytext">วัตสัน/บู๊ทส์</span>',
                                'ร้านขายยาหรือร้านผลิตภัณฑ์ความงาม' => '<span class="graytext">ร้านขายยาหรือร้านผลิตภัณฑ์ความงาม</span>',
                                'ร้านสะดวกซื้อ (7-11, แฟมิลี่ มาร์ท, Lawson)' => '<span class="graytext">ร้านสะดวกซื้อ (7-11, แฟมิลี่ มาร์ท, Lawson)</span>',
                                'ร้านค้าบนอินเทอร์เน็ต' => '<span class="graytext">ร้านค้าบนอินเทอร์เน็ต</span>',	
                                'สปา/ร้านเสริมสวย/ร้านทำเล็บ' => '<span class="graytext">สปา/ร้านเสริมสวย/ร้านทำเล็บ</span>',
                                'ได้รับตัวอย่างทดลองใช้' => '<span class="graytext">ได้รับตัวอย่างทดลองใช้</span>',
                                '	อื่น ๆ' => '<span class="graytext">อื่น ๆ</span>',
                                ));
	          ?>

            </td>   
        </tr>
        
    </table>
 
  <div class="red_title" style="padding-bottom: 10px; ;vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dashed; border-color: rgb(217,217,217); padding-left:20px;">รีวิว</div><br/>
    
    <table>
    
<?php // Comment ?> 
        
         <tr>
            <td style="padding: 0 0 0 50px;">
                    <?php                echo $form->textAreaControlGroup($model, 'comment', array('label' => false, 'span' => 6, 'rows' => 5)
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
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










