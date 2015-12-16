<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="Waether Tracker" content="Weather Scraper">
    <meta name="author" content="Jaandlu	">
    

    <title>3 Day Weather Forecast</title>

    <!-- Bootstrap core CSS -->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


<?php

?>
<style>

html, body {

	height:100%;
}

.container {
	background-image:url("http://jaandlu.com/php/images/weather.jpg");
	width:100%;
	height:100%;
	background-size:cover;
	background-position:center;
	padding-top:100px;
}

.white {
	color:#F3F3F3;
}

p {
	padding-top:15px;
	padding-bottom:5px;
}

button {
	margin-top:20px;
	margin-bottom:20px;
}

.alert 	{
	margin-top:20px;
	display:none;
}


</style>

</head>
<body>

  

 <div class="container">

      <div class="row">
        
  		<div class="col-md-6 col-md-offset-3">
  		
  			<h1 class="text-center white">3 Day Weather Forecast</h1>
  			<p class="lead text-center white">Enter your city to find out your local weather.<p>
  		
 			<form>
 		
 				<div class="form-group text-center">
 					
 					<input type="text" class="form-control" name="city" id="city" placeholder="Eg: Los Angeles, New York, London, Iasi..."></input>
 					
 				</div>
 				
 				<div class="form-group text-center">
 					
 					<button id="findWeather" type="submit" class="btn btn-success btn-lg">Check your Weather</button>
 			
 				</div>
 		
 			</form>
 		
 			<div id="success" class="alert alert-success"> Your weather </div>
 			<div id="fail"class="alert alert-danger"> Could not find that city. Please try again. </div>
			<div id="noCity"class="alert alert-danger"> Please enter a city. </div>
			
			
 		</div> 	
 		
		
    </div>

     

 </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="//getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  
  	<script>
	
	$("#findWeather").click(function(event) {
		
		event.preventDefault();
		
		$(".alert").hide();
		
		if ($("#city").val()!="") {
		
		$.get("scraper.php?city="+$("#city").val(), function( data ) {
		
		
		
		if (data=="")	{
			
			$("#fail").fadeIn();
		}	else{
		
			
			$("#success").html(data).fadeIn();
		}
		
		});
	
	} else {
		
		$("#noCity").fadeIn();
		
		}
		
	});

	</script>
	 
  </body>
</html>