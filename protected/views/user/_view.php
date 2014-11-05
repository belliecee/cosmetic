<?php
/* @var $this UserController */
/* @var $data user */


  $viewurl =  $this->createUrl("view",array("id"=>$data->id));  
  $updateurl = $this->createUrl("update",array("id"=>$data->id));  
 
?>

<script>
    $(function(){
                
        $('.view2').mouseover(function(){ $(this).find('.item_operations').show();  });   
        $('.view2').mouseout(function(){ $(this).find('.item_operations').hide();  });   
                     
    });


</script>

<div class="view2">
 <!--
 <a href='<?php //echo $tourl; ?>'> 
 -->
  <ul class="inline_view">
     <!-- <li><?php // echo CHtml::encode("รูปภาพ"); ?> </li> -->
      
      <li><?php echo CHtml::encode($data->givenname); ?></li>
      <li><?php echo CHtml::encode($data->lastname); ?></li>
     <li><?php echo CHtml::encode($data->username); ?></li>
     
     
      <li><?php echo CHtml::encode($data->email); ?></li>
      
      <li><?php echo CHtml::encode($data->auth); ?></li>
      
      
   

      
<?php
/*
     
     <li>
         <?php 
               if($data->capacity == NULL)
                 echo "0";
               else
                 echo CHtml::encode($data->capacity); 
         ?>
	 &nbsp;&nbsp;  <span style="float:right; margin-right:35px; ">hrs./week</span>
     </li>
 * 
 */
?>
     <?php /*<a href='<?php echo $url; ?>'><li class="item_operations">Delete</li></a> */?>
     <?php 
     echo CHtml::link('<li class="item_operations">Delete</li>',array('remove','id'=>$data->id,'confirm'=>'Are you sure to delete'));
     ?>
    <a href='<?php echo $updateurl; ?>'><li class="item_operations">Edit</li></a> 
<?php
/*
    <a href='<?php echo $viewurl; ?>'><li class="item_operations">View</li></a> 
*/
?>   
   
  
    <?php   
    /*
        echo CHtml::link(
            '<li class="item_operations">Delete</li>',
            array('')
         );
     
         echo CHtml::link(
            '<li class="item_operations">Edit</li>',
            array('update','id'=>$data->id)
        );

     */
     
    ?>  
<?php
/*
     <ul class="item_operations">
         <li>edit</li>
         <li>delete</li>
     </ul>    
 */
?>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedate')); ?>:</b>
	<?php echo CHtml::encode($data->updatedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_time_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_time_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officephone')); ?>:</b>
	<?php echo CHtml::encode($data->officephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cellphone')); ?>:</b>
	<?php echo CHtml::encode($data->cellphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homephone')); ?>:</b>
	<?php echo CHtml::encode($data->homephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile')); ?>:</b>
	<?php echo CHtml::encode($data->profile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacity')); ?>:</b>
	<?php echo CHtml::encode($data->capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_monday')); ?>:</b>
	<?php echo CHtml::encode($data->available_monday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_tuesday')); ?>:</b>
	<?php echo CHtml::encode($data->available_tuesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_wednesday')); ?>:</b>
	<?php echo CHtml::encode($data->available_wednesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_thursday')); ?>:</b>
	<?php echo CHtml::encode($data->available_thursday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_friday')); ?>:</b>
	<?php echo CHtml::encode($data->available_friday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_saturday')); ?>:</b>
	<?php echo CHtml::encode($data->available_saturday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_sunday')); ?>:</b>
	<?php echo CHtml::encode($data->available_sunday); ?>
	<br />

	*/ ?>
   </ul>
 <!--
 </a>
 -->
</div>


