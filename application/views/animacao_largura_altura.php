<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    
        var div = $("#divp");
        div.animate({height: '300px', opacity: '0.4'}, "slow");
        div.animate({width: '300px', opacity: '0.8'}, "slow");
        
   
});
</script> 
</head>
<body>

<div style="background:#98bf21;height:100px;width:100px;position:absolute;" id="divp">
<p>By default, all HTML elements have a static position,
    and cannot be moved. To manipulate the position, 
    remember to first set the CSS position property of
    the element to relative, fixed, or absolute!</p>
</div>
</body>
</html>