<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['sid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['sid'])){
		$id=$_SESSION['sid'];
		$sql = "SELECT * FROM shop WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="The Florist | customer profile"; ?>
<?php require 'head.php';?>
<body>
	<?php require 'header.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/flw.jgp" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Shop Name</label>
						<input type="text" name="sname" value="<?php echo $row['sname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Shop Email</label>
						<input type="email" name="semail" value="<?php echo $row['semail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Shop Password</label>
						<input type="text" name="spassword" value="<?php echo $row['spassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Shop Phone Number</label>
						<input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">Shop City</label>
						<input type="text" name="scity" value="<?php echo $row['scity']; ?>" class="form-control mb-3">
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