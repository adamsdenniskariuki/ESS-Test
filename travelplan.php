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
			   <form action = "travelplan.html" method = "get" id = "travelform">
			    <div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" id="name" name = "name" placeholder="Name">
			    </div>
			    <div class="form-group">
					<label for="grade">Grade:</label>
					<input type="text" class="form-control" id="grade" name = "grade" placeholder="Grade">
			    </div>
			    <div class="form-group">
					<label for="venue">Venue:</label>
					<input type="text" class="form-control" id="venue" name = "venue" placeholder="Venue">
			    </div>
			    <div class="form-group">
					<label for="from">From:</label>
					<input type="text" class="form-control datereq" id="from" name = "from" placeholder="Date From">
			    </div>
			    <div class="form-group">
					<label for="to">To:</label>
					<input type="text" class="form-control datereq" id="to" name = "to" placeholder="Date To">
			    </div>
			    <div class="form-group">
					<label for="daysaway">Days Away (Mission + Travel Days + Leave):</label>
					<input type="text" class="form-control" id="daysaway" name = "daysaway" placeholder="Days Away">
			    </div>
			    <div class="form-group">
					<label for="justification">Justification:</label>
					<input type="text" class="form-control" id="justification" name = "justification" placeholder="Justification">
			    </div>
			    <div class="form-group">
					<label for="project">Project:</label>
					<select class="form-control" id="project" name = "project">
					<option value = "1">UNEP Project 1202</option>
					<option value = "2">UNEP Project 1203</option>
					<option value = "3">UNEP Project 1204</option>
					<option value = "4">UNEP Project 1205</option>
					<option value = "5">UNEP Project 1206</option>
					<option value = "6">UNEP Project 1207</option>
					</select>
			    </div>
			    <div class="form-group">
					<label for="budgetline">Budget Line:</label>
					<select class="form-control" id="project" name = "project">
					<option value = "1">UNEP Budget Line 301</option>
					<option value = "2">UNEP Budget Line 302</option>
					<option value = "3">UNEP Budget Line 303</option>
					<option value = "4">UNEP Budget Line 304</option>
					<option value = "5">UNEP Budget Line 305</option>
					<option value = "6">UNEP Budget Line 306</option>
					</select>
			    </div>
			    <div class="form-group">
					<label for="est_cost">Estimated travel cost USD:</label>
					<input type="text" class="form-control allcosts" id="est_cost" name = "est_cost" placeholder="Estimated travel cost USD">
			    </div>
			    <div class="form-group">
				  <div class="panel panel-primary">  
				   <div class="panel-body">
					<label for="add_name">Additional Name:</label>
					<input type="text" class="form-control" id="add_name" name = "add_name[]" placeholder="Additional Name">
					<label for="add_cost">Additional Cost:</label>
					<input type="text" class="form-control allcosts" id="add_cost" name = "add_cost[]" placeholder="Additional Cost">
					<div id = "additional_fields"></div>
					<a href = "javascript:add_fields()"><div class="glyphicon glyphicon-plus"></div>Add Additional Costs</a>
				   </div>
			    </div>
			    <div class="form-group">
					<label for="budget_percent">Percentage of travel budget spent:</label>
					<input type="text" class="form-control" id="budget_percent" name = "budget_percent" disabled placeholder="Percentage of travel budget spent">
			    </div>
			    <div class="form-group">
					<label for="department">Department:</label>
					<select class="form-control" id="department" name = "department">
					<option value = "1">Communication Division</option>
					<option value = "2">Economy Division</option>
					<option value = "3">Ecosystems Division</option>
					<option value = "4">Law Division</option>
					<option value = "5">Corporate Services Division></option>
					<option value = "5">Policy and Programme Division></option>
					</select>

			    </div>
			    <div class="form-group">
					<label for="quarter">Applicable Quarter:</label>
					<select class="form-control" id="quarter" name = "quarter">
					<option value = "1">First</option>
					<option value = "2">Second</option>
					<option value = "3">Third</option>
					<option value = "4">Fourth</option>
					</select>
			    </div>
			    <div class="form-group">
					<label for="total_budget">Total Allocated Travel Budget for the year:</label>
					<input type="text" class="form-control" id="total_budget" name = "total_budget" placeholder="Total Allocated Travel Budget for the year">
			    </div>
			    <div class="form-group">
				  <div class="panel panel-primary">  
				   <div class="panel-body">
					<label for="travel_balance">Travel Budget Balance:</label>
					<input type="text" class="form-control" id="travel_balance" name = "travel_balance" disabled placeholder="Travel Budget Balance">	
					<label for="travel_balance_date">Date:</label>
					<input type="text" class="form-control datereq" id="travel_balance_date" name = "travel_balance_date" placeholder="Date">
					</div>
				  </div>
			    </div>
			    <div class="form-group">
					<label for="reg_office">Regional Office of the mission destination:</label>
					<select class="form-control" id="reg_office" name = "reg_office">
					<option value = "1">Africa Office</option>
					<option value = "2">Asia and the Pacific Office</option>
					<option value = "3">Europe Office</option>
					<option value = "4">Latin America and the Caribbean Office</option>
					<option value = "5">North America Office</option>
					<option value = "6">West Asia Office</option>
					</select>
			    </div>
			    <div class="form-group">
					<label for="comm_support">Communications support required:</label>
					<input type="text" class="form-control" id="comm_support" name = "comm_support" placeholder="Communications support required">
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
	    
	    //function to add new cost fields to the form
		function add_fields(){
			var add_html = '<label for="add_name">Additional Name:</label><input type="text" class="form-control" id="add_name" name = "add_name[]" placeholder="Additional Name"><label for="add_cost">Additional Cost:</label><input type="text" class="form-control allcosts" id="add_cost" name = "add_cost[]" onkeyup = "travel_balance()" placeholder="Additional Cost">';
			$('#additional_fields').append(add_html);
		}
		
		//function to ensure all values are entered correctly
		function validate(e){
			
			var inputs = $( ":input" );
			var error = 0;
			
			$('input').each(function() { 
				if($.trim($(this).val()) == '') 
					error = 1; 
			});
			
			if (parseFloat($("#travel_balance").val()) <= 0 || parseFloat($("#budget_percent").val()) <= 0){
				error = 1;
			}
			
			if(error == 1){
				e.preventDefault();	
				$('#myModal').modal('show');
				
			}
		}
		
		//calcuate travel balance
		function travel_balance(){
			var costinputs = $(".allcosts");
			var totalbudget = $("#total_budget").val();
			var totalcost = 0;
			
			for(var i = 0; i < costinputs.length; i++){
				if($.isNumeric($(costinputs[i]).val())){
					totalcost = totalcost + parseFloat($(costinputs[i]).val());
				}
			}
			
			if($.isNumeric(totalbudget)){
					$("#travel_balance").val(totalbudget - totalcost);
					$("#budget_percent").val((totalcost / totalbudget) * 100);	
			}else{
				$("#travel_balance").val('0');
				$("#budget_percent").val('0');
			}	
			
		}
		
		//get value of costs
		$(document).on('keyup', '.allcosts', function() {
			travel_balance();
		});
		
		//get value of travel budget
		$(document).on('keyup', '#total_budget', function() {
			travel_balance();
		});
		
		// show modal on errors
		$('#travelform').on('submit', function(event) {
			validate(event);
		});
				
		// display datepickers
		$( ".datereq" ).datepicker();
		
		$(document).ready(function(){
			$('#nav li').removeClass('active');
			$('#menu2').addClass('active');
		});	
  </script>
    
  </body>
</html>
