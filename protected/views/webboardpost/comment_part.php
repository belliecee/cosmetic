<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>





<div class="comment_wrapper">
  <div class="comment_header">
          
    <div class="commentator_profile">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/userdispics/belliecee-20140817113702.jpeg" style="width:70px;height: 70px;" class="poster_image" />
 <!-- <div class="commentator_name">belliecee</div> -->
 
    </div>
    <div class="comment_container">
            <div class="comment_title">
              <span class="commenttext " >ความคิดเห็นที่ 1 </span>
            </div>
            <div class="comment_detail">
             
              <div class="commentator_name"> <i class=" fa fa-user"></i> &nbsp;
                  Belliecee
              </div>	
              <div class="time_ago" style="margin-left: 15px;">
                    <i class=" fa fa-clock-o "></i>  
                    <?php $this->widget('yiiwheels.widgets.timeago.WhTimeAgo',
                                  array(
                                      'date' => $model->update_on,
                                  )
                  ); ?>
              </div>
           			
            </div>
             
               
               
    </div>
          
<!--    <div class="comment_opt">
             <i class=" icon-trash"></i>   
    </div>	  	-->
 </div>   
<!-- COMMENT HEADER-->
  <div class="comment_content">
  	 เรารักเจลอว์ เราว่าปกตินะกับการถ่ายภาพแบบนั้น.. ยิ่งคนที่มีสรีระสวยงามบางคน เค้ายิ่งหลงใหลในสรีระของตัวเอง จึงไม่แปลกที่เขาจะถ่ายเก็บไว้ หรือโชว์ให้คนรักดู..  แต่พวกแฮ๊กเกอร์นี้ดิ..!!  ฮึ่ม!!


  </div>
  
</div>
<p>&nbsp;</p>









