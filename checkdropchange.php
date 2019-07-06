<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<select id="garden" name="garden" multiple="multiple">
  <option value="1">Flowers</option>
  <option value="2">Shrubs</option>
  <option value="3">Trees</option>
  <option value="4">Bushes</option>
  <option value="5">Grass</option>
  <option value="6">Dirt</option>
</select>
<input type="text" name="store" id="store" />
<div style="display:none" id="ss">
	<input type="text" name="storve" id="stovre" />
</div>
<script>
$("#garden").change(function () {
  var str = "";
  $("select option:selected").each(function () {
        str += $(this).val() + ",";
		var exa=$(this).val()
		alert (exa);
		$("#ss").show();
      });
    $('#store').val(str).attr('rows',str.length) ;
})
.trigger('change');
</script>
</body>
</html>