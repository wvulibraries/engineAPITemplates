<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title> {local var="appTitle"} | WVU Libraries</title>

        <!-- Meta Information -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="cleartype" content="on">

        <!-- Author, Description, Favicon, and Keywords -->
        <meta name="author" content="WVU Libraries | {local var="meta_authors"}">
        <meta name="description" content="{local var="meta_description"}">
        <meta name="keywords" content="{local var="meta_keywords"}">
        <link rel="shortcut icon" href="https://wvrhc.lib.wvu.edu/favicon.ico">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="stylesheets/variables.css"></link>
        <link type="text/css" rel="stylesheet" href="stylesheets/wvu.css"></link>
        <link type="text/css" rel="stylesheet" href="stylesheets/styles.css"></link>

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="javascripts/scripts.js"></script>

        <!-- External CSS: Helvetica & Font Awesome -->
        <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/36d8cd92-7cc7-499b-b169-0eed9d670283.css"></link>
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">

        <!-- ShareThis Code (used as you want to implement) -->
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "5d559dae-aaf3-4cce-bb7b-a7c904df0cf4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

        <!-- App includes for the head -->
        <?php recurseInsert("includes/headerIncludes.php","php") ?>
    </head>
    <body>

        <!-- WVU Header -->
        <div class="wvu-header mobile wvubottom">
            <a href="#" id="wvutoggle" class="wvu-masthead__logo wvu-masthead__logo--w-signature">
                <img src="images/wvulogo.svg" alt="WVU Libraries">
                <i class="fa fa-chevron-down"></i>
                <i class="fa fa-chevron-up"></i>
            </a>
            <ul class="list">
                <li><a class="links" href="https://lib.wvu.edu/about/">About</a></li>
                <li><a class="links" href="https://lib.wvu.edu/collections/">Collections</a></li>
                <li><a class="links" href="https://lib.wvu.edu/instruction">Instruction</a></li>
                <li><a class="links" href="https://lib.wvu.edu/about/news/">News</a></li>
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
                <ul class="wvu-header-mobile-list">
                    <li><a href="https://lib.wvu.edu/about/">About</a></li>
                    <li><a href="https://lib.wvu.edu/collections/">Collections</a></li>
                    <li><a href="https://lib.wvu.edu/instruction">Instruction</a></li>
                    <li><a href="https://lib.wvu.edu/about/news/">News</a></li>
                    <li><a href="https://lib.wvu.edu/services/">Services</a></li>
                    <li><a href="https://lib.wvu.edu/about/contactus/">Contact</a></li>
                    <li><a href="https://lib.wvu.edu/about/giving/">Give</a></li>
                </ul>
            </div>
        </div>

        <!-- WebApp Header -->
        <div class="webapp-header">
            <div class="wrap">
                <h1><a href="{local var="appURL"}">{local var="appTitle"}</a></h1>
            </div>
        </div>

        <!-- Navigation -->
        <?php recurseInsert("includes/nav.php","php") ?>

        <!-- Application Magic -->
        <div id="main-container">
            <div class="wrap">
