<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['cid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['cid'])){
		$id=$_SESSION['cid'];
		$sql = "SELECT * FROM Customers WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="The florist | Customer Profile"; ?>
<?php require 'head.php';?>
<body>
	<?php require 'header.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer Name</label>
						<input type="text" name="cname" value="<?php echo $row['cname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold"Customer>Customer Email</label>
						<input type="email" name="cemail" value="<?php echo $row['cemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer Password</label>
						<input type="text" name="cpassword" value="<?php echo $row['cpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer Phone Number</label>
						<input type="text" name="cphone" value="<?php echo $row['cphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer City</label>
						<input type="text" name="ccity" value="<?php echo $row['ccity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Customer flower type</label>
						<select class="form-control mb-3" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>Sunflowers</option>
                             <option>Roses</option>
                             <option>Tulips</option>
                             <option>Lavenders</option>
                             <option>Orchids</option>
                             <option>Chrysanthemums</option>
                             <option>Lilies</option>
                             <option>Lotuses</option>
                        </select>
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="index.php" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>