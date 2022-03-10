<?php

	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$ucollege = $_POST['ucollege'];
		$ucontact = $_POST['ucontact'];
		$uemail = $_POST['uemail'];
		$upassword = $_POST['upassword'];
		$uyear = $_POST['uyear'];
		$uother = $_POST['other'];

		$info = $_FILES['uimage']['name'];
		$imgDest = "../assets/images/userimages/".$info;
		move_uploaded_file($_FILES['uimage']['tmp_name'], $imgDest);


		if($ucollege == -999){
			$q = "INSERT INTO colleges(cname) VALUES ('$uother')";
			$s = mysqli_query($con,$q);
			$q = "SELECT cid FROM colleges WHERE cname = '$uother'";
			$s = mysqli_query($con,$q);
			$r = mysqli_fetch_array($s);
			$ucollege = $r[0];
		}

		$uimage = '../assets/images/user-images/'.$info;
		
		$registerQueryLogin = "INSERT INTO userlogin (uemail,upassword) VALUES ('$uemail','$upassword')";

		$registerQueryDetails = "INSERT INTO userdetails(uname,ucollege,ucontact,uyear) VALUES ('$uname','$ucollege','$ucontact','$uyear','$uimage')";

		$success = mysqli_query($con,$registerQueryLogin);

		$success1 = mysqli_query($con,$registerQueryDetails);

		if($success && $success1){
			echo "Registration Successful!";
		}
		else{
			echo "Error in Registration";
		}
	}

?>