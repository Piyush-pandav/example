<?php
if(isset($_POST['check']))
{
   ?>
   <script>
  $('#EditUser').modal('toggle');
	$('#EditUser').modal('show');
   </script>
   <?php
}
?>

<form name="eeee" method="post">
<input type="submit"  name="check" id="check"/>
</form>
<div class="modal fade" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <!-- <h4 class="modal-title">Edit User :: </h4>-->
              </div>
              <div class="modal-body" style="color:white">
                <div id="edit_body"></div>
              </div>
            </div>
          </div>
          <!-- Edit User Modal Ends --> 
          
          <!-- Modal Windows Area Ends --> 
        </div>