<?php 
include ('../db.php');
if(isset($_POST['booking_confirm']))
{
	$guestname=$_POST['guestname'];
	$guestphone=$_POST['guestphone'];
	$bookingdate=$_POST['bookingdate'];
	$prepaid=$_POST['prepaid'];
	$roomid=$_POST['roomid'];
	$reservedate=$_POST['reservedate'];

		
	$sql1="INSERT INTO guest(guest_name,guest_phone) VALUES ('$guestname','$guestphone')";
	mysqli_query($connect,$sql1);
	$select_guest = mysqli_query($connect,"SELECT * FROM guest WHERE guest_phone='$guestphone'");

	while ($row_guest=mysqli_fetch_assoc($select_guest) )  {

		$guest_id=$row_guest['guest_id'];
		$sql2="INSERT INTO booking(bookingdate,reservedate,prepaid,room_id,guest_id) VALUES ('$bookingdate','$reservedate','$prepaid','$roomid','{$guest_id}')";

		mysqli_query($connect,$sql2);
	}

	

	echo "<script>alert('Booking Successful!');location.href='../reservation_dashboard.php'</script>";
    		
	
}

?>

	
