<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/assets/js/bootstrap.min.js"></script>



<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */


$model       =  category::model()->findAll(); 
$modelname   =  'category';
$updateurl   =  'category/updatetype';
$tableStyle = 'table_view_graywhite';
$tablewidth = '850px';
$gridColumn  = array(array('editable'=>true,'header'=>'Name','colwidth'=>'150px','name'=>'name','type'=>'text','setunique'=>true),
                     array('editable'=>true,'header'=>'Group','colwidth'=>'150px','name'=>'majorcategory','type'=>'select','source'=>array('sourcename'=>'majorcategory')),
                     array('editable'=>true,'header'=>'Description','colwidth'=>'150px','name'=>'description','type'=>'textarea'),
                                                                    array('editable'=>false,'header'=>'Update on','colwidth'=>'100px','name'=>'update_on','type'=>'date',),
                                                                    array('editable'=>false,'header'=>'Update By','colwidth'=>'50px','name'=>'update_by','type'=>'text','relation'=>'user'),
                     );




?>
<!--  -------------- MENU BAR  ------------------- -->
<?php
        $this->renderPartial("/item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<!--  -------------- TABLE  ------------------- -->

<div id="theGrid" style="margin-left:0;">
<div class="title2" style="border-bottom: none;">Category</div>
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
    