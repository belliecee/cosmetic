<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theproduct/skin-1.css" />


<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */
$topnumber = 0;
?>

<!--  -------------- TABLE  ------------------- -->
<style>
    
  .row-fluid .span6{
        float: right;
        width: 30.7179%
    }
</style>
<div id="theGrid" style="margin-left:0;">


<div style="background-color:lightsteelblue; height:35px ;width:1200px; margin-top: 20px;
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

     " >Category</div>
<br/>
         
</div>

<div style="min-height: 700px;width:700px; margin-top: 20px;margin-bottom: 20px; margin-left: 20px;float:left;">  
<?php
     $this->renderPartial("refinesearch",array("searchbybrand"=>$searchbybrand,"searchbyname"=>$searchbyname));
?>
<!--<div style="border: rgb(217,217,217) solid 1px; width:700px; height: 150px; border-radius: 10px;">  </div>-->


  <?php
          $this->widget('bootstrap.widgets.TbListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
//            'viewData'=>array('review_page'=>$review_page),
        )); 


  
  
  ?>




</div>
<div style="width:400px;height:200px;margin-left:30px;float:left; ">
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 10px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
    
</div>










































































