<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/assets/js/bootstrap.min.js"></script>



<?php
/* @var $this BrandController */
/* @var $dataProvider CActiveDataProvider */
?>


<style>
    
    #content {
    margin-left: auto;
    margin-right: auto;
    width: 1050px;
    min-height: 400px;
    }
    #theGrid{
         width: 1050px;
    }
    .beside_banner{
        width:280px;height:280px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 10px;
    }
</style>


<!--  -------------- TABLE  ------------------- -->
<div class="content_container" style="min-height: 1000px;">
<div id="theGrid" style="margin-left:0;">


<div style="background-color:lightsteelblue; height:35px ; margin-top: 20px;
     font-family:'tahoma'; font-size:20px; font-weight: bold; color:rgb(52,172,139);
     padding-left: 20px; padding-top:7px;
     border-radius: 7px;
 background: #d1f8b5; /* Old browsers */
background: -moz-linear-gradient(top,  #d1f8b5 23%, #abe87b 99%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(23%,#d1f8b5), color-stop(99%,#abe87b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #d1f8b5 23%,#abe87b 99%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #d1f8b5 23%,#abe87b 99%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #d1f8b5 23%,#abe87b 99%); /* IE10+ */
background: linear-gradient(to bottom,  #d1f8b5 23%,#abe87b 99%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d1f8b5', endColorstr='#abe87b',GradientType=0 ); /* IE6-9 */

     " >Brand</div>
<br/>
         
</div>
<!--
<div style="border: rgb(217,217,217) solid 1px; width:700px; height: 150px; border-radius: 10px;">  </div>
-->

<div style="width:700px; margin-top: 20px;margin-left: 20px;float:left;">  


  <?php
          $criteria = new CDbCriteria();
          $criteria->order = 'name';
         
          
          $allbrand = brand::model()->findAll($criteria);
          
          echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
          
           $ind = 1;
           $column = 3;
           $row_switch = -1;

           $first = '';
           foreach (range('A', 'Z') as $letter) {
                
                    $this->renderPartial("letter_table",array("letter"=>$letter));
                
            }
         
?>            
                


</div>
<div style="margin-left:20px;float:left; ">
     <div style=" margin: 0 auto;  margin-top: 10px;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" /></div>
     <div style=" margin: 0 auto; margin-top: 20px;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" /></div>
     <div style=" margin: 0 auto; margin-top: 20px;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" /></div>
     <div style="margin: 0 auto;margin-top: 20px;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" /></div>
     <div style=" margin: 0 auto; margin-top: 20px;"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" /></div>
    
</div>



</div>








