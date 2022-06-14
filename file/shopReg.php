<?php
require 'connection.php';
if(isset($_POST['sregister'])){
	$sname=$_POST['sname'];
	$semail=$_POST['semail'];
	$spassword=$_POST['spassword'];
	$sphone=$_POST['sphone'];
	$scity=$_POST['scity'];
	$check_email = mysqli_query($conn, "SELECT semail FROM shop where semail = '$semail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO shop (sname, semail, spassword, sphone, scity)
	VALUES ('$sname','$semail', '$spassword', '$sphone', '$scity')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered. Please, login to continue.';
		header( "location:../login.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>