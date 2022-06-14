<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update orders SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../orders.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../orders.php?error=".$error );
    }
    mysqli_close($conn);
?>