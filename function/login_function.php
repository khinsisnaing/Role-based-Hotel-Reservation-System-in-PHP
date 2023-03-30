<?php
session_start();
include("../db.php");
// date_default_timezone_set('Asia/Yangon');

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];


	$sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$query=mysqli_query($connect,$sql);
	$count_user_row = mysqli_num_rows($query);
	// echo $row['id'];
	// $row=mysqli_fetch_assoc($query);
	
	if($count_user_row > 0)
	{
		while ($row = mysqli_fetch_assoc($query)) 
    	{

            $user_id  =  $row['user_id'];
            $username =  $row['username'];
            $email    =  $row['email'];
            $password =  $row['password'];
            $role     =  $row['role'];


            $query            =  "SELECT * FROM user WHERE email ='$email' AND password='password' ";
            $check_role_query =  mysqli_query($connect, $query);

            // while ($row = mysqli_fetch_assoc($check_role_query)) 
            // {

            //     $role_type = $row['role_type'];

            // }


            if ($role ==='Manager') 
            {
            	$_SESSION['user_id'] =  $user_id;
                $_SESSION['username'] =  $username;
                $_SESSION['email'] =  $email;
                $_SESSION['password'] =  $password;
                $_SESSION['role'] =  $role;


                echo "<script>alert('Hello Manager!')</script>";
                echo "<script>window.location='../reservation_dashboard.php'</script>";

            }

            else
            {

                $_SESSION['user_id'] =  $user_id;
                $_SESSION['username'] =  $username;
                $_SESSION['email'] =  $email;
                $_SESSION['password'] =  $password;
                $_SESSION['role'] =  $role;


                echo "<script>alert('Hello Receptionist!')</script>";
                echo "<script>window.location='../reservation_dashboard.php'</script>";

            }
            

    	}
		
	}
	else
	{	
		$message = "Login Failed! PLEASE TRY AGAIN!";
		echo "<script type='text/javascript'>alert('$message');location.href='../index.php'</script>";
	}

}
?>



	