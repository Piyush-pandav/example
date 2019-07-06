$target = "loan_customer_proof/";
	$target = $target . basename( $_FILES['image']['name']);
	$Filename=basename( $_FILES['image']['name']);
	$imageFileType = pathinfo($target,PATHINFO_EXTENSION);
	if(isset($Filename))
   	{
		$filenames=date('YmdHis');
 		$actualpath = $random_number."_customer_image_"."$filenames.".$imageFileType;
			 if(move_uploaded_file($_FILES['image']['tmp_name'], "loan_customer_proof/".$actualpath)) 
						{
							$query=mysql_query("update  `tm_loan_customer` set  s_image='$actualpath' where tm_loan_customer_id='$lastinsertedid'");	
						}
						
	}
    
------------------------
input id="uploadFile" name="image"    type="file" aria-required="true" class="dropify" style="margin-top: 4px;"   onchange="readURL(this);" accept="image/x-png,image/jpg,image/jpeg"

-----------------------

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result).width(110).height(110);
				$('#blah').css('border','2px');
				$('#blah').css('border-style','solid');
				$('#blah').css('border-color','rgb(228, 220, 218)');				
				$('#blah').css('background-color','#DDD');
			
            };

            reader.readAsDataURL(input.files[0]);
        }
    }