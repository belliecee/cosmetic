<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$item_model = item::model()->findByPk($data->item_id);
$user_model = user::model()->findByPk($data->user_id);
$reviewbtn = "reviewbtn_".$data->id;
?>


  <style type="text/css">

    
.item_img {
	background-color: #FFF;
	width: 160px;
	height: 180px;
	margin-right: auto;
	margin-left: auto;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	border: thin solid #FFFFFF;
}
.item_category {
	text-align: center;
	color: rgb(0,128,255);
	margin-top: 0px;
	margin-right: 10px;
	margin-left: 10px;
}
.midline {
	text-align: center;
	margin-top: 10px;
        width:150px;
        height: 9px;
        margin-left: auto;
        margin-right: auto;
}
.item_container {
        float: left;
	height: 300px;
	width: 200px;
        margin-left: 15px;
	border: medium solid rgb(228,228,228);
         margin-bottom: 20px;
}
.item_container:hover {

	border: medium solid rgb(245,118,97);
	cursor: pointer;

}

.item_name {
	text-align: center;
	font-size: 16px;
	margin-top: 5px;
	margin-right: 15px;
	margin-bottom: 0px;
	margin-left: 15px;
	font-family: Tahoma, Geneva, sans-serif;
	height: 18px;
}
.item_other {
	text-align: center;
	height: 20px;
}
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 25px;
	top: 342px;
}
.item_footer {
	display: none;
	position: absolute;
	background-color: rgb(245,118,97);
	margin-top: 7px;
	text-align: center;
	width: 100%;
	height: 20px;
	top: 270px;
	left: 0;
	padding-bottom: 5px;	
}
.item_footer table{
	height: 100%;
	width: 100%;
	height: 20px;
}
.item_footer table tr{
	width: 100%;
	height: 20px;
}
.item_footer table tr td{
	width: 50%;
	height: 20px;
	font-family: "tahoma";
	font-size: 12px;
	margin: 0;
	text-align: left;
	padding-left: 10px;
	color: white;
	padding-top: 0;
	padding-right: 0;
	padding-bottom: 5;
	cursor: pointer;
	vertical-align: middle;
}
.item_footer table tr td:hover{
	color: #FEEFEC;
}
.item_footer table tr td:first-child{
	border-right: 1px solid white;	
}

.item_container:hover   .item_footer{
    display: block;	
	

}
     </style>
    
            
          
         
  <div class="item_container" id="tag1">
   <div style="position:relative;">
          <div class="item_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Bio-Performance.jpg" alt="" width="160" height="160" /></div>
          <div class="item_category">แปรงปัดขนตา</div>
          
          <div class="midline">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/underline.png" width="150" height="9" />
          </div>
    <div class="item_name">Shisedo</div>
    <div class="item_other">★★★★     </div>
    	 <div class="item_footer">
               <table >
                    <tr>
                         <td ><i class="icon-white icon-ok-sign"></i>
                         		Review
                         </td>
                         <td ><i class="icon-white icon-thumbs-up"></i> 
                         		Comment
                         </td>
                    </tr>
               </table>
          </div>
    
    </div>   
     </div>
<?php
/*
   <div class="item_container" id="tag2">
      <div style="position:relative;">
          <div class="item_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Bio-Performance.jpg" alt="" width="160" height="160" /></div>
          <div class="item_category">แปรงปัดขนตา</div>
          
          <div class="midline">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/underline.png" width="150" height="9" />
          </div>
       <div class="item_name">Shisedo</div>
          <div class="item_other">★★★★     </div>
         	 <div class="item_footer">
               <table >
                    <tr>
                         <td ><i class="icon-white icon-ok-sign"></i>
                         		Review
                         </td>
                         <td ><i class="icon-white icon-thumbs-up"></i> 
                         		Comment
                         </td>
                    </tr>
               </table>
          </div>
     </div>    
     </div>
     
     
     
     
     <div class="item_container" id="tag3">
     <div style="position:relative;">
       <div class="item_img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Bio-Performance.jpg" alt="" width="160" height="160" /></div>
          <div class="item_category">แปรงปัดขนตา</div>
          
          <div class="midline">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/underline.png" width="150" height="9" />
          </div>
       <div class="item_name">Shisedo</div>
          <div class="item_other">★★★★     </div>
       <div class="item_footer">
               <table >
                    <tr>
                         <td ><i class="icon-white icon-ok-sign"></i>
                         		<span>Review</span>
                         </td>
                         <td ><i class="icon-white icon-thumbs-up"></i> 
                         		<span>Comment</span>
                         </td>
                    </tr>
               </table>
          </div>
      </div>   
     </div>
 * 
 * 
 * 
 */
?>