<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>


<?php
/* @var $this ItemController */
/* @var $dataProvider CActiveDataProvider */


$model       =  item::model()->findAll(); 
$modelname   =  'item';
$updateurl   =  'item/updatetype';
$tableStyle =   'table_view_graywhite';
$tablewidth = '850px';
$gridColumn  = array(array('editable'=>true,'header'=>'Name','name'=>'name','colwidth'=>'100px','type'=>'text','setunique'=>true),
                array('editable'=>true,'header'=>'Brand','colwidth'=>'80px','name'=>'brand','type'=>'select','source'=>array('sourcename'=>'brand')),
                array('editable'=>true,'header'=>'Category','colwidth'=>'80px','name'=>'category','type'=>'select','source'=>array('sourcename'=>'category')),
                array('editable'=>true,'header'=>'Price','colwidth'=>'80px','name'=>'marketPrice','type'=>'text'),
                array('editable'=>true,'header'=>'Maker','colwidth'=>'80px','name'=>'maker','type'=>'text'),
                array('editable'=>false,'header'=>'Update on','colwidth'=>'200px','name'=>'update_on','type'=>'date',),
                array('editable'=>false,'header'=>'Update By','colwidth'=>'100px','name'=>'update_by','type'=>'text','relation'=>'user'),
             );


?>



<!--------------------------- Start Table ----------------------------------------->

<?php
        $this->renderPartial("/item/adminmenu");
?>
<div id="theGrid" style="margin-left:0;">
<div class="title2" style="border-bottom: none;">Product Items</div>
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
 
<!--
 <div id="detail" style="z-index:9; position:absolute; left:500px; top: 50px; width:100px; height: 500px;background-color: greenyellow;">
     
 </div>
 -->

 
