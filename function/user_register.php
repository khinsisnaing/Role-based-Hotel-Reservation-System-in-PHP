<?php 
include ('../db.php');
if(isset($_POST['user_register']))
{
	$username=$_POST['username'];
	$role=$_POST['role'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$check_email=mysqli_query($connect,"SELECT * FROM user WHERE email='$email'");

		if(mysqli_num_rows($check_email) > 0)
		{
    		echo "<script>alert('Already Exist!');location.href='../user_registration.php'</script>";
		}
		
		else
		{
			$user="INSERT INTO user(username,role,email,password,created_date) VALUES ('$username','$role','$email','$password',now())";
			mysqli_query($connect,$user);
			echo "<script>alert('Successfully Registered!');location.href='../user_detail.php'</script>";
    		
		}
}

?>

	
