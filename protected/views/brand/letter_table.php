    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<style>
    .brandlist{
        width: 150px;height: 55px; background-size:100%;padding:0;margin-left:-1px;margin-top:-1px;margin-bottom: 20px;
        margin-top: 15px;
    }
    td {
        max-width: 200px;
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow: hidden;
        height: 70px;
        border: 1px solid #F0F0F0;
        text-align: center;
    }
    td:hover{
       
        box-shadow: 0 0 5px lightskyblue;
      
        
    }
    td a{
          cursor : pointer;
    }
</style>
<?php
                     echo "<div style='font-weight:bold;font-size:20px;margin-top:20px;margin-bottom:5px;'>".$letter."</div>";
                     echo '<div class="bottomline"style="margin-left:-5px;width:700px;margin-bottom:10px;" ></div>';
                    $criteria = new CDbCriteria();
                    $criteria->order = 'name';
                    $criteria->condition = "name LIKE :letter";
                    $criteria->params = array(":letter"=>"$letter%");
                    $allbrand = brand::model()->findAll($criteria);
                    $ind = 1;
                    $column = 3;
                    echo "<table style='width:600px !important;margin-left:auto;margin-right:auto;margin-top:20px;'>";
                    foreach($allbrand as $brand){
                          if($ind == 1){ echo  "<tr>";}
// Link of                      
                              $createdUrl = Yii::app()->createUrl('brand/list',array("id"=>$brand->id));
                              echo "<td style='min-width:200px !important;width:200px !important'>";
                                  //echo $brand->name;
                                   echo "<a href='$createdUrl' style='width:100%;height:100%;'>";
                                   $dir = Yii::app()->baseUrl.'/brandimgs'; 
                                    if($brand->brand_img != null && $brand->brand_img != ""){ 
                                       $path = $dir.'/'.$brand->brand_img;     
?>                                                                           
                                        <img class="brandlist" src="<?php echo $path ;?>" style=" "  />
<?php                 
                                    }else{
                                        echo "<div class='marckScript_header' style='border:none;color: #666'>";
                                        echo  $brand->name;
                                    }
                               echo "</a></td>";
                               $ind++;      
                                if($ind > $column){ echo  "</tr>";$ind = 1;}
     
             }
                if($ind == 2){echo "<td style='min-width:200px !important;width:200px !important'>&nbsp;</td><td style='min-width:200px !important;width:200px !important'>&nbsp;</td></tr>";}
                if($ind == 3){echo "<td style='min-width:200px !important;width:200px !important'>&nbsp;</td></tr>";}
          echo "</table>";       
?>