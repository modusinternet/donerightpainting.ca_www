<?php
header("Content-Type: text/html; charset=UTF-8");
header("Cache-Control: public, must-revalidate, proxy-revalidate");
?>{CCMS_DB_PRELOAD:all}<!DOCTYPE html>
<html id="no-fouc" lang="{CCMS_LIB:_default.php;FUNC:ccms_lng}" style="opacity: 0;">
	<head>
		<meta charset="utf-8">
		<title>Search | Done Right Painting and Sandblasting, Ltd</title>
		<meta name="description" content="" />

		{CCMS_TPL:header-head.html}
		<script>
			var navActiveArray = ["search"];
			var navActiveFooterArray = [];
		</script>
	</head>
	<body id="top">
		{CCMS_TPL:header-body.html}
		<div class="topic">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Location:</h3>
						<ol class="breadcrumb pull-right">
							<li><a href="/{CCMS_LIB:_default.php;FUNC:ccms_lng}/">Home</a></li>
							<li class="active">Search</li>
						</ol>
					</div>
				</div>
			</div>
		</div><div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Search</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
<?if($CFG["GOOGLE_CUSTOM_SEARCH_ENGINE_CODE"] != ""):?>
	<!-- http://www.google.com/cse/ -->
	<!-- The following code comes from http://www.binaryturf.com/add-related-posts-widget-google-cse-retain-engage-visitors/ -->
	<div id="cse" style="width:100%;">Loading</div>
	<script src="//www.google.com/jsapi" type="text/javascript"></script>
	<script>
	google.load('search', '1', {language : '<?=$CLEAN["ccms_lng"];?>'});
	google.setOnLoadCallback(function() {
		// Replace the codded variable with your own from http://www.google.com/cse/
		var customSearchControl = new google.search.CustomSearchControl('<?=$CFG["GOOGLE_CUSTOM_SEARCH_ENGINE_CODE"];?>');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		customSearchControl.draw('cse');
		customSearchControl.execute('<?=htmlspecialchars($_REQUEST["search"]);?>');
	}, true);
	</script>
	<link href="//www.google.com/cse/style/look/default.css" rel="stylesheet" type="text/css" />
<?else:?>
	<p>
		Google Search Results / Custom Search Engine (CSE)<br />
		<br />
		To add Google Custom Search results to this page visit <a href="//www.google.com/cse/" target="blank">www.google.com/cse/</a> and create a new CSE code.  Copy the code (e.g.: 010508916976745981301:bdscggyxyle) into the $CFG["GOOGLE_CUSTOM_SEARCH_ENGINE_CODE"] variable in your config file and you are done.
		</p>
<?endif;?>
				</div>
			</div>
		</div>
		{CCMS_TPL:footer-1.html}
		<script>
			function loadFirst(e,t){var a=document.createElement("script");a.async = true;a.readyState?a.onreadystatechange=function(){("loaded"==a.readyState||"complete"==a.readyState)&&(a.onreadystatechange=null,t())}:a.onload=function(){t()},a.src=e,document.body.appendChild(a)}

			var cb = function() {
				var l = document.createElement('link'); l.rel = 'stylesheet';
				//l.href = '/ccmstpl/_css/styles.css';
				l.href = '/ccmstpl/_css/styles.min.css';
				var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);

				var l = document.createElement('link'); l.rel = 'stylesheet';
				l.href = '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css';
				var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);

				var l = document.createElement('link'); l.rel = 'stylesheet';
				l.href = '//fonts.googleapis.com/css?family=Open+Sans:300';
				var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
			};
			var raf = {CCMS_TPL:browser.php}
			if (raf) raf(cb);
			else window.addEventListener('load', cb);

			function loadJSResources() {
				loadFirst("//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", function(){ // JQuery is loaded
					loadFirst("//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js", function(){ // Bootstrap is loaded
						loadFirst("/ccmstpl/_js/javascript.js", function(){ // main JavaScript for the site

							navActiveArray.forEach(function(s) {$("#"+s).addClass("active");});
							navActiveFooterArray.forEach(function(s) {$("#"+s).addClass("active");});

							// Fade in web page.
							$("#no-fouc").delay(100).animate({"opacity": "1"}, 1000);
						});
					});
				});
			}

			if (window.addEventListener)
				window.addEventListener("load", loadJSResources, false);
			else if (window.attachEvent)
				window.attachEvent("onload", loadJSResources);
			else window.onload = loadJSResources;
		</script>
	</body>
</html>
