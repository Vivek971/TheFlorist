<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['sid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$sid=$_SESSION['sid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT sid FROM flowertype where sid='$sid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this flower type.';
			header( "location:../flowertype.php?error=".$error );
}else{
		$sql = "INSERT INTO flowertype (bg, sid) VALUES ('$bg', '$sid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../flowertype.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../flowertype.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>