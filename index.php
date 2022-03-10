<?php
  include('config.php');
  include('includes/handler/login-handler.php');
  if(isset($_SESSION['userLoggedIn']))
    header('Location: includes/home.php');
	
	$errorArray = array();
	$errorArray['invalidLogin']="";

?>

<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<title>CodeHour 2020</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="assets/images/code.png" width="250px" height="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="includes/about.php">About Us</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="includes/aboutus.php">Contact</a>
      </li>
    </ul><br><br>
    <a href="includes/register.php" class="me">
    <button type="button" style=" width: 75px; margin-right: 75px; padding: 5px; border: 1px solid #005fa8; border-radius: 5px; background-color: #fff; color: #005fa8;">Register</button></a>
  </div>
</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-8 aboutus">

				<h1>What is CodeHour2020 ? </h1>
				<p>CodeHour is a platform to help programmers make it big in the world of algorithms, computer programming, and programming contests. At CodeHour we work hard to revive the geek in you by hosting a programming contest at the start of the month and two smaller programming challenges at the middle and end of the month. We also aim to have training sessions and discussions related to algorithms, binary search, technicalities like array size and the likes. Apart from providing a platform for programming competitions, CodeHour also has various algorithm tutorials and forum discussions to help those who are new to the world of computer programming.</p>

<form method="post">
  <div class="row">
      <div class="col-md-6">
  <div class="form-group" style="">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="email">
    <a href="includes/register.php" style="color: #fff;">Create an account ?</a>
  </div></div>
      <div class="col-md-4 aboutus">
  <div class="form-group" style="">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div></div>
      <div class="col-md-2 aboutus">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button></div></div>
</form><br>
<p class ="color"><i>
	<?php echo $errorArray['invalidLogin']; ?>
</i></p>
			</div>
      <div class="col-md-4">
        <div style="border: 2px solid white; border-radius: 5%; height: 270px; width: 250px; margin: 15%; margin-top: 75px; padding-top: 75px; padding-bottom: 75px; text-align: center;">
        <p>College that Participate</p>
        <a href="includes/colleges.php" style="border: 2px solid white; border-radius: 5%; padding: 10px; margin-top: 75px; color: #fff;" class="you">Colleges</a>
      </div>
      </div>		
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	</body>
</html>