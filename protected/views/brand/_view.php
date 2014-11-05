

<?php
/* @var $this CategoryController */
/* @var $data category */



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
        display: block;
        clear: both;
        padding-top: 5px;
        min-height: 170px;
        border-bottom: 1px solid #E7E7E7 !important;
        box-shadow: 0px 8px 6px -6px #F2F2F2;
    }
   
    
    .alreadyadded{
        color: #EE5757;
    }   
    a.itemname{
              
        font-size: 24px;
        color: #666 !important;
        text-decoration: none;
        font-family:"Batang","Browallia New","Tahoma","Serif";
       
    }
    a.itemname:hover {color: #666 !important; text-decoration: none; }
    .brandstyle{
        color: #ED8788 !important;
        font-size: 17px;
        margin-bottom: 5px;
        
    }
    .categorystyle{color: rgba(180, 180, 180, 1);font-size: 16px;margin-top:0;}
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
  .item_ranking{
        float:left;background-position:center; width:70px;height:70px;
        text-align: center;font-weight:bold;
    }
</style>



  


<div class="view itemrow"  >
 <?php  $dir = Yii::app()->baseUrl.'/img'; ?>
 <?php  $border_top = $dir.'/ranking_border-top.jpg'; ?>
 <?php  $border_bottom = $dir.'/ranking_border-bottom.jpg'; ?>
    
    <div class="item_ranking" ><img src='<?php echo $border_top ; ?>'>No. <?php echo ++$index; ?><img src='<?php echo $border_bottom ; ?>'></div>
    
<?php

//  IMAGE BLOCK
        $dir = Yii::app()->baseUrl.'/images';
        $itemurl = $this->createUrl("item/view",array("id"=>$data->id));
?>
        <a href='<?php echo $itemurl; ?>'>
<?php
         if($data->image != null && $data->image != ""){
             $path = $dir.'/'.$data->image;
?>             
             <div style="float:left;background-position:center;  width:125px;height:125px" ><img src='<?php echo $path; ?>' /></div>
<?php
         }else{
           $path = $dir.'/noitem02.png';
?>
           <div style="float:left;background-position:center; width:125px;height:120px" ><img src='<?php echo $path;  ?>' /></div> 
            
                
<?php
         }
?>
    </a>
           
<?php
//   ITEM LIST BLOCK
?>
          
            
    <div class="itemlist_detail" style="margin-top:10px ;float:left; margin-left:30px;top: -30px;">
            
               
          
                
                <!--  Brand Line    -->                
                <div class="brandstyle">
                <?php 
                            if($data->brand != null && $data->brand != "") 
                                echo CHtml::encode(brand::model()->findByPk($data->brand)->name); 
                           else 
                                echo "-";  
                ?>
                </div>
                <div>
                    <?php echo CHtml::link(CHtml::encode($data->name),array('item/view','id'=>$data->id),array("class"=>"itemname"));?>
                </div>
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


<?php
 //  Star Rating
?>
                <div style="margin-top:5px">
                         
                          <?php 
                          
                          
                                $star =  new Star();
                                $starvote = $star->getStarvote($data->avgVote);
                                if($data->avgVote == null || $data->avgVote == "")
                                 {       
                                          //echo ' <i class="star star"></i> ';
                                          echo "<div class='starswrapper'><div class='$starvote' ></div></div>"; 
                                          echo ' (0) ';
                                         
                                  }else{ 
                                      
                                      /*
                                          $floor = floor($data->avgVote);
                                          $ceil = ceil($data->avgVote);
                                          $middle = ($floor + $ceil)/2;
                                        
                                          
                                          
                                          if($data->avgVote == $floor){
                                                  
                                          }
                                     */   
                                        
                                          echo "<div class='starswrapper'><div class='$starvote' ></div></div>"; 
                                          echo " (".$data->avgVote.") ";
                                          
                                      
                                  } 
                                       
                                        
                          ?>
                </div>    


<?php
 //  Review number
?>
                <div style="font-size:11px"> &nbsp;&nbsp;
                          <?php echo " จำนวนรีวิว " ; if($data->reviewNum == null || $data->reviewNum == ""){echo '0';}else{ echo $data->avgVote;} 
                               
                          ?>
                </div>    
             
                

             
        </div>  
       
        <?php
               $listyle = "font-weight:bold;font-size:12px;list-style:none;cursor:pointer;margin-top:5px;";
               $stardir = Yii::app()->baseUrl.'/images';
               $margenta = "color:rgb(56,186,149);";
               $light_orange = "color:rgb(247,141,124);";
        ?>
        <div style="float:right;width:150px;height:100px;">
               <?php
                        $toreview = $this->createUrl('user/review',array('itemid'=>$data->id));
               ?>
              <ul class="reviewpanel">
                  <li style=<?php echo $listyle.$margenta; ?>><div style=" float:left;background-position:center;background-repeat:no-repeat;background-size: 25px 25px;background-image:url('<?php echo $stardir.'/review.png'; ?>') ;  width:30px;height:30px"></div><a href="<?php echo $toreview; ?>"><div  class="paneltext" style="font-size:12px;margin-top:5px;vertical-align:text-top;height: 100%;display: inline-block; ">เขียน Review</div></a> </li>
<!--  Check the user add this item to wish list -->  
             <?php 
                   $addedwish = wishlist::model()->find("user_id=:user_id and item_id=:item_id",array(":user_id"=>Yii::app()->user->getId(),":item_id"=>$data->id));
             
             ?>
             <?php if($addedwish == null){?>     
                  
                  <li style=<?php echo $listyle.$light_orange; ?>><div style=" float:left;background-position:center;background-repeat:no-repeat;background-size: 25px 25px;background-image:url('<?php echo $stardir.'/star.png'; ?>') ;  width:30px;height:30px"></div><div id='wish_<?php echo $data->id ;  ?>' data-id='<?php echo $data->id ;  ?>' class="wishl paneltext" style="margin-top:5px;vertical-align:text-top;height: 100%;display: inline-block; ">เพิ่มใน Favorite</div></li>
             <?php }else{  ?>
                   <li style=<?php echo $listyle.$light_orange; ?>><div style=" float:left;background-position:center;background-repeat:no-repeat;background-size: 25px 25px;background-image:url('<?php echo $stardir.'/star.png'; ?>') ;  width:30px;height:30px"></div><div id='wish_<?php echo $data->id ;  ?>' data-id='<?php echo $data->id ;  ?>' class="paneltext alreadyadded" style="margin-top:5px;vertical-align:text-top;height: 100%;display: inline-block; ">เพิ่มแล้ว</div></li>
              <?php     } ?>    
              </ul>
                
        </div>

</div>
