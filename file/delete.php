<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from flowertype where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one flower type.";
	header("location:../flowertype.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../orders.php?error=".$error );
    }
    mysqli_close($conn);
?>