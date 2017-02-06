<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Travel System</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <body>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <?php include "nav.php" ?>
    
    <div class="container-fluid">
		<div class = "row" style = "margin-top: 70px">
		<div class="col-md-2" >
		  <?php include "menu.php" ?>
	    </div>
	    
	    <div class="col-md-10">
		  <div class="panel panel-primary">
		   <div class="panel-body">
			 Home
		   </div>
		   <div class="panel-footer">
			   Welcome to the travel system.
		   </div>
		  </div>
	    </div>
	    </div>
    </div>
    
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">&copy; 2017 Adams Kariuki</a>
        </div>
      </div>
    </nav>
    
    <script type = "text/javascript">
		$(document).ready(function(){
			$('#nav li').removeClass('active');
			$('#menu1').addClass('active');
		});
	</script>
    
  </body>
</html>
