


<td colspan="4">
<input name="discount" type="radio" id="Yes" value="Yes" />Yes
<input name="discount" type="radio" id="No" value="No" checked="checked" />No<br />  
<select class="purple" name="discountselection" id="discountselection">
<option value="1 Year" selected="selected">1 Year</option>
<option value="2 Years">2 Years</option>
<option value="3 Years">3 Years</option>
</select>                  
</td>
<select  name="discountselection" id="discountselection" disabled="disabled">
    <option value="1 Year" selected="selected">1 Year</option>
    <option value="2 Years">2 Years</option>
    <option value="3 Years">3 Years</option>
    </select>
      <script type="text/javascript">
                   $("#Yes").click(function() {
                        $("#discountselection").attr("disabled", false);
                        //$("#discountselection").show(); //To Show the dropdown
                    });
                    $("#No").click(function() {
                        $("#discountselection").attr("disabled", true);
                        //$("#discountselection").hide();//To hide the dropdown
                    });
    </script>