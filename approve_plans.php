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
			 Reject / Approve Travel Plans (Only a Supervisor can see this page) 
		   </div>
		   <div class="panel-footer">
			   
			   <table id="myTable" class="table table-striped" width="100%">
				<thead>
					<tr>
						<th>Travel ID</th>
						<th>Name</th>
						<th>Meeting</th>
						<th>Venue</th>
						<th>Date From</th>
						<th>Date To</th>
						<th>Total Cost</th>
						<th>Total Budget</th>
						<th>Approve</th>
						<th>Reject</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Adams Kariuki</td>
						<td>UNEA Meeting</td>
						<td>Nairobi</td>
						<td>02-02-2017</td>
						<td>04-02-2017</td>
						<td>$120</td>
						<td>$1200</td>
						<td><button type="submit" class="btn btn-primary approvebtn">Approve</button></td>
						<td><button type="submit" class="btn btn-primary declinebtn">Reject</button></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Carl Lopez</td>
						<td>UNEP Meeting</td>
						<td>Geneva</td>
						<td>05-05-2017</td>
						<td>15-05-2017</td>
						<td>$100</td>
						<td>$1000</td>
						<td><button type="submit" class="btn btn-primary approvebtn">Approve</button></td>
						<td><button type="submit" class="btn btn-primary declinebtn">Reject</button></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Steph Lee</td>
						<td>UNOG Meeting</td>
						<td>brussels</td>
						<td>06-05-2017</td>
						<td>16-05-2017</td>
						<td>$180</td>
						<td>$1080</td>
						<td><button type="submit" class="btn btn-primary approvebtn">Approve</button></td>
						<td><button type="submit" class="btn btn-primary declinebtn">Reject</button></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Dennis James</td>
						<td>KIE Meeting</td>
						<td>Cape Town</td>
						<td>03-08-2017</td>
						<td>13-08-2017</td>
						<td>$1200</td>
						<td>$10200</td>
						<td><button type="submit" class="btn btn-primary approvebtn">Approve</button></td>
						<td><button type="submit" class="btn btn-primary declinebtn">Reject</button></td>
					</tr>
					
				</tbody>
			   </table>
			   
		   </div>
		  </div>
	    </div>
	    </div>
    </div>
    
    <!-- Modal -->
  <div class="modal fade" tabindex="-1" id="acceptModal" role="dialog">
    <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Travel System</h4>
        </div>
        <div class="modal-body">
		  <form action = "" method = "post">
			<div class="form-group">
			<label class="control-label" for="approved">Comments:</label><br />
			<textarea class="form-control" id = "approved" name = "approved"></textarea>
			</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Approve</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" tabindex="-1" id="declineModal" role="dialog">
    <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Travel System</h4>
        </div>
        <div class="modal-body">
		  <form action = "" method = "post">
			<div class="form-group">
			<label class="control-label" for="declined">Comments:</label><br />
			<textarea class="form-control" id = "declined" name = "declined"></textarea>
			</div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Decline</button>
        </div>
      </div>
      
    </div>
  </div>
  <script type = "text/javascript">
	  
	    //function to redirect page		
		$(document).on('click', '.approvebtn', function(){
			$('#acceptModal').modal('show');
		});
		
		//function to redirect page		
		$(document).on('click', '.declinebtn', function(){
			$('#declineModal').modal('show');
		});
	  
	    $(document).ready(function() {
			$('#myTable').DataTable();
			$('#nav li').removeClass('active');
			$('#menu6').addClass('active');
		});
  </script>
    
  </body>
</html>
