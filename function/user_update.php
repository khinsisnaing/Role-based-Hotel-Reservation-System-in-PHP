<?php
// session_start();
include ('../db.php');

if(isset($_POST['user_update']))
{	
	$user_id=$_POST['user_id'];
	$username=$_POST['username'];
	$role=$_POST['role'];
	$email=$_POST['email'];
	$password=$_POST['password'];


		$sql="UPDATE `user` SET `username`='$username',`role`='$role',`email`='$email',`password`='$password' WHERE user_id='$user_id'";
		mysqli_query($connect,$sql);
		echo "<script>alert('Successfully Update!');location.href='../user_detail.php'</script>";
	
}


?>
