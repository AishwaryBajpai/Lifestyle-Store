<?php
   require 'common.php';
   if(!isset($_SESSION['email']))
	   header('location:index.php');
   $item_id=$_GET['id'];
   $user_id=$_SESSION['user_id'];
   $query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
   $res=mysqli_query($con,$query) or die(mysqli_error($con));
   header('location:cart.php');   
?>