<?php 


$create       = "$modelname/create";
$update       = "$modelname/savefield";
$updateunique    = "$modelname/savefieldUnique";
$_gridView = "$modelname/_gridView";
$remove = "$modelname/remove";
$approve = "$modelname/approve";

$createurl      = $this->createUrl($create); 
$updateurl      = $this->createUrl($update); 
$updateuniqueurl      = $this->createUrl($updateunique); 
$crateloadurl  = $this->createUrl($_gridView);
$delurl  = $this->createUrl($remove); 
$approveurl  = $this->createUrl($approve); 

          //  Check that user pass parameter "tableStayle" or not 
          //  If NOT tableStyle is set to default: table_view1 and tablewidth is set to 900px 
if(!isset($tableStyle)){
    $tableStyle = 'table_view1';
}
if(!isset($tablewidth)){
    $tablewidth = '900px';
}



?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>



<style>
    input{
        width: 70px !important; 
    }
    #dropDown{
        width:70px;
    }
    
    
</style>

<script type="text/javascript">    
     (function($) {
        $.fn.focusToEnd = function() {
            return this.each(function() {
                var v = $(this).val();
                $(this).focus().val("").val(v);
            });
        };
    })(jQuery);
 
     $(function(){
   
   
        var num=1;
        var addnum = '1';

         
        $('.approvebtn').click(function(){
              // SET DAT FIELD  
                   var updateurl = '<?php echo $approveurl; ?>'; 
                   var pk = $(this).data('pk'); 
                   var name = 'pointmanagement'; 
                   var type = ''; 
     
                   //var inputid = "#select_"+name+"_"+pk; 
                   var updateid = "row_"+pk;
                   var updateplace = "#row_"+pk;
                   var newvalue = "";

                  saveapprove(updateurl,pk,name,newvalue,updateplace);
              
              
         });
        
        
        $("#dropDown").change(function(){
            num = parseInt($(this).val());
            num = num + 1;
            addnum = num.toString();
           
        });
        
        $('#editable_table').one('click',function(){ 
              var url='<?php echo $createurl; ?>'; 
             // var loadurl='<?php //echo Yii::app()->request->baseUrl."/protected/view/category/_gridView.php"; ?>'; 
              var loadurl='<?php echo $crateloadurl; ?>'; 
              var updatedisplay = "#theGrid";
              createGrid(url,updatedisplay,addnum);           
        });
         $('.td_select').change(function(){
              // SET DAT FIELD  
                   var updateurl = '<?php echo $updateurl; ?>'; 
                   var pk = $(this).parent().data('pk'); 
                   var name = $(this).parent().data('name'); 
                   var type = $(this).parent().data('type'); 
                   var url = $(this).parent().data('url'); 
                   
                   var colwidth = $(this).parent().data('colwidth');
                  
                   var inputid = "#select_"+name+"_"+pk; 
                
                   var updateid = "row_"+pk;
                 
                  var newvalue = $(inputid).val();
                  
                  saveajaxselected(updateurl,pk,name,newvalue);
              
              
         });
        
       
         $('.td_text').click(function(){ 
             
                // SET DAT FIELD  
                   var updateurl = '<?php echo $updateurl; ?>'; 
                   var updateuniqueurl = '<?php echo $updateuniqueurl; ?>'; 
                   var pk = $(this).data('pk'); 
                   var name = $(this).data('name'); 
                   var type = $(this).data('type'); 
                   var url = $(this).data('url'); 
                   var value = $(this).data('value');
                   var colwidth = $(this).data('colwidth');
                   var inputid = "autoinput_"+name+"_"+pk; 
                   var setunique = $(this).data('setunique');  
                   var updateplace = "#"+name+"_"+pk;
                   var updateid = "row_"+pk;
                   
                  

                   $(this).html("<input type='text' id='"+inputid+"'  class='autoinput'  style=' padding:0;  box-shadow: none; border:none; height:100%; width: 90% !important;' value='"+value+"' data-pk='"+pk+"' data-name='"+name+"' data-url='"+url+"' data-colwidth='"+colwidth+"' />");
                   $('#'+inputid).focusToEnd();
                   $('#'+inputid).click(function(e){
                      e.stopPropagation(); 
                    });
                    
                   function saveoption(pk,name,newvalue,updateplace,setunique){
                        if(setunique == true){
                           saveajax_unique(updateuniqueurl,pk,name,newvalue,updateplace);
                        }
                        else{
                           saveajax(updateurl,pk,name,newvalue,updateplace);
                        }
                   }
                    $('#'+inputid).blur(function(){ 

                         var newvalue = $(this).val();
                         saveoption(pk,name,newvalue,updateplace,setunique);
                         //saveajax(updateurl,pk,name,newvalue,updateplace);
                       

                    });
                    $('#'+inputid).keypress(function(e){ 
                        if(e.keyCode == 13){
                            var newvalue = $(this).val(); 
                            saveoption(pk,name,newvalue,updateplace,setunique);
                            //saveajax(updateurl,pk,name,newvalue,updateplace);
                        }

                    });       
        });
      
        
                       
        $(".del").one('click',function(){
                   var delurl='<?php echo $delurl; ?>'; 
                  var click_id = $(this).data('id');   
                  var click_name = $(this).attr('id');
                  var clickclick = "#"+click_name;
                  var click_row = $(this).parent().parent().parent().attr('id');

                  deleteRow(delurl,click_id,clickclick,click_row);

      });
     
/*         
          var data_type = $('#superuser').data('type');
          var data_pk = $('#superuser').data('pk');
          var data_url = $('#superuser').data('url');
          var data_attribute = $('superuser').data('attribute');
*/     
       
        $('.changable').editable();
       
     });
