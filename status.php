<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Travel System</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <body>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script src="datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="datatables/media/js/dataTables.bootstrap.min.js"></script>
    
    <?php include "nav.php" ?>
    
    <div class="container-fluid">
		<div class = "row" style = "margin-top: 70px">
		<div class="col-md-2" >
		  <?php include "menu.php" ?>
	    </div>
	    <div class="col-md-10">
		  <div class="panel panel-primary">
		   <div class="panel-body">
			 Status (Only a Staff Member can see this page) 
		   </div>
		   <div class="panel-footer">
			   <form action = "" method = "post" id = "statusform">
				   
				   <div class="form-group">
					<label class="control-label" for="name">Status:</label>
					<textarea class="form-control" id="status" name = "status" placeholder="Status"></textarea>
			       </div>
			       
			       <div class="form-group">
						<button type="submit" class="btn btn-primary">Update Status</button>
				   </div>
			   </form>
		   </div>
		  </div>
	    </div>
	    </div>
    </div>
    
    <!-- Modal -->
  <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Travel System</h4>
        </div>
        <div class="modal-body">
          <div style = "color: red" id = "errormsgs"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script type = "text/javascript">
	  
		//function to ensure all values are entered correctly
		function validate(e){
			
		var error = 0;
		$('#errormsgs').html('');
		
		$('#status').parent().closest('div').removeClass('has-error');
		if($.trim($('#status').val()) == ''){
			$('#status').parent().closest('div').addClass('has-error');
			$('#errormsgs').append('<p>Please fill in the status field.</p>'); 
			error = 1;
		}
		
		if(error == 1){
			e.preventDefault();	
			$('#myModal').modal('show');
		}
		
	    }
	    
	    // show modal on errors
		$('#statusform').on('submit', function(event) {
			validate(event);
		});
		
	    $(document).ready(function() {
			$('#myTable').DataTable();
			$('#nav li').removeClass('active');
			$('#menu4').addClass('active');
		});
  </script>
    
  </body>
</html>

