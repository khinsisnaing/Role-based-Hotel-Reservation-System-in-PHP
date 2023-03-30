<?php

include ('../db.php');
if(isset($_GET['sdelete']))
{
	$sid=$_GET['sdelete'];
	$sql="DELETE FROM staff WHERE staff_id='$sid'";
	$staff_delete=mysqli_query($connect,$sql);
	echo "<script>alert('Staff Deleted!');location.href='../staff_detail.php'</script>";
}
?>