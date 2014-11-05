<?php
/* @var $this UsergroupController */
/* @var $model usergroup */
/* @var $form CActiveForm */


    
            $group = user::model()->findByPk(Yii::app()->user->getId())->auth;
            $auth = usergroup::model()->findByAttributes(array('name'=>$group));
             if($model->id == 1 || $model->id == 2){
                  $dis = true;
                 
             }
             else
                  $dis = false;
      


?>



<script> 
    
    $(function(){
        
        var  thisid = '<?php echo $model->id; ?>';
        if(thisid == 1 || thisid == 2){
            $('.chkbox').attr('disabled', true)
        }
        
        
          
       var check1 = '<?php echo $model->enquiry_read ; ?>';
       var check2 = '<?php echo $model->enquiry_update ; ?>';
       var check3 = '<?php echo $model->enquiry_delete ; ?>';
       
       var check5 = '<?php echo $model->vendorprocess_read ; ?>';
       var check6 = '<?php echo $model->vendorprocess_update ; ?>';
       var check7 = '<?php echo $model->vendorprocess_delete ; ?>';
       
       var check9 = '<?php echo $model->quoh_read ; ?>';
       var check10 = '<?php echo $model->quoh_update ; ?>';
       var check11 = '<?php echo $model->quoh_delete ; ?>';
       
       var check13 = '<?php echo $model->poh_read ; ?>';
       var check14 = '<?php echo $model->poh_update ; ?>';
       var check15 = '<?php echo $model->poh_delete ; ?>';
       
       var check17 = '<?php echo $model->deposit_read ; ?>';
       var check18 = '<?php echo $model->deposit_update ; ?>';
       var check19 = '<?php echo $model->deposit_delete ; ?>';
       
       var check21 = '<?php echo $model->potovendor_read ; ?>';
       var check22 = '<?php echo $model->potovendor_update ; ?>';
       var check23 = '<?php echo $model->potovendor_delete ; ?>';
       
       var check25 = '<?php echo $model->delivery_read ; ?>';
       var check26 = '<?php echo $model->delivery_update ; ?>';
       var check27 = '<?php echo $model->delivery_delete ; ?>';
       
       var check29 = '<?php echo $model->payment_read ; ?>';
       var check30 = '<?php echo $model->payment_update ; ?>';
       var check31 = '<?php echo $model->payment_delete ; ?>';
      
      
       if(check1 == 1)
       {
           $("#check1").attr('checked', true);
       }
       if(check2 == 1)
       {
           $("#check2").attr('checked', true);
       }
       if(check3 == 1)
       {
           $("#check3").attr('checked', true);
       }
       if(check5 == 1)
       {
           $("#check5").attr('checked', true);
       }
       if(check6 == 1)
       {
           $("#check6").attr('checked', true);
       }
       if(check7 == 1)
       {
           $("#check7").attr('checked', true);
       }
       
       if(check9 == 1) $("#check9").attr('checked', true);
       if(check10 == 1) $("#check10").attr('checked', true);
       if(check11 == 1) $("#check11").attr('checked', true);
     
     
       if(check13 == 1) $("#check13").attr('checked', true);
       if(check14 == 1) $("#check14").attr('checked', true);
       if(check15 == 1) $("#check15").attr('checked', true);
       
       if(check17 == 1) $("#check17").attr('checked', true);
       if(check18 == 1) $("#check18").attr('checked', true);
       if(check19 == 1) $("#check19").attr('checked', true);
       
       if(check21 == 1) $("#check21").attr('checked', true);
       if(check22 == 1) $("#check22").attr('checked', true);
       if(check23 == 1) $("#check23").attr('checked', true);
       
       if(check25 == 1) $("#check25").attr('checked', true);
       if(check26 == 1) $("#check26").attr('checked', true);
       if(check27 == 1) $("#check27").attr('checked', true);
      
       if(check29 == 1) $("#check29").attr('checked', true);
       if(check30== 1) $("#check30").attr('checked', true);
       if(check31 == 1) $("#check31").attr('checked', true);
         

       
  
    });
</script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usergroup-form',
	'enableAjaxValidation'=>false,
)); ?>

	


	<div class="row">
            <b>Name: </b>&nbsp;&nbsp;&nbsp;
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64,'class'=>'chkbox')); ?>
		<?php echo $form->error($model,'name'); ?>
            <?php echo $form->hiddenField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

<div class="row">
                            

 
<!------------------ Quotation DETAIL  ------------------->
        
        <?php   $usergroup = usergroup::model()->findAll(); ?>
        
   
               <div  class="ui-widget">
                <table  class="table_view1">
                  <thead>
                    <tr class="table_view1_header">
                      <th  style="min-width:200px;">Page</th>
                      <th  style="min-width:100px;">Read</th>
                      <th  style="min-width:100px;">Edit</th>
                      <th style="min-width:100px;">Delete</th>
                    
                    
                    </tr>
                  </thead>
              <!--    <div id='<?php //echo $showquod; ?>' > -->
                  <tbody>
                      <form method="post">

                            <tr  class="table_tr_quod" >
                                  <td><center>Enquiry</center></td>
                                <td><center> <input type="checkbox" name="check1" id="check1" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check2" id="check2" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check3" id="check3" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                               
                             
               
                            </tr>
                            <tr  class="table_tr_quod" >
                                <td><center>Vendor Process</center></td>
                                <td><center> <input type="checkbox" name="check5" id="check5" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check6" id="check6" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox"  /></center></td>
                                <td><center> <input type="checkbox" name="check7" id="check7" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                               
                              
                            </tr>
                            <tr  class="table_tr_quod" >
                                <td><center>Quotation</center></td>
                                <td><center> <input type="checkbox" name="check9" id="check9" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check10" id="check10" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check11"  id="check11" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                             
                             
               
                            </tr>
                            <tr class="table_tr_quod" >
                                <td><center>Purchase Order</center></td>
                                <td><center> <input type="checkbox" name="check13" id="check13" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check14" id="check14" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check15" id="check15" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                               
                             
               
                            </tr>
                            <tr class="table_tr_quod" >
                                <td><center>Deposit</center></td>
                                <td><center> <input type="checkbox" name="check17"  id="check17" style='margin:0;padding:0;width:10px;'  value='1'  class="chkbox"/></center></td>
                                <td><center> <input type="checkbox" name="check18" id="check18" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check19" id="check19" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                              
               
                            </tr>
                            <tr  class="table_tr_quod" >
                               <td><center>PO to Vendor</center></td>
                                <td><center> <input type="checkbox" name="check21" id="check21" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check22" id="check22" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check23" id="check23" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                              
               
                            </tr>
                            <tr  class="table_tr_quod" >
                                <td><center>Shipping & Delivery</center></td>
                                <td><center> <input type="checkbox" name="check25"  id="check25" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check26" id="check26" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox"  /></center></td>
                                <td><center> <input type="checkbox" name="check27" id="check27" style='margin:0;padding:0;width:10px;'  value='1'  class="chkbox"/></center></td>
                              
               
                            </tr>
                            <tr  class="table_tr_quod" >
                                 <td><center>Payment</center></td>
                                <td><center> <input type="checkbox" name="check29"  id="check29" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check30" id="check30" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                                <td><center> <input type="checkbox" name="check31" id="check31" style='margin:0;padding:0;width:10px;'  value='1' class="chkbox" /></center></td>
                               
                            </tr>
                
                      </form>
                  </tbody>
               <!--    </div> -->
                </table>
              </div>
        
        
</div>


	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save',array('class'=>'simple_button')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->