<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Spartan Service</title>
  <link rel="icon" type="image/x-icon" href="Media/favicon.ico" alt="A picture of the De Smet Crest" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/BS.css">
  <link rel="stylesheet" href="css/SpartanCSS.css">
</head>

<body>
<div class="container-fluid">


	<div class="well well-sm">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2">
					<img src="Media/DSJH80.png" alt="De Smet Logo" align=left class="img-responsive" height=80px>
				</div>
				<div class="col-lg-8">
					<img src="Media/SpartanService.png" alt="Spartan Service Logo"  align=center class="img-responsive" height=80px> 
				</div>
				<div class="col-lg-2">	
					<img src="Media/AMDG2s.png" alt="De Smet Logo" align=right class="img-responsive" height=80px> 
				</div>
			</div>			
		</div>
	</div>


	<div class="row">
		<div class="col-sm-2 col-md-2 col-lg-2"> 
			<ul class="nav nav-pills nav-stacked">
				<li><a href="index.php">Home</a></li>
				<li><a href="Service.php">Service Projects</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
			</ul> 
			<br>
			<ul class="nav nav-pills nav-stacked">
				<li> 
					<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
				</li>
			</ul> 
		</div>

		<div class="col-sm-10 col-md-10 col-lg-10"> 
			<div class="container-fluid">
				
				<p>
<strong>
Please complete the following quest
</p>

<div class="form-group">
<form action="#">
  <fieldset>
    <legend><span style="font-family:frizquabol; color:#741525;font-size:26px;">Event Details:</span></legend>
    Name of Event: <input type="text" name="nameEvent" value="Name" class="form-control"><br>
    Description of Event: <input type="text" name="eventDescription" value="Description" class="form-control"><br>
    Location:
	<input type="text" name="street" value="Street Address" class="form-control"><br>
	<input type="text" name="city" value="City" class="form-control"><br> 
	<input type="text" name="state" value="State" class="form-control"><br>
	<input type="text" name="zip" value="Zip Code" class="form-control"><br>
    Starting Time of Event: <input type="text" name="eventStart" value="Start Time" class="form-control"><br>
    Ending Time of Event: <input type="text" name="eventEnd" value="End Time" class="form-control"><br>
	Number of Volunteers Needed: <input type="number" name="quantity" min="1" max="999" class="form-control" value="Enter Value"><br>
    
    <input type="submit" value="Submit">
  </fieldset>
</form>
</div>
</strong>
				
			</div>
		</div>
	</div> 
	
<br>
<footer class="container-fluid text-center">
<div class="row">
	<div class="col-sm-2">
		<img src="Media/CRESTs.png" alt="De Smet Crest" class="img-responsive" height=80px align=center>
	</div>
	<div class="col-sm-8">
		<b> <span style="font-size: 20px">De Smet Jesuit High School</span> </b> <hr width=90%>
233 North New Ballas Rd. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; St. Louis, MO 63141 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us: <a href="mailto:SpartanService@desmet.org"> SpartanService@desmet.org 
	</div>
	<div class="col-sm-2">
		<img src="Media/SHs.png" alt="De Smet Logo" class="img-responsive" height=80px align=center>
	</div>	
</div>
</footer>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>

