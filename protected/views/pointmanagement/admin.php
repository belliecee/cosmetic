


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/assets/js/bootstrap.min.js"></script>




<?php
/* @var $this PointManagementController */
/* @var $dataProvider CActiveDataProvider */


$model       = pointmanagement::model()->findAll(); 
$modelname   =  'pointmanagement';
$updateurl   =  'pointmanagement/updatetype';
$tableStyle = 'table_view1_header';
$tablewidth = '850px';
$gridColumn  = array(array('editable'=>false,'header'=>'User','colwidth'=>'150px','name'=>'user_id','type'=>'text','relation'=>array('relatedtable'=>'user','attr'=>'username')),
                     array('editable'=>false,'header'=>'Review','colwidth'=>'400px','name'=>'review_id','type'=>'textarea','relation'=>array('relatedtable'=>'review','attr'=>'comment')),
                     array('editable'=>true,'header'=>'Point','colwidth'=>'50px','name'=>'point','type'=>'text'),
                                                                    array('editable'=>false,'header'=>'Update on','colwidth'=>'100px','name'=>'update_on','type'=>'date',),
                                                                    array('editable'=>false,'header'=>'Update By','colwidth'=>'100px','name'=>'update_by','type'=>'text','relation'=>array('relatedtable'=>'user','attr'=>'username')),
                     );




?>
<!--  -------------- MENU BAR  ------------------- -->
<?php
        $this->renderPartial("/item/adminmenu");
?>
<!-- -------------- END OF MENU ------------------ -->

<!--  -------------- TABLE  ------------------- -->

<div id="theGrid" style="margin-left:0;">
<div class="title2" style="border-bottom: none;">Point Management</div>
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

