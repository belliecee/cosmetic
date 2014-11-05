<?php
/* @var $this BrandController */
/* @var $model brand */
/* @var $form CActiveForm */

$labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;";
?>
<script>
         $(function(){
             
                
                //var delpic = '<?php //echo $this->createUrl('user/deletepic'); ?>';
                //var item_id = '<?php //echo $model->id; ?>';
               

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
                            <div style='<?php echo $labelStyle; ?>'>ชื่อแบรนด์ : </div>
                        </td>
                        <td>
                            <?php
                            echo $form->textFieldControlGroup($model, 'name', array('label' => false,)
                                    /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                            );
                            ?>
                        </td>   
                    </tr> 
                         <tr id="imagerow">
                            <td>

                                <div style='<?php echo $labelStyle; ?>'>รูปภาพ : </div><br/><br/>

                            </td> 
                            <td>

                                <?php

                                        $dir = Yii::app()->baseUrl.'/brandimgs';
                                        if($model->brand_img != null){
                               ?>           
                                            <div  id="rev" class="removepic del" style="float:right;background-size:16px 16px;"></div>
                               <?php        $path = $dir.'/'.$model->brand_img;  ?>
                                           
                                            <img src='<?php echo $path; ?>' style="width:150px;height:60px" > 
                                            
                                            
                <!--                          <div style="background-position:center;background-repeat:no-repeat;background-size: auto 300px;background-image:url('<?php //echo $path; ?>') ;  width:300px;height:300px" ></div>-->

                              <?php           

                                       }else{
                                              echo $form->fileField($model, 'brand_img', array('label' => false), array('class')
                                               
                                               /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                                            );
                                       }
                                ?>
                                      <br/><br/><span style="color:#999">ขนาดของภาพแนะนำ 160px X 55px</span> 
                            </td>
                        </tr>
            </table>
    
    <!--<div class="red_title" style="font-size: 22px;  font-family: 'angsana new','Calibri'; border-width: 0 0 1px 0; border-style: dotted; border-color: rgb(217,217,217); padding-left:20px;">Step2: เพิ่มสินค้า</div><br/>-->
    
<?php
    echo TbHtml::formActions(array(
        TbHtml::submitButton('Save', array('style'=>'float:right;margin-right:20px;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        
    ));
    ?>
    
</fieldset>


<?php $this->endWidget(); ?>

 
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
    
