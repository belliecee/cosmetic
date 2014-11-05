<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$item_model = item::model()->findByPk($data->item_id);
$user_model = user::model()->findByPk($data->user_id);
$reviewbtn = "reviewbtn_".$data->id;
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
     .thanksforvote{
	background-image: url('../../../images/thanksforvote.png');
	display: block;
	height: 16px;
	width: 80px;
        overflow: hidden;
	
    }
    .votescoretab{
        padding: 7px 0 7px 30px; border-radius:7px; min-width:250px; height: 35px; background-color:rgb(202,242,151); color:rgb(129,211,26); font-weight:bold;font-size:12px; font-family: "Arial Black","Tahoma" ; }
    
    
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



  
<?php if($item_model != null){  ?>

<div class="view gray_gradient" style="padding: 20px 0 50px 0; min-height:320px;  border-radius:5px;" >

<div  style="float:right;margin-right:20px; font-size:12px;margin-bottom:15px; "><?php echo "เขียนเมื่อ  ".$data->create_on; ?></div>    
<!--  ITEM PLATE 1 --> 
<div style="clear:both;background-color:white; width:600px;height:130px;margin:0 auto;padding: 20px 10px;border-bottom:1px dotted grey;border-top: solid 1px #D9D9D9;border-left: solid 1px #D9D9D9;border-right: solid 1px #D9D9D9;">
<?php

//  IMAGE BLOCK
        $dir = Yii::app()->baseUrl.'/dispics';
         if($item_model->image == null || $item_model->image == ""){
              $path = $dir.'/noimage.png';
             
?>        
                <img src="<?php echo $path ; ?>" style='margin-left:20px ;margin-top:-10px ;float:left; width:110px;height:110px'>
<!--                <div style="margin-left:20px ;float:left;background-position:center;background-repeat:no-repeat;background-size: 90px 80px;background-image:url('<?php //echo $path; ?>') ;  width:90px;height:80px" >
                
                </div> 
            -->
            
<?php
         }else{
            $path = $dir.'/'.$item_model->image;
?>           <img src="<?php echo $path ; ?>" style='margin-left:20px ;margin-top:-10px ;float:left; width:110px;height:110px'>
<!--            <div style="margin-left:20px ;float:left;background-position:center;background-repeat:no-repeat;background-size: 90px 80px;background-image:url('<?php // echo $path; ?>') ;  width:90px;height:80px" ></div>-->
                
<?php
         }
?>
    
           
<?php
//   ITEM LIST BLOCK
?>
          
            
        <div class="tahoma_12_grey itemnameFont" style="margin-top:10px ;float:left; margin-left:30px;top: -30px;">
            
               
          
                
                <?php echo CHtml::link(CHtml::encode($item_model->name),array('item/view','id'=>$item_model->id));?>
                <br />
                
       
<!--  Brand Line    -->                
                <div class="tahoma_12_grey brandFont">
                <?php 
                            if($item_model->brand != null && $item_model->brand != "") 
                                echo CHtml::encode(brand::model()->findByPk($item_model->brand)->name); 
                           else 
                                echo "-";  
                ?>
                </div>                
                
<!--  Category Line    -->
                <div class="tahoma_12_grey categoryFont">
                <?php  
                       if($item_model->category != null && $item_model->category != "") 
                            echo CHtml::encode(category::model()->findByPk($item_model->category)->name); 
                       else 
                            echo "-"; 
                ?>
                </div>
                <?php
                        $floor = floor($item_model->avgVote);
                        $ceil = ceil($item_model->avgVote);
                        $middle = ($floor + $ceil)/2;
                        $suffix = "";
                       $starNum = "";
                       $starvote = ""; 
                       if($floor != $ceil){
                                    if($item_model->avgVote >  $floor && $item_model->avgVote < $middle){
                                        $suffix = "stars-qtr";

                                    }else if ($item_model->avgVote ==  $middle){
                                        $suffix = "stars-half";
                                    }else if ($item_model->avgVote >  $middle && $item_model->avgVote < $ceil){
                                       $suffix = "stars-3qtr";
                                    }
                       }
                       
                       
                        if($floor == 0)
                        {
                            $starvote = "stars";
                        }else{
                           $starNum = "stars stars-".$floor;
                           $starvote = $starNum." ".$suffix;
                           
                        }
                        //echo $starvote;
                        
                        
                ?>
               <div class="tahoma_12_grey avgVoteFont">
                          <div class='starswrapper'><div class='<?php echo $starvote ?>'></div></div> <?php if($item_model->avgVote == null || $item_model->avgVote == "")echo " (0 คะแนน)";else echo "(".$item_model->avgVote." คะแนน)";  ?></span></td></tr>
                

               </div>
             
                

             
        </div>  
       
        <?php
               $listyle = "font-weight:bold;font-size:12px;list-style:none;cursor:pointer;margin-top:5px;";
               $stardir = Yii::app()->baseUrl.'/images';
               $margenta = "color:rgb(56,186,149);";
               $light_orange = "color:rgb(247,141,124);";
        ?>
   
</div> <!-- END OF ITEM PLATE 1 --> 


<!--  ITEM PLATE 2 --> 
<div style=" border-left: solid 1px #D9D9D9;border-right: solid 1px #D9D9D9;background-color:white; width:600px;height:70px;margin:0 auto;padding: 20px 30px;border-bottom:1px dashed grey;">
      
      <?php echo $data->comment ;?>
    
</div> <!-- END OF ITEM PLATE 2 --> 


<!--  ITEM PLATE 3 --> 
<div style=" border-left: solid 1px #D9D9D9;border-right: solid 1px #D9D9D9;background-color:rgb(242,242,242); width:600px;height:70px;margin:0 auto;padding: 7px 30px;border-bottom: solid 1px #D9D9D9;color:orange;">
<?php
//  Check that user has ever vote this review or not
  $whovote = whovotereview::model()->findAll("user_id = :user_id and review_id=:review_id",array(":user_id"=>Yii::app()->user->getId(),":review_id"=>$data->id));
/*  
// Check the user is own or not if not add REVIEW Button, if so Add Review number
  if($user_model->id == Yii::app()->user->getId()){ 
?>    
      <div  class="votescoretab"  style="float:right;margin-top:15px !important;"><div style="font-size:20px;display:inline-block;"> <?php if($data->vote != null && $data->vote != "") echo $data->vote;else echo "0"; ?> 964</div>&nbsp;&nbsp; votes for this reviews </div>
<?php  
   }else{ 
 * 
 */ 
        if($whovote == null){
?>      
 
                <div id='<?php echo $reviewbtn; ?>' class="votebtn votebtn_border" data-id='<?php echo $data->id ;?>' style="float:right;margin-top:15px !important;">Vote</div>
<?php 
         }else{
?>          
                <img id='thanks_<?php echo $reviewbtn; ?>' src="<?php echo Yii::app()->baseUrl; ?>/images/thanksforvote.png"   style="float:right;margin-top:15px !important;width:180px;height:30px;" />
<?php
         }
 // } //end of Checking the user is own or not if not add REVIEW Button, if so Add Review number
?>
    
</div> <!-- END OF ITEM PLATE 3 --> 
</div>

<?php   } // Check $item_model is null or not   ?>  