<?php
// session_start();
include ('../db.php');

if(isset($_POST['guest_update']))
{	
	$guest_id=$_POST['guestid'];
	$guest_name=$_POST['guestname'];
	$guest_nrc=$_POST['guestnrc'];
	$guest_dob=$_POST['guestdob'];
	$guest_gender=$_POST['guestgender'];
	$guest_email=$_POST['guestemail'];
	$guest_phone=$_POST['guestphone'];
	$guest_address=$_POST['guestaddress'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];


	
		$sql="UPDATE `guest` SET `guest_name`='$guest_name',`guest_nrc`='$guest_nrc',`guest_dob`='$guest_dob',`guest_gender`='$guest_gender',`guest_email`='$guest_email',`guest_phone`='$guest_phone', `guest_address`='$guest_address', `adult`='$adult', `child`='$child' WHERE guest_id='$guest_id' ";
		mysqli_query($connect,$sql);
		echo "<script>alert('Guest Information is Successfully Update!');location.href='../reservation_dashboard.php'</script>";
	
}


?>
