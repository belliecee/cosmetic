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

//if($givingscore == null){
//    $givingscore = "";
//} 
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
            
            
            $('.search_button').click(function(){
                $("#searchReview").submit();
            
            });
            
            
             $('.follow_btn').click(function(){
                var thisid = $(this).attr('id'); 
                var other = $("#"+thisid).data('other');
               
                var thisother = "follow_"+other;
                if(thisid !== thisother){
                    return 0;
                }
                var result = "<div  class='btn btn-primary' style='width:150px;font-weight: bold;' disabled='disabled'>Following</div>";
                var url = '<?php echo $this->createUrl('user/addfollow'); ?>';
               
                
                  $("#centerbuttons_"+other).html(" <div  class='btn btn-primary' style='width:150px;font-weight: bold;' disabled='disabled'>Following</div>");

                 addfollow(url,other,"#centerbuttons_"+other,result);
             });
//  End of addfollow             
             $('.follow_container').mouseover(function(){ $(this).find('.unfollow').show(); });
             $('.follow_container').mouseleave(function(){ $(this).find('.unfollow').hide(); });
             
             $('.unfollow').click(function(){
                    //$("#removefromlist").submmit();
                     var unfollowurl = '<?php echo $this->createUrl('user/unfollow'); ?>';
                     var user_id =  $(this).data("user_id");
                     var other_id = $(this).data("other_id");
                     var container = $(this).parent().parent();
                    
                     
                      //container.hide();
                                         
                    $.ajax({           url: unfollowurl, 
                                       data: {user_id:user_id,other_id:other_id},
                                       type: 'get',
                                       beforeSend: function(){$("#loadmodal").show(); $('body').addClass('hideoverflow');},                                    
                                       success: function(){ $("#loadmodal").hide(); $('body').removeClass('hideoverflow'); container.hide();}
                    }); 
             });
             
            
            
            
       });


        
  </script>

<style>
    div.pager{
        
        clear:both ; margin-top: 20px !important;display: block !important; width:100% !important; 
            
    }
    
    

   

</style>




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
<!-- PLATE 1  --> 
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
                <div class=" light_grey_1" style="float:left;padding-top:5px;">Follwer Name</div> 
                  <input type="text" name="follower_name" class="form-control"    id="follower_name" style="margin-left:10px;float:left;width:300px;">
                          
              </div>
         
            
             
            </div>
          </form>      
<!-- Search Button -->      
      <div class="search_button light_grey_1"> Search </div>
        
    </div> <!-- END OF CONTAINER Refine Search   -->  
        
<!-- End of PLATE 1  -->  


<!-- PLATE 2  --> 
     <div  style="margin-top:20px; width:650px;min-height: 250px;" class="mypage_content">
           
            <div style="margin: 0 auto !important;">
                    
                    <?php
                              
                     
                                $this->widget('zii.widgets.CListView', array(
                                  'dataProvider'=>$dataProvider,
                                  'itemView'=>'_followlist',
                                    
                              )); 




                     ?>
             
            </div>
            
    </div> 
<!--  END OF PLATE 2  -->  
    
    
</div> <!--  END OF FOLLOW LIST CONTENT  -->
         
</div>




</div>

  