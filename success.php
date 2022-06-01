<?php require 'common.php';
    if(!isset($_SESSION['email']))
		header('location:index.php');
	if(count($_SESSION['array_id'])!=0)
    {
		$user_id=$_SESSION['user_id'];
        foreach($_SESSION['array_id'] as $i){
	         $query="UPDATE users_items set status='Confirmed' where user_id='$user_id' and item_id='$i'";
	         $res=mysqli_query($con,$query) or die(mysqli_error($con));
        }
		unset($_SESSION['array_id']);
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
	   <?php include 'header.php'; ?>
	    <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
	   <?php include 'footer.php'; ?>
	</body>
</html>