<?php
localvars::add("cssExt","less");
localvars::add("cssURL","https://www.libraries.wvu.edu/css/2012");
localvars::add("jsURL", "https://www.libraries.wvu.edu/javascript/2012");
localvars::add("imgURL","https://www.libraries.wvu.edu/images/2012");
localvars::add("styleRel","");
// using javascript less, uncomment the following
//localvars::add("styleRel","/less");

localvars::add("docRoot","");

// for open graph tags
localvars::add("pageURL","http".((isset($_SERVER['HTTPS']))?"s":"")."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].((isset($_SERVER['QUERY_STRING']) && !isempty($_SERVER['QUERY_STRING']))?"?".htmlSanitize($_SERVER['QUERY_STRING']):""));
?>

<script type="text/javascript">
	$(function() {
		resizeContainerColumns();
	});

	function resizeContainerColumns() {
		var leftH = $('#left').height();
		var midH  = $('#right').height();

		if (leftH >= midH) {
			$('#right').css({
				'min-height': leftH
			});
		}
		else if (midH >= leftH) {
			$('#left').css({
				'min-height': midH
			});
		}

		return;
	}
</script>

<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/2col.{local var="cssExt"}" />
