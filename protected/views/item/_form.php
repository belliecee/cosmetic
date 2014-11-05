
<?php
/* @var $this ItemController */
/* @var $model item */
/* @var $form CActiveForm */

//Yii::import('bootstrap.helpers.TbArray');

$labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;";
?>

<script>
         $(function(){
             
                
                var delpic = '<?php echo $this->createUrl('user/deletepic'); ?>';
                var item_id = '<?php echo $model->id; ?>';
               

                $("#removepic_btn").click(function(){ 
                    $.ajax({
                            url: delpic,
                            data: {id:item_id},
                            type: 'get',
                            beforeSend: function(){
                                  $("#myModal").modal('hide');
                                  $("#loadmodal").show();
                                  $('body').css({'overflow':'hidden'});
                                 

                            },
                            success: function(){
                                
                             
                                $("#fake").submit();
                               
                            },
                            error: function() { // if error occured
                                  alert("Delete Quoh Error  occured.please try again");    
                             }
                     }); 
                                    
               }); // End of remove with AJAX 
               
               
             
             
             $("#rev").click(function(){
                  $('#myModal').modal('show')
             });
             
            
          });

</script>
<style>
   
    input,select,textarea{margin-top:10px !important;}
    table tr td:first-child{width:130px;}
    .add-on{margin-top:10px !important;}
    fieldset{
        margin: 10px 0 0 0 ;
        width: 700px !important;
        /*border: 1px dashed rgb(190,235,223);*/
        border: 1px dashed rgb(158,226,207);
    }
</style>

