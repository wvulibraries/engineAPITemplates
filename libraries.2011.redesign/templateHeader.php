<!DOCTYPE HTML>

<html>

<head>
	<title>{local var="pageTitle"}</title>
	
	<link rel="stylesheet" href="/mike/redesign/home/css2/main.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/mike/redesign/home/css2/ui2top.css" type="text/css" media="screen" />
	
	<script src="/mike/redesign/home/javascript/jquery.js"></script>
	<script src="/mike/redesign/home/javascript/jquery.vscroll.js"></script>
	<script src="/mike/redesign/home/javascript/jquery.cycle.js"></script>
	<script src="/mike/redesign/home/javascript/jquery.easing.js"></script> 
	<script src="/mike/redesign/home/javascript/jquery.ui2top.js" type="text/javascript"></script> 
	<script src="/mike/redesign/home/javascript/tabs.js"></script>
	
	<script src="/mike/redesign/home/javascript/rotate.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function () {
		
		// setup ul.tabs to work as tabs for each div directly under div.panes
		$("ul#tabs").tabs("div#panels > div");
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
		$('#newsScroller').vTicker({speed: 500,
	   pause: 3000,
	   showItems: 3,
	   animation: 'fade',
	   mousePause: true,
	   height: 0,
	   direction: 'up'});
	
		$('a.searchSelect').live({
			click: searchSelectHandler
		});
	
	    var myelement = $('#staticHeaderTabs'); // the element to act on if viewable
	    $(window).scroll(function() {
	        if(isScrolledIntoView(myelement)) {
				$('#topMenuBar').slideUp();
	        } else {
				$('#topMenuBar').slideDown();
	        }
		});
		
		$('#rotatingAdImgs').cycle({ 
		    // fx:     'fade', 
			fx: "fade",
		    speed:   300, 
		    timeout: 3000, 
		    next:   'nextButton', 
			prev:   'prevButton',
		    pause:   1 
		});
		
	});
	
	function isScrolledIntoView(elem) {
		
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
    }
	
	function searchSelectHandler() {
		if ($(this).hasClass('summon')) {
			$('.searchBox').attr("placeholder","Enter Search Terms");
			$('#searchSubmit').attr("value","Summon It!");
		}
		else if ($(this).hasClass('site')) {
			$('.searchBox').attr("placeholder","Search Libraries Website");
			$('#searchSubmit').attr("value","Site Search");
		}
		else if ($(this).hasClass('mountainlynx')) {
			$('.searchBox').attr("placeholder","Search Mountainlynx");
			$('#searchSubmit').attr("value","Local Search");
		}
		else if ($(this).hasClass('journals')) {
			$('.searchBox').attr("placeholder","Search Serial Solutions");
			$('#searchSubmit').attr("value","Journal Search");
		}
		else if ($(this).hasClass('google')) {
			$('.searchBox').attr("placeholder","Use Google to Search the Web");
			$('#searchSubmit').attr("value","Google Search");
		}
		
		return(false);
	}
	

	
	</script>	
	
	<?php if ($_SERVER['PHP_SELF'] != "/mike/redesign/home/index.php") { recurseInsert("headerIncludes.php","php"); } ?>
</head>

<body>
	<div id="topMenuBar">
		<p>WVU Libraries</p>
		<div style="float: right; position: relative;">
			<form method="GET" action="http://wvu.summon.serialssolutions.com/search" style="margin: none; padding: none;  z-index: 101;"> 
				<label for="topMenuBarSearchBox">	Search Summon:</label>
				<input type="text" name="s.q" tabindex="1" value="" class="searchBox" id="topMenuBarSearchBox"/> 
				<input type="submit" value="go" />
			</form>
		</div>
		<div class="headerTabs" id="movingHeaderTabs">
			<?php recurseInsert("index.headerTabs.php","php");  ?>
		</div>
	</div>
	
	<div id="container">
	<div id="header">
		<div id="wvuMasthead">
			<a href="http://www.wvu.edu"><img src="/mike/redesign/home/images/hp/wvu.gif" alt="WVU Logo"/></a>

			<ul>
				<li>
					<a href="http://url.com">A-Z Site index</a>
					&nbsp;&middot;&nbsp;
				</li>
				<li>
					<a href="http://url.com">Campus Map</a>
					&nbsp;&middot;&nbsp;
				</li>
				<li>
					<a href="http://url.com">Directory</a>
					&nbsp;&middot;&nbsp;
				</li>
				<li>
					<a href="http://url.com">Contact Us</a>
					&nbsp;&middot;&nbsp;
				</li>
				<li>
					<a href="http://url.com">Hours</a>
					&nbsp;&middot;&nbsp;
				</li>
				<li>
					<a href="http://url.com" id="wvuLink">WVU Home</a>
				</li>
			</ul>

		</div>
		
		<div class="headerTabs" id="staticHeaderTabs">
			<?php recurseInsert("index.headerTabs.php","php");  ?>
		</div>
		
	</div>
	
	<?php recurseInsert("leftnav.php","php") ?>