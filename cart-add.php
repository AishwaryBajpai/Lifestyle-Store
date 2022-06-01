<?php
   require 'common.php';
   $user_id=$_SESSION['user_id'];
   $item_id=$_GET['id'];
   $query="INSERT INTO users_items(user_id,item_id,status) values('$user_id','$item_id','Add to cart')";
   $result=mysqli_query($con,$query) or die(mysqli_error($con));
   $_SESSION['added']="Item added to cart";
   header('location:products.php');
?>