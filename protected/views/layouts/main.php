<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

       
<!--        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin/sbadmin_bootstrap.css" />-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theproduct/skin-1.css" />

	<!-- blueprint CSS framework -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/homepage.css" />
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQueryEffect.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/webboardpost.css" />

         <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome/css/font-awesome.min.css"></link>
         <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
         
         
        <!--  GOOGLE API       -->
<!--         <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'></link>
        -->
        <?php Yii::app()->bootstrap->register(); ?>
        
     

 <title><?php echo CHtml::encode($this->pageTitle); ?></title>
 

</head>

<body>
<!--<div id="blockscreen" style='display:block; width:100%;height:100%;  background-color: rgba(38,38,38,0.6);position:fixed;z-index:20;'></div>-->
<div id="loadmodal" style='display:none; width:100%;height:100%;  background-color:rgba(38,38,38,0.7);position:fixed;z-index: 40;'>
<div id="loader">
            <div id="load1" class="spin"></div>
            <div id="load2" class="spin"></div>
            <div id="load3" class="spin"></div>
            <div id="load4" class="spin"></div>
            <div id="load5" class="spin"></div>
        </div>
</div>

<style>

a{
    link-style: none !important;
}
body{
/*    overflow-x:hidden;*/
}
</style>

      <div class="mosttop">
            
            
        </div>
<div class="container" id="page">

<div id="header" style="width:100% !important;  background-color:transparent !important;">
    <div id="header_inner" style="width:1100px !important;">        
            
<!--            <a  style="text-decoration:none;color:black;cursor: pointer;"><div id="logo" style=" background-color:transparent !important;"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        -->
  
        <div class="headerpanel_middle">
            <a href="<?php echo Yii::app()->homeUrl; ?>" class="button">
                        <span>Cosmetic Web</span>
                   </a>
                    <div class="mainsearch" style="float:right; margin-right: 50px;">
                       <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_SEARCH); ?>
                       <?php echo TbHtml::textField('appendedSearch', '',
                           array('append' => TbHtml::submitButton('Search'), 'span' => 3)); ?>

                       <?php echo TbHtml::endForm(); ?>
                 </div>
        </div>
               
     
                
           <?php
              $thisuser =  user::model()->findByPk(Yii::app()->user->getId());
              $visi = false;
              $cansee = false;
              if(Yii::app()->user->isGuest){
                  $visi = false;  $cansee = false;
              }
              else{
                 if($thisuser != null){
                    $group = user::model()->findByPk(Yii::app()->user->getId())->auth;
                    //$auth = usergroup::model()->findByAttributes(array('name'=>$group)); 
                   if($group == "admin"){ 
                        $visi = true;
                        $cansee = true;
                   }
                    
                 }
                
                 
              }
              
             
           
             
                
        ?>
       
        <ul id="newmenu">
                <?php  
                          if(!Yii::app()->user->isGuest){
                              echo CHtml::link("<li id='homemenu'>My Page</li>",array('user/view','membername'=>user::model()->findByPk(Yii::app()->user->getId())->username));
                          }
                          else{
                              echo CHtml::link("<li id='homemenu'>My Page</li>",array('site/login'));
                          }
                            
                 ?>
               
                <?php  echo CHtml::link("<li id='brandmenu' style='background-color:rgb(202,242,151);color:white;'>Brand</li>",array('brand/index'))?>
                <?php  echo CHtml::link("<li id='categorymenu' style='background-color:rgb(249,179,167);color:white;'>Category</li>",array('category/index'))?>
                <?php  echo CHtml::link("<li id='webboardmenu' style='background-color:rgb(145,154,202);;color:white;'>Webboard</li>",array('webboardpost/index'))?>
               
                <?php  if ($cansee) echo CHtml::link("<li id='adminmenu' style='background-color:rgb(79,173,250);color:white;'>Administration</li>",array('item/index'))?>
                <?php  
                          if(!Yii::app()->user->isGuest)
                             echo CHtml::link("<li id='loginbutt' style='background-color:rgb(79,173,250);'>Logout (".user::model()->findByPk(Yii::app()->user->getId())->username.")</li>",array('site/logout'));
                          else
                              echo CHtml::link("<li id='loginbutt' style='background-color:rgb(79,173,250);'>Login</li>",array('site/login'));
                 ?>
             
                 
        </ul>
       
    </div><!-- header_inner -->
