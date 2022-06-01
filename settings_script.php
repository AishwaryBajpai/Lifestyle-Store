<?php 
   require 'common.php';
   if(!isset($_SESSION['email']))
	   header('location:products.php');
   
   $oldpass=md5(mysqli_real_escape_string($con,$_POST['old-password']));
   $user_id=$_SESSION['user_id'];
   $query="SELECT password from users where id='$user_id'";
   
   $res=mysqli_query($con,$query) or die(mysqli_error($con));
   
   $row=mysqli_fetch_array($res);
   $pass=$row[0];
 
   if($pass==$oldpass)
   {
	    $newpass=md5(mysqli_real_escape_string($con,$_POST['password']));
		$repass=md5(mysqli_real_escape_string($con,$_POST['password1']));
		
		if($newpass==$repass)
		{  
			$query="Update users set password='$repass' where id='$user_id'";
			$sp=mysqli_query($con,$query) or die(mysqli_error($con));
			header('location:logout.php');
		}
		else{
			 header('location:settings.php');
		}
   }
   
?>