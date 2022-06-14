<?php 
session_start();
if (isset($_SESSION['sid'])) {
  header("location:orders.php");
}elseif (isset($_SESSION['cid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="The Florist | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#Shops">Shops</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Customers">Customers</a>
     </li>
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active" id="Shops">
        <form action="file/shopLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Shop Email</label>
          <input type="email" name="semail" placeholder="Shop Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Shop Password</label>
          <input type="password" name="spassword" placeholder="Shop Password" class="form-control mb-4">
          <input type="submit" name="slogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


      <div class="tab-pane container fade" id="Customers">
         <form action="file/customerLogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer Email</label>
          <input type="email" name="cemail" placeholder="Customer Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer Password</label>
          <input type="password" name="cpassword" placeholder="Customer Password" class="form-control mb-4">
          <input type="submit" name="clogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
      </div>

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>