<!--  -------------- MENU BAR  ------------------- -->
<?php
$this->renderPartial("//item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>

<fieldset>

    <div class="red_title" style="font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">Step1: เลือกแบรนด์สินค้า</div><br/>
    
    <table>
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>แบรนด์ : </div>
            </td>
            <td>
                <?php
                echo $form->dropDownListControlGroup($model, 'brand', CHtml::listData(brand::model()->findAll(), 'id', 'name'), array('empty' => 'Select Brand', 'label' => false), array('size' => 3, 'maxlength' => 10));
                ?>
            </td>   
        </tr>
    </table>
    
    <div class="red_title" style="font-size: 22px;  font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">Step2: เพิ่มสินค้า</div><br/>
  

    <table>
        <tr id="imagerow">
            <td>

                <div style='<?php echo $labelStyle; ?>'>รูปภาพ : </div><br/><br/>
             
            </td> 
            <td>
                
                <?php
                       
                        $dir = Yii::app()->baseUrl.'/images';
                        if($model->image != null){
               ?>           
                            <div  id="rev" class="removepic del" style="float:right;background-size:16px 16px;"></div>
               <?php        $path = $dir.'/'.$model->image;  ?>
                           
                            <img src='<?php echo $path; ?>' style="width:200px;height:200px" > 
<!--                          <div style="background-position:center;background-repeat:no-repeat;background-size: auto 300px;background-image:url('<?php //echo $path; ?>') ;  width:300px;height:300px" ></div>-->
                    
              <?php           
             
                       }else{
                              echo $form->fileField($model, 'imgfile', array('label' => false), array('class')
                               /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                            );
                       }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>ชื่อสินค้า : </div>
            </td> 
            <td>
                <?php
                echo $form->textFieldControlGroup($model, 'name', array('label' => false), array('class')
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>
            </td>
        </tr>

       
        <tr>
            <td>

                <div style='<?php echo $labelStyle; ?>'>ประเภทสินค้า : </div>
            </td>
            <td>
                <?php
                echo $form->dropDownListControlGroup($model, 'category', CHtml::listData(category::model()->findAll(), 'id', 'name'), array('empty' => 'Select Category', 'label' => false), array('size' => 3, 'maxlength' => 10));
                ?>
            </td>   
        </tr>
         <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>ราคา : </div>
            </td>
            <td>
                <?php
                echo $form->textFieldControlGroup($model, 'marketPrice', array('label' => false, 'append' => 'บาท')
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>
            </td>   
        </tr> 
    </table>
    <?php
    /*
      <div style='<?php echo $labelStyle; ?>'>Rate</div>
      <?php
      echo $form->radioButtonList($model, 'reviewNum',array(
      '1 ดาว' => '1',
      '2 ดาว' => '2',
      '3 ดาว' => '3',
      '4 ดาว' => '4',
      '5 ดาว' => '5',
      ));
      ?>
      <br/><br/>
     * 
     */
    ?> 

     <div class="red_title" style="font-size: 22px;font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">รายละเอียดจากผู้ผลิด</div><br/>
    
   <table>
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>ผู้ผลิต : </div>
            </td>
            <td>
                <?php
                echo $form->textFieldControlGroup($model, 'maker', array('label' => false)
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>

            </td>   
        </tr> 
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>ปริมาณ : </div>
            </td>
            <td>
                <?php
                echo $form->textFieldControlGroup($model, 'volume', array('label' => false,)
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>
            </td>   
        </tr> 
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>ส่วนผสม : </div>
            </td>
            <td>
                <?php
                echo $form->textFieldControlGroup($model, 'ingredient', array('label' => false,)
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>
            </td>   
        </tr> 

        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>รายละเอียดวิธีใช้ : </div>
            </td>
            <td>            
                <?php
               
                echo $form->textAreaControlGroup($model, 'howtouse', array('label' => false, 'span' => 4, 'rows' => 3,'style'=>'min-width:200px;min-height:200px;')
                        /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                );
                ?>
            </td>   
        </tr> 
        <tr>
            <td>
                <div style='<?php echo $labelStyle; ?>'>หมายเหตุ : </div>
            </td>
            <td>    
                <?php
                echo $form->textAreaControlGroup($model, 'remark', array('label' => false, 'span' => 4, 'rows' => 3)
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









<?php
/*

  <?php echo TbHtml::beginFormTb(); ?>
  <fieldset>
  <legend>Legend</legend>
  <?php echo TbHtml::label('Label name', 'text'); ?>
  <?php echo TbHtml::textField('text', '', array('placeholder' => 'Type something...','style'=>'color:red')); ?>
  <?php echo TbHtml::checkBox('checkMeOut', false, array('label' => 'Check me out')); ?>
  <?php echo TbHtml::submitButton('Submit'); ?>
  </fieldset>
  <?php echo TbHtml::endForm(); ?>

  <div class="form">

  <?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'item-form',
  'enableAjaxValidation'=>false,
  )); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>





  <div class="row">
  <?php echo $form->labelEx($model,'reviewNum'); ?>
  <?php echo $form->textField($model,'reviewNum',array('size'=>10,'maxlength'=>10)); ?>
  <?php echo $form->error($model,'reviewNum'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'avgVote'); ?>
  <?php echo $form->textField($model,'avgVote'); ?>
  <?php echo $form->error($model,'avgVote'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'create_on'); ?>
  <?php echo $form->textField($model,'create_on'); ?>
  <?php echo $form->error($model,'create_on'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'resultVote'); ?>
  <?php echo $form->textField($model,'resultVote'); ?>
  <?php echo $form->error($model,'resultVote'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'marketPrice'); ?>
  <?php echo $form->textField($model,'marketPrice'); ?>
  <?php echo $form->error($model,'marketPrice'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'maker'); ?>
  <?php echo $form->textField($model,'maker',array('size'=>60,'maxlength'=>128)); ?>
  <?php echo $form->error($model,'maker'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'makerComment'); ?>
  <?php echo $form->textArea($model,'makerComment',array('rows'=>6, 'cols'=>50)); ?>
  <?php echo $form->error($model,'makerComment'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'volume'); ?>
  <?php echo $form->textField($model,'volume'); ?>
  <?php echo $form->error($model,'volume'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'ingredient'); ?>
  <?php echo $form->textArea($model,'ingredient',array('rows'=>6, 'cols'=>50)); ?>
  <?php echo $form->error($model,'ingredient'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'remark'); ?>
  <?php echo $form->textArea($model,'remark',array('rows'=>6, 'cols'=>50)); ?>
  <?php echo $form->error($model,'remark'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'facebookLike'); ?>
  <?php echo $form->textField($model,'facebookLike'); ?>
  <?php echo $form->error($model,'facebookLike'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'tweet'); ?>
  <?php echo $form->textField($model,'tweet'); ?>
  <?php echo $form->error($model,'tweet'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'googlePlus'); ?>
  <?php echo $form->textField($model,'googlePlus'); ?>
  <?php echo $form->error($model,'googlePlus'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'create_by'); ?>
  <?php echo $form->textField($model,'create_by',array('size'=>10,'maxlength'=>10)); ?>
  <?php echo $form->error($model,'create_by'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'update_on'); ?>
  <?php echo $form->textField($model,'update_on'); ?>
  <?php echo $form->error($model,'update_on'); ?>
  </div>

  <div class="row">
  <?php echo $form->labelEx($model,'update_by'); ?>
  <?php echo $form->textField($model,'update_by',array('size'=>10,'maxlength'=>10)); ?>
  <?php echo $form->error($model,'update_by'); ?>
  </div>

  <div class="row buttons">
  <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
  </div>

  <?php $this->endWidget(); ?>

  </div><!-- form -->
 * 
 */
?>

<!-- Button to trigger modal -->

 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sure to Remove ?</h3>
  </div>
  <div class="modal-body">
    <p>Are you sure you want to remove this picture ?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button id="removepic_btn" class="btn btn-danger">Remove Picture</button>
  </div>
</div>


<form id="fake"></form>
    