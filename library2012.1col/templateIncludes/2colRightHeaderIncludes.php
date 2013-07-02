<script type="text/javascript">

$(document).ready(function(){  
	var rightH = $('#contentContainerRight').height();
	var midH = $('#contentContainerMiddle').height();
	
	if (rightH >= midH) {
		$('#contentContainerMiddle').css({  
            'min-height': rightH
        });
	}
	else if (midH >= rightH) {
		$('#contentContainerRight').css({  
            'min-height': midH
        });
	} 
});

</script>

<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/3col.{local var="cssExt"}" />
<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/2colRight.{local var="cssExt"}" />