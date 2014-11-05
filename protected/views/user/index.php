<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>



<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


?>
<?php echo CHtml::link('<div id="addQuotation" class="simple_button" style="margin-bottom: 10px; display: inline-block;float: right;" disabled ="">Add User</div>',array('create'));  ?>  
<div class="title2" style="padding-top: 20px;border-bottom: none;">User </div><br/>
<div class="bottomline"></div>
<br/>
<div style="margin: 0 0 0 50px;">



<div class="view3" >
    
  <ul class="inline_view">
   <!--   <li>  </li>  -->
     <li><b>Given Name</b></li>
       
     <li><b>Last Name</b></li>
     
     <li><b>Username</b></li>
    
     <li><b>Email</b></li>
     
     <li><b>Authorization</b></li>
     
   
  </ul>
        
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'sortableAttributes'=>array('name','registerdDate'),
        'template' => "{items}",
)); ?>
