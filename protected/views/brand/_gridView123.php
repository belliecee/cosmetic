<?php 


$create       = "$modelname/create";
$_gridView = "$modelname/_gridView";
$remove = "$modelname/remove";

$createurl      = $this->createUrl($create); 
$crateloadurl  = $this->createUrl($_gridView);
$delurl  = $this->createUrl($remove); 

?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>



<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/xeditable/jqueryui-editable/js/jqueryui-editable.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/js/xeditable/jqueryui-editable/css/jqueryui-editable.css" rel="stylesheet"/>

 

<style>
    input{
        width: 100px !important; 
    }
    #dropDown{
        width:70px;
    }
    
</style>

<script type="text/javascript">    
     $(function(){
        var num=1;
        var addnum = '1';
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

   
<!--   
<div id = 'editable_table'  style="float:right;margin-top: 45px;"  ><?php echo TbHtml::submitButton('Add New', array('color' => TbHtml::BUTTON_COLOR_PRIMARY))?></div>
<div id="number"  style="float:right;margin-top: 45px;margin-right:20px;" ><?php echo TbHtml::dropDownList('dropDown', '', array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10')); ?></div>
<div id="rowload"  style="width:30px;height:30px;float:right;margin-top: 50px;margin-right:20px;" ></div>
 -->
 <ul class="inline_view" style="float:right">
     <li style="width:60px;">
         <div id="rowload" style="width:30px;height:30px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
     </li>
    
    <li style="width:60px;"> 
      <div id="number"  ><?php echo TbHtml::dropDownList('dropDown', '', array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10')); ?></div>
    </li>
    <li style="width:100px;"> 
      <div id = 'editable_table'  ><?php echo TbHtml::submitButton('Add New', array('color' => TbHtml::BUTTON_COLOR_PRIMARY))?></div>
    </li>
 </ul> 
   
 
 
 <form id="fake" method="post">
    
</form>
<!--
<a href="#" class="changable" id="username" data-type="text" data-pk="10" data-url='<?php echo $path; ?>' data-title="Enter username">superuser</a>
-->
<?php 
          //  Check that user pass parameter "tableStayle" or not 
          //  If NOT tableStyle is set to default: table_view1 and tablewidth is set to 900px 
          if(!isset($tableStyle)){
              $tableStyle = 'table_view1';
          }
          if(!isset($tablewidth)){
              $tablewidth = '900px';
          }

?>

<?php
/*
                   
   <a href="#" id='cateogry_10'  data-name='name'   data-type='text' data-pk='10' data-url='<?php echo $path;?>'>superuser</a>
   <a href="#" id='cateogry_15'   data-name='name'   data-type='text' data-pk='15' data-url='<?php echo $path;?>'>superuser</a>
*/
?>

<table  class='<?php echo $tableStyle ; ?>' style='width: <?php echo $tablewidth; ?>' >
            <thead>
                <tr class='table_view1_header'>
<!-- ----------------------- TABLE HEADER ----------------------------- -->                   
<?php                
                     foreach($gridColumn as $_column){ 
                        if(!isset($_column['colwidth'])){
                             $_column['colwidth'] = '150px';
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
                       <th class='table_model' style='width:50px;'>
                           Operation
                       </th>
                        
                </tr>
            </thead>
<!-- -----------------------END OF TABLE HEADER ----------------------------- -->     
           <tbody>
<!-- ----------------------- TABLE BODY ------------------------------------- -->               
<?php            
                    $i = 1;     
                     foreach($model as $_model){ 
 ?>
                     <tr  class='table_tr_quod' id='<?php echo "row_$_model->id"; ?>' >      
<?php                
                     foreach($gridColumn as $_column){ 
 ?>
                                <td>
                                   <center>  
                                     <?php
                                            /*
                                            <?php $id = $modelname."_".$_model->id; ?>
                                           
                                             <a href="#" id='<?php echo $id; ?>' class="changable"  data-name='<?php echo $_column['name']; ?>'   data-type='<?php echo $_column['type']; ?>' data-pk='<?php echo $_model->id; ?>' data-url='<?php echo $path;?>'>superuser</a>
                                            */ 
                                      ?>
                                      
                                             <?php
                                            
                                                      
                                                     
                                                       if($_column['editable'] == true){
                                                          if(isset($_column['source'])){
                                                          // IF it's SELECT, there are SOURCE    
                                                              $this->widget('editable.EditableField', array(

                                                                              'type'      => $_column['type'],
                                                                              'model'     => $_model,
                                                                              'attribute' => $_column['name'],
                                                                              'url'       => $path,
                                                                              'source'    => $_column['source'],
                                                                              'placement' => 'right',

                                                                          ));
                                                              
                                                          }else{
                                                                $this->widget('editable.EditableField', array(

                                                                              'type'      => $_column['type'],
                                                                              'model'     => $_model,
                                                                              'attribute' => $_column['name'],
                                                                              'url'       => $path,
                                                                              'placement' => 'right',

                                                                          ));
                                                          }
                                                      }else{
                                                             // Check that there is relation or NOT
                                                              if(isset($_column['relation'])){
                                                                            //  Load new model
                                                                           $newmodel = new $_column['relation'];  
                                                                           // Find the element using ID
                                                                           $newmod = $newmodel->findByPk($_model->getAttribute($_column['name']));

                                                                          // if relate to USER MODEL have to show USERNAME, Otherwise show NAME
                                                                          if($_column['relation'] == 'user'){
                                                                              if($newmod != null){
                                                                                    echo CHtml::encode($newmod->username);
                                                                              }
                                                                          }else{
                                                                              echo CHtml::encode($newmod->name);  
                                                                          }
                                                              }else{
                                                                  echo CHtml::encode($_model->getAttribute($_column['name']));
                                                              }
                                                      }
                                                     
                                          ?>                  

                                   </center>
                               </td>
<?php
                     }
?>
                                
                                
                   <td><center><span class='del' id='del_<?php echo $_model->id; ?>' data-id='<?php echo $_model->id ; ?>'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></center></td>
             </tr>
<?php
                    } 
?>               
                </tbody>
<!-- -----------------------END OF TABLE HEADER ----------------------------- -->                 
           </table>
