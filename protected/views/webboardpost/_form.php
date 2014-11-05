<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */
/* @var $form CActiveForm */


$labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;";
?>
<script>
         $(function(){
             $('#newsubmit').click(function(){
                   alert("asdfasdf");
                   $('#stylepost').submit();
             });
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

    <div class="red_title" style="vertical-align: middle;font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">เพิ่ม Topic ใหม่ โดย <?php if(user::model()->findByPk(Yii::app()->user->getId()) != null) echo user::model()->findByPk(Yii::app()->user->getId())->username; ?></div><br/>
    
    <table>
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'><span class="required">*</span> Topic</div>
            </td>
<?php // Topic ?>              
            <td>
                 <?php                 echo $form->textFieldControlGroup($model, 'topic', array('label' => false), array('class')                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */

                        );
                 ?>

            </td>   
        </tr>
        
<?php // Detail ?>         
        <tr>
            <td class="firstrow">
                <div style='<?php echo $labelStyle; ?>'>รายละเอียด</div>
            </td>
            <td>
                <?php                echo $form->textAreaControlGroup($model, 'detail', array('label' => false, 'span' => 4, 'rows' => 3)
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


<!--<form id="stylepost">-->
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
        'id' => 'stylepost',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

 <div class="post_write">
    <div class="post_write_title">
        &nbsp;&nbsp;&nbsp;
        เขียนแสดงความคิดเห็น
    </div>

    <?php
  
      $this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
                'name' => 'redactortest'
  ));
  ?>
 
  <div id="newsubmit" class="flat_red_submitbtn float_btn">Submit</div>
</div>
<?php $this->endWidget(); ?>  
