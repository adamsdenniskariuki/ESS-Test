<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Travel System</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">

  <body>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    
    <?php include "nav.php" ?>
    
    <div class="container-fluid">
		<div class = "row" style = "margin-top: 70px">
		<div class="col-md-2" >
		  <?php include "menu.php" ?>
	    </div>
	    <div class="col-md-10">
		  <div class="panel panel-primary">
		   <div class="panel-body">
			 Travel Plan (Only a Staff Member can see this page) 
		   </div>
		   <div class="panel-footer">
			   <form action = "mission_report.php" method = "post" id = "mr_form" enctype="multipart/form-data">
			    
			    
			    <div class="form-group">
					<label for="comments">Comments:</label>
					<textarea class="form-control" id="comments" name = "comments" placeholder="Comments"></textarea>
			    </div>
			    
			    <div class="form-group">
					<label for="report">Mission Report:</label>
					<input type="file" class="form-control" id="report" name = "report">
			    </div>
			    
			    <button type="submit" class="btn btn-primary">Submit</button>
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
          <p style = "color: red">Please fill in all the fields</p>
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
			
			$('textarea').each(function() { 
				if($.trim($(this).val()) == '') 
					error = 1; 
			});
			
			if(error == 1){
				e.preventDefault();	
				$('#myModal').modal('show');
				
			}
		}
		
		// show modal on errors
		$('#mr_form').on('submit', function(event) {
			validate(event);
		});
		
		$(document).ready(function() {
			$('#nav li').removeClass('active');
			$('#menu5').addClass('active');
		});
	
  </script>
    
  </body>
</html>
