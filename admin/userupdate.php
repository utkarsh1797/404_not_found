<?php

include 'connection.php';
// Fetching variables of the form which travels in URL
$answer=$_POST['ans'];	
$id=$_POST['id'];
if(mysqli_query($conn,"UPDATE contact SET answer='$answer' WHERE id=$id"))
	{
		echo "<script>window.alert('Thanks for contacting');window.location.href='user-queries.php';</script>";
	}

?>