<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>


<?php
/* @var $this UserController */
/* @var $model user */

   $iam = user::model()->findByPk(Yii::app()->user->getId());
   $labelStyle = " float:right;margin: 0 10px 0 0; font-weight:bold;color:#666";
  if($model->greeting==null || $model->greeting == ""){ $greeting = "";}else{$greeting = $model->greeting;}
  if($model->facebook==null || $model->facebook == ""){ $greeting = "";}else{$greeting = $model->facebook;}
  if($model->googleplus==null || $model->googleplus == ""){ $greeting = "";}else{$greeting = $model->googleplus;}
   

?>
<script>
       $(function(){
           
// Add model to text field 
//           var greeting = '<?php //echo $greeting; ?>';
          
//           $("#greeting").val(greeting); 
           
             $(".editable_save").click(function(){
               $("#greetingform").submit();
               // $("#user").submit();
            });   
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

// REVIEW CONTENT

?>




<!-- RIGHT SIDE --> 
<!-- SELF-INTRODUCE  --> 


<div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:400px;">

<form method='post' id='greetingform' name="greetingform">
<!-- PLATE 1  --> 
     <div id="detail_container" style="margin-top:20px; width:650px;min-height:250px; border:rgb(217,217,217) 1px solid;">
           <div style="width:620px;padding-left:30px; ;padding-bottom: 10px;border-bottom:rgb(166,166,166) dashed 1px ; margin: 20px 20px 0 0;color:rgb(52,172,139);font-family:'Angsana New','tahoma'; font-size:22px; font-weight: bold;  padding-top:10px;">
               แนะนำตัวเอง
<!--SAVE BUTTON  -->
        <div style="float:right;cursor:pointer" class="editable_save"><a style='width:70px;margin-top:-5px;font-weight:normal; font-size:14px; font-family: "Helvetica";' class="editable_save btn btn-primary">Save</a></div>
          </div> 
            <div class="greeting_container"  style="color:#777;width:550px;margin: 0 auto; margin-top: 20px;">

<!--EDIT GREETING-->
                    <div id="editable_greeting"> 
                        <textarea  id='greeting' name="greeting" style='padding:10px 20px;width:92%;height:140px;'><?php echo $model->greeting ; ?></textarea>
      
                    </div>
                    <?php 
                   
                             //echo $iam->greeting;
                            
                    ?>
            </div>
         
 

         
 
        
    </div> <!--  END OF REVIEW CONTAINER  -->  

    <div id="detail_container" style="margin-top:20px; width:650px;min-height:400px; ">    
                <div class="col-lg-12" style="width:100%;padding:0;margin:0;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">Socialized
                       
                  </div>
                  <div class="panel-body" style="min-height: 120px;"> 
                      <table>
                           <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175765_Facebook.png" style="width:100px;height:100px;" />

                                    </td>
                                    <td><input type="text" class="myform01"  id="facebook"  name="facebook" placeholder="http://www.facebook.com" value='<?php echo $model->facebook ; ?>' /> </td>

                           </tr>    
                           <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175760_Google_Plus.png" style="width:100px;height:100px;"/>

                                    </td>
                                    <td><input type="text" class="myform01" id="googleplus"  name="googleplus" placeholder="http://www.googleplus.com" value='<?php echo $model->googleplus ; ?>' /> </td>

                           </tr>  
                            <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175783_Twitterbird.png" style="width:100px;height:100px;" />

                                    </td>
                                    <td><input type="text" class="myform01"  id="twitter"  name="twitter" placeholder="http://www.twitter.com" value='<?php //echo $model->facebook ; ?>' /> </td>

                           </tr>
                           <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175793_Instagram.png" style="width:100px;height:100px;" />

                                    </td>
                                    <td><input type="text" class="myform01"  id="instagram"  name="instagram" placeholder="http://www.instagram.com" value='<?php //echo $model->facebook ; ?>' /> </td>

                           </tr>  
                           <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175806_Pinterest.png" style="width:100px;height:100px;" />

                                    </td>
                                    <td><input type="text" class="myform01"  id="pinterest"  name="pinterest" placeholder="http://www.pinterest.com" value='<?php //echo $model->facebook ; ?>' /> </td>

                           </tr>  
                            <tr>
                                    <td class="col-lg-2 text-center">

                                           <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175778_YouTube_Play.png" style="width:100px;height:100px;" />

                                    </td>
                                    <td><input type="text" class="myform01"  id="pinterest"  name="youtube" placeholder="http://www.youtube.com" value='<?php //echo $model->facebook ; ?>' /> </td>

                           </tr>  
                           

<?php
/*


                                 
                                     <div class="col-lg-2 text-center">
                                       <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175806_Pinterest.png" width="200" height="200" />

                                     </div> <br/>

                                     <div class="col-lg-2 text-center">
                                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175778_YouTube_Play.png" width="200" height="200" />    
                                     </div>
                                     <div class="col-lg-2 text-center">
                                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175793_Instagram.png" width="200" height="200" />

                                   </div>  
                                   <div class="col-lg-2 text-center">
                                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175783_Twitterbird.png" width="200" height="200" />         
                                   </div>   
                                    <div class="col-lg-2 text-center">
                                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/1402175756_LinkedIn.png" width="200" height="200" />           
                                   </div>  
 * 
 */
?>
                    </table> 
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



</form>

</div>
</div>
</div>  <!-- CONtent_container -->

