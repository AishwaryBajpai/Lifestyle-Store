<?php  include 'common.php'; 
   error_reporting(0);
    if(isset($_SESSION['signup']))
    {   $mess=$_SESSION['signup'];
        echo "<script>alert('$mess')</script>";
		unset($_SESSION['signup']);
    }
    if(isset($_SESSION['login_success'])){
		$mess=$_SESSION['login_success'];
		echo "<script>alert('$mess')</script>";
		unset($_SESSION['login_success']);
	}
	if(isset($_SESSION['added']))
    {   $mess=$_SESSION['added'];
        echo "<script>alert('$mess')</script>";
		unset($_SESSION['added']);
    }
?>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
	   <?php  include 'header.php';
	           include 'check-if-added.php';
	   ?>
	   <div class="container" id="content">

            
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Store!</h1>
                <p>We have the best cameras, watches, smartphones and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(1)) { ?>
                                      <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
							 <?php  } else { 
							 ?>
							  <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary ">Add to cart</a>
							  <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(2)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(3)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(4)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(5)) { 
                                      echo '<p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>';
							   } else {
								?>
								<p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { 
                              echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                             } 
							 else {
                                if (check_if_added_to_cart(6)) { 
                                      echo '<p><a href="#" class="btn btn-block btn-success" disabled>Added to cart</a></p>';
							    } 
							   else {
								 echo '<p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>';
							   } 
							} 
							?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(7)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(8)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php  } }  ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(9)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(10)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(11)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(12)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-center" id="smartphones">
              <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                        <img src="img/1plus.png" alt="">
                        <div class="caption">
                            <h3>OnePlus Nord CE 5G (Blue Void, 8GB RAM, 128GB Storage)</h3>
                            <p>Price Rs. 24,999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(13)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                </div>
              </div>
               <div class="col-md-3 col-sm-6 home-feature">
                 <div class="thumbnail">
                        <img src="img/SamsungGalaxyS20_1.png" alt="">
                        <div class="caption">
                            <h3>Samsung Galaxy S20 5G (Blue, 8GB RAM, 128GB)</h3>
                            <p>Price Rs. 39,990.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(14)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                 <div class="thumbnail">
                        <img src="img/SamsungGalaxyM32_1.png" alt="">
                        <div class="caption">
                            <h3>Samsung Galaxy M32 5G (Sky Blue, 6GB RAM, 128GB Storage)</h3>
                            <p>Price Rs. 16,999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(15)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-3 col-sm-6 home-feature">
                 <div class="thumbnail">
                        <img src="img/AppleIphone.png" alt="">
                        <div class="caption">
                            <h3>Apple iPhone 11 (Black,4GB RAM,64GB Storage) </h3>
                            <p>Price Rs. 41,999.00</p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                             } else {
                               if (check_if_added_to_cart(16)) { 
                                      echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							   } else {
								?>
								<a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php } }  ?>
                        </div>
                    </div>
                 </div>

                </div>

             </div>
                </div>
            <hr>
        </div>
		<?php  include 'footer.php';?>
	</body>
</html>