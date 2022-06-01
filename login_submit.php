<?php require 'common.php';
  $email=mysqli_real_escape_string($con,$_POST['e-mail']);
  $password=md5(mysqli_real_escape_string($con,$_POST['password']));
  
  $query="SELECT id FROM users WHERE email='$email' AND password='$password'" or die(mysqli_error($con));
  $result=mysqli_query($con,$query);
  $rows_count=mysqli_num_rows($result);
  
  if($rows_count==0)
  {  $_SESSION['login_error']='Invalid email or password';
      header('location:login.php');
  }
  else{
	  $row=mysqli_fetch_array($result);
	  $_SESSION['email']=$email;
	  $_SESSION['user_id']=$row[0];
	  $_SESSION['login_success']="Welcome ";
	  header('location:products.php');
  }
  
?>