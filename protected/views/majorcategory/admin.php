<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>


<?php
/* @var $this MajorcategoryController */
/* @var $dataProvider CActiveDataProvider */

// PARAMETERS MUST BE ADJUSTED

$model       =  majorcategory::model()->findAll(); 
$modelname   =  'majorcategory';
$updateurl   =  'majorcategory/updatetype';
$tableStyle = 'table_view_graywhite';
$tablewidth = '850px';
$gridColumn  = array(array('editable'=>true,'header'=>'Name','colwidth'=>'200px','name'=>'name','type'=>'text'),
                array('editable'=>true,'header'=>'Description','colwidth'=>'200px','name'=>'description','type'=>'textarea'),
                array('editable'=>false,'header'=>'Update on','colwidth'=>'150px','name'=>'update_on','type'=>'date',),
                array('editable'=>false,'header'=>'Update By','colwidth'=>'150px','name'=>'update_by','type'=>'text','relation'=>'user'),
                     );


?>

<!--  -------------- MENU BAR  ------------------- -->
<?php
        $this->renderPartial("/item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<!--  -------------- TABLE  ------------------- -->

<div id="theGrid" style="margin-left:0;">
<div class="title2" style="border-bottom: none;">Category Group</div>
<div class="bottomline"style="margin-left:300px;width:900px;" ></div>
<br/><br/>
                <?php 
             
                
                     
                       
                
                         $this->renderPartial('_gridView',array('model'=>$model,'modelname'=>$modelname,'path'=>$updateurl,
                                               'tableStyle'=>$tableStyle, 'tablewidth' => $tablewidth,  
                                                'gridColumn'=>$gridColumn
                                              )
                                                 
                       );

            ?>
</div>


 <!-- -------------- END OF MENU ------------------ -->
 
  <?php
//$pages = new CPagination(Posts::model() -> count());

    $criteria=new CDbCriteria();
    $count=  majorcategory::model()->count($criteria);
    $pages =new CPagination($count);

    // results per page
    $pages->pageSize=10;
    $pages->applyLimit($criteria);
    $models=majorcategory::model()->findAll($criteria);  
  
  //  $models=Article::model()->findAll($criteria);
    
 $this->widget('CLinkPager', array(
    'pages' => $pages,
)) 
//$pagination->itemCount = 100;
//$pagination->pageVar   = 'test_page';
//$pagination->pageSize  = 5;
 
   
?>
    