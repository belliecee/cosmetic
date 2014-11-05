<?php
/* @var $this CategoryController */
/* @var $data category */
?>

<style>
       
    a{
        font-weight:bold; font-size: 16px;
        color: rgb(56,186,149);
    }
    a:hover
    {
        font-weight:bold; font-size: 16px;
        color: rgb(56,186,149);
    }
    .categorystyle{
        color: rgb(13,121,202); 
         font-weight:bold;
        
    }
    .brandstyle{
        color: rgb(247,141,124); 
         font-weight:bold;
    }
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



  


<div class="view" style="display:block;clear:both;padding: 5px 0 0 40px; height: 120px;" >

    
<?php

//  IMAGE BLOCK
        $dir = Yii::app()->baseUrl.'/dispics';
         if($data->image != null && $data->image != ""){
             $path = $dir.'/'.$data->image;
?>             
             <div style="float:left;background-position:center;background-repeat:no-repeat;background-size: 125px 100px;background-image:url('<?php echo $path; ?>') ;  width:125px;height:120px" ></div>
<?php
         }else{
           $path = $dir.'/noimage.png';
?>
           <div style="float:left;background-position:center;background-repeat:no-repeat;background-size: 125px 100px;background-image:url('<?php echo $path; ?>') ;  width:125px;height:120px" ></div> 
            
                
<?php
         }
?>
    
           
<?php
//   ITEM LIST BLOCK
?>
          
            
        <div class="itemlist_detail" style="margin-top:10px ;float:left; margin-left:30px;top: -30px;">
            
               
          
                
                <?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id));?>
                <br />
                
                
<!--  Category Line    -->
                <div class="categorystyle">
                <?php  
                       if($data->category != null && $data->category != "") 
                            echo CHtml::encode(category::model()->findByPk($data->category)->name); 
                       else 
                            echo "-"; 
                ?>
                </div>
                
<!--  Brand Line    -->                
                <div class="brandstyle">
                <?php 
                            if($data->brand != null && $data->brand != "") 
                                echo CHtml::encode(brand::model()->findByPk($data->brand)->name); 
                           else 
                                echo "-";  
                ?>
                </div>

             
                

             
        </div>  
       
        <?php
               $listyle = "font-weight:bold;font-size:12px;list-style:none;cursor:pointer;margin-top:5px;";
               $stardir = Yii::app()->baseUrl.'/images';
               $margenta = "color:rgb(56,186,149);";
               $light_orange = "color:rgb(247,141,124);";
        ?>
        

</div>