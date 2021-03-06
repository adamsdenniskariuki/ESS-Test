<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Travel System</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">

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
			 Create / Edit Users (Only an Administrator can see this page) 
		   </div>
		   <div class="panel-footer">
			   
			   <form action = "" method = "post" id = "userform">
				   
				   <div class="form-group">
					<label class="control-label" for="name">Name:</label>
					<input type="text" class="form-control" id="name" name = "name" placeholder="Name">
			       </div>
			       <div class="form-group">
					<label class="control-label" for="registration">Registration No:</label>
					<input type="text" class="form-control" id="registration" name = "registration" placeholder="Registration No.">
			       </div>
			       <div class="form-group">
					<label for="gender">Gender:</label>
					<select class="form-control" id="gender" name = "gender">
					<option value = "M">Male</option>
					<option value = "F">Female</option>
					</select>
			       </div>
			       <div class="form-group">
					<label class="control-label" for="email">Email:</label>
					<input type="text" class="form-control" id="email" name = "email" placeholder="Email">
			       </div>
			       <div class="form-group">
					<label class="control-label" for="username">UserName:</label>
					<input type="text" class="form-control" id="username" name = "username" placeholder="Username">
			       </div>
			       <div class="form-group">
					<label class="control-label" for="password">Password:</label>
					<input type="password" class="form-control" id="password" name = "password" placeholder="Password">
			       </div>
			       <div class="form-group">
					<label class="control-label" for="confirmpassword">Confirm Password:</label>
					<input type="password" class="form-control" id="confirmpassword" name = "confirmpassword" placeholder="Confirm Password">
			       </div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Create New User</button>
				   </div>
			   </form>
			   
			   <table id="myTable" class = "table table-striped" width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Reg. No</th>
						<th>Username</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>James Reed</td>
						<td>251414</td>
						<td>jamesreed</td>
						<td>male</td>
						<td>james.reed@unep.org</td>
						<td><button type="submit" class="btn btn-primary edituserbtn">Edit</button></td>
					</tr>
					<tr>
						<td>Antony Kim</td>
						<td>748414</td>
						<td>antokim</td>
						<td>male</td>
						<td>antony.kim@unep.org</td>
						<td><button type="submit" class="btn btn-primary edituserbtn">Edit</button></td>
					</tr>
					<tr>
						<td>Stellah Cherono</td>
						<td>000014</td>
						<td>stellahc</td>
						<td>female</td>
						<td>Stellah.Cherono@unep.org</td>
						<td><button type="submit" class="btn btn-primary edituserbtn">Edit</button></td>
					</tr>
					
				</tbody>
			   </table>
			   
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
	    $(document).ready(function() {
			$('#myTable').DataTable();
			$('#nav li').removeClass('active');
			$('#menu7').addClass('active');
		});
		
		//validate email
		function validate_email(e){
			var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
			if(emailformat.test(e)){
				return '1';
			}
			else{
				return '0';
			}
		}
		
		//function to redirect page		
		$(document).on('click', '.edituserbtn', function(){
			window.location.href = 'edit_user.php';
		});
		
		//function to ensure all values are entered correctly
		function validate(e){
			
			$('#errormsgs').html('');
			var error = 0;
			
			$('input').each(function() {
				$(this).parent().closest('div').removeClass('has-error'); 
				if($.trim($(this).val()) == '' && $(this).attr('class') != 'form-control input-sm'){
					$(this).parent().closest('div').addClass('has-error');
					$('#errormsgs').append('<p>Please fill in the ' + $(this).attr('name') + ' field.</p>');
					error = 1;
				} 
			});
			
			if(validate_email($('#email').val()) == '0'){
				$('#errormsgs').append('<p>Invalid email.</p>');
				error = 1;
			}
			
			if($('#password').val() != $('#confirmpassword').val()){
				$('#errormsgs').append('<p>Passwords do not match.</p>');
				error = 1;
				
			}
			
			if(error == 1){
				e.preventDefault();	
				$('#myModal').modal('show');
				
			}
		}
		
		// show modal on errors
		$('#userform').on('submit', function(event) {
			validate(event);
		});
		
  </script>
    
  </body>
</html>
