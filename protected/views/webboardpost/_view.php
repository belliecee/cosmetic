


<?php
/* @var $this WebboardpostController */
/* @var $data webboardpost */
?>


   

<?php $toview = $this->createUrl('view',array('id'=>$data->id)) ; ?>

<div class="webboard_row">
     <div class="prefix restricted">Q</div>
     <div class="webboard_title restricted" style=""> <a href="<?php echo $toview ;?>"><?php echo CHtml::encode($data->topic); ?></a> </div>
     <div style="float:left;margin-right:0;"> - </div>
     <div class="webboard_poster restricted"><?php  if(user::model()->findByPk(Yii::app()->user->getId()) != null) echo user::model()->findByPk(Yii::app()->user->getId())->username; ?></div>
     
<div class="webboard_date restricted"><?php echo $data->update_on;?></div>
<div class="webboard_commentnum "> <span style="width:70px;margin-right:10px;"><i class="fa fa-eye"></i>&nbsp;70</span>  <span style="width:40px;"><i class=" fa fa-comment"></i> &nbsp;78 </span> </div>

     
</div>
