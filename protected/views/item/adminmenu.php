<style type="text/css">  
a  
{     
 text-decoration:none !important;  
}  
.mymenu{
    position: absolute;
    /*width: 250px !important;*/
}

.mymenu a li{
    
    width: 250px !important;
}

</style>  

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div  style="float:left; margin-left:-30px; margin-right: 70px;width:300px;height:800px;">
    <ul  class="mymenu" >    
      <?php  
              echo  CHtml::link('<li style="border-bottom: 1px solid rgb(191,191,191) !important">Category Group<div style="float:right;margin-right:20px;">>></div></li>',
                    array("majorcategory/admin")
               );
               echo  CHtml::link('<li style="border-bottom: 1px solid rgb(191,191,191) !important">Category <div style="float:right;margin-right:20px;">>></div></li>',
                    array("category/admin")
               ); 
                 
               echo  CHtml::link('<li style="border-bottom: 1px solid rgb(191,191,191) !important">Brand <div style="float:right;margin-right:20px;">>></div></li>',
                     array("brand/admin")
               ); 
                echo  CHtml::link('<li style="border-bottom: 1px solid rgb(191,191,191) !important">Maker <div style="float:right;margin-right:20px;">>></div></li>',
                     array("maker/admin")
               ); 
               echo CHtml::link('<li style="border-bottom: 1px solid rgb(191,191,191) !important">Product Item <div style="float:right;margin-right:20px;">>></div></li>',
                    array("item/admin")
                );
                 
                echo CHtml::link('<li>Point Management<div style="float:right;margin-right:20px;">>></div></li>',
                    array("pointmanagement/admin")
                );
   ?>
    </ul>
</div>