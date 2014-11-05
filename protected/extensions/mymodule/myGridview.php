<?php

class newGridview extends CApplicationComponent
{
        
        public function createGrid(){
            echo "<table  class='table_view1'>";
            echo    "<thead>";
            echo        "<tr class='table_view1_header'>";
            echo          "<th class='table_vendor' style='width:150px;'>#</th>";
            echo          "<th class='table_model' style='width:150px;'>Name</th>";
            echo          "<th class='table_model' style='width:150px;'>Description</th>";
            echo          "<th class='table_operation' style='width:70px;'> </th>";
            echo        "</tr>";
            echo      "</thead>";
              
            echo      "<tbody>";
/*               
                    $i = 1;     
                     foreach($category_model as $category){ 
                   
            echo        "<tr  class='table_tr_quod' >"         
            echo              "<td>"
                                       <center>
                                         echo "$i." ;
                                           
                                       </center>
                                </td>
                                <td>
                                       <center>
                                    <?php
                                        $this->widget('editable.EditableField', array(
                                            'type'      => 'text',
                                            'model'     => $category,
                                            'attribute' => 'name',
                                            'url'       => $this->createUrl('category/updatetype'), 
                                            'placement' => 'right',
                                        ));
                                    ?>
                                           
                                       </center>
                                </td>
                                 <td>
                                       <center>
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'textarea',
                                                    'model'     => $category,
                                                    'attribute' => 'description',
                                                    'url'       => $this->createUrl('category/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                       </center>
                                </td>
                                
                                
                                <td><center><div class="del">&nbsp;&nbsp;</div></center></td>
                            </tr>
                    } 
 */                
               echo   "</tbody>";
             
               echo "</table>";
        }
        


  public function commonGrid(){
            echo "<table  class='table_view1'>";
            echo    "<thead>";
            echo        "<tr class='table_view1_header'>";
            echo          "<th class='table_vendor' style='width:150px;'>#</th>";
            echo          "<th class='table_model' style='width:150px;'>Name</th>";
            echo          "<th class='table_model' style='width:150px;'>Description</th>";
            echo          "<th class='table_operation' style='width:70px;'> </th>";
            echo        "</tr>";
            echo      "</thead>";
              
            echo      "<tbody>";
/*               
                    $i = 1;     
                     foreach($category_model as $category){ 
                   
            echo        "<tr  class='table_tr_quod' >"         
            echo              "<td>"
                                       <center>
                                         echo "$i." ;
                                           
                                       </center>
                                </td>
                                <td>
                                       <center>
                                    <?php
                                        $this->widget('editable.EditableField', array(
                                            'type'      => 'text',
                                            'model'     => $category,
                                            'attribute' => 'name',
                                            'url'       => $this->createUrl('category/updatetype'), 
                                            'placement' => 'right',
                                        ));
                                    ?>
                                           
                                       </center>
                                </td>
                                 <td>
                                       <center>
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'textarea',
                                                    'model'     => $category,
                                                    'attribute' => 'description',
                                                    'url'       => $this->createUrl('category/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                       </center>
                                </td>
                                
                                
                                <td><center><div class="del">&nbsp;&nbsp;</div></center></td>
                            </tr>
                    } 
 */                
               echo   "</tbody>";
             
               echo "</table>";
        }
        
} 









class myGridview extends CApplicationComponent
{
        
        public function createGrid(){
            echo "<table  class='table_view1'>";
            echo    "<thead>";
            echo        "<tr class='table_view1_header'>";
            echo          "<th class='table_vendor' style='width:150px;'>#</th>";
            echo          "<th class='table_model' style='width:150px;'>Name</th>";
            echo          "<th class='table_model' style='width:150px;'>Description</th>";
            echo          "<th class='table_operation' style='width:70px;'> </th>";
            echo        "</tr>";
            echo      "</thead>";
              
            echo      "<tbody>";
/*               
                    $i = 1;     
                     foreach($category_model as $category){ 
                   
            echo        "<tr  class='table_tr_quod' >"         
            echo              "<td>"
                                       <center>
                                         echo "$i." ;
                                           
                                       </center>
                                </td>
                                <td>
                                       <center>
                                    <?php
                                        $this->widget('editable.EditableField', array(
                                            'type'      => 'text',
                                            'model'     => $category,
                                            'attribute' => 'name',
                                            'url'       => $this->createUrl('category/updatetype'), 
                                            'placement' => 'right',
                                        ));
                                    ?>
                                           
                                       </center>
                                </td>
                                 <td>
                                       <center>
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'textarea',
                                                    'model'     => $category,
                                                    'attribute' => 'description',
                                                    'url'       => $this->createUrl('category/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                       </center>
                                </td>
                                
                                
                                <td><center><div class="del">&nbsp;&nbsp;</div></center></td>
                            </tr>
                    } 
 */                
               echo   "</tbody>";
             
               echo "</table>";
        }
        


  public function commonGrid(){
            echo "<table  class='table_view1'>";
            echo    "<thead>";
            echo        "<tr class='table_view1_header'>";
            echo          "<th class='table_vendor' style='width:150px;'>#</th>";
            echo          "<th class='table_model' style='width:150px;'>Name</th>";
            echo          "<th class='table_model' style='width:150px;'>Description</th>";
            echo          "<th class='table_operation' style='width:70px;'> </th>";
            echo        "</tr>";
            echo      "</thead>";
              
            echo      "<tbody>";
/*               
                    $i = 1;     
                     foreach($category_model as $category){ 
                   
            echo        "<tr  class='table_tr_quod' >"         
            echo              "<td>"
                                       <center>
                                         echo "$i." ;
                                           
                                       </center>
                                </td>
                                <td>
                                       <center>
                                    <?php
                                        $this->widget('editable.EditableField', array(
                                            'type'      => 'text',
                                            'model'     => $category,
                                            'attribute' => 'name',
                                            'url'       => $this->createUrl('category/updatetype'), 
                                            'placement' => 'right',
                                        ));
                                    ?>
                                           
                                       </center>
                                </td>
                                 <td>
                                       <center>
                                    
                                            <?php
                                                $this->widget('editable.EditableField', array(
                                                    'type'      => 'textarea',
                                                    'model'     => $category,
                                                    'attribute' => 'description',
                                                    'url'       => $this->createUrl('category/updatetype'), 
                                                    'placement' => 'right',
                                                ));
                                            ?>
                                       </center>
                                </td>
                                
                                
                                <td><center><div class="del">&nbsp;&nbsp;</div></center></td>
                            </tr>
                    } 
 */                
               echo   "</tbody>";
             
               echo "</table>";
        }
        
} 

?>
