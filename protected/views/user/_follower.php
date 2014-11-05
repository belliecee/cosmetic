<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$follower_model = user::model()->findByPk($data->user_id);

?>

  
 
    
            
          
 <a href="<?php echo $this->createUrl('user/view',array('membername'=>$follower_model->username)); ?>">        
  <div class="follow_container" id="follow_container_<?php echo $data->other_id;?>">
   <div style="position:relative;">

   <?php if($data->user_id == Yii::app()->user->getid()){  ?>
                <div class="unfollow" data-id="<?php echo $data->id ; ?>" data-user_id="<?php echo $data->user_id ; ?>" data-other_id="<?php echo $data->other_id; ?>">
                     <i class="fa fa-trash-o"> 
                     </i>
                  
                 </div>
                 
   <?php  } ?>
   <div class="firstsec">    
          <div  class="follow_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/userdispics/<?php echo $follower_model->myimg ;?>" alt=""  /></div>
          <div class="follow_name"><?php echo  $follower_model->username ?></div>
          
<!--          <div class="midline">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/underline.png" width="150" height="9" />
          </div>-->
    

   </div>
       
  <div class="secondsec">   
      <center id="centerbuttons_<?php echo $data->other_id ;?>" style="margin-top: 20px;">
    
          <?php 
                $getfollow = followlist::model()->findAll("user_id=:user_id and other_id=:other_id",array(":other_id"=>Yii::app()->user->getId(),":user_id"=>$data->other_id));
                 
                if($getfollow != null){
                  
          ?>
                   <div href="#" class="btn btn-primary" style="width:150px;font-weight: bold;" disabled="disabled">Following</div>
                   
                   
           <?php
                  
                }else if(Yii::app()->user->getId() == $data->user_id){
          ?>
                
                   <div href="#" class="btn btn-warning" style="width:150px;font-weight: bold;" disabled="disabled">Me</div>
          <?php 
                }else{
          ?>
                
                   <div id="follow_<?php echo $data->other_id ; ?>" data-other='<?php echo $data->other_id; ?>' class="btn btn-success follow_btn" style="width:150px;font-weight: bold;"> Follow</div>
          <?php 
                }
          
          ?>
          

      </center>
  </div>
<!--    	 <div class="follow_footer">
               <table >
                    <tr>
                         <td ><i class="icon-white icon-ok-sign"></i>
                         		Review
                         </td>
                         <td ><i class="icon-white icon-thumbs-up"></i> 
                         		Comment
                         </td>
                    </tr>
               </table>
          </div>-->
    
    </div> 
      
    
</div>
 </a>
 
