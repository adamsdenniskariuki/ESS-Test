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
    
    <div class="container-fluid">
		<div class = "row" style = "margin-top: 70px">
		
		<div class="col-md-4"></div>
		
		<div class="col-md-4">
		  <div class="panel panel-primary">
		   
		   <div class="panel-body">
			 Login Page 
		   </div>
		   <div class="panel-footer">
			   
			   <form action = "" method = "post" id = "loginform">
			    
			    
			    <div class="form-group">
					<label class="control-label" for="user">Username / Email:</label>
					<input type = "text" class="form-control" id="user" name = "user" placeholder="Username / Email"></textarea>
			    </div>
			    
			     <div class="form-group">
					<label class="control-label" for="comments">Password:</label>
					<input type = "password" class="form-control" id="password" name = "password" placeholder="Password">
			    </div>
			    
			    <div class="form-group">
					<input type = "checkbox" id="rem" name = "rem"> Remember Me
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
			
			$('input').each(function() {
				$(this).parent().closest('div').removeClass('has-error'); 
				if($.trim($(this).val()) == ''){
					$(this).parent().closest('div').addClass('has-error'); 
					error = 1;
				} 
			});
			
			if(error == 1){
				e.preventDefault();	
				$('#myModal').modal('show');
				
			}
		}
		
		// show modal on errors
		$('#loginform').on('submit', function(event) {
			validate(event);
		});
		
	</script>
	
  </body>
</html>

	
