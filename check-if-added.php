<?php 
function check_if_added_to_cart($id){
    require 'common.php';
	$user_id=$_SESSION['user_id'];
    $query="SELECT * from users_items where user_id='$user_id' and item_id='$id' and status='Add to cart'";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    if(mysqli_num_rows($result)>=1)
        return 1;
    return 0;		
}
?>