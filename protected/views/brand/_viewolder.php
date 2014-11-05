<?php
/* @var $this BrandController */
/* @var $data brand */
?>

<script>
$(function(){
            $('.wishl').one('click',function(){
                
                var realid = '<?php echo $data->id; ?>';
                var pk = $(this).data('id');
                if(realid == pk) 
                {
                        var eleid  = $(this).attr('id');

                        $(this).removeClass('wishl');

                         var updateurl = '<?php echo $this->createUrl("category/savewish"); ?>';

                          alert("PK is "+pk);
                         var name = 'item_id';
                         var newvalue = '<?php echo $data->id; ?>';

                           $.ajax({
                                            url: updateurl,
                                            data: {id: pk, fieldname:name, fieldvalue:newvalue},
                                            type: 'get',

                                            success: function(){

                                                $('#wish_'+pk).text('เพิ่มแล้ว');
                                                $('#wish_'+pk).addClass('alreadyadded').removeClass('wishl')
                                            }
               
                        }
                     ); 
            }
               // alert("URL "+updateurl+" fieldname "+name+" fieldvalue "+newvalue);
                 // savewithajax(updateurl,pk,name,newvalue,updateplace);
            });
    
});

</script>

<style>
    .itemrow{
        color: #888; 
    }
    .alreadyadded{
        color: #EE5757;
    }   
    a.itemname{
              
        font-size: 24px;
        color: #666 !important;
        text-decoration: none;
    }
    a.itemname:hover {color: #666 !important; text-decoration: none; }
    .brandstyle{
        color: #ED8788 !important;
        font-size: 17px;
        
    }
    .categorystyle{color: #888;font-size: 16px;margin-top:0;}
     #starwrapper {
	background-image: url('../../../images/starrating.png');
	display: inline-block;
	height: 16px;
	width: 80px;
        overflow: hidden;
	background-position-x: -80px;
	background-position-y: -48px;
}
    
    
    i.star {
	background-image: url('../../../images/starrating.png');
	display: inline-block;
	height: 16px;
	width: 80px;
	background-position-x: -80px;
	background-position-y: -48px;
}

    i.star-1    { background-position-x: -64px }
    i.star-2    { background-position-x: -48px; }
    i.star-3    { background-position-x: -32px; }
    i.star-4    { background-position-x: -16px; }
    i.star-5    { background-position-x: 0; }
    i.star-qtr  { background-position-y: -32px; }
    i.star-half { background-position-y: -16px; }
    i.star-3qtr { background-position-y: 0; }

/*
i.star-1    { background-position-x: -64px }
i.star-2    { background-position-x: -48px; }
i.star-3    { background-position-x: -32px; }
i.star-4    { background-position-x: -16px; }
i.star-5    { background-position-x: 0; }
i.star-qtr  { background-position-y: -32px; }
i.star-half { background-position-y: -16px; }
i.star-3qtr { background-position-y: 0; }
*/
 
</style>


<div class="view" style="display:block;clear:both;padding-top: 5px;" >
<?php
        $dir = Yii::app()->baseUrl.'/dispics';
         if($data->image != null && $data->image != ""){
             $path = $dir.'/'.$data->image;
?>             
             <div style="display:inline-block;background-position:center;background-repeat:no-repeat;background-size: auto 300px;background-image:url('<?php echo $path; ?>') ;  width:100px;height:100px" ></div>
<?php
         }else{
           $path = $dir.'/noimage.png';
?>
           <div style="display:inline-block;background-position:center;background-repeat:no-repeat;background-size: auto 300px;background-image:url('<?php echo $path; ?>') ;  width:100px;height:100px" ></div> 
            
                
<?php
         }
?>
      
    
        <div class="itemlist_detail" style="display:inline-block; margin-left:30px;top: -30px;">
               

                
                        <?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id));?>
                <br />



               
                <?php  
                       if($data->category != null && $data->category != "") 
                            echo CHtml::encode(category::model()->findByPk($data->category)->name); 
                       else 
                            echo "-"; 
                ?>
                <br />

              
                <?php 
                            if($data->brand != null && $data->brand != "") 
                                echo CHtml::encode(brand::model()->findByPk($data->brand)->name); 
                           else 
                                echo "-";  
                ?>
                <br />
                 <b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
                <?php 
                            if($data->brand != null && $data->brand != "") 
                                echo CHtml::encode(brand::model()->findByPk($data->brand)->name); 
                           else 
                                echo "-";  
                ?>
                <br />
                

             
        </div>        

</div>