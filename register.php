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
<?php $title="The Florist | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#Shops">Shops</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Customers">Customer</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active" id="Shops">

        <form action="file/shopReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="sname" placeholder="Shop Name" class="form-control mb-3" required>
          <input type="text" name="scity" placeholder="Shop City" class="form-control mb-3" required>
          <input type="tel" name="sphone" placeholder="Shop Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="semail" placeholder="Shop Email" class="form-control mb-3" required>
          <input type="password" name="spassword" placeholder="Shop Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="sregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>


       <div class="tab-pane container fade" id="Customers">

         <form action="file/customerReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="cname" placeholder="Customer Name" class="form-control mb-3" required>
          <select name="cbg" class="form-control mb-3" required>
                <option disabled="" selected="">Flower Type</option>
                <option value="Sunflowers">Sunflowers</option>
                <option value="Roses">Roses</option>
                <option value="Tulips">Tulips</option>
                <option value="Lavenders">Lavenders</option>
                <option value="Orchids">Orchids</option>
                <option value="Chrysanthemums">Chrysanthemums</option>
                <option value="Lilies">Lilies</option>
                <option value="Lotuses">Lotuses</option>
          </select>
          <input type="text" name="ccity" placeholder="Customer City" class="form-control mb-3" required>
          <input type="tel" name="cphone" placeholder="Customer Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="cemail" placeholder="Customer Email" class="form-control mb-3" required>
          <input type="password" name="cpassword" placeholder="Customer Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="cregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>