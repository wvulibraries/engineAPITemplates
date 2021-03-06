<!DOCTYPE html>
<html lang="en">
<head>
	<title>{local var="pageTitle"}</title>

	<meta charset="UTF-8">

	<!-- Facebook Open Graph tags -->
	<meta property="og:title" content="{local var="pageTitle"}" />
	<meta property="og:type" content="university" />
	<meta property="og:url" content="{local var="pageURL"}" />
	<meta property="og:image" content="{local var="pageImg"}" />
	<meta property="og:site_name" content="WVU Libraries" />
	<meta property="fb:admins" content="1021916351" />

	
	<script type="text/javascript" src="{local var="jsURL"}/jquery/jquery.js"></script>
	<script type="text/javascript" src="{local var="jsURL"}/jquery/jquery.tweet.js"></script>
	
	<script type="text/javascript" src="{local var="jsURL"}/modernizr.js"></script>
	<!-- // <script type="text/javascript" src="{local var="jsURL"}/html5.js"></script> -->
	<script type="text/javascript" src="{local var="jsURL"}/bootstrap.js"></script>

	<!-- Add some HTML5 element support into IE 6 - 8 -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="{local var="jsURL"}/html5.js"></script>
	<![endif]-->

	<!-- <script type="text/javascript" src="{local var="jsURL"}/bootstrap/js/bootstrap.min.js"></script> -->
	<!-- <link rel="stylesheet"                       type="text/css" href="{local var="jsURL"}/bootstrap/css/bootstrap.min.css"/> -->
	<link rel="stylesheet"                       type="text/css" href="{local var="cssURL"}/bootstrap.css"/>
	<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/common.{local var="cssExt"}" />
	<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/fonts.{local var="cssExt"}" />
	<link rel="stylesheet" type="text/css" href="{local var="cssURL"}/print.css" media="print" />
	
	<link rel="stylesheet"      type="text/css" href="{local var="cssURL"}/jquery.tweet.css" />
	
	<script type="text/javascript">
	
	$(document).ready(function() {

		{local var="alertJS"}

		// Footer 
		$("#footerTwitter").tweet(
			{
				count: 1,
				username: "wvulibraries",
				loading_text: "Loading Twitter Feed ... "
			}
		);
				
		// Homepage Only
		$("#newsTwitter").tweet(
			{
				count: 2,
				username: "wvulibraries",
				loading_text: "Loading Twitter Feed ... "
			}
		);

		// Header
		if (!Modernizr.input.placeholder) {
			$('input[type="search"], input[type="text"]', 'header').each(function () {
				if (!$(this).val()) {
					this.value = $(this).attr('placeholder');
				}
		
				$(this).focus(function () {
					if (this.value == $(this).attr('placeholder')) {
						this.value = '';
					}
				});
		
				$(this).blur(function () {
					if (this.value == '') {
						this.value = $(this).attr('placeholder');
					}
				});
		
			});
		}

		var leftNavURLMatch = window.location.pathname; 

		if (leftNavURLMatch.match(/[^\/]$/)) {
			regex = /^(\/(.*?\/)+)(.*)$/;
			if (leftNavURLMatch.match(regex)) {
				leftNavURLMatch = RegExp.$1;
			}
		}
		

		var dirs = leftNavURLMatch.split("/");



		for (I=0;I< dirs.length+1;I++) {
			selected = false;

			leftNavURLMatch = dirs.join("/") + "/";

			leftNavURLMatch = leftNavURLMatch.replace(/\//g,"\\/");
			myregexp = new RegExp("^"+leftNavURLMatch);
			myregexp2 = new RegExp("^"+window.location.pathname+"$");

			$('#contentContainerLeft ul li a').each(function(index) {

				if ($(this).attr("href").match(myregexp2)) {
					$(this).parent().addClass("leftNavSelected");
					selected = true;
					return( false );
				}
				else if ($(this).attr("href").match(myregexp)) {
					$(this).parent().addClass("leftNavSelected");
					selected = true;
					return( false );
				}
			});


			if (selected == true) {
				break;
			}

			dirs.pop();

		}



	});

	</script>
	
	<?php 
	// include the CSS for the home page
	if (EngineAPI::VERSION >= "4.0") {
		$localvars  = localvars::getInstance();
		$url = $localvars->get("docroot");
	}
	else {
		$url = localvars::get("docRoot");
	}
	$url .= "/index.php";

	$url = str_replace("/","\\/",$url);
	recurseInsert("templateIncludes/homepageHeaderIncludes.php","php","^".$url,"PHP_SELF"); 
	
	if (EngineAPI::VERSION >= "4.0" && templates::name() == "library2012.2col") {
		$templateIncludesFilename = "templateIncludes/2colHeaderIncludes.php";
	}
	else if (EngineAPI::VERSION >= "4.0" && templates::name() == "library2012.3col") {
		$templateIncludesFilename = "templateIncludes/3colHeaderIncludes.php";
	}
	else if (EngineAPI::VERSION >= "4.0" && templates::name() == "library2012.2col.right") {
		$templateIncludesFilename = "templateIncludes/2colRightHeaderIncludes.php";
	}
	// include the 2 column css when the 2column template is loaded
	else if (EngineAPI::VERSION < "4.0" && $engine->eTemplate("name") == "library2012.2col") {
		$templateIncludesFilename = "templateIncludes/2colHeaderIncludes.php";
	}
	// include the 3 column css when the 2column template is loaded
	else if (EngineAPI::VERSION < "4.0" && $engine->eTemplate("name") == "library2012.3col") {
		$templateIncludesFilename = "templateIncludes/3colHeaderIncludes.php";
	}
	// include the 3 column css when the 2column template is loaded
	else if (EngineAPI::VERSION < "4.0" && $engine->eTemplate("name") == "library2012.2col.right") {
		$templateIncludesFilename = "templateIncludes/2colRightHeaderIncludes.php";
	}

	if (isset($templateIncludesFilename)) recurseInsert($templateIncludesFilename,"php");
	
	?>

	<?php recurseInsert("headerIncludes.php","php"); ?>

	<!-- Less should be removed once development is done and less should be compiled into JS -->
	<!-- <script type="text/javascript" src="{local var="jsURL"}/less.js"></script> -->

</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<header>
		<div id="wvuMasthead">
			<a href="http://www.wvu.edu"><img src="{local var="imgURL"}/header/wvuLogo.png" alt="wvuLogo"/></a>
			<ul>
				<li>
					<a href="http://www.wvu.edu/SiteIndex/" title="">A-Z Site Index</a>
				</li>
				<li>
					<a href="http://www.wvu.edu/campusmap/" title="">Campus Map</a>
				</li>
				<li>
					<a href="/about/directory/" title="">Directory</a>
				</li>
				<li>
					<a href="/about/contactus/" title="">Contact Us</a>
				</li>
				<li>
					<a href="/hours/" title="">Hours</a>
				</li>
				<li>
					<a href="http://www.wvu.edu/" title="">WVU Home</a>
				</li>
			</ul>
		</div>
		
		<div id="middleHeaderBar">

			<h1><a href="/">L<span class="font-size-30pt">IBRARIES</span></a></h1>
			<form method="GET" action="http://wvu.summon.serialssolutions.com/search">
				<input type="hidden" name="s.fvf[]" value="ContentType,Newspaper Article,t" />
				<input type="search" id="summonSearch" name="s.q" tabindex="1" placeholder="Search Summon: Books, eBooks, Videos, Articles, &amp; More" />
				<button type="submit">
					<span class="label">Search</span>
				</button>

			</form>
		</div>
		
		<nav>
			<ul>
				<li>
					<a href="/"><img src="{local var="imgURL"}/header/{local var="homeHeaderImg"}" alt="Home" /></a>
				</li>
				<li>
					<a href="/libraries/" {local var="headerLibraryClass"}>LIBRARIES</a>
				</li>
				<li>
					<a href="/collections/" {local var="headerCollectionsClass"}>COLLECTIONS</a>
				</li>
				<li>
					<a href="/instruction/" {local var="headerInstructionClass"}>INSTRUCTION</a>
				</li>
				<li>
					<a href="/services/" {local var="headerServicesClass"}>SERVICES</a>
				</li>
				<li>
					<a href="/about/" {local var="headerAboutClass"}>ABOUT</a>
				</li>
				
			</ul>
		</nav>
		
		<a href="/services/ask/"><img src="{local var="imgURL"}/askALibrarianButton.png" alt="Ask a Librarian" id="askALibrarian_header"/></a>
		
	</header>
	
	<div id="alertBar">
		
	</div>
	
	<div id="contentContainer">
	<!-- End Header -->