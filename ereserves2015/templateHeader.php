<!DOCTYPE html>
<!-- nagios check -->
<html lang="en">
    <head>
    	<title>eReserves | WVU Libraries</title>

  		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="320">

		  <meta name="keywords" content="{local var="currentDisplayObjectKeywords"}">
		  <meta name="description" content="{local var="currentDisplayObjectDescription"}">
    	<meta name="author" content="WVU Libraries">
		  <meta http-equiv="cleartype" content="on">
    	<link rel="shortcut icon" href="https://wvrhc.lib.wvu.edu/favicon.ico">

      <!-- CSS -->
      <link href="https://lib.wvu.edu/css/2014/wvu.css" type="text/css" rel="stylesheet" />
      <link href="https://lib.wvu.edu/css/2014/lib.css" type="text/css" rel="stylesheet" />
      <link href="https://lib.wvu.edu/css/2014/ilstyles.css" type="text/css" rel="stylesheet" />
      <link href="https://lib.wvu.edu/css/2014/safari.css" type="text/css" rel="stylesheet" />

      <!-- JavaScripts -->
      <script type="text/javascript" src="https://lib.wvu.edu/javascript/2014/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://lib.wvu.edu/javascript/2014/scripts.js"></script>

		<!-- CSS Attribute/CSS Media Query/CSS Psuedo-Class/HTML Semantic Elements fallback for less than IE9 -->
        <!--[if IE 9]>
            <link href="https://lib.wvu.edu/css/2014/ie9.css" type="text/css" rel="stylesheet" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="https://lib.wvu.edu/javascript/2014/respond.min.js"></script>
            <script src="https://lib.wvu.edu/javascript/2014/selectivizr.min.js"></script>
            <script>
                document.createElement('header');
                document.createElement('nav');
                document.createElement('section');
                document.createElement('article');
                document.createElement('aside');
                document.createElement('footer');
                document.createElement('video');
            </script>
        <![endif]-->

        <!-- External CSS -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,400italic,300italic,600,600italic,700,900,700italic,900italic|Bitter:400,400italic,700' rel='stylesheet' type='text/css'>
    </head>

    <body>
		<header>
			<!-- WVU Header -->
			<div class="wvu-header mobile wvubottom">
				<a href="#" id="wvutoggle"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
				<a href="http://www.wvu.edu" class=" wvu-header-logo tablet"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
			    <ul class="list">
			        <li><a class="links" href="http://www.wvu.edu/SiteIndex/">A-Z Site Index</a></li>
              <li><a class="links" href="http://www.wvu.edu/campusmap/">Campus Maps</a></li>
              <li><a class="links" href="http://jobs.wvu.edu/">Jobs</a></li>
              <li><a class="links" href="https://lib.wvu.edu/about/directory/">Directory</a></li>
              <li><a class="links" href="https://lib.wvu.edu/about/contactus/">Contact Us</a></li>
					    <li><a class="links" href="https://lib.wvu.edu/hours/" title="">Library Hours</a></li>
					    <li><a class="links" href="http://www.wvu.edu/">WVU Home</a></li>
			    </ul>
			</div>
			<div class="wvu-header tablet wvubottom">
				<div class="wrap">
					<a href="http://www.wvu.edu" class="wvu-header-logo"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png"></a>
				    <ul class="wvu-header-mobile-list">
				        <li><a href="http://www.wvu.edu/SiteIndex/">A-Z Site Index</a></li>
		            <li><a href="http://www.wvu.edu/campusmap/">Campus Maps</a></li>
		            <li><a href="http://jobs.wvu.edu/">Jobs</a></li>
		            <li><a href="https://lib.wvu.edu/about/directory/">Directory</a></li>
                <li><a href="https://lib.wvu.edu/about/contactus/">Contact Us</a></li>
						    <li><a href="https://lib.wvu.edu/hours/" title="">Library Hours</a></li>
				    </ul>
				</div>
			</div>
			<!-- Individual Library Header	-->
			<header class="ilheader">
				<!-- Library NAvigation Header	-->
				<div id="library-header">
					<div class="wrap">
						<a class="library-header-logo" href="https://lib.wvu.edu/">WVU Libraries<i class="fa fa-university library-logo"></i></a>
						<ul class="library-header-links">
							  <li><a href="https://lib.wvu.edu/"><i class="fa fa-university"></i>Libraries</a></li>
		            <li><a href="https://lib.wvu.edu/about/"><i class="fa fa-info-circle"></i>About Us</a></li>
		            <li><a href="https://lib.wvu.edu/collections/"><i class="fa fa-inbox"></i>Collections</a></li>
		            <li><a href="https://lib.wvu.edu/instruction"><i class="fa fa-graduation-cap"></i>Instruction</a></li>
		    				<li><a href="https://lib.wvu.edu/about/news/"><i class="fa fa-rss"></i>News</a></li>
		    				<li><a href="https://lib.wvu.edu/services/"><i class="fa fa-cog"></i>Services</a></li>
		            <li><a href="https://lib.wvu.edu/services/ask/"><i class="fa fa-question-circle"></i>Get Help</a></li>
		    				<li><a href="https://lib.wvu.edu/about/giving/"><i class="fa fa-heart"></i>Give</a></li>
						</ul>
					</div>
				</div>
			    <div class="ilheader-top">
			        <div class="wrap">
			            <!-- Individual Library Time -->
		            	<a class="iltime" href="https://reserves.lib.wvu.edu/publicLogin.php">Log In <i class="fa fa-lock"></i></a>
			            <h1 class="iltitle"><a href="https://reserves.lib.wvu.edu/">Reserves</a></h1>
			            <!-- Social Media -->
			            <ul class="ilsocialmedia">
			                <li>
			                    <a class="socmedia" target="_blank" href="http://www.facebook.com/WVULibraries">
			                        <img src="https://lib.wvu.edu//images/2014/wvufacebook.png" alt="Facebook" title="Facebook"></img>
			                    </a>
			                </li>
			                <li>
			                    <a class="socmedia" href="https://plus.google.com/100326194366145492876" rel="publisher" target="_blank">
			                    	<img src="https://lib.wvu.edu//images/2014/wvugoogleplus.png" alt="Google+" title="Google+"</img>
			                	</a>
			                </li>
			                <li>
			                	<a class="socmedia" href="http://instagram.com/wvulibrarianlinda" target="_blank">
			                		<img src="https://lib.wvu.edu//images/2014/instagram.png" alt="Instagram" title="Instagram"</img>
			                	</a>
			                </li>
			                <li>
			                    <a class="socmedia" target="_blank" href="https://twitter.com/wvuLibraries">
			                        <img src="https://lib.wvu.edu/images/2014/wvutwitter.png" alt="Twitter" title="Twitter"></img>
			                    </a>
			                </li>
			                <li>
			                    <a class="socmedia" target="_blank" href="http://www.youtube.com/WVULibraries">
			                        <img src="https://lib.wvu.edu/images/2014/wvuyoutube.png" alt="Youtube" title="Youtube"></img>
			                    </a>
			                </li>
			            </ul>
			        </div>
			    </div>
			    <!-- Background Image -->
			    <style>
			        .ilheader-top {
			            padding: 50px 0px 120px;
			        }
			        .ilheader {
			            background-image: url('/images/2015/bg.jpg');
			            height: 230px;
			        }
			        @media screen and (min-width: 760px) {
			            .ilheader-top {
			                padding: 105px 0px 50px;
			            }
			        }
			    </style>
			</header>
		</header>
		<!-- Body Content -->
		<div class="wrap hpcard">
		    <section class="bp-body">
		        <p class="breadcrumb">
		            <a href="https://www.libraries.wvu.edu" class="breadCrumbLink">Home</a>
		            <span class="breadCrumbSpacer">&rsaquo;</span> Reserves
		            <!-- {breadCrumbs titlecase="TRUE" spacer="&rsaquo;"} -->
				</p>
