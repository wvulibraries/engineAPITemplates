<!DOCTYPE html>
<html lang="en">
<head>
	<title>{local var="pageTitle"}</title>

	<meta charset="UTF-8">

	<meta name="keywords" content="{local var="pageKeywords"}">
	<meta name="description" content="{local var="pageDescription"}">

	<!-- Facebook Open Graph tags -->
	<meta property="og:title" content="{local var="pageTitle"}" />
	<meta property="og:type" content="university" />
	<meta property="og:url" content="{local var="pageURL"}" />
	<meta property="og:image" content="{local var="pageImg"}" />
	<meta property="og:site_name" content="WVU Libraries" />
	<meta property="fb:admins" content="1021916351" />

	<script type="text/javascript" src="{local var="jsURL"}/jquery/jquery.js"></script>
	<script type="text/javascript" src="{local var="jsURL"}/modernizr.js"></script>
	<script type="text/javascript" src="{local var="jsURL"}/bootstrap.js"></script>

	<!-- Add some HTML5 element support into IE 6 - 8 -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="{local var="jsURL"}/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/common.{local var="cssExt"}" />
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/fonts.{local var="cssExt"}" />
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/print.css" media="print" />

	<!-- Specific css file for this Template -->
	<link rel="stylesheet" href="/css/2013/systems.css" type="text/css" media="screen" />

	<?php
  	recurseInsert("templateIncludes/2col.headerIncludes.php", "php");
  	recurseInsert("headerIncludes.php", "php");
	?>
</head>
<body>
	<header>
		<div id="headerContainer">
			<div id="wvuMasthead">
				<a href="http://www.wvu.edu"><img src="{local var="imgURL"}/header/wvuLogo.png" alt="wvuLogo"/></a>
				<ul>
					<li>
						<a href="http://www.wvu.edu/SiteIndex/" title="">A-Z Site Index</a>
					</li>
					<li>
						<a href="https://www.wvu.edu/campusmap/" title="">Campus Map</a>
					</li>
					<li>
						<a href="https://directory.wvu.edu/" title="">Directory</a>
					</li>
					<li>
						<a href="https://www.libraries.wvu.edu/about/contactus/" title="">Contact Us</a>
					</li>
					<li>
						<a href="https://www.libraries.wvu.edu/hours/" title="">Hours</a>
					</li>
					<li>
						<a href="https://www.wvu.edu/" title="">WVU Home</a>
					</li>
				</ul>
			</div>

			<div id="middleHeaderBar">
				<h1><a href="/">L<span class="font-size-30pt">IBRARY</span> S<span class="font-size-30pt">YSTEMS</span></a></h1>
			</div>
		</div>
	</header>

	<div id="mainDiv">
		<div id="content">
			<div id="left">
				<?php recurseInsert("leftnav.php", "php"); ?>
			</div>
			<div id="right">
				<?php recurseInsert("templateIncludes/breadCrumbs.php", "php"); ?>
