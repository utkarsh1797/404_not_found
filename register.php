<?php

include 'connection.php';
// Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid = $_POST['emailid'];
$phone = $_POST['phone'];
$houseno = $_POST['houseno'];
$floor = $_POST['floor'];
$street = $_POST['street'];
$landmark = $_POST['landmark'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];

	$query="INSERT INTO register (firstname,lastname,email,phone,,houseno,floor,street,landmark,state,pincode,address) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$houseno."','".$floor."','".$street."','".$landmark."','".$state."','".$pincode."','".$address."')";
	$result=mysqli_query($conn,$query);
	if ($result) {
			echo "<script>window.alert('Thanks for contacting');window.location.href='index.php';</script>";	
	}
	else{
		echo "<script>window.alert('Unable to record your details. Please retry');window.location.href='index.php';</script>";	
	}

?>