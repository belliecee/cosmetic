<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>


    
<?php
/* @var $this WebboardpostController */
/* @var $dataProvider CActiveDataProvider */

$webboard_category = array("บอร์ดรวม","เรื่องทั่วไป","Q&A","How to","บอกต่อ","นอกเรื่องอื่นๆ");

?>
<style>


</style>


<div class="content_container" >

<div id="theGrid" style="margin-left:0;">



<br/>
         
</div>
 
<!--
<div style="border: rgb(217,217,217) solid 1px; width:700px; height: 150px; border-radius: 10px;">  </div>
-->
<!-- Left hand side -->
<div style="width:700px; margin-top: 20px;margin-left: 20px;float:left;border: 1px solid rgba(228, 228, 228, 1); border-radius: 7px;">  
    <style>
        .boardmenu{
            float:left;
            width: 200px; height:60px;
        }
    </style>  
<!-- 
<div >
      
      <div class='boardmenu'> <img src='../../img/home.png' height=60 width=50  /> </div> 
      <div class='boardmenu'><img src='../../img/questionmark.png' height=60 width=50  /> </div> 
      <div class='boardmenu'> <img src='../../img/how_to.png' height=60 width=50 /> </div> 
      <div style='clear:both;'></div>
      
</div> 
-->
<div class="webboard_header">
     <div class="webboard_all">
             All
             
     </div>
     <div class="webboard_QnA"><span class="in_q">Q&A</span></div>
     <div class="webboard_howto"><span class="in_h">H</span>ow-to</div>
     <div class="webboard_tellus"><span class="in_t">T</span>ell Us</div>
<div class="webboard_header_last"></div>
</div>

<div class="webboard_row" style="margin-bottom:20px;padding-bottom:50px !important;">
    <div style="float:left;font-size: 27px;color: rgba(110, 146, 219, 1);">หมวดหมู่</div>
    <a href="<?php echo $this->createUrl('create'); ?>" class="btn btn-success" style="float:right;">ตั้งกระทู้ใหม่</a>
</div>
    
  
  <?php 
  
  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
  
  ?>
  




</div>
<!-- End of Left hand side -->

<!-- Right hand side -->
<div style="width:400px;min-height:200px;margin-left:30px;float:left; ">
    <div style="width:350px;height:200px; margin: 0 auto;  margin-top: 10px;">
        
        
                <div class="col-lg-12" style="width:100%;padding:0;margin:0;">
                <div class="panel panel-default">
                  <div class="panel-heading marckScript_header">Search</div>
                  <div class="panel-body" style="min-height: 120px;"> 
                        
                            
                </div> <!-- panel-body-->
                </div>
          </div>  <!--col-lg-12-->
        
   
    

        
        
    </div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>

    
</div>

<!-- End of Right hand side -->


</div>
