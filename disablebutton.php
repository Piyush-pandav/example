<!DOCTYPE html>
<html lang="en">
<body>
<form id="formABC" action="#" method="POST">
    <input type="submit" id="btnSubmit" value="Submit"></input>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--<input type="button" value="i am normal abc" id="btnTest"></input>
--><script>
    $(document).ready(function () {

        $("#formABC").submit(function (e) {
            e.preventDefault();          
            $("#btnSubmit").attr("disabled", true);
            return true;
        });
    });
</script>
</body>
</html>