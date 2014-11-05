<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>

<script>
$(function(){
        
    $('#admin_search_brand').keyup(function(e){
        if(e.keyCode == 13){
            var url = '<?php echo $this->createUrl("brand/adminsearch"); ?>';
            var searchtext = $("#admin_search_brand").val();
            var updateplace = $("#rendercontainer");
             adminsearch(url,searchtext,updateplace);
        }
         
    });
    
    
    $("#admin_search_brand_btn").click(function(){
        var url = '<?php echo $this->createUrl("brand/adminsearch"); ?>';
        var searchtext = $("#admin_search_brand").val();
        var updateplace = $("#rendercontainer");
        adminsearch(url,searchtext,updateplace);
                 
    });
});

</script>

<?php
/* @var $this BrandController */
/* @var $dataProvider CActiveDataProvider */

// PARAMETERS MUST BE ADJUSTED
$criteria = new CDbCriteria();
$criteria->order = 'update_on DESC';
$model       =  brand::model()->findAll($criteria); 
$modelname   =  'brand';
$updateurl   =  'brand/updatetype';
$tableStyle = 'table_view_graywhite';
$tablewidth = '850px';
$gridColumn  =  array(
                array('editable'=>false,'header'=>'Img','colwidth'=>'200px','name'=>'brand_img','type'=>'image','setunique'=>true),
                array('editable'=>true,'header'=>'Name','colwidth'=>'200px','name'=>'name','type'=>'text','setunique'=>true),
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

<div id="theGrid" style="margin-left:0;"> <!--theGrid-->
            <div class="title2" style="border-bottom: none;">Brand</div>
            <div class="bottomline"style="margin-left:300px;width:900px;" ></div>
            <br/><br/>
            <div class="search_container" style="border-bottom: none;  width: 400px;height:40px; float:left; ">
                 <input type="text" id="admin_search_brand" class="admin_search" style="margin-top:5px;width:300px !important;" value="" />
                <div id="admin_search_brand_btn" class="btn" style="margin-top:-5px;">Search</div>
            </div>
            <div id="rendercontainer" style="margin-top:-20px">

                <?php 
             
                
                     
                       
                
                         $this->renderPartial('_gridView',array('model'=>$model,'modelname'=>$modelname,'path'=>$updateurl,
                                               'tableStyle'=>$tableStyle, 'tablewidth' => $tablewidth,  
                                                'gridColumn'=>$gridColumn
                                              )
                                                 
                       );

            ?>
            </div>
</div> <!--End of theGrid-->


 <!-- -------------- END OF MENU ------------------ -->