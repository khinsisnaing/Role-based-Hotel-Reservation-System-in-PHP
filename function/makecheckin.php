<?php 
include ('../db.php');
if(isset($_POST['checkin_confirm']))
{
	$guestid=$_POST['guestid'];
	$guestname=$_POST['guestname'];
	$guestnrc=$_POST['guestnrc'];
	$guestdob=$_POST['guestdob'];
	$guestgender=$_POST['guestgender'];
	$guestemail=$_POST['guestemail'];
	$guestphone=$_POST['guestphone'];
	$guestaddress=$_POST['guestaddress'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];
	$checkin=$_POST['checkin'];
	
	$sql1="UPDATE `guest` SET `guest_nrc`='$guestnrc', `guest_dob`='$guestdob',`guest_gender`='$guestgender',`guest_email`='$guestemail',`guest_address`='$guestaddress',`adult`='$adult',`child`='$child' WHERE guest_id='$guestid' ";

	mysqli_query($connect,$sql1);

	$select_guest = mysqli_query($connect,"SELECT * FROM guest WHERE guest_id='$guestid'");

	while ($row_guest=mysqli_fetch_assoc($select_guest) )  {

		$guest_id=$row_guest['guest_id'];
		$sql2="UPDATE `booking` SET `checkin`='$checkin' WHERE guest_id=$guest_id";

		mysqli_query($connect,$sql2);
	}

	echo "<script>alert('Booking Successful!');location.href='../reservation_dashboard.php'</script>";
    		
	
}

?>

	
