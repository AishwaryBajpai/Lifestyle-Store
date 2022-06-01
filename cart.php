<?php require 'common.php';
    if(!isset($_SESSION['email']))
		header('location:index.php');
	$user_id=$_SESSION['user_id'];
    $query="SELECT * FROM users_items where user_id='$user_id'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	if(mysqli_num_rows($result)==0)
		header('location:products.php');
	
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
	<body>
	  
	    <div class="container-fluid" id="content">
		     <?php include 'header.php'; ?>
			  <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
                            $query1="SELECT it.id,name,price from users_items u INNER JOIN items it ON u.item_id=it.id where user_id='$user_id' and status='Add to cart'";
                            $res=mysqli_query($con,$query1) or die(mysqli_error($con));	
							$sum=0;
							$_SESSION['array_id']=array();
							while($row=mysqli_fetch_array($res)){
	                    ?>
                            <tr>
							<?php  array_push($_SESSION['array_id'],$row[0]);
							 $idd=$row[0]; $sum=$sum+$row[2];
							echo '<td>' .$idd .'</td><td>'. $row[1] .'</td><td>' .$row[2] .'</td><td><a href="cart-remove.php?id='.$idd.'" class="remove_item_link">Remove</a></td>'; ?>
                            </tr>
						    <?php  } ?>
							<tr>
							  <td>TOTAL</td><td></td><td><?php echo $sum; ?></td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
							</tr>
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
	   <?php include 'footer.php'; ?>
	</body>
</html>