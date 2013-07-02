<script type="text/javascript">

$(document).ready(function(){  

	var rightH = $('#contentContainerRight').height();
	var leftH  = $('#contentContainerLeft').height();
	var midH   = $('#contentContainerMiddle').height();
	
	if (rightH >= leftH && rightH >= midH) {
		$('#contentContainerLeft').css({  
            'min-height': rightH
        });
		$('#contentContainerMiddle').css({  
            'min-height': rightH
        });
	}
	else if (leftH >= rightH && leftH >= midH) {
		$('#contentContainerRight').css({  
            'min-height': leftH
        });
		$('#contentContainerMiddle').css({  
            'min-height': leftH
        });
	}
	else if (midH >= rightH && midH >= leftH) {
		$('#contentContainerRight').css({  
            'min-height': midH
        });
		$('#contentContainerLeft').css({  
            'min-height': midH
        });
	} 
});

</script>

<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/3col.{local var="cssExt"}" />