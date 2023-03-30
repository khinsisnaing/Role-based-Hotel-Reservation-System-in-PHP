<?php 
include ('../db.php');
if(isset($_POST['room_register']))
{
	$roomno=$_POST['roomno'];
	$roomtype=$_POST['roomtype'];
	$roomprice=$_POST['roomprice'];
	$roommax=$_POST['roommax'];
	$roomdescription=$_POST['roomdescription'];

	$check_room=mysqli_query($connect,"SELECT * FROM room WHERE room_no='$roomno'");

		if(mysqli_num_rows($check_room) > 0)
		{
    		echo "<script>alert('This room is already exist!');location.href='../room_registration.php'</script>";
		}
		else
		{
			$room="INSERT INTO room(room_no,room_type,room_price,room_max,room_description) VALUES ('$roomno','$roomtype','$roomprice','$roommax','$roomdescription')";
			mysqli_query($connect,$room);
			echo "<script>alert('Room is Successfully Registered!');location.href='../room_detail.php'</script>";
    		
		}
}

?>

	
