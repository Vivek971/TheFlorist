<?php
session_start();
    require 'connection.php';
    if(isset($_POST['slogin'])){
    $semail=$_POST['semail'];
    $spassword=$_POST['spassword'];
    $sql="select * from shop where semail='$semail' and spassword='$spassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['semail']=$row['semail'];
        $_SESSION['sname']=$row['sname'];
        $_SESSION['sid']=$row['id'];
        $msg= $_SESSION['sname'].' have logged in.';
        header( "location:../orders.php?msg=".$msg);
    } 
  }
?>