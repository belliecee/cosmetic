<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!-- Refine Search  --> 
    <div class="refinesearch_container">
<!-- Header -->             
            <div class='search_header'>
               Refine Search
               
            </div>
               
<!-- body -->  
          <form id="searchReview" method="POST">
            <div class="search_body">
              <div style="float:left;">
                <div class=" light_grey_1" style="float:left;padding-top:5px;">Brand</div> 
                  <select name="searchbybrand" class="form-control"    id="searchbybrand" style="margin-left:10px;float:left;">
                          <?php
                                
                               $brands = brand::model()->findAll();
                              // $brands = array("Shisedo","ZA","Guess");

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($brands as $_brand){
                                    echo "<option class='form-control' value='".$_brand->name."'>".$_brand->name."</option>";
                                 }
                                  
                         ?>              
                  </select>
              </div>
         
              <div style="float:left;margin-left:20px">
                 <div class=" light_grey_1" style="float:left;padding-top:5px;">ให้คะแนน</div> 
                 <select name="searchbyscore" class="form-control"    id="searchbyscore" style="margin-left:10px;float:left;width:100px;">
                          <?php
                                
                     
                               $score = array("1","2","3","4","5");

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($score as $_score){
                                    
                                     echo "<option class='form-control' value='".$_score."'>".$_score." ดาว</option>";    
                                }
                                 
                                  
                         ?>              
                  </select>
              </div>
            </div>
          </form>      
<!-- Search Button -->      
      <div class="search_button light_grey_1" > Search </div>
        
    </div> <!-- END OF CONTAINER Refine Search   -->  
        
<!-- PLATE 1  -->  