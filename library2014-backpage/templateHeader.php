<?php recurseInsert("templateIncludes/2014/templateHeader.php","php") ?>

	<!-- Image Background -->
	<div class="backpage-wrapper">
		<!-- Site Header, Social Media, and Navigation -->
        <?php recurseInsert("templateIncludes/2014/templateSiteHeader.php","php") ?>
	</div>
</header> 

<!-- Backpage Search -->
<div class="bp-search">
	<div class="wrap">
        <?php recurseInsert("templateIncludes/2014/templateSearch.php","php") ?>
    </div>
</div>

<!-- Body Content -->
<div class="wrap hpcard">
	<section class="bp-body">
		<p class="breadcrumb">
			<a href="/">Home</a> &rsaquo; {breadCrumbs titlecase="TRUE" spacer="&rsaquo;"}
		</p>