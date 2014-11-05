
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/assets/js/bootstrap.min.js"></script>

<?php
/* @var $this ItemController */
/* @var $model item */

?>


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

.reviewbttn{
    background: rgba(203,242,151,1);
    background: -moz-linear-gradient(top, rgba(203,242,151,1) 0%, rgba(203,242,151,1) 10%, rgba(128,211,26,1) 47%, rgba(128,211,26,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(203,242,151,1)), color-stop(10%, rgba(203,242,151,1)), color-stop(47%, rgba(128,211,26,1)), color-stop(100%, rgba(128,211,26,1)));
    background: -webkit-linear-gradient(top, rgba(203,242,151,1) 0%, rgba(203,242,151,1) 10%, rgba(128,211,26,1) 47%, rgba(128,211,26,1) 100%);
    background: -o-linear-gradient(top, rgba(203,242,151,1) 0%, rgba(203,242,151,1) 10%, rgba(128,211,26,1) 47%, rgba(128,211,26,1) 100%);
    background: -ms-linear-gradient(top, rgba(203,242,151,1) 0%, rgba(203,242,151,1) 10%, rgba(128,211,26,1) 47%, rgba(128,211,26,1) 100%);
    background: linear-gradient(to bottom, rgba(203,242,151,1) 0%, rgba(203,242,151,1) 10%, rgba(128,211,26,1) 47%, rgba(128,211,26,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cbf297', endColorstr='#80d31a', GradientType=0 );
    
    margin-top:5px;margin-left:-130px;width:100px;height:20px; border-radius: 5px; cursor:pointer;color:white;text-align:center;font-weight:bold; text-decoration:none;
}   

.maker_detail_first .colLeft{
    color: black;
    font-size: 12px;
    font-weight: bold;
}
.maker_detail_first {
    width: 120px;
    color: black;
    border-bottom: 1px solid rgb(217,217,217);
    
    
} 
.maker_detail_second{
    border-bottom: 1px solid rgb(217,217,217);
}
.wraptext{
     
     max-width: 470px;text-overflow: ellipsis;word-wrap: break-word; overflow:hidden;
     
}



</style>



<div class="content_container" style="min-height: 1100px;">

<div id="theGrid" style="margin-left:0;">


<div style="background-color:lightsteelblue; height:35px ;width:1100px; margin-top: 20px;
     font-family:'tahoma'; font-size:20px; font-weight: bold; color:white;
     padding-left: 20px; padding-top:10px;
     border-radius: 7px;
     
     background: rgba(177,226d,253,1);
    background: -moz-linear-gradient(top, rgba(177,226,253,1) 0%, rgba(177,226,253,1) 28%, rgba(118,198,241,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(177,226,253,1)), color-stop(28%, rgba(177,226,253,1)), color-stop(100%, rgba(118,198,241,1)));
    background: -webkit-linear-gradient(top, rgba(177,226,253,1) 0%, rgba(177,226,253,1) 28%, rgba(118,198,241,1) 100%);
    background: -o-linear-gradient(top, rgba(177,226,253,1) 0%, rgba(177,226,253,1) 28%, rgba(118,198,241,1) 100%);
    background: -ms-linear-gradient(top, rgba(177,226,253,1) 0%, rgba(177,226,253,1) 28%, rgba(118,198,241,1) 100%);
    background: linear-gradient(to bottom, rgba(177,226,253,1) 0%, rgba(177,226,253,1) 28%, rgba(118,198,241,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b1e2fd', endColorstr='#76c6f1', GradientType=0 );


-webkit-box-shadow: 0px 10px 12px -7px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 10px 12px -7px rgba(0,0,0,0.75);
box-shadow: 0px 10px 12px -7px rgba(0,0,0,0.75);




     " >Item View  </div>
<br/>

<?php

// REVIEW CONTENT
?>
<div id="review_content" style=" margin-left: 20px; ;float:left;width:700px;min-height:600px;">
    <div id="detail_container" style=" width:700px;min-height:320px; border:rgb(217,217,217) 1px solid;">
       <div style="padding-bottom: 10px;border-bottom:rgb(166,166,166) dashed 1px ; margin: 20px 20px 0 20px;color:rgb(52,172,139);font-family:'tahoma'; font-size:20px; font-weight: bold; padding-left: 20px; padding-top:10px;">
           รีวิว&nbsp;&nbsp;<?php echo $model->name; ?> 
       </div> 
<!-- IMAGE -->        
         <?php
                       
                        $dir = Yii::app()->baseUrl.'/images';
                        if($model->image != null){
               ?>           
                            
               <?php        $path = $dir.'/'.$model->image;  ?>
                           
                          <!--  <img src='<?php //echo $path; ?>' style="width:300px;height:300px" > -->
                          <div id="itemimage" style="margin: 30px 0 0 30px;float:left;background-position:center;background-repeat:no-repeat;background-size: 160px 160px;background-image:url('<?php echo $path; ?>') ;  width:160px;height:160px" ></div>
                         
                          
              <?php           
             
                      }
               ?>
     
        <div id="itemdetail" style="min-width:300px; margin: 30px 0 0 200px !important;">
            <table>
                
                <tr><td><span class="colLeft">ชื่อสินค้า :</span></td><td><span class="colRight" style="font-size:16px ;color:#339999;font-weight:bold;"><?php echo $model->name;?></span></td></tr>
                <tr><td><span class="colLeft">Brand :</span></td><td><span class="colRight" style="font-size:16px ;color:#33cccc; "><?php if(brand::model()->findByPk($model->brand) != null) echo brand::model()->findByPk($model->brand)->name;?></span></td></tr>
                <tr><td><span class="colLeft">ประเภท :</span></td><td><span class="colRight" style="font-size:14px ;color:rgb(247,141,124); font-weight:bold;"><?php if(category::model()->findByPk($model->category) != null) echo category::model()->findByPk($model->category)->name;?></span></td></tr>
                 
                <?php
                        $starvote = "";
                         $star = new Star();
                         
                         $starvote = $star->getStarvote($model->avgVote);
                         
//                        $floor = floor($model->avgVote);
//                        $ceil = ceil($model->avgVote);
//                        $middle = ($floor + $ceil)/2;
//                        $suffix = "";
//                       $starNum = "";
//                       $starvote = ""; 
//                       if($floor != $ceil){
//                                    if($model->avgVote >  $floor && $model->avgVote < $middle){
//                                        $suffix = "stars-qtr";
//
//                                    }else if ($model->avgVote ==  $middle){
//                                        $suffix = "stars-half";
//                                    }else if ($model->avgVote >  $middle && $model->avgVote < $ceil){
//                                       $suffix = "stars-3qtr";
//                                    }
//                       }
//                       
//                       
//                        if($floor == 0)
//                        {
//                            $starvote = "stars";
//                        }else{
//                           $starNum = "stars stars-".$floor;
//                           $starvote = $starNum." ".$suffix;
//                           
//                        }
                       
                        
                        
                ?>
               
                <tr><td><span class="colLeft">คะแนนเฉลี่ย :</span></td><td><span class="colRight" style ="margin:0;padding:0;font-weight:bold;font-size:12px;color:orangered;"><div class='starswrapper'><div class='<?php echo $starvote ?>'></div></div> <?php if($model->avgVote == null || $model->avgVote == "")echo " (0 คะแนน)";else echo "(".$model->avgVote." คะแนน)";  ?></span></td></tr>
                <tr><td><span class="colLeft">จำนวนรีวิว :</span></td><td><span class="colRight"><?php if($model->reviewNum == null || $model->reviewNum == "")echo "0";else echo $model->reviewNum;  ?></span></td></tr>
                <tr><td><span class="colLeft" style="font-size:15px ;color:rgb(52,172,139); font-weight:bold;">ราคาตลาด :</span></td><td><span class="colRight" style="font-size:15px ;color:rgb(52,172,139); font-weight:bold;"><?php echo number_format($model->marketPrice); ?></span></td></tr> 
            
              </table>
<!-- REVIEW BUTTON -->
            <?php $toreview = $this->createUrl('user/review',array('itemid'=>$model->id)); ?>
            <a href='<?php echo $toreview ?>' style="text-decoration:none;"><div class="reviewbttn">เขียนรีวิว</div></a>
               
            
         <!--   <div class="starswrapper"><div class="stars stars-1 "></div></div> -->
            
        </div>
 
    </div> <!--  END OF REVIEW CONTAINER  -->  
<!-- BROWN BAR -->    
<!--    <div style="clear:both; margin:20px;  display: block;width:660px; height: 5px; background-color: rgb(147,77,6);
             -webkit-box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 1px 2px 5px 0px rgba(0,0,0,0.75);">
        
    </div>-->

<!--   <div style="margin-left:30px; font-weight:bold;font-size: 18px;font-family:tahoma;color:rgb(89,89,89)">ข้อมูลจากผู้ผลิต</div>
    
   <div id="maker_detail" style="border-radius:7px ;-webkit-box-shadow: inset 0px 2px 4px 1px rgba(0,0,0,0.75);
-moz-box-shadow: inset 0px 2px 4px 1px rgba(0,0,0,0.75);
box-shadow: inset 0px 2px 4px 1px rgba(0,0,0,0.75);padding: 30px 0;  min-width:300px; margin: 30px 0 0 20px !important;">
         
              <table style="width: 620px; margin: 0 auto;padding-left: 20px;">
                
                <tr><td class="maker_detail_first"><span class="colLeft">ผู้ผลิต :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;font-weight:bold;"><?php echo $model->maker;?></span></td></tr>  
                <tr><td class="maker_detail_first"><span class="colLeft">ปริมาณ :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;font-weight:bold;"><?php echo $model->volume;?></span></td></tr>
                <tr><td class="maker_detail_first"><span class="colLeft">ส่วนผสมหลัก :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;"><?php echo $model->ingredient;?></span></td></tr>
                <tr><td class="maker_detail_first"><span class="colLeft">รายละเอียดวิธีใช้ :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;"><?php echo $model->howtouse;?></span></td></tr>
                <tr><td class="maker_detail_first"><span class="colLeft">หมายเหตุ :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;"><?php echo $model->remark;?></span></td></tr>
                 
              </table>
   </div>   
   
 GREEN BAR     

    <div style="clear:both; margin:25px;  display: block;width:660px; height: 5px; background-color: rgb(129,211,26);"></div>
    -->
    <div class="col-lg-12" style="width:100%;padding:0; margin-top: 20px ;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">
                      Details
                  </div>
                  <div class="panel-body" style="min-height: 120px;padding-bottom: 20px;"> 
                          <table style="width: 620px; margin: 0 auto;padding-left: 20px;">
                
                            <tr><td class="maker_detail_first">ผู้ผลิต<span class="colLeft"> :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;font-weight:bold;"><?php echo $model->maker;?></span></td></tr>  
                            <tr><td class="maker_detail_first">ปริมาณ<span class="colLeft"> :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;font-weight:bold;"><?php echo $model->volume;?></span></td></tr>
                            <tr><td class="maker_detail_first">ส่วนผสมหลัก<span class="colLeft"> :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;"><?php echo $model->ingredient;?></span></td></tr>
                            <tr><td class="maker_detail_first">รายละเอียดวิธีใช้<span class="colLeft"> :</span></td><td class="maker_detail_second"><span class="colRight wraptext" style="font-size:12px ;color:#000;"><?php echo $model->howtouse;?></span></td></tr>
                           
                          </table>
                </div>
               </div>
          </div>  <!--col-lg-12-->
        
   
    
 <!--  END OF Details  -->
    
        
        <div class="col-lg-12" style="width:100%;padding:0; margin-top: 20px ;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">
                      Product Information
    <!--EDIT BUTTON  -->
<!--                         <a href='<?php //echo $this->createUrl("user/editableview",array("membername"=>$model->username)) ; ?>'><div style='font-weight:bold;color:#777;font-size:14px; font-family: "Helvetica" ; float:right;cursor:pointer' class="editable"><i class=" fa fa-pencil"></i>&nbsp;Edit</div></a>-->
                  </div>
                  <div class="panel-body" style="min-height: 120px;"> 
                           asdfasdf;aljsd;lksdf  sdfasd  sdfasdf  sdfasdf
                           sdfasdf  sdfasd sdfa asdfa as sdf asd ga sdf asdg as df asd fa sdf asdf as d s ga fg as ba rba  a df asdf as df asg as df asdf a sdf asdf as df asdf as dfa sdf asd fas dg asdg fasd fsa dfa sdf asdg as dfa sdf asdf adf 
                            sdfasdf  sdfasd sdfa asdfa as sdf asd ga sdf asdg as df asd fa sdf asdf as d s ga fg as ba rba  a df asdf as df asg as df asdf a sdf asdf as df asdf as dfa sdf asd fas dg asdg fasd fsa dfa sdf asdg as dfa sdf asdf adf 
                </div> <!-- panel-body-->
                </div>
          </div>  <!--col-lg-12-->  
 <!--  END OF Product Information  -->
<div style="clear:both;"></div>
 <!--  User Comment on Product -->
  <?php 

        $dataProvider=new CActiveDataProvider('review',array(
                        'sort'=>array(
                        'defaultOrder'=>'create_on ASC',
                        ),
                        'criteria'=>array(
                            'condition'=>"item_id=:item_id",
                            'params'=>array(':item_id'=>$model->id),
                        ),
                        'pagination'=>array(
                            'pageSize'=>10,
                            
                        ),
            
        ));
        
// GET pageSize & currentPage
        $pageSize = $dataProvider->pagination->pageSize;
        if(isset($_GET['review_page'])){
             $currentPage = $_GET['review_page']; 
        }else{
             $currentPage = 1;
        }
        
      $this->widget('bootstrap.widgets.TbListView', array(
                                  'dataProvider'=>$dataProvider,
                                  'itemView'=>'comment_part',
                                  'viewData'=>array('currentPage'=>$currentPage,'pageSize'=>$pageSize),
                                    
     )); 

  ?>
<!--Comment writing-->         
          
    
</div> <!--  END OF REVIEW CONTENT  -->

</div>
<!--  END OF LEFT SIDE  -->


<!-- RIGHT SIDE --> 
<?php

// RIGHT SIDE
?>
<div style="width:300px;height:200px;margin-left:30px;float:left; ">
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 10px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
    
</div>


<?php 
//$document=new Document();
// 
//// we can write and read textWidth
//$document->textWidth=100;
//echo $document->textWidth;
// 
//// we can only read textHeight
//echo $document->textHeight;
// 
//// we can only write completed
//$document->completed=true;

?>


</div>