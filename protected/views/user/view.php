<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>


<?php
/* @var $this UserController */
/* @var $model user */

   $iam = user::model()->findByPk(Yii::app()->user->getId());
   $labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;color:#666";

?>
<style>
    .editable:hover {text-decoration: underline;}
    
</style>
<script>
       $(function(){
           
           $('.item_container').mouseover(function(){
                $(this).find('.item_footer').show(); 
           });
            $('.item_container').mouseleave(function(){
                $('.item_footer').hide(); 
           });
           $('#myModal').modal(options);
           
           $("#following_button").click(function(){
              // $(this).removeClass("background_purple").addClass("background_white").addClass("border_purple");
              
               var button_string = $("#following_inner").html();
               alert(button_string);
               if(button_string === "Follow"){
                    $("#following_inner").html("Following");
                }else{
                    $("#following_inner").html("Follow");
                }
              
           });
           
            $("#voteuser_button").click(function(){
                 var button_string2 = $("#voteuser_inner").html();
                   if(button_string2 === "Vote to this user"){
                    $("#voteuser_inner").html("Voted");
                    }else{
                        $("#voteuser_inner").html("Vote to this user");
                    }
            });
       });
    
</script>




<div class="content_container" style="min-height: 800px;">

<div id="theGrid" style="margin-left:0;">


<!---------------------------------- HEADER  ------------------------------------>
   <?php 
            $this->renderPartial('header',array('model'=>$model)); 
   ?>
<!---------------------------------- HEADER  ------------------------------------>

<br/>

<!---------------------------------- LEFT SIDE BAR  ------------------------------------>
   <?php 
            $this->renderPartial('leftsidebar',array('model'=>$model,'reviewmodel'=>$reviewmodel)); 
   ?>
<!---------------------------------- LEFT SIDE BAR  ------------------------------------>

<?php

// REVIEW CONTENTแนะนำตัวเอง 

?>




<!-- RIGHT SIDE --> 
<!-- SELF-INTRODUCE  --> 


<div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:400px;">

<!-- PLATE 1  --> 
     <div id="detail_container" style="margin-top:20px; width:650px;min-height:250px; border:rgb(217,217,217) 1px solid;">
           <div style="width:620px;padding-left:30px; ;padding-bottom: 10px;border-bottom:rgb(166,166,166) dashed 1px ; margin: 20px 20px 0 0;color:rgb(52,172,139);font-family:'Angsana New','tahoma'; font-size:22px; font-weight: bold;  padding-top:10px;">
               แนะนำตัวเอง
<!--EDIT BUTTON  -->
           <?php if($model->id == Yii::app()->user->getId()){ ?>
               <a href='<?php echo $this->createUrl("user/editableview",array("membername"=>$model->username)) ; ?>'><div style='color:#777;font-size:14px; font-family: "Helvetica";float:right;cursor:pointer;' class='editable'><i class=" fa fa-pencil"></i>&nbsp;Edit</div></a>
                   
               <a href='<?php echo $this->createUrl("user/updateinfo",array("membername"=>$model->username)) ; ?>'><div style='color:#777;font-size:14px; font-family: "Helvetica";float:right;cursor:pointer;margin-right:30px;' class='editable'><i class=" fa fa-pencil"></i>&nbsp;แก้ไขข้อมูลส่วนตัว</div></a>
           <?php } ?>
           </div> 
            <div class="greeting_container"  style="color:#777;width:550px;margin: 0 auto; margin-top: 20px;">
              
                    <?php 
                           
                             echo $model->greeting;
                            
                    ?>
            </div>
         
 

         
 
        
    </div> <!--  END OF REVIEW CONTAINER  -->  

    <div id="detail_container" style="margin-top:20px; width:650px;min-height:150px; ">    
                <div class="col-lg-12" style="width:100%;padding:0;margin:0;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">
                      Socialized
<!--EDIT BUTTON  -->
                         <a href='<?php echo $this->createUrl("user/editableview",array("membername"=>$model->username)) ; ?>'><div style='font-weight:bold;color:#777;font-size:14px; font-family: "Helvetica" ; float:right;cursor:pointer' class="editable"><i class=" fa fa-pencil"></i>&nbsp;Edit</div></a>
                  </div>
                  <div class="panel-body" style="min-height: 120px;"> 
                        
                            <div class="col-lg-2 text-center">
                                <a href='<?php echo $model->facebook; ?>'>
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175765_Facebook.png" width="200" height="200" />
                                </a>   
                                </div>
                            <div class="col-lg-2 text-center">
                              <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175760_Google_Plus.png" width="200" height="200" />
                                       
                            </div>
                      
                            <div class="col-lg-2 text-center">
                                
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175783_Twitterbird.png" width="200" height="200" />    
                           
                            </div>
                            <div class="col-lg-2 text-center">
                             <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175793_Instagram.png" width="200" height="200" />
                                    
                          </div>  
                          <div class="col-lg-2 text-center">
                             <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175806_Pinterest.png" width="200" height="200" />         
                          </div>   
                           <div class="col-lg-2 text-center">
                             <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175778_YouTube_Play.png" width="200" height="200" />           
                          </div>      
                </div> <!-- panel-body-->
                </div>
          </div>  <!--col-lg-12-->
        
   
    
</div> <!--  END OF Socialized  -->
<!--
 <div id="detail_container" style="margin-top:20px; width:650px;min-height:50px; ">    
                <div class="col-lg-12" style="width:100%;padding:0;margin:0;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">Say Hello !</div>
                 
                </div>  panel-body
                </div>
          </div>  col-lg-12
        
   
    
</div>   END OF Say hello  



<div id="comment_container" style="margin-top:20px; width:650px;min-height:250px; background-color:white !important;">    
     
</div>   END OF REVIEW COMMENT  -->


</div>
</div>
</div>  <!-- CONtent_container -->