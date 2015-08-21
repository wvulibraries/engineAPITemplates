<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Room Reservations | WVU Libraries</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
		<meta name="keywords" content="Room Reservation, Find A Room, Advanced Search, Study Rooms, Rooms by Building, Room Policies, Room Policy">
		<meta name="description" content="Check availability or reserve rooms in the WVU Library by building, hour, or occupancy. View room photos, room policies, or search previous room reservations.">
    	<meta name="author" content="WVU Libraries">
		<meta http-equiv="cleartype" content="on">
    	<link rel="shortcut icon" href="https://wvrhc.lib.wvu.edu/favicon.ico">

        <!-- CMS CSS -->
        <link href="https://lib.wvu.edu/css/2015/wvu.css" type="text/css" rel="stylesheet" /> 
        <link href="https://lib.wvu.edu/css/2014/ilstyles.css" type="text/css" rel="stylesheet" />
        <link href="https://lib.wvu.edu/css/2015/styles.css" type="text/css" rel="stylesheet" />
        <link href="https://lib.wvu.edu/css/2014/safari.css" type="text/css" rel="stylesheet" />

        <!-- External CSS -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,400italic,300italic,600,600italic,700,900,700italic,900italic|Bitter:400,400italic,700' rel='stylesheet' type='text/css'>        

        <!-- Local CSS -->
        <link href="https://lib.wvu.edu/css/2015/lib2.css" type="text/css" rel="stylesheet" />         
        <link href="{local var="roomResBaseDir"}/css/rooms.css" type="text/css" rel="stylesheet">

        <!-- JavaScripts -->
        <script type="text/javascript" src="https://lib.wvu.edu/javascript/2014/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="https://lib.wvu.edu/javascript/2015/scripts.js"></script>

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
        
        <?php recurseInsert("headerIncludes.php","php") ?>
    </head>

        <body>

        <!-- WVU Header -->
        <div class="wvu-header mobile wvubottom">
            <a href="#" id="wvutoggle" class="wvu-masthead__logo wvu-masthead__logo--w-signature">
                <img src="https://lib.wvu.edu/images/2015/wvulogo.svg" alt="WVU Libraries">
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

        <!-- Collection Header -->
        <div class="collection-header">
            <div class="wrap"> 
                <h1 class="collection-header-title">
                    <a href="https://lib.wvu.edu/services/rooms/">Room Reservations</a>
                </h1>
            </div>
        </div>

        <!-- Website Tab Bar -->
        <div class="sticky-header">
            <div class="tbwrap"> 
                <div class="sticky-header-nav tabBar">
                    <a href="https://lib.wvu.edu/services/rooms/">
                        <img src="https://lib.wvu.edu/images/2015/search.svg" alt="Search" id="search-toggle1">
                    </a>
                </div>
                <div class="sticky-header-top tabBar">
                    <a href="https://lib.wvu.edu/services/rooms/find/">
                        <img src="https://lib.wvu.edu/images/2015/gear.svg" alt="Back to Top">
                    </a>
                </div>
                <div class="sticky-header-filter tabBar">
                    <?php if (is_empty(session::get("username"))) { ?>
                        <a class="userLogin roomTabletDesktop" href="https://lib.wvu.edu/engineIncludes/login-4.0.php?page={phpself query="true"}">
                            <img src="https://lib.wvu.edu/images/2015/user.svg" alt="Search" id="filter-toggle1">
                        </a>
                    <?php } else { ?>
                        <a class="userLogin roomTabletDesktop" href="{engine var="logoutPage"}?">
                            <img src="https://lib.wvu.edu/images/2015/user.svg" alt="Search" id="filter-toggle1">
                        </a>                
                    <?php } ?>
                    </div>
                </div>
                <div class="sticky-header-search tabBar">
                    <a href="https://lib.wvu.edu/services/rooms/policies/">
                        <img src="https://lib.wvu.edu/images/2015/alert.svg" alt="Search" id="search-toggle1">
                    </a>
                    <?php if (is_empty(session::get("username"))) { ?>
                        <a class="userLogin roomTabletDesktop" href="https://lib.wvu.edu/engineIncludes/login-4.0.php?page={phpself query="true"}">
                            <i class="fa fa-user"></i>
                            User Login
                        </a>
                    <?php } else { ?>
                        <a class="userLogin roomTabletDesktop" href="{engine var="logoutPage"}?">
                            <i class="fa fa-user"></i>User Logout
                        </a>                
                        <a class="userLogin roomTabletDesktop" href="{local var="roomReservationHome"}/calendar/user/" class="roomMobile bSubmit">
                            <i class="fa fa-check"></i>My Reservations
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Page Wrapper -->
        <div class="wrap hpcard">
            <section class="bp-body-1c">
