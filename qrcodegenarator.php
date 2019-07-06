<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript" src="jquery.qrcode.min.js"></script>

<div id="qrcodeholder"> </div>

<script type="text/javascript">
//Wrap it within $(document).ready() to invoke the function after DOM loads.
 
$(document).ready(function(){
 
$('#qrcodeholder').qrcode({
 text : "http://www.moreonfew.com/generate-qr-code-using-jquery",
 render : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
 background : "#ffffff",
 foreground : "#000000",
 width : 150,
 height: 150
 });
 
 
});
</script>