<style>
.error{
display:none;
}
</style>
<form method="post">
  <div>
<input type="radio" name="gender" value="F" id="female">
<label for="female">Female</label>
<input id="male" name="gender" type="radio" value="M" />
<label for="male">Male</label>
<span class="error"> *Required</span>
</div>
<div>
  <input type="submit">
  
</div>
</form>
<script>
$('form').submit(function() {
	 $('.error').hide();
	  var radioList = $('input:radio');
	  var radioNameList = new Array();
	  var radioUniqueNameList = new Array();
	  var notCompleted = 0;
	  for(var i=0; i< radioList.length; i++){
		  radioNameList.push(radioList[i].name);
	  }
	  radioUniqueNameList = jQuery.unique( radioNameList );
	  for(var i=0; i< radioUniqueNameList.length; i++){
		  if(typeof($('input:radio[name='+radioUniqueNameList[i]+']:checked').val()) === "undefined"){
			  $('input:radio[name='+radioUniqueNameList[i]+']').parent().find('.error').show();
			  notCompleted++;
		  }
		}
	 if(notCompleted > 0){
     alert('Not Completed');
		 //return false;
	 }else{
     alert('All Completed');
		 //return true;
	 }
});
</script>