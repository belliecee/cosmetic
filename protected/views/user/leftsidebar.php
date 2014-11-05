<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 *  $model       : User Model
 *  $reviewmodel : List of review that the use reviews 
 * 
 * 
 */
?>






<div style="width:400px;height:200px;margin-left:0;float:left; ">
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
