<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['sid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="The Florist | Add flower type"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">Add flower type available in your shop</div>
        <div class="card-body">
        <form action="file/infoAdd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">Term & conditions. </a><br>
          <div class="collapse" id="collapseExample">
           The flower type to be added which is having dynamic availibilty frequency</div>
          <input type="checkbox" name="condition" value="agree" required> Agree<br><br>
          <select class="form-control" name="bg" required="">
                <option disabled selected>Flower type</option>
                <option>Sunflowers</option>
                <option>Roses</option>
                <option>Tulips</option>
                <option>Lavenders</option>
                <option>Orchids</option>
                <option>Chrysanthemums</option>
                <option>Lilies</option>
                <option>Lotuses</option>
          </select><br>
          <input type="submit" name="add" value="Add" class="btn btn-primary btn-block"><br>
          <a href="index.php" class="float-right" title="click here">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['sid'])){
    $sid=$_SESSION['sid'];
    $sql = "select * from flowertype where sid='$sid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">The Florist</th>
            <tr>
              <th>#</th>

              <th>Flower Type</th>
              <th>Action</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>