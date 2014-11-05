<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


?>




<div class="content_container" style="min-height: 1100px;">

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


<div id="review_content" style=" margin-left: 50px; ;float:left;width:650px;min-height:600px;">
<!-- PLATE 1  -->   
    <div id="detail_container" style=" width:650px;height:200px; border:rgb(217,217,217) 1px solid;">
            <div style="width:620px;padding-left:30px; ;padding-bottom: 10px;border-bottom:rgb(166,166,166) dashed 1px ; margin: 20px 20px 0 0;color:rgb(52,172,139);font-family:'Angsana New','tahoma'; font-size:22px; font-weight: bold;  padding-top:10px;">
               รีวิวสินค้า
            </div> 
            <div>
                     
                     <?php
                                
                                $dataProvider=new CActiveDataProvider('item',array(
                                                                        'sort'=>array(
                                                                                'defaultOrder'=>'name ASC',
                                                                         ),

                                                                        'criteria'=>array(
                                                                            'condition'=>"id=:id",
                                                                            'params'=>array(':id'=>$itemid),
                                                                        ),


                                                                      )    
                                );
                     
                                $this->widget('zii.widgets.CListView', array(
                                  'dataProvider'=>$dataProvider,
                                  'itemView'=>'_viewitem',
                              )); 




                        ?>

            </div>
        
    </div> <!--  END OF REVIEW CONTAINER  -->  
<!-- PLATE 2  --> 
     <div id="detail_container" style="margin-top:20px; width:650px;min-height:250px; border:rgb(217,217,217) 1px solid;">
           
            <div>
                    <?php 
                            
                             $userid = Yii::app()->user->getId();
                             $this->renderPartial('//review/create',array('itemid'=>$itemid,'userid'=>$userid));
                    ?>
            </div>
        
    </div> <!--  END OF PLATE 2  -->  


    
    
</div> <!--  END OF REVIEW CONTENT  -->
         
</div>





</div>