</div><!-- header -->
       
       
   		<?php 
             
?>
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		));
                
                
                
         ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->


<style>
    #footer {
	background: #EDEFF1;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
        
}
#footer p {
	margin: 0;
}
#footer img {
	max-width: 100%;
}
#footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 200;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
#footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
#footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
#footer a {
	color: #78828D
}
    .social li a i {
    font-size: 16px;
    margin: 0px 0px 0px 5px;
    color: #EDEFF1 !important;
}
.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
}
   
#footer a:hover ,a:focus {
    color: #4EC67F;
     text-decoration: none;
    cursor: pointer;
}
#footer ul.social li a {
    padding: 0;
    display: inline-block;
}
#footer a {
    color: #78828D;
}

#footer h3 {
    border-bottom: 1px solid #BAC1C8;
    color: #54697E;
    font-size: 18px;
    font-weight: 200px;
    line-height: 27px;
    padding: 40px 0px 10px;
    text-transform: uppercase;
}
 #footer h3{
        text-align: left;
    }
  

  #footer a{
      
      text-align: left;
    }
    #footer {
        padding: 0;
        margin: 0;
    }
    ul.social li a{
        margin-top: 10px;
    }

</style>

<div id="footer" class="footer" style="margin-top: 50px;" >




    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3> Support </h3>
          <ul>
            <li class="supportLi">
<!--              <p> Lorem ipsum dolor sit amet, consectetur </p>-->
              <h4> <a class="inline" href="callto:+8801680531352" style="font-size: 20px;"> <strong> <i class="fa fa-phone"> </i> 88 01680 531352 </strong> </a> </h4>
              <h4> <a class="inline" href="mailto:help@cosmeticweb.com" style="font-size: 20px;"> <i class="fa fa-envelope-o"> </i> help@tshopweb.com </a> </h4>
            </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Shop </h3>
          <ul>
            <li> <a href="index.html"> Home </a> </li>
            <li> <a href="category.html"> Category </a> </li>
            <li> <a href="sub-category.html"> Sub Category </a> </li>
            <li> <a href="product-details.html"> Product Details </a> </li>
            <li> <a href="product-details-style2.html"> Product Details Version 2 </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Information </h3>
          <ul>
            <li> <a href="cart.html"> Cart </a> </li>
            <li> <a href="about-us.html"> About us </a> </li>
            <li> <a href="about-us-2.html"> About us 2 </a> </li>
            <li> <a href="contact-us.html"> Contact us </a> </li>
            <li> <a href="contact-us-2.html"> Contact us 2 </a> </li>
            <li> <a href="terms-conditions.html"> Terms &amp; Conditions </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> My Account </h3>
          <ul>
            <li> <a href="account-1.html"> Account Login </a> </li>
            <li> <a href="account.html"> My Account </a> </li>
            <li> <a href="my-address.html"> My Address </a> </li>
            <li> <a href="wishlist.html"> Wisth list </a> </li>
            <li> <a href="order-list.html"> Order list </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Stay in touch </h3>
          <ul>
            <li>
              <div class="input-append newsLatterBox text-center">
<!--                <input type="text" class="full text-center"  placeholder="Email ">-->
                <div class="btn  bg-gray" style="width:270px; padding-top:10px; border-radius:7px;"><i class="fa fa-hand-o-right"> </i> &nbsp; Sign up Now  </div>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a> </li>
            <li> <a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; Cosmetic Web 2014. All right reserved. </p>
      <style>
          a.policy{
              font-size: 13px;
              color: #777;
              font-family: 'Source Sans Pro', "sans-serif"" !important;
          }
      </style>    
      <a class="policy" href="#"><div class="pull-right paymentMethodImg" style="margin:10px 10px; 0 0; font-size:13px; color:inherite;"> 
          นโยบายเกี่ยวกับพอยต์
   </div></a>
      <a class="policy" href="#"><div class="pull-right paymentMethodImg" style="margin: 10px 10px; 0 0;">
          กติกาการร่วมสนุก
  </div></a>
   <a class="policy" href="<?php echo Yii::app()->homeUrl ;?>/site/policy" > <div class="pull-right paymentMethodImg" style="margin:10px 10px; 0 0;"> 
           นโยบายความเป็นส่วนตัว
  </div></a>
  </div>
  <!--/.footer-bottom--> 
<!-- footer -->



</body>
</html>
