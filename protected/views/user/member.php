<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>


<?php
/* @var $this UserController */
/* @var $model user */

   $iam = user::model()->findByPk(Yii::app()->user->getId());
  
?>
<script>
       $(function(){
           
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

<style>


#detail_container{
    background: rgba(223,245,239,1);
background: -moz-linear-gradient(top, rgba(223,245,239,1) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(223,245,239,1)), color-stop(17%, rgba(255,255,255,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(top, rgba(223,245,239,1) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(top, rgba(223,245,239,1) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(top, rgba(223,245,239,1) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%);
background: linear-gradient(to bottom, rgba(223,245,239,1) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dff5ef', endColorstr='#ffffff', GradientType=0 );

border-radius:10px;
margin: 0;
}

li{
    display: block;
    width: 250px;
    list-style: none;
}


.colLeft
{
  clear:both;
  float: left;
  display: block;
  
  text-align: right ;
  color: #999999;
  font-family: "tahoma";
  font-size: 12px;
   float: right;
}
.colRight
{
  clear:both;
 
  float: left;
  display: block;
  font-family: "tahoma";
  font-size: 12px;
  color: #999999;
 
}



.maker_detail_first .colLeft{
    color: black;
    font-size: 12px;
    font-weight: bold;
}
.maker_detail_first {
    width: 100px;
    color: black;
    border-bottom: 1px solid rgb(217,217,217);
    
    
} 
.maker_detail_second{
    border-bottom: 1px solid rgb(217,217,217);
}
.wraptext{
     
     max-width: 470px;text-overflow: ellipsis;word-wrap: break-word; overflow:hidden;
     
}
.summary{
    display: none;
}
.view{
    border: none !important;
}

</style>



<div class="content_container" style="min-height: 1100px;">

<div id="theGrid" style="margin-left:0;">


<!---------------------------------- HEADER  ------------------------------------>
   <?php 
            $this->renderPartial('header',array('model'=>$model)); 
   ?>
<!---------------------------------- HEADER  ------------------------------------>

<br/>

<?php

// REVIEW CONTENT

?>

<!-- LEFT SIDE  -->
<style>
    .vertical{
       display:block ;margin-top: 30px !important; padding: 0 0 0 0 !important; width:400px; background-color: black;
    }
   
    .horizontal {
       height:50px;  margin: 10px  0 0 0; padding: 0 0 0 10px; border-bottom: dashed 1px gray;
    }
     .horizontal2{
       text-align: center ;font-weight:bold;font-size:20px; font-family: "Arial Black","Tahoma" ; height:50px;  margin: 10px  0 0 0; padding: 15px 0 0 10px; border-radius: 7px;
    }
      .horizontal_190{
       width:190px;height:40px;text-align: center ;font-weight:bold;font-size:20px; font-family: "Arial Black","Tahoma" ;  margin: 10px  0 0 0; padding: 15px 0 0 10px; border-radius: 7px;
    }
    
    .emphasize{
         border-radius: 25px; width:60px;height:30px; background-color:lightskyblue;padding: 7px 0 0 0;margin: 0  0 0 20px; text-align: center; 
        font-size: 20px; font-weight: bold; font-family: 'calibri','Angsana New','Tahoma'; color:white;
    }
    .amoutname{position:absolute;top:0;left:200px;font-size:16px;}
    .arithmetic_right{float:right}
    .amout{position:absolute;top:0;left:120px;width:70px;}
    .amoutpic{display:block;position:absolute;top:-5px;left:20px;width:40px;height:auto;}
 
    
    
    .background_pink{background-color:rgb(252,217,211);}
    .background_green{background-color:rgb(202,242,151);}
    .background_green{background-color:rgb(202,242,151);}
    .background_purple{background-color:rgb(197,158,226);}
    
    
    .color_pink{color:rgb(245,118,97);}
    .color_green{color:rgb(129,211,26);}
    .color_white{color:white;}
    .color_purple{color:rgb(112,48,160);}
    
    .border_purple{border: solid 1px rgb(112,48,160);}
    
    
    #reviewicon{background: url("<?php echo Yii::app()->baseUrl; ?>/images/reviews.png")}
    #following_inner{color:white;}
    #following_button:hover #following_inner{color:rgb(112,48,160);} #following_button:hover{background: rgb(157,88,216); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(157,88,216,1) 0%, rgba(197,158,226,1) 88%, rgba(197,158,226,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(157,88,216,1)), color-stop(88%,rgba(197,158,226,1)), color-stop(100%,rgba(197,158,226,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9d58d8', endColorstr='#c59ee2',GradientType=0 ); /* IE6-9 */

}
#voteuser_inner{color:white;}
    #voteuser_button:hover #voteuser_inner{color:rgb(112,48,160);} #voteuser_button:hover{background: rgb(157,88,216); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(157,88,216,1) 0%, rgba(197,158,226,1) 88%, rgba(197,158,226,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(157,88,216,1)), color-stop(88%,rgba(197,158,226,1)), color-stop(100%,rgba(197,158,226,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(157,88,216,1) 0%,rgba(197,158,226,1) 88%,rgba(197,158,226,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9d58d8', endColorstr='#c59ee2',GradientType=0 ); /* IE6-9 */

}
</style>



<div style="width:400px;height:200px;margin-left:30px;float:left; ">
     <div style="width:400px;height:auto; margin: 0 auto; border-radius:7px;/*border:rgb(249,179,167) 1px dashed; */ margin-top: 10px;">
               
  <!--  REVIEW -->                 
                    <div class="horizontal2 background_pink" >
                     <div style="position:relative;">
                       <!-- <div id="reviewicon" class="amoutpic"> </div> -->
                         <img src="<?php echo Yii::app()->baseUrl; ?>/images/reviews.png" class="amoutpic" />
                         <div class="amout color_pink"><div class="arithmetic_right"><?php echo count($reviewmodel); ?></div></div> &nbsp;&nbsp; <div class="amoutname color_pink">Reviews</div>
                     </div>   
                    </div>
  <!--  VOTE Amount -->        
                     <div class="horizontal2 background_green" >
                     <div style="position:relative;">
                       <!-- <div id="reviewicon" class="amoutpic"> </div> -->
                         <img src="<?php echo Yii::app()->baseUrl; ?>/images/polling.png" class="amoutpic" />
                         <div class="amout color_green"><div class="arithmetic_right"><?php echo $model->voted; ?></div></div> &nbsp;&nbsp; <div class="amoutname color_green">Votes</div>
                     </div>   
                    </div>
  
  
<!--  VOTE Favorite and Vote -->        
                     <div class="horizontal2 " style="padding:0 !important;" >
                         <div  id="following_button"  class="horizontal_190 background_purple" style="cursor: pointer;padding:7px;margin:0; float:left">
                              <center><i style='float:left; margin: 5px 10px 0 40px;' class="icon-white icon-heart"></i><div id="following_inner" class="color_purple" style="float:left;font-family:'Andalus','tahoma'; font-size:15px;margin-top:4px;" > Follow</div>
                              </center>
                         </div>
                         <div id="voteuser_button" class="horizontal_190 background_purple" style="cursor: pointer;padding:7px;margin:0; float:left;margin-left:20px;">
                              <i style='float:left; margin: 5px 10px 0 20px;' class="icon-white icon-heart"></i><div id="voteuser_inner" style="float:left;font-family:'Andalus','tahoma'; font-size:15px;margin-top:4px;" > Vote to this user</div>
                         </div>
                              
                         
                    </div>
             
       
             
                  
         
                    <div class="horizontal" style="height:100px;border:none;" >
                        <div style="font-weight:bold;margin-top: 10px;width:200px;  ">ประเภทสินค้าที่รีวิวบ่อย</div>
                        <div style="padding-left:10px; color:orange;">โฟมล้างหน้า</div>
                        <div style="padding-left:10px;color:orange;">ครีมบำรุงผิว</div>
                        <div style="padding-left:10px;color:orange;">แชมพู</div>
                    </div>
             
        
         
     </div>
     <div style="width:400px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 1px dashed; margin-top: 20px;"></div>
     
</div>



<!-- RIGHT SIDE --> 
<!-- SELF-INTRODUCE  --> 


<div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:600px;">

<!-- PLATE 1  --> 
     <div id="detail_container" style="margin-top:20px; width:650px;min-height:250px; border:rgb(217,217,217) 1px solid;">
           <div style="width:620px;padding-left:30px; ;padding-bottom: 10px;border-bottom:rgb(166,166,166) dashed 1px ; margin: 20px 20px 0 0;color:rgb(52,172,139);font-family:'Angsana New','tahoma'; font-size:22px; font-weight: bold;  padding-top:10px;">
               แนะนำตัวเอง
            </div> 
            <div style=" color:black;width:550px;margin: 0 auto; margin-top: 20px;">
                    <?php 
                           
                             echo $iam->greeting;
                            
                    ?>
            </div>
        
    </div> <!--  END OF REVIEW CONTAINER  -->  


    
    
</div> <!--  END OF REVIEW CONTENT  -->
         
</div>





</div>
