<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{local var="currentDisplayObjectTitle"} | <?php recurseInsert("assets/webtitle.html","php"); ?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">

        <meta name="keywords" content="{local var="currentDisplayObjectKeywords"}">
        <meta name="description" content="{local var="currentDisplayObjectDescription"}">
        <meta name="author" content="WVU Libraries">
        <meta http-equiv="cleartype" content="on">
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- CSS -->
        <link href="https://lib.wvu.edu//css/2014/wvu.css" type="text/css" rel="stylesheet" /> 
        <link href="https://lib.wvu.edu//css/2014/lib.css" type="text/css" rel="stylesheet" /> 
        <link href="https://lib.wvu.edu//css/2014/bxslider.css" type="text/css" rel="stylesheet" /> 
        <link href="https://lib.wvu.edu//css/2014/ilstyles.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://lib.wvu.edu//css/2014/safari.css"></link> 

        <!-- JavaScripts -->
        <script type="text/javascript" src="https://lib.wvu.edu//javascript/2014/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="https://lib.wvu.edu//javascript/2014/scripts.js"></script>
        <script type="text/javascript" src="https://lib.wvu.edu//javascript/2014/jquery.bxslider.min.js"></script>

        <!-- CSS Attribute/CSS Media Query/CSS Psuedo-Class/HTML Semantic Elements fallback for less than IE9 -->
        <!--[if IE 9]>
            <link href="/css/2014/ie9.css" type="text/css" rel="stylesheet" /> 
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="/javascript/2014/respond.min.js"></script>
            <script src="/javascript/2014/selectivizr.min.js"></script>
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
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,400italic,300italic,600,600italic,700,900,700italic,900italic|Bitter:400,400italic,700' rel='stylesheet' type='text/css'>       

        <script type="text/javascript">
        $(document).ready(function() {

        {local var="alertJS"}
        
        });
        
        </script>

        <?php 
        // include the CSS for the backpage

        if (EngineAPI::VERSION >= "4.0" && templates::name() == "library2012.2col") {
            $templateIncludesFilename = "templateIncludes/2014/backpageheaderincludes.php";
        }

        if (EngineAPI::VERSION < "4.0" && $engine->eTemplate("name") == "library2014-backpage") {
            $templateIncludesFilename = "templateIncludes/2014/backpageheaderincludes.php";
        }
        
        if (isset($templateIncludesFilename)) recurseInsert($templateIncludesFilename,"php");

        ?>
        
        <?php print recurseInsert("headerIncludes.php","php"); ?>
        
    </head>
    
    <body>
        <div id="alertBar"></div>
        <div class="ask"><a href="http://answers.lib.wvu.edu/">
        <img title="Ask A Librarian" alt="Ask A Librarian" src="https://lib.wvu.edu//images/2014/ask.png"></a></div>
        <header>

            <!-- WVU Header -->

            <div class="wvu-header mobile wvubottom">
                <a href="#" id="wvutoggle">
                	<img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png">
                </a>
                <a href="http://www.wvu.edu" class=" wvu-header-logo tablet">
                	<img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="https://lib.wvu.edu//images/2014/wvu_logo.png">
                </a>
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
                    <a href="http://www.wvu.edu" class="wvu-header-logo"><img alt="West Virginia Univeristy" title="West Virginia Univeristy" src="/images/2014/wvu_logo.png"></a>
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
            <div id="alertBar"></div>