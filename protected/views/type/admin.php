
<!------------------ The Button for add an ITEM  ------------------->



<!--------------------------- Start Table ----------------------------------------->



<br/><br/>




















    
<?php
/* @var $this VendorController */
/* @var $model vendor */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div style="float:rigth">
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
</div>    
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<?php


   $type = type::model();
    $this->widget('editable.EditableField', array(
        'type'      => 'text',
        'model'     => $type,
        'attribute' => 'name',
        'url'       => $this->createUrl('type/updatetype'), 
        'placement' => 'right',
    ));
?>



<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $model->search(),
   'filter' => $model,
   'template' => "{items}",
   'columns' => array(
        array(
            'name' => 'id',
            'header' => '#',
            'htmlOptions' => array('color' =>'width: 60px'),
        ),
        array(
            'name' => 'name',
            'header' => 'Name',
        ),
       
    ),
)); ?>










<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		
		array(
			'class'=>'CButtonColumn',
                        'deleteConfirmation'=>"js:'Do you really want to delete record with ID '+$(this).parent().parent().children(':nth-child(2)').text()+'?'",
                        'template'=>'{edit} {delete}',
                        'buttons'=>array(
                                    'edit' => array
                                    (
                                       // 'label'=>'Send an e-mail to this user',
                                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/edit.png',
                                        'url'=>'Yii::app()->createUrl("type/update", array("id"=>$data->id))',
                                    ),
                                    'delete' => array
                                    (
                                       
                                    
                                        'url'=>'Yii::app()->createUrl("type/remove", array("id"=>$data->id))',
                                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
                                        
                                    ),
                            ),

		),
	),
)); ?>

</div>