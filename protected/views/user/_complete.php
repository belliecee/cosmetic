<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php

/*

<style>
   
  

  
    #styleedit{
        position: fixed;
        left: 1100px; top : 100px;
        width: 220px; height: 400px;
        background-color: lightblue;
        overflow-x:hidden;
        overflow-y: scroll;
        
        -webkit-animation: up 10000ms linear infinite alternate;
	-moz-animation: up 10000ms linear infinite alternate;
	-ms-animation: up 10000ms linear infinite alternate;
	animation: up 10000ms linear infinite alternate;
	
    }  
    
    .selectedborder{
        border : dashed 2px lightblue;
    }
 
#styleedit::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

#styleedit::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #555;
}


</style>

<script>
    
         $(function(){
             
              $('#styleedit *').addClass('notselected');
              $('#styleedit').draggable();
              $('.notselected').click(function(event){
                  event.stopPropagation();
              });         
               $('*').not('.notselected').mouseover(function(event){
                   $(this).addClass('selectedborder');
                   event.stopPropagation();
               
               });
                $('*').not('.notselected').mouseout(function(event){
                   $(this).removeClass('selectedborder');
                   event.stopPropagation();
               
               });
               
               
              
              $('*').not('.notselected').click(function(event){
                  event.stopPropagation();
// GET ID
                   var divid = $(this).attr('id');
// GET Element ID
                   var tag_name = $(this).get(0).tagName;
// GET Width
                   var getwidth = $(this).css('width');
// GET Height                 
                   var getheight = $(this).css('height');

                   $('#divid').val(divid);
                   $('#tagname').val(tag_name);
                   $('#getWidth').val(getwidth);
                   $('#getHeight').val(getheight);
              });
              
          });

</script>

*/
?>


<style>
      #completemsg{
        font-family: 'Angsana New','Calibri','Tahoma';
        font-weight: bold;
        font-size: 27px;
        width: 500px;
        height: 50px;
        margin: 0 auto;
        margin-top: 80px;
        width: 500px;
        height: 200px;
        border: 1px dashed rgb(247,141,124);
        border-radius: 5px;
         
-webkit-backface-visibility: visible;
-webkit-transform-origin: 50% 50%;
-webkit-transform: perspective(500px) rotateY(180deg);
    }
    .cent{
        margin: 0 auto;
        width: 140px;
        margin-top: 20px;
    }
</style>

<fieldset>
<div id="completemsg" > 
    <div class="cent">ลงทะเบียนเสร็จสิ้น</div>
       
       
      <div class="cent" style="margin: 0 auto;color:goldenrod; font-size:20px;"> คุณได้รับ <?php echo $model->point; ?>  Points </div> 
<br /> <br />
    
       <div class="cent" style="margin: 0 auto;color:goldenrod; font-size:22px;width: 100px;"> 
            <?php echo CHtml::link('กลับสู่หน้าหลัก',array('site/index'),array('style'=>'font-size:18px')); ?>
       </div>
       
       
</div>

</fieldset>


<!--  Uncomment to use html style EDIT  -->

<!--
<div id="styleedit" class="notselected" >
    <div  style="float:right; border: solid 2px white ;margin-top:20px;margin-right:10px ; width:65px;cursor:pointer; background-color:yellowgreen; color:white;">&nbsp;CREATE </div>
    <div  style="float:right; border: solid 2px white ;margin-top:20px;margin-right:10px ;margin-bottom:20px; width:65px;cursor:pointer; background-color:yellowgreen; color:white;">&nbsp;&nbsp;&nbsp;SAVE </div>
    <table style="clear:both; margin-top: 20px !important;">
        <tr>
            <td class="notselected">
                ID 
            </td>
            <td class="notselected">
                <input id="divid" class="notselected" type="text" style="width:80px;height:15px;">
            </td>
            
        </tr>
        
        <tr>
            <td>
                Name 
            </td>
            <td>
                <input id="divname" class="notselected" type="text" style="width:80px;height:15px;">
            </td>
            
        </tr>
        
        <tr>
            <td>
                Tag Name 
            </td>
            <td>
                <input id="tagname" class="notselected" type="text" style="width:80px;height:15px;">
            </td>
            
        </tr>
        
        <tr>
            <td>
                Width
            </td>
            <td>
                <input id="getWidth" class="notselected" type="text" style="width:80px;height:15px;">
            </td>
            
        </tr>
        
         <tr>
            <td>
                Height
            </td>
            <td>
                <input id="getHeight" class="notselected" type="text" style="width:80px;height:15px;">
            </td>
            
        </tr>
        
       
        
        
    </table>
            
</div>

-->