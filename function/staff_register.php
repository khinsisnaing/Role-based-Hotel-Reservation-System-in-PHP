<?php 
include ('../db.php');
if(isset($_POST['staff_register']))
{
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
	

	$check_staffnrc=mysqli_query($connect,"SELECT * FROM staff WHERE staff_nrc='$staffnrc'");

		if(mysqli_num_rows($check_staffnrc) > 0)
		{
    		echo "<script>alert('The Staff is Already Registered!');location.href='../staff_registration.php'</script>";
		}
		else
		{
			$staff="INSERT INTO staff(staff_name, staff_nrc, staff_dob, staff_gender, staff_address, staff_phone, staff_role, staff_salary, staff_workinghr, staff_entry) VALUES ('$staffname','$staffnrc','$staffdob','$staffgender', '$staffaddress', '$staffphone', '$staffrole','$staffsalary','$staffworkinghr', '$staffentry')";
			mysqli_query($connect,$staff);
			echo "<script>alert('Successfully Registered!');location.href='../staff_detail.php'</script>";
    		
		}
}

?>

	
