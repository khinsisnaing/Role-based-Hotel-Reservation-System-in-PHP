<?php
// session_start();
include ('../db.php');

if(isset($_POST['staff_update']))
{	
	$staffid=$_POST['staffid'];
	$staffname=$_POST['staffname'];
	$staffnrc=$_POST['staffnrc'];
	$staffdob=$_POST['staffdob'];
	$staffgender=$_POST['staffgender'];
	$staffphone=$_POST['staffphone'];
	$staffentry=$_POST['staffentry'];
	$staffaddress=$_POST['staffaddress'];
	$staffrole=$_POST['staffrole'];
	$staffsalary=$_POST['staffsalary'];
	$staffworkinghr=$_POST['staffworkinghr'];

	
		$sql="UPDATE `staff` SET `staff_name`='$staffname',`staff_nrc`='$staffnrc',`staff_dob`='$staffdob',`staff_gender`='$staffgender',`staff_phone`='$staffphone',`staff_entry`='$staffentry',`staff_address`='$staffaddress',`staff_role`='$staffrole',`staff_salary`='$staffsalary',`staff_workinghr`='$staffworkinghr' WHERE staff_id='$staffid'";
		mysqli_query($connect,$sql);
		echo "<script>alert('Successfully Update!');location.href='../staff_detail.php'</script>";
	
}


?>
