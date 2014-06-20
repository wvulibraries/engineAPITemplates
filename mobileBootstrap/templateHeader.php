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

	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/common.{local var="cssExt"}" />
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/fonts.{local var="cssExt"}" />
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/print.css" media="print" />

	<!-- Specific css file for this Template -->
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/mobileBootstrap.css" type="text/css" media="screen" />

	<?php
	recurseInsert("templateIncludes/2col.headerIncludes.php", "php");
	recurseInsert("headerIncludes.php", "php");
	?>
</head>
<body>
	<?php recurseInsert("leftnav.php", "php"); ?>
	<div class="row-fluid">
  		<?php recurseInsert("templateIncludes/breadCrumbs.php", "php"); ?>
