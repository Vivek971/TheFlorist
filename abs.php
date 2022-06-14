<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select flowertype.*, shop.* from flowertype, shop where flowertype.sid=shop.id && bg LIKE '%$searchKey%'";
}else{
    $sql = "select flowertype.*, shop.* from flowertype, shop where flowertype.sid=shop.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="The Florist | Available Flower breeds"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
        
        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:-20px; ">
            <label class="font-weight-bolder">Select Flower breed</label>
               <select name="search" class="form-control">
               <option><?php echo @$_GET['search']; ?></option>
               <option value="Sunflowers">Sunflowers</option>
                <option value="Roses">Roses</option>
                <option value="Tulips">Tulips</option>
                <option value="Lavender">Lavender</option>
                <option value="Orchids">Orchids</option>
                <option value="Chrysanthemums">Chrysanthemums</option>
                <option value="Lilies">Lilies</option>
                <option value="Lotuses">Lotuses</option>
               </select><br>
               <a href="abs.php" class="btn btn-info mr-4"> Reset</a>
               <input type="submit" name="submit" class="btn btn-info" value="search">
           </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-5">
            <tr><th colspan="7" class="title">Available Flower breed</th></tr>
            <tr>
                <th>#</th>
                <th>Shop Name</th>
                <th>Shop City</th>
                <th>Shop Email</th>
                <th>Shop Phone</th>
                <th>Flower type</th>
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
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo ($row['scity']); ?></td>
                <td><?php echo ($row['semail']); ?></td>
                <td><?php echo ($row['sphone']); ?></td>
                <td><?php echo ($row['bg']); ?></td>

                <?php $bid= $row['bid'];?>
                <?php $sid= $row['sid'];?>
                <?php $bg= $row['bg'];?>
                <form action="file/orders.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                    <input type="hidden" name="sid" value="<?php echo $sid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['sid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-info shop">Request type</a></td>
                <?php } else {(isset($_SESSION['cid']))  ?>
                <td><input type="submit" name="request" class="btn btn-info" value="Request "></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>
        </table>
    </div>
    <?php require 'footer.php' ?>
</body>

<script type="text/javascript">
    $('.shop').on('click', function(){
        alert("Shop user cant order flowers.");
    });
</script>