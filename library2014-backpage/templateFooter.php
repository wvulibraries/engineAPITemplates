	</section>
	<nav class="left-nav">
			<?php 
			
				recurseInsert("leftnav.php","php");

			?>
	</nav>
</div>

<!-- Footer -->

		<footer id="footer">
		    <div class="wrap">

		        <!-- Site Footer -->

		        <div class="school-footer">
		            <p>{eapi_include type="php_inline" file="assets/footerinfo.php"}
		            <em>&copy; West Virginia University. Last modified {date format="F j, Y" time="<?php print filemtime($_SERVER['SCRIPT_FILENAME']); ?>"}. <span class="disclaimer">West Virginia University is an Equal Opportunity/Affirmative Action Institution.</span></em></p>
		        </div>

		        <!-- WVU Footer -->

		        <div class="wvu-footer">
		            <ul class="wvuFooterSites">
                        <nobr>                        
                            <li><a href="http://www.wvu.edu/SiteIndex/">A-Z Site Index</a></li>
                            <li><a href="http://www.wvu.edu/CampusMap/">Campus Map</a></li>
                            <li><a href="http://www.hr.wvu.edu/wvu_jobs">Jobs</a></li>
                            <li><a href="http://directory.wvu.edu/">Directory</a></li>
                        </nobr>
                        <nobr>
                            <li><a href="http://www.wvuf.org/">Give</a></li>
                            <li><a href="http://myaccess.wvu.edu/">MyAccess</a></li>
                            <li><a href="http://careerservices.wvu.edu/">MountaineerTRAK</a></li>
                        </nobr>
                        <nobr>                            
                            <li><a href="http://emergency.wvu.edu/alert/">WVU Alert</a></li>
                            <li><a href="http://wvutoday.wvu.edu">WVU Today</a></li>
                            <li><a href="http://mix.wvu.edu/">MIX</a></li>
                        </nobr>
		            </ul>
                    <div style="clear:both;"></div>
                    <ul class="wvuFooterSocial">
                        <?php recurseInsert("assets/socialMedia.html","php") ?>
                    </ul>
		        </div>
		    </div>
		</footer>
        
        <!-- Google Analytics -->
        <?php recurseInsert("ganalytics.html","php") ?>
        
        <!-- CrazyEgg -->
        <script type="text/javascript">
            setTimeout(function(){var a=document.createElement("script");
            var b=document.getElementsByTagName("script")[0];
            a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0008/8415.js?"+Math.floor(new Date().getTime()/3600000);
            a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script> 
        
        <!-- PageFair -->
        <script type="text/javascript">
            (function() {
                function async_load(script_url){
                    var protocol = ('https:' == document.location.protocol ? 'https://' : 'http://');
                    var s = document.createElement('script'); s.src = protocol + script_url;
                    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
                }
                bm_website_code = '626058CEAB0E4ECD';
                jQuery(document).ready(function(){async_load('asset.pagefair.com/measure.min.js')});
                jQuery(document).ready(function(){async_load('asset.pagefair.net/ads.min.js')});
            })();
        </script>

	</body>
</html>