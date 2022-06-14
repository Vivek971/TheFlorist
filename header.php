<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="image/dwl.jpeg" width="50" height="50" class="rounded-circle" allign="right">The Florist</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['sid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="flowertype.php">Add Flower info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="orders.php"> Flower Requests</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="abs.php">Available Flower Types</a>
            </li>
            <li class="nav-item">
                <a href="sprofile.php?id=<?php echo $_SESSION['sid']; ?>" class="nav-link btn font-weight-bold"><img src="image/flw.jpg" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['sname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['cid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest.php">Sent flower Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available flowers</a>
            </li>
            <li class="nav-item">
                <a href="cprofile.php?id=<?php echo $_SESSION['cid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['cname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available flowers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php">Login</a>
            </li>
        </ul>

        <?php } ?>
       </div>
    </div>
</nav>