</script>

 <ul class="inline_view" style="float:right">
     <li style="width:60px;">
         <div id="rowload" style="width:30px;height:30px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
     </li>
    
    <li style="width:60px;"> 
     <!-- <div id="number"  ><?php //echo TbHtml::dropDownList('dropDown', '', array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10')); ?></div> -->
    </li>
    <li style="width:100px;"> 
   <!--   <div id = 'editable_table'  ><?php// echo TbHtml::submitButton('Add New', array('color' => TbHtml::BUTTON_COLOR_PRIMARY))?></div> -->
    </li>
 </ul> 
 
   
 
 
 <form id="fake" method="post">
    
</form>
<!--
<a href="#" class="changable" id="username" data-type="text" data-pk="10" data-url='<?php echo $path; ?>' data-title="Enter username">superuser</a>
-->


<?php
/*
                   
   <a href="#" id='cateogry_10'  data-name='name'   data-type='text' data-pk='10' data-url='<?php echo $path;?>'>superuser</a>
   <a href="#" id='cateogry_15'   data-name='name'   data-type='text' data-pk='15' data-url='<?php echo $path;?>'>superuser</a>
*/
?>
<br/>

<table  class='<?php echo $tableStyle ; ?>'  style="width: <?php echo $tablewidth; ?>;" >
            <thead>
                <tr class='table_view1_header'>
<!-- ----------------------- TABLE HEADER ----------------------------- -->                   
<?php                
                     foreach($gridColumn as $_column){ 
                        if(!isset($_column['colwidth'])){
                             $_column['colwidth'] = '10px';
                         }
 ?>
                        <th class='table_model' style='width: <?php echo $_column['colwidth']; ?>'>
<?php
                            echo CHtml::encode($_column['header']);
?>
                        </th>
<?php
                     }
?>
        <?php
           /*
                       <th class='table_model' style='max-width:20px !important;'>
                           
                       </th>
            * 
            */
        ?>
                       <th class='table_model' style='width:80px !important;'>                      
                       </th>
                       
                       <th class='table_model' style='width:80px !important;'>
                          
                       </th>
                        
                </tr>
            </thead>
