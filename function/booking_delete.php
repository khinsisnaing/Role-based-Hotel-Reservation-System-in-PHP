<?php

include ('../db.php');
if(isset($_GET['bookingdelete']))
{
	$guest_id=$_GET['bookingdelete'];

	$guest_from_guest_sql="DELETE FROM guest WHERE guest_id='$guest_id'";
	$guest_from_booking_sql="DELETE FROM booking WHERE guest_id='$guest_id'";

	$g_query=mysqli_query($connect,$guest_from_guest_sql);
	$b_query=mysqli_query($connect,$guest_from_booking_sql);

	echo "<script>alert('Booking is Successfully Cancel!');location.href='../reservation_dashboard.php'</script>";
}
?>