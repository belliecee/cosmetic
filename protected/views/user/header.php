<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$usermodel = user::model()->findByPk(Yii::app()->user->getId());
?>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>

<script>
   $(function(){
           
           $("#user_camera").click(function(){
                  $('#userfileupload').modal('show');
             });
           $(".userdisplaypic_inside").mouseover(function(){ $("#user_camera").show();});
           $(".userdisplaypic_inside").mouseleave(function(){ $("#user_camera").hide();});
   });
</script>
<style>
  
.span12 {
    width: 100%;
}
#user_header{
  
    height:100px ;width:1100px; margin-left: 0;
     font-family:'tahoma'; font-size:20px; font-weight: bold; color:black;
     padding-left: 20px; padding-top:10px;
     border-radius: 7px;
    background: #f2f2f2; /* Old browsers */
    background: -moz-linear-gradient(top,  #f2f2f2 0%, #ffffff 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f2f2), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #f2f2f2 0%,#ffffff 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
   
    border: rgb(217,217,217) solid 1px;
}
#usermenu{
    
    position: absolute; top:59px; left:450px;
}
.menuelement{
    float:left;width:120px; height: 30px;
    font-family: 'tahoma';color:rgb(249,179,167); border: rgb(217,217,217) solid 1px;font-size:14px;text-align: center;
     background: #f2f2f2; /* Old browsers */
    background: -moz-linear-gradient(top,  #f2f2f2 0%, #ffffff 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f2f2), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f2f2f2 0%,#ffffff 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #f2f2f2 0%,#ffffff 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
   
}
</style>


<div  id="user_header" >
<div style="position:relative">   
    <!-- <div>   Hello User </div> -->
      <div class="userdisplaypic_inside" style="border:1px rgb(217,217,217) solid; background-color: white ;position:absolute;width:100px;height:100px; padding:0; ">
      <div class="userdisplaypic_inside" style='position:relative;'>
      <?php  $dir = Yii::app()->baseUrl.'/userdispics'; 
               
             if($model->myimg != null && $model->myimg != ""){ 
                 $path = $dir.'/'.$model->myimg;     
      ?>        
              
                <!--<div class="userdisplaypic_inside" style="border:1px rgb(217,217,217) solid;background-position:center;background-repeat:no-repeat;background-size: auto 300px;background-image:url('<?php echo $path; ?>') ;  width:100px;height:100px; background-size:100%;padding:0;margin-left:-1px;margin-top:-1px; "   ></div>-->
                <img class="userdisplaypic_inside" src="<?php echo Yii::app()->request->baseUrl; ?>/userdispics/<?php echo $model->myimg ;?>" style="border:1px rgb(217,217,217) solid;  width:100px;height:100px; background-size:100%;padding:0;margin-left:-1px;margin-top:-1px; "  / >
                    
        <?php  } 
             
             if($model->id == Yii::app()->user->getId()){
   
              
        ?>
        
              <div id="user_camera" style="display:none;position:absolute;color:rgba(204, 210, 199, 1);cursor:pointer;z-index: 10;top:80px;width:100%;background-color: rgba(29, 28, 28, 0.42);"> <i class="fa fa-camera" style='float:right;'></i></div>
               
       <?php
             }
       ?>
         
      </div> 
      </div> 
    

    
    
    <div id="userfileupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   
        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 id="myModalLabel">Upload Display picture</h4>
       </div>
        <div class="modal-body">
        <?php  
                 $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
                        'id'=>'user-form',
                        'htmlOptions' => array( 'id'=>'user','enctype' => 'multipart/form-data'),
                   ));
        ?>
                   
                    <?php $dir = Yii::app()->baseUrl.'/userdispics'; 
                          
                                 echo $form->fileField($model,'image', array('label' => false,'class'=>'aaa','length'=>4)
                                            /* 'help' => 'In addition to freeform text, any HTML5 text-based input appears like so.' */
                                         );
                    ?>           
                                   <style>
                                         
                                         .aaa{
                                                width:180px !important;
                                         }
                                     </style>
         </div>                             
         <div class="modal-footer">
             <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button style="margin:10px;" class="btn btn-success btn-small"><i class="icon-white icon-arrow-up"></i> Upload</button>
          </div>

    <?php $this->endWidget(); ?>   
    </div>
    
     <div id="usermenu"> 
           <?php
             if($model->id == Yii::app()->user->getId()){
                       
                
           ?>
         
         <a href= '<?php echo $this->createUrl("user/view",array("membername"=>user::model()->getusername(Yii::app()->user->getId() ))); ?>' > <div id="edit"  class="menuelement"><i class="fa fa-home"></i>&nbsp; Home</div></a>
             <?php }else{ ?>
            <div  style="float: left;width: 120px;height: 30px;"> </div>
            
            <?php
                    }  
             ?>
           <a href="<?php echo $this->createUrl('latestreview',array('membername'=>$model->username)); ?>"><div id="latestreview" class="menuelement"> Latest Review</div></a>
           <a href="<?php echo $this->createUrl('wishlist',array('membername'=>$model->username)); ?>"><div id="wishlist" class="menuelement"> Wish List</div></a>
           <a href="<?php echo $this->createUrl('followlist',array('membername'=>$model->username)); ?>"><div id="following" class="menuelement"> Following</div></a>
           <a href="<?php echo $this->createUrl('follower',array('membername'=>$model->username)); ?>"><div id="latestreview" class="menuelement"> Follower</div></a>
<!--           <a href=""><div  id="message"  class="menuelement"> Message</div></a>-->
           
           
<!--           <a href=""><div id="points" class="menuelement"> Points</div></a>-->
         
     </div>    


</div>
</div>
