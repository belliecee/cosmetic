<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.2.custom.js"></script>



<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


?>

<div class="title2" style="padding-top: 20px;border-bottom: none;">User Group </div><br/>
<div class="bottomline"></div>
<br/>
<div style="margin: 0 0 0 50px;">



<?php   $this->renderPartial('_form',array('model'=>$model)); ?> 
<?php   $this->renderPartial('admin'); ?> 