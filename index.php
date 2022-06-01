 <?php  require 'common.php'; 
   if(isset($_SESSION['email']))
	   header('location:products.php'); 
?> 
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Life Style Store</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
	<body style="padding-top: 50px;">
	   <?php  include 'header.php'; ?>
	    <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Lifestyle Store</h1>
                            <p>ALL IN ONE STORE </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
		</div>
		
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-3">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="products.php#smartphones" >
                            <div class="thumbnail">
                                <img src="img/smartphones.jpg" alt="">
                                <div class="caption">
                                    <h3>smartphones</h3>
                                    <p>best collection of smartphones.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
		<?php include 'footer.php'; ?>
	</body>
</html>
