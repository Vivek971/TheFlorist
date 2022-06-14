<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['cid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['request'])){
		$sid = $_POST['sid'];
		$cid = $_SESSION['cid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM orders where sid='$sid' and cid='$cid'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already requested for the flower from this shop.';
			header( "location:../abs.php?error=".$error );
}else{
		$sql="INSERT INTO orders (bg, sid, cid) VALUES ('$bg', '$sid', '$cid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'You have orderedflower type '.$bg.'. Our team will contact you soon.';
			header( "location:../sentrequest.php?msg=".$msg);
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../abs.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>