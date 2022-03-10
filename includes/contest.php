<?php

  include('../config.php');

  if(!isset($_SESSION['userLoggedIn']))
    header('Location: ../index.php');
  $currentUserId = $_SESSION['currentUserId'];

  $userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId'";
  $success = mysqli_query($con,$userDetailsQuery);
  $userDetailsRow = mysqli_fetch_array($success);
  $uyear = $userDetailsRow[4];

  $ProblemQuery = "SELECT * FROM problems WHERE pyear = '$uyear'";
  $success = mysqli_query($con,$ProblemQuery);
  $p_count = mysqli_num_rows($success);


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body style="background: #4CA1AF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #C4E0E5, #4CA1AF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
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
    </ul>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger">logout</button></a>
  </div>
</nav>
<div class="container">
<?php
 echo "<h2>Hi!! ".$userDetailsRow[1]." </h2>";
?>


<br><br>
  
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CODE</th>
      <th scope="col">STATEMENT</th>
      <th scope="col">TOTAL SUBMISSION</th>
    </tr>
  </thead>
  <tbody>

      <?php

      while($p_count!=0){
        $row = mysqli_fetch_array($success);
        $pcode = $row[1];
        echo "

        <tr>
        <th scope='row'><a href='problem.php?pcode=".$pcode." 'target='_blank'>".$row[1]."</a></th>
        <td>".$row[3]."</td>
        <td>".$row[5]."</td>
        </tr>
        ";
        $p_count--;
      }

      ?>

  </tbody>
</table>


</div>
</body>
</html>