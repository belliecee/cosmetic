<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<?php //echo $this->renderPartial('_updateform', array('model'=>$model)); ?>

<div class="content_container" style="min-height: 800px;">

<div id="theGrid" style="margin-left:0;">


<!---------------------------------- HEADER  ------------------------------------>
   <?php 
            $this->renderPartial('header',array('model'=>$model)); 
   ?>
<!---------------------------------- HEADER  ------------------------------------>

<br/>

<!---------------------------------- LEFT SIDE BAR  ------------------------------------>
   <?php 
            $this->renderPartial('leftsidebar',array('model'=>$model,'reviewmodel'=>$reviewmodel)); 
   ?>
<!---------------------------------- LEFT SIDE BAR  ------------------------------------>

<?php

// REVIEW CONTENT

?>




<!-- RIGHT SIDE --> 
<!-- SELF-INTRODUCE  --> 


        <div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:400px;">
                <?php echo $this->renderPartial('_updateform', array('model'=>$model)); ?>

        </div><!--review_content-->
</div> <!--theGrid-->
</div><!--content_container-->
