<html>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
    function sendQuery() {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'test2.php',
            data: $('#SubmitForm').serialize(),
            success: function() {
                $('#DisplayDiv').html(response);;
            }
			
        });
        return false;
    }
</script>
<body>
    <form id="SubmitForm" action="" method="post">
        <div id="SubmitDiv" style="background-color:black;color:white;">
            <input type="checkbox" id="chk" name="chk" form="SubmitForm" value="chk">CHECK</input><br>
            <button name="submit" id="submit" type="submit" form="SubmitForm" onclick="return sendQuery();">Submit</button>
        </div>
    </form>
    <div id="DisplayDiv"></div>
</body>
</html>