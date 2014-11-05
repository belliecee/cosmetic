<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($searchbybrand == null){$searchbybrand = "";}
if($searchbyname == null){$searchbyname = "";}
?>
<script>    
       $(function(){
            
            
            var givingscore = '<?php //echo $givingscore; ?>';

            
            
            $('.search_button').click(function(){
                
                $("#searchReview").submit();
            
            });
            
            
       });
</script>

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

<!--BRAND-->
                <div class=" light_grey_1" style="float:left;padding-top:5px;padding-left:30px;">Brand</div> 
                  <select name="searchbybrand" class="form-control"    id="searchbybrand" style="margin-left:10px;float:left;">
                          <?php
                                
                               $brands = brand::model()->findAll(array("order"=>'name'));
                              // $brands = array("Shisedo","ZA","Guess");

                                 echo "<option class='form-control' value=''>ไม่กำหนด</option>";
                                 foreach($brands as $_brand){
                                    echo "<option class='form-control' value='".$_brand->id."'>".$_brand->name."</option>";
                                 }
                                  
                         ?>              
                  </select>
              </div>

              <div style="clear:both;"></div>
<!--ITEM NAME-->
        
              <div>
                <div class=" light_grey_1" style="float:left;padding-top:5px;">Item Name</div> 
                  <input type="text" name="searchbyname" class="form-control"    id="searchbyname" style="margin-left:10px;float:left;width:300px;">
                          
              </div>
            </div>
          </form>      
<!-- Search Button -->      
      <div class="search_button light_grey_1" > Search </div>
        
    </div> <!-- END OF CONTAINER Refine Search   -->  
        
<!-- PLATE 1  -->  

<script>    
       $(function(){
            
            
            var givenbrand = '<?php echo $searchbybrand; ?>';
            var givenname = '<?php echo $searchbyname; ?>';
            
            $("#searchbybrand").val(givenbrand);
            $("#searchbyname").val(givenname);
            
            $('.search_button').click(function(){
                
                $("#searchReview").submit();
            
            });
            
            
       });
</script>