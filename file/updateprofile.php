<?php 
session_start();
require 'connection.php';
if (isset($_SESSION['cid'])) {
if(isset($_POST['update'])){
    $id=$_SESSION['cid'];
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cphone = $_POST['cphone'];
    $bg = $_POST['bg'];
    $ccity = $_POST['ccity'];
    $cpassword = $_POST['cpassword'];
    $update = "UPDATE receivers SET cname='$cname', cemail='$cemail', cpassword='$cpassword', cphone='$cphone', rbg='$bg',ccity='$ccity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg = "Your profile is updated successfully.";
        header( "location:../cprofile.php?msg=".$msg);
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../cprofile.php?error=".$error );
    }
    $conn->close();
}


}elseif (isset($_SESSION['sid'])) {
    if(isset($_POST['update'])){
        $id=$_SESSION['sid'];
    $sname = $_POST['sname'];
    $semail = $_POST['semail'];
    $sphone = $_POST['sphone'];
    $scity = $_POST['scity'];
    $spassword = $_POST['spassword'];
    $update = "UPDATE shop SET sname='$sname', semail='$semail', spassword='$spassword', sphone='$sphone', scity='$scity' WHERE id='$id'";
    if ($conn->query($update) === TRUE) {
        $msg= "Your profile is updated successfully.";
        header( "location:../sprofile.php?msg=".$msg);
    } else {
        $error= "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../sprofile.php?error=".$error);
    }
    $conn->close();
}
}else{
    header("location:../login.php");
}
?>