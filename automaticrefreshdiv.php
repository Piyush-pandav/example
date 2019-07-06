<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Auto Update Div with Content from Textarea</title>
<style type="text/css">
    .output{
        padding: 10px;
        min-height: 50px;
        border: 1px solid #e4e4e4;
    }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#myTextarea").keyup(function(){
        // Getting the current value of textarea
        var currentText = $(this).val();
        
        // Setting the Div content
        $(".output").text(currentText);
    });
});
</script>
</head>
<body>

    <form>
        <textarea id="myTextarea" rows="5" cols="60" placeholder="Type something here..."></textarea>
    </form>
    <div class="output"></div>
</body>
</html>
