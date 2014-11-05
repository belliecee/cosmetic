<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
	
<style>
    .modal{
        display: none;
    }
</style>
		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    	       <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/css/smartadmin-skins.min.css">


<div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
  <!-- widget options:
				usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

				data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="true"
				data-widget-sortable="false"

				-->
  <header> <span class="widget-icon"> <i class="fa fa-pencil"></i></span>
    <h2>Summernote (Lightweight)</h2>
  </header>
  <!-- widget div-->
  <div>
    <!-- widget edit box -->
    <div class="jarviswidget-editbox">
      <!-- This area used as dropdown edit box -->
    </div>
    <!-- end widget edit box -->
    <!-- widget content -->
    <div class="widget-body no-padding">
      <div class="summernote"></div>
      <div class="widget-footer smart-form">
        <div class="btn-group">
          <button class="btn btn-sm btn-primary" type="button"> <i class="fa fa-times"></i> Cancel </button>
        </div>
        <div class="btn-group">
          <button class="btn btn-sm btn-success" type="button"> <i class="fa fa-check"></i> Save </button>
        </div>
        <label class="checkbox pull-left">
          <input type="checkbox" checked="checked" name="autosave" id="autosave" />
          <i></i>Auto Save </label>
      </div>
    </div>
    <!-- end widget content -->
  </div>
  <!-- end widget div -->
</div>

	<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/libs/jquery-2.0.2.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
<!--		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
<!--	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/smartwidgets/jarvis.widget.min.js"></script>
-->
		<!-- EASY PIE CHARTS -->
		
<!--
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
-->
		<!-- SPARKLINES -->
<!--		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/plugin/sparkline/jquery.sparkline.min.js"></script>
-->
		<!-- JQUERY VALIDATE -->

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/speech/voicecommand.min.js"></script>

		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/smartadmin/js/plugin/summernote/summernote.min.js"></script>
	
		<script type="text/javascript">
		
			// DO NOT REMOVE : GLOBAL FUNCTIONS!
			
			$(document).ready(function() {
				
				pageSetUp();

				/*
				 * SUMMERNOTE EDITOR
				 */
				
				$('.summernote').summernote({
					height : 180,
					focus : false,
					tabsize : 2
				});
			
				/*
				 * MARKDOWN EDITOR
				 */

				$("#mymarkdown").markdown({
					autofocus:false,
					savable:true
				})
							
			
			})

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
</body>
</html>
