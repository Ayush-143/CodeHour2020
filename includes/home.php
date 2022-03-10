<?php

  include('../config.php');

  if(!isset($_SESSION['userLoggedIn']))
    header('Location: ../index.php');
  $currentUserId = $_SESSION['currentUserId'];

  $userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId'";
  $success = mysqli_query($con,$userDetailsQuery);
  $userDetailsRow = mysqli_fetch_array($success);


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	</head>
	<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php"><img src="../assets/images/code.png" width="250px" height="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="width: 50px; height: 50px;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul><br><br>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger" style="padding: 2px;">logout</button></a>
  </div>
</nav>
  <div style="background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('../assets/images/home.jpg'); color: white; background-size: cover; background-position: center;"> 
<div class="container" style="font-size: 20px;">
<img src="<?php echo $userDetailsRow[5]; ?>"> 
<?php
 echo "<h2>Hi!! ".$userDetailsRow[1]." </h2>";
?>
<br><br>
<h4><u>Are you ready to being the ultimate champion ??</u></h4>
<p>ok let go to experience the ultimate competetion of the wonderful coding test.ok let go to experience the ultimate competetion of the wonderful coding test.ok let go to experience the ultimate competetion of the wonderful coding test.ok let go to experience the ultimate competetion of the wonderful coding test.</p><br>
</div></div><br>
  <div class="container" style="font-size: 20px;">
    <h3><u>Rules of Contest</u> :</h3><br>
    <div class="row">
      <div class="col-md-3 aboutus">
        <img src="../assets/images/languages.png" width="300px" height="175px">
        <p style="text-align: center;">You are supposed to code in C/Java/ Python and many more.</p>
      </div>
      <div class="col-md-3 aboutus">
        <img src="../assets/images/datetime.png" width="300px" height="175px">
        <p style="text-align: center;">The contest will start exactly at 12:00 pm on 22nd January, 2020.</p>
      </div>
      <div class="col-md-3 aboutus">
        <img src="../assets/images/duration.png" width="300px" height="175px">
        <p style="text-align: center;">The contest time is 60 minutes. <b style="color: red;">You have to save your content before 60 minutes, otherwise your file will not be saved.</b></p>
      </div>
      <div class="col-md-3 aboutus">
        <img src="../assets/images/began.png" width="300px" height="175px">
        <p style="text-align: center;">The below button is disabled and will be enabled exactly when the contest starts. Refresh the page after 12:00 pm to begin.</p>
      </div>
    </div>
  </div><br><br>

<form action="contest.php" method="post" style="text-align: center; margin-bottom: 30px;">
<button style="width: 90%; background-color: #ebb734; color: black;">Start Contest</button>
</form>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>