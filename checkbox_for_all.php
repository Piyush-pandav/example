<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="chkSelectAll"></th>
                        <th colspan="3">
                            Product Name
                        </th>
                        <th>
                            Cost
                        </th> 
                    </tr>
                </thead>
                <tbody>
                     
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 1
        
    </td>
    <td>
        100
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 2
        
    </td>
    <td>
        200
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 3
        
    </td>
    <td>
        300
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 4
        
    </td>
    <td>
        400
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 5
        
    </td>
    <td>
        500
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 6
        
    </td>
    <td>
        600
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 7
        
    </td>
    <td>
        700
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 8
        
    </td>
    <td>
        800
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 9
        
    </td>
    <td>
        900
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 10
        
    </td>
    <td>
        1000
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 11
        
    </td>
    <td>
        1100
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"   type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 12
        
    </td>
    <td>
        1200
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 13
        
    </td>
    <td>
        1300
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect" type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 14
        
    </td>
    <td>
        1400
        
    </td>
</tr>
 
<tr>
    <td class="text-nowrap"><input class="chkSelect"  type="checkbox" value="true"> </td>
    <td colspan="3">
        Product 15
        
    </td>
    <td>
        1500
        
    </td>
</tr>

                </tbody>
            </table>
        </div>
        
        
<script type="text/javascript">
$(document).ready(function(){
	  $("#chkSelectAll").bind("change", function () {
            $(".chkSelect").prop("checked", $(this).is(":checked"));
        });

 $(".chkSelect").bind("change", function (event, index) {
            if (!$(this).is(":checked")) {
                $("#chkSelectAll").prop("checked", false);
            }
 
            if ($(this).is(":checked")) {
                DoSelection($('.chkSelect').index($(this)));
            }
        });


 function DoSelection(currentIndex) {

            try {
               
                if ($('.chkSelect:checked').length > 1) {
                    var startIndex = $('.chkSelect').index($('.chkSelect:checked')[0]);

                    if (startIndex != undefined && startIndex != null && startIndex != -1 && currentIndex > startIndex) {
                        $("#chkSelectAll").prop("checked", false);
                         
                        for (var indx = startIndex; indx <= currentIndex; indx++) {
                            $('.chkSelect').eq(indx).prop("checked", true);
                        }
                    }
                }
            }
            catch (e) {
               
                $("#chkSelectAll").prop("checked", false);
                $(".chkSelect").prop("checked", false);
            }
        }
});
</script>