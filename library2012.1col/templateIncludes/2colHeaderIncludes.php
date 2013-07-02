<script type="text/javascript">

$(document).ready(function(){  

    resizeContainerColumns();

});

function resizeContainerColumns() {
        var leftH = $('#contentContainerLeft').height();
    var midH = $('#contentContainerMiddle').height();

    if (leftH >= midH) {
        $('#contentContainerMiddle').css({  
            'min-height': leftH
        });
    }
    else if (midH >= leftH) {
        $('#contentContainerLeft').css({  
            'min-height': midH
        });
    } 

    return;
}

</script>

<link rel="stylesheet{local var="styleRel"}" type="text/css" href="{local var="cssURL"}/2col.{local var="cssExt"}" />