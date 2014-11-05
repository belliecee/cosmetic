
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>

<div id='actionmsg' style='display:none; width:900px; position:fixed;margin-left: 150px; top: 0;'>
        <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Well done! You successfully read this important alert message.'); ?>
</div>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if($givingscore == null){
    $givingscore = "";
} 
?>
<script>    
       $(function(){
            $('.votebtn').click(function(){
                 // alert($(this).attr("id"));
                 var updateurl = '<?php echo $this->createUrl('review/updatevote'); ?>';
                 var pk = $(this).data('id');
                 var elmid = $(this).attr('id');
                 var score = '1';
                 
                 elmid = "#"+elmid;
                
                 updatescore(updateurl,pk,"reviewvote",score,elmid);
            });
            
            var givingscore = '<?php echo $givingscore; ?>';
            //alert(givingscore);
            $("#searchbyscore").val(givingscore);
            
            $('.search_button').click(function(){
                $("#searchReview").submit();
            
            });
            
            
       });
</script>




<div class="content_container" style="min-height: 1100px;">

<div id="theGrid" style="margin-left:0;">


<!---------------------------------- HEADER  ------------------------------------>
   <?php 
            $this->renderPartial('header',array('model'=>$model)); 
   ?>
<!---------------------------------- HEADER  ------------------------------------>
 <?php 
            //$this->renderPartial('refinesearch',array('model'=>$model)); 
   ?>
<!---------------------------------- HEADER  ------------------------------------>
<br/>
<!---------------------------------- LEFT SIDE BAR  ------------------------------------>
   <?php 
            $this->renderPartial('leftsidebar',array('model'=>$model,'reviewmodel'=>$reviewmodel)); 
   ?>
<!---------------------------------- LEFT SIDE BAR  ------------------------------------>

<?php

// REVIEW CONTENT

?>

<!-- END OF LEFT SIDE  -->


<!-- RIGHT SIDE --> 

<div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:600px;">

<!-- Refine Search  --> 
    <div class="refinesearch_container">
<!-- Header -->             
            <div class='search_header'>
               Refine Search
               
            </div>
               
<!-- body -->  
          <form id="searchReview" method="POST">
            <div class="search_body">
              <div style="float:left;">
                <div class=" light_grey_1" style="float:left;padding-top:5px;">Brand</div> 
                  <select name="searchbybrand" class="form-control"    id="searchbybrand" style="margin-left:10px;float:left;">
                          <?php
                                
                     
                               $brands = array("Shisedo","ZA","Guess");

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($brands as $_brand){
                                    echo "<option class='form-control' value='".$_brand."'>".$_brand."</option>";
                                 }
                                  
                         ?>              
                  </select>
              </div>
         
              <div style="float:left;margin-left:20px">
                 <div class=" light_grey_1" style="float:left;padding-top:5px;">ให้คะแนน</div> 
                 <select name="searchbyscore" class="form-control"    id="searchbyscore" style="margin-left:10px;float:left;width:100px;">
                          <?php
                                
                     
                               $score = array("1","2","3","4","5");

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($score as $_score){
                                    
                                     echo "<option class='form-control' value='".$_score."'>".$_score." ดาว</option>";    
                                }
                                 
                                  
                         ?>              
                  </select>
              </div>
            </div>
          </form>      
<!-- Search Button -->      
      <div class="search_button light_grey_1"> Search </div>
        
    </div> <!-- END OF CONTAINER Refine Search   -->  
        
<!-- PLATE 1  -->  


    <!-- PLATE 2  --> 
     <div  style="margin-top:20px; width:650px;min-height: 200px;" class="mypage_content">
           
            <div>
                    
                    <?php
                              
                     
                                $this->widget('bootstrap.widgets.TbListView', array(
                                  'dataProvider'=>$dataProvider,
                                  'itemView'=>'_lastestreview',
                              )); 




                        ?>
            </div>
        
    </div> <!--  END OF PLATE 2  -->  
    
    
</div> <!--  END OF REVIEW CONTENT  -->
         
</div>





</div>

