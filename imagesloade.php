<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("img").load(function(){
        alert("Image loaded.");
    });
});
</script>
</head>
<body>

<img src="img_moustiers-sainte-marie.jpg" alt="Cinqueterra" width="304" height="236">

<p><b>Note:</b> Depending on the browser, the load event may not trigger if the image is cached.</p>

</body>
</html>