<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{local var="currentDisplayObjectTitle"} | WVU Libraries </title>

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
        <link href="/css/2015/wvu.css" type="text/css" rel="stylesheet" /> 
        <link href="/css/2014/wvuhack.css" type="text/css" rel="stylesheet" /> 
        <link href="/css/2014/lib.css" type="text/css" rel="stylesheet" /> 
        <link href="/css/2014/bxslider.css" type="text/css" rel="stylesheet" /> 
        <link href="/css/2014/ilstyles.css" type="text/css" rel="stylesheet" />
        <link href="/css/2014/safari.css" type="text/css" rel="stylesheet" />
        <link href="/css/2015/styles.css" type="text/css" rel="stylesheet" />
       
        <!-- JavaScripts -->
        <script type="text/javascript" src="/javascript/2014/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="/javascript/2014/scriptshack.js"></script>
        <script type="text/javascript" src="/javascript/2014/jquery.bxslider.min.js"></script> 
        <script type="text/javascript" src="/javascript/2015/scripts.js"></script>
    
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
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/36d8cd92-7cc7-499b-b169-0eed9d670283.css"></link>
        <!-- Old Web Font <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,400italic,300italic,600,600italic,700,900,700italic,900italic|Bitter:400,400italic,700' rel='stylesheet' type='text/css'>-->       

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
        <!-- Skip Nav --> 
        <a class="wvu-skip-nav" href="#main-container">Skip to main content</a>
        
        <!-- Ask A Librarian  -->
        <div class="ask" role="banner" aria-label="ask a library interactive chat button, click to talk to a librarian when library is open">
            <a href="http://westvirginia.libanswers.com/">
                <img title="Ask A Librarian" alt="Ask A Librarian" src="/images/2014/ask.png">
                <span class="hidden-text">Ask a Librarian</span>
            </a>
        </div>

        <!-- WVU Header -->
        <div class="wvu-header mobile wvubottom">
            <a href="#" id="wvutoggle" class="wvu-masthead__logo wvu-masthead__logo--w-signature">
                <img src="/images/2015/wvulogo.svg" alt="WVU Libraries">
                <i class="fa fa-chevron-down"></i>
                <i class="fa fa-chevron-up"></i>    
            </a>
            <ul class="list">
                <li><a class="links" href="https://lib.wvu.edu/about/">About</a></li>
                <li><a class="links" href="https://lib.wvu.edu/collections/">Collections</a></li>
                <li><a class="links" href="https://lib.wvu.edu/instruction">Instruction</a></li>
                <li><a class="links" href="https://news.lib.wvu.edu">News</a></li>
                <li><a class="links" href="https://lib.wvu.edu/services/">Services</a></li>
                <li><a class="links" href="https://lib.wvu.edu/about/contactus/">Contact</a></li>
                <li><a class="links" href="https://lib.wvu.edu/about/giving/">Give</a></li>
                <li><a class="links" href="https://lib.wvu.edu/">Library Home</a></li>
            </ul>
        </div>
        <div class="wvu-header tablet wvubottom">
            <div class="wrap">
                <a href="https://lib.wvu.edu" class="wvu-header-logo wvu-masthead__logo wvu-masthead__logo--w-signature">
                    <span class="wvu-masthead-title wvu-masthead__title--w-signature">Libraries</span>
                </a>
                <ul class="site-header-social tablet verytop">
                    <?php recurseInsert("assets/socialMedia.html","php") ?>
                </ul>
            </div>
        </div>
