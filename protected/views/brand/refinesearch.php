<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($searchbycategory == null){$searchbycategory = "";}
if($searchbyname == null){$searchbyname = "";}

?>

<!-- Refine Search  --> 
    <div class="refinesearch_container" style="min-height:220px; width:700px;margin-top:0;margin-bottom:20px;">
<!-- Header -->             
            <div class='search_header'>
               Refine Search
               
            </div>
               
<!-- body -->  
          <form id="searchReview" method="POST">
            <div class="search_body" style="min-height:100px;" >
                
                
              
         
              <div style="float:left;">
                 <div class=" light_grey_1" style="float:left;padding-top:5px;padding-left:10px;margin-right: 10px;">Category</div> 
                 <select name="searchbycategory" class="form-control"    id="searchbycategory" style="float:left;margin-right:20px;">
                          <?php
                                
                     
                               $categories = category::model()->findAll(array("order"=>'name'));

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($categories as $_category){
                                    
                                     echo "<option class='form-control' value='".$_category->id."'>".$_category->name."</option>";    
                                }
                                 
                                  
                         ?>              
                  </select>
              </div>
                
              <div style="clear:both;"></div>  
              <div>
                <div class=" light_grey_1" style="float:left;padding-top:5px;">Item Name</div> 
                  <input type="text" name="searchbyname" class="form-control"    id="searchbyname" style="margin-left:10px;float:left;width:470px;">
                          
              </div>
            </div>
          </form>      
<!-- Search Button -->      
      <div class="search_button light_grey_1" > Search </div>
        
    </div> <!-- END OF CONTAINER Refine Search   -->  
        
<!-- PLATE 1  -->  

<script>    
       $(function(){
            
            
            var givencategory = '<?php echo $searchbycategory; ?>';
            var givenname = '<?php echo $searchbyname; ?>';
            
            $("#searchbycategory").val(givencategory);
            $("#searchbyname").val(givenname);
            
            $('.search_button').click(function(){
                
                $("#searchReview").submit();
            
            });
            
            
       });
</script>