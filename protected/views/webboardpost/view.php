<?php
/* @var $this WebboardpostController */
/* @var $model webboardpost */




//$this->breadcrumbs=array(
//	'Webboardposts'=>array('index'),
//	//$model->id,
//);
//
//$this->menu=array(
//	array('label'=>'List webboardpost', 'url'=>array('index')),
//	array('label'=>'Create webboardpost', 'url'=>array('create')),
//	array('label'=>'Update webboardpost', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete webboardpost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage webboardpost', 'url'=>array('admin')),
//);

?>



<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/webboardpost.css" />
<?php  
//  $baseUrl = Yii::app()->baseUrl; 
//  $cs = Yii::app()->getClientScript();
//  //$cs->registerScriptFile($baseUrl.'/js/yourscript.js');
//  $cs->registerCssFile($baseUrl.'/css/webboardpost.css');
?>



<div class="content_container" style="min-height: 1000px;">

<div id="theGrid" style="margin-left:0;">



<br/>
         
</div>
 
<!--
<div style="border: rgb(217,217,217) solid 1px; width:700px; height: 150px; border-radius: 10px;">  </div>
-->
<!-- Left hand side -->
<div style="width:700px; margin-top: 20px;margin-left: 20px;float:left;">  
    <style>
        .boardmenu{
            float:left;
            width: 200px; height:60px;
        }
    </style>  

<div class="webboard_header" style="background-color:white;">
    <img class="webboard_header_image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/QnA_header.png" width="216" height="67">
    <div style="clear:both;"></div>
    <!--     <div class="webboard_all">
          <span class="in_all">A</span>ll</div>
     <div class="webboard_QnA"><span class="in_q">Q</span>&A</div>
     <div class="webboard_howto"><span class="in_h">H</span>ow-to</div>
     <div class="webboard_tellus"><span class="in_t">T</span>ell Us</div>
<div class="webboard_header_last"></div>-->
</div>
    
<!-- Poster part-->


  <?php 

  $this->renderPartial("post_part",array('model'=>$model));

 
  
  ?>

<div class="comment_wrapper" style="min-height:100px !important;">
        <div class="commentnum"><i class=" fa fa-comments-o"></i>&nbsp;40 Comments</div>
        <div class="webboard_line"></div>
</div>

  <?php 

    $this->renderPartial("comment_part",array('model'=>$model));

 
  
  ?>
<!--Comment writing--> 

    <?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        // 'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
        'id' => '',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
?>
<div class="post_write">
    <div class="post_write_title">
        &nbsp;&nbsp;&nbsp;
        เขียนแสดงความคิดเห็น
    </div>

    <?php
  
      $this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
                'name' => 'redactortest'
  ));
  ?>
 
  <div class="flat_red_submitbtn float_btn">Submit</div>
 
</div>

<?php $this->endWidget(); ?>

<!--End of comment writing -->

</div>
<!-- End of Left hand side -->

<!-- Right hand side -->
<div style="width:400px;min-height:200px;margin-left:30px;float:left; ">
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 10px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
     <div style="width:350px;height:200px; margin: 0 auto; border-radius:7px;border:salmon 2px dashed; margin-top: 20px;"></div>
    
    
</div>

<!-- End of Right hand side -->


</div>
