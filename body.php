<div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/download.jpg" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
            <div class="row">
            <?php if (isset($_SESSION['sid'])) { ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Sunflowers</div>
                    <div class="card-body">
                    <img src="image/sunflowers.jpg" class="card-img-top">
                    <!--<a href="flowertype.php"><img src="image/sunflowers.jpg"></a>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Roses</div>
                    <div class="card-body">
                        <img src="image/roses.jpg"  class="card-img-top" height="170 px">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Tulips</div>
                    <div class="card-body">
                        <img src="image/tulips.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lavenders</div>
                    <div class="card-body">
                        <img src="image/lavenders.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Orchids</div>
                    <div class="card-body">
                        <img src="image/orchids.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Chrysanthemums</div>
                    <div class="card-body"> 
                        <img src="image/chrysanthemums.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lilies</div>
                    <div class="card-body">
                        <img src="image/lilies.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lotuses</div>
                    <div class="card-body">
                        <img src="image/lotuses.jpg" class="card-img-top">
                    </div>
                </div>
            </div>
            <?php }  else { ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Sunflowers</div>
                    <div class="card-body">
                        <a href="abs.php"><img src="image/sunflowers.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Roses</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/roses.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Tulips</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/tulips.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lavenders</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/lavenders.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Orchids</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/orchids.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Chrysanthemums</div>
                    <div class="card-body"> 
                    <a href="abs.php"><img src="image/chrysanthemums.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lilies</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/lilies.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Lotuses</div>
                    <div class="card-body">
                    <a href="abs.php"><img src="image/lotuses.jpg" class="card-img-top"></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card displayCard">
                    <div class="card-header text-center">Admin contact</div>
                    <div class="card-body">
                        <i class="fa fa-envelope"> </i> <a > theflorist@gmail.com</a><br><br>
                        <i class="fa fa-mobile"> </i> <a > +91 9876543210</a><br><br>
                    </div>
                </div>
            </div>
            </div>
            </div>

        </div>