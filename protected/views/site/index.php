<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.js"></script>

<div id="fb-root"></div>
<script>(
        function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 5000
            });

            $('.carousel').carousel('cycle');
        });

</script>
<style>
    
   
    .carousel-caption {
        display : none;
    }
    
    a.thumbnail > img{
        width:195px;
        min-height:195px;
    }
    a.thumbnail{
        border: none;
    }
  
    ul.thumbnails li{
        margin:7px;
        width:195px;
        margin-right: 5px;
        border: none;
       
    }
    ul.thumbnails li:first-child{margin-left: 30px}
/*Size of SLIDEs should be 690 X 300      */
    .carousel{ width : 690px; height: 320px;}

    div.active.item img{
        width : 685px; height: 300px;
    }
    
    .carousel-indicators {
            position: absolute;
            z-index: 20;
            margin: 0px;
            list-style: none outside none;
            cursor: pointer;
            top: 310px;
            background-color: white;
            right: 20px;
    }
    .carousel-indicators li {
        display: block;
        float: left;
        width: 12px;
        height: 12px;
        margin-left: 5px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, 0.25);
        border-radius: 6px;
    }
     .carousel-indicators li{
          background-color: grey;
          border-color: grey;
     }
      .carousel-indicators li:active{
          background-color: #F26E6F;
          
     }
      .carousel-indicators li:hover{
          background-color: #F26E6F;
          
     }
   .carousel-indicators .active {
        background-color: #F26E6F;
    }
  
</style>

<div class="index_content" style="margin-top: 0;">

<!--<div class="title2" style="margin-top;10px;border-bottom: none;">Welcome to Filling list application</div>-->
<!--<div class="bottomline"></div>-->
<!--  HOME ROW -->
<div  class="home_row" style="margin-top: 10px;">
            <div style="float:left">
                
                     <?php echo TbHtml::carousel(array(
                        array('image' => Yii::app()->request->baseUrl.'/img/slide_Biore-Pure-Deep-Detoxify-and-2-in-1-make-up-remover-685-2.jpg', 'label' => 'First Thumbnail label', 'caption' => '...'),
                        array('image' => Yii::app()->request->baseUrl.'/img/slide_DKNY-MYNY-685.jpg', 'label' => 'Second Thumbnail label', 'caption' => '...'),
                        array('image' => Yii::app()->request->baseUrl.'/img/slide_Minus-Sun-Facial-Ultra-Sun-Protection-685.jpg', 'label' => 'Third Thumbnail label', 'caption' => '...'),
                    )); ?>
            </div>
            <div style="float:left; border: 1px solid #DDDDDD;margin-left: 20px;">
                      <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/beside_slide_pic_474X492.png" width="300" height="350" />
     
           </div>

            <div style="clear:both;"></div>

<br/>
   
<div style="clear:both;"></div>
</div>
<!--  End of HOME ROW -->


<!--  HOME ROW -->
<!-- Member Review QUICK Login -->

<div  class="home_row">
         <div style="float:left">
                    <?php $this->renderPartial("reviewer"); ?>
          </div>
          <div style="float:left; border: 1px solid #DDDDDD;margin-left: 20px;">
                <div style="position:relative;">    
                     <div class="brandtable_item_img" style="position:absolute; left: -50px ;top:-54px;">
                              <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/member_login.png" width="120" height="138" />
                      </div>
                </div>
                    <?php $this->renderPartial("quicklogin",array('model'=>$model)); ?>
                </div>

            <div style="clear:both;"></div>
    
</div>

<!--  End of HOME ROW -->
<!--  HOME ROW -->


<div  class="home_row">
<?php echo TbHtml::thumbnails(array(
    array('image' => Yii::app()->request->baseUrl.'/img/activities/vistra-gift-ac300x300.png', 'url' => '#'),
    array('image' => Yii::app()->request->baseUrl.'/img/activities/smoothe-Wipes300x300.png','holder.js/260x180', 'url' => '#'),
    array('image' => Yii::app()->request->baseUrl.'/img/activities/Cosmenet300x300_1.jpg','holder.js/260x180', 'url' => '#'),
    array('image' => Yii::app()->request->baseUrl.'/img/activities/ziiit-ac-3-300x300.png','holder.js/260x180', 'url' => '#'),
    array('image' => Yii::app()->request->baseUrl.'/img/activities/vistra-gift-ac300x300.png','holder.js/260x180', 'url' => '#'),
    
)); ?>
    
</div>


<!--  End of HOME ROW -->

<!--  HOME ROW -->
<!--

<div  class="home_row">
<?php echo TbHtml::thumbnails(array(
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
)); ?>
    
</div>

-->
<!--  End of HOME ROW -->
<!--home_row-->
<div  class="home_row">
    <div style="float:left">
          <div>
            <?php $this->renderPartial("topranking"); ?>
          </div>
          
           <div style="margin-top:20px;">
                    <?php $this->renderPartial("newproduct"); ?>
            </div>
    </div>
    <div style="float:left; margin-left: 50px;">
         <?php $this->renderPartial("brandtable"); ?>
        <div style="margin-top: 25px;">
                 <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" />
        </div>
          
    </div>
    <div style="clear:both"></div>
    
</div> 
<!--home_row-->
<div  class="home_row">
      
       <?php $this->renderPartial("brandletter"); ?>
    
</div>
<!--home_row-->

<div  class="home_row">
    <div style="float:left">
          <div>
             <?php  $this->renderPartial("latestreview"); ?>
          </div>
          
           <div style="margin-top:20px;">
                   <?php  $this->renderPartial("webboard"); ?>
            </div>
    </div>
    <div style="float:left; margin-left: 30px;">
         
        <div style="margin-top: 0;">
              <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=260px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe>
        </div>
        <div style="margin-top: 20px;">
                 <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" />
        </div>
        <div style="margin-top: 20px;">
                 <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/nivea.png" width="300" height="300" />
        </div>
          
    </div>
    <div style="clear:both"></div>
    
</div> 
</div>