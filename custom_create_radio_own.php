<style>

	.custom-checkbox{
		width: 41px;
		height: 34px;
		display: inline-block;
		position: relative;
		z-index: 1;
		top: 3px;
		background:url(../ico/Asset%2076ldpi.png) no-repeat;
		
	}
	.custom-checkbox:hover{
		background: url(../ico/Asset%2076ldpi.png) no-repeat;
	}
	.custom-checkbox.selected{
		background:url(../ico/Asset%2075ldpi.png) no-repeat;
	}
	.custom-checkbox input[type="checkbox"]{
		margin: 0;
		position: absolute;
		z-index: 2;            
		cursor: pointer;
		outline: none;
		opacity: 0;
		
	}
	

   
</style> <table>
              	<tr>
                	<td> Area 1<label><input type="checkbox" name="sport[]" value="Area 1" /> </label></td>
                    <td> Area 2<label><input type="checkbox" name="sport[]" value="Area 2" /> </label></td>
                </tr>
                <tr>
                	<td>Area 3<label><input type="checkbox" name="sport[]" value="Area 3" /> </label></td>
                    <td>Area 4<label><input type="checkbox" name="sport[]" value="Area 4" /> </label></td>
                </tr>
                <tr>
                	<td> Area 5 <label><input type="checkbox" name="sport[]" value="Area 5" /> </label></td>
                    <td> Area 6<label><input type="checkbox" name="sport[]" value="Area 6" /> </label></td>
                </tr>
                <tr>
                	<td> Area 7 <label><input type="checkbox" name="sport[]" value="Area 7" /> </label></td>
                    <td> Area 8<label><input type="checkbox" name="sport[]" value="Area 8" /> </label></td>
                </tr>
              </table>
             