<!-- -----------------------END OF TABLE HEADER ----------------------------- -->     
           <tbody>
<!-- ----------------------- TABLE BODY ------------------------------------- -->               
<?php            
                    $i = 1;     
                     foreach($model as $_model){ 
// Check status , Display records if status is pending                         
                         if($_model->status == 'pending')
                         {
 ?>
                     <tr  id='<?php echo "row_$_model->id"; ?>' >      
<?php                
                     foreach($gridColumn as $_column){

 ?>
                                    <td style="width: <?php echo $_column['colwidth']; ?>">
                                  
                                            &nbsp;
                                                              
                                             <?php 
// if field can be editable                                              
                                                      if($_column['editable'] == true){
//  Check this column is set to UNIQUE or not                                   
                                                          if(isset($_column['setunique'])){$setunique = true;}else $setunique = false;                                             
                                                          if($_column['type'] == 'select'){
//  UPDATE SELECT      
?>                                                                  <div id='<?php echo $_column['name']."_".$_model->id ;?>' class="td_select" style="max-width:<?php echo $_column['colwidth']; ?> ;width:100%" data-pk='<?php echo $_model->id; ?>' data-name='<?php echo $_column['name']; ?>'  data-type='<?php echo $_column['type'];  ?>' data-url='<?php echo $path;?>' data-value='<?php echo $_model->getAttribute($_column['name']);?>' data-colwidth ='<?php echo $_column['colwidth']; ?>'  >
                                                                    <select id='<?php echo "select_".$_column['name']."_".$_model->id ;?>' name="td_select"  style="width:100%; height:30px; font-size:18px !important" class="inputtext td_select" >
                                                                           <?php

                                                                                 $list = array();  
                                                                                 $refmodel = $_column['source']['sourcename'];
                                                                                 $callmodel = new $refmodel;
                                                                                 $modellist = $callmodel->findAll();
                                                                                 $all = 0;
                                                                                  echo "<option value='$all' style='font-size:18px !important'>Empty</option>";
                                                                                         foreach($modellist as $mod){
                                                                                             //echo $_model->getAttribute($_column['name']);
                                                                                             if($mod->id == $_model->getAttribute($_column['source']['sourcename']))
                                                                                                 echo "<option value='$mod->id' style='font-size:18px !important' selected>".$mod->name."</option>";
                                                                                             else
                                                                                                echo "<option value='$mod->id' style='font-size:18px !important'>".$mod->name."</option>"; 

                                                                                         }
                                                                          ?>              
                                                                  </select>                             

                                                                  <div class='td_select'></div>    
                                                                  
                                                                  
<?php
                                                          
?>
                                                
                                        <?php                               
                                                       }else{ // Else of SELECT
                                                            
                                         ?>
                                                           
                                                                       <?php                                  
                                                              
//  UPDATE INPUTTEXT                                                         
//  (if no input)
                                                                        if($_model->getAttribute($_column['name']) === null || $_model->getAttribute($_column['name']) == ""  ){             
                                            ?>
                                                                                 <div id='<?php echo $_column['name']."_".$_model->id ;?>' class="td_text redtext" style="max-width:<?php echo $_column['colwidth']; ?> ;width:100%" data-pk='<?php echo $_model->id; ?>' data-name='<?php echo $_column['name']; ?>'  data-type='<?php echo $_column['type'];  ?>' data-url='<?php echo $path;?>' data-value='<?php echo $_model->getAttribute($_column['name']);?>' data-colwidth ='<?php echo $_column['colwidth']; ?>' data-setunique='<?php echo $setunique; ?>' >
                                             <?php                                  echo "<span style='color:rgb(190,80,77)'>";
                                                                                    echo "Empty";
                                                                                    echo "</span>";
//  (if there is string)                                                                    
                                                                        }else{

                                                                                
                                         ?>                       
                                                                                <div id='<?php echo $_column['name']."_".$_model->id ;?>' class="td_text" style="max-width:<?php echo $_column['colwidth']; ?> ;width:100%" data-pk='<?php echo $_model->id; ?>' data-name='<?php echo $_column['name']; ?>'  data-type='<?php echo $_column['type'];  ?>' data-url='<?php echo $path;?>' data-value='<?php echo $_model->getAttribute($_column['name']);?>' data-colwidth ='<?php echo $_column['colwidth']; ?>' data-setunique='<?php echo $setunique; ?>'>
                                         <?php                                      echo "<span style='color:rgb(79,129,189)'>";
                                                                                    echo CHtml::encode($_model->getAttribute($_column['name']));
                                                                                    echo "</span>";
                                         
                                                          
                                         
                                                                       }
                                        ?>                   
                       
                                                             
 
                                       <?php                   }  // End of SELECT  ?>
                                        <?php           
                                                      }else{  // Else of ediable
                                         ?>
                                                          <div id='<?php echo $_column['name']."_".$_model->id ;?>'  style="max-width:<?php echo $_column['colwidth']; ?> ;width:100%" data-pk='<?php echo $_model->id; ?>' data-name='<?php echo $_column['name']; ?>'  data-type='<?php echo $_column['type'];  ?>' data-url='<?php echo $path;?>' data-value='<?php echo $_model->getAttribute($_column['name']);?>' data-colwidth ='<?php echo $_column['colwidth']; ?>' >
                                         <?php  
                                                              // Check that there is relation or NOT
                                                              if(isset($_column['relation']['relatedtable'])){
                                                                            //  Load new model
                                                                           $newmodel = new $_column['relation']['relatedtable'];  
                                                                           // Find the element using ID
                                                                           $relatedmodel = $newmodel->findByPk($_model->getAttribute($_column['name']));
                                                                           if($relatedmodel != null){
                                                                                echo CHtml::encode($relatedmodel->getAttribute($_column['relation']['attr']));
                                                                           }else{
                                                                               echo "-";
                                                                           }

                                                                          // if relate to USER MODEL have to show USERNAME, Otherwise show NAME
                                                            /*            
                                                                           if($_column['relation'] == 'user'){
                                                                              if($newmod != null){
                                                                                    echo CHtml::encode($newmod->username);
                                                                              }
                                                                          }else{
                                                                              echo CHtml::encode($newmod->name);  
                                                                          }
                                                             * 
                                                             */
                                                              }else{
                                                                  echo CHtml::encode($_model->getAttribute($_column['name']));
                                                              }
                                                      }   // End of ediable
                                            
                                                  
                                                     
                                          ?>                  

                                   </div>  

                               </td>
<?php
                     }  // End of foreach COLUMN
?>
                                
        <?php
        /*
                   <td><center>
                          <?php 
                                 
                                  echo CHtml::link("<div class='update' style='width:20px !important'>&nbsp;</div>",array("item/update",'id'=>$_model->id),array('style'=>'text-decoration: none'));
                          ?>
                              
           
                   </center></td>
         * 
         */
                   
        ?>           
                                                                                
                   <td style=""><center>
                                <div  class='approvebtn' id='del_<?php echo $_model->id; ?>' data-pk='<?php echo $_model->id ; ?>'>&nbsp;&nbspApprove&nbsp;&nbsp</div>
           
                   </center></td>
                   
                    <td style=""><center>
                                <div  class='cancelbtn' id='del_<?php echo $_model->id; ?>' data-pk='<?php echo $_model->id ; ?>'>&nbsp;&nbspCancel&nbsp;&nbsp</div>
           
                   </center></td>
             </tr>
<?php
                } // End of if :: status check
                    }  // End of foreach ROW
?>               
                </tbody>
<!-- -----------------------END OF TABLE HEADER ----------------------------- -->                 
           </table>
