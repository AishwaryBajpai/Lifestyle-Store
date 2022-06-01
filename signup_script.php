<?php require 'common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['e-mail']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$phone=mysqli_real_escape_string($con,$_POST['contact']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$city=mysqli_real_escape_string($con,$_POST['city']);

 $query="SELECT id FROM users where email='$email'" or die(mysqli_error($con));
 
 $result=mysqli_query($con,$query);
 if(mysqli_num_rows($result)>0){
	 $_SESSION['signup_error']='User already exists';
     header('location:signup.php');
 }
 else{
	 $string=md5($password);
	 $query1="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$string','$phone','$city','$address')";
	 $res=mysqli_query($con,$query1) or die(mysqli_error($con));
	 $_SESSION['user_id']=mysqli_insert_id($con);
	 $_SESSION['email']=$email;
	 $_SESSION['signup']='Your account is created.Welcome to LifeStyle Store';
	 header('location:products.php');
 }

?>