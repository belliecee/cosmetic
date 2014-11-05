<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>



<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */



$model       =  maker::model()->findAll(); 
$modelname   =  'maker';
$updateurl   =  'maker/updatetype';
$tableStyle = 'table_view_graywhite';
$tablewidth = '850px';
$gridColumn  = array(array('editable'=>true,'header'=>'Name','colwidth'=>'200px','name'=>'name','type'=>'text','setunique'=>true),
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
<div class="title2" style="border-bottom: none;">Maker</div>
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
    