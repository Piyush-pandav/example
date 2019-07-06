<form method="POST" action="backupdatabase.php" onsubmit="
  if(form_being_submitted) {
    alert('The form is being submitted, please wait a moment...');
    myButton.disabled = true;
    return false;
  }
  if(checkForm(this)) {
    myButton.value = 'Submitting form...';
    form_being_submitted = true;
    return true;
  }
  return false;
">
<input type="submit" name="myButton">
</form>

<script type="text/javascript">

  var form_being_submitted = false; // global variable

  function checkForm(form)
  {
    return true;
  }

</script>