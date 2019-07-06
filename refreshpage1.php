<HTML>
<HEAD>
<TITLE>Crunchify - Refresh Div without Reloading Page</TITLE>
<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#show').text(
                            'I am getting refreshed every 3 seconds..! Random Number ==> '
                                    + randomnumber);
                }, 3000);
            });
</script>
</HEAD>
<BODY>
    <br>
    <br>
    <div id="show" align="center"></div>
</BODY>
</HTML>