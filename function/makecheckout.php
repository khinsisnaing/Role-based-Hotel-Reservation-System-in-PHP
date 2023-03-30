<?php 
include ('../db.php');
if(isset($_POST['checkout_confirm']))
{
	$guest_id=$_POST['guestid'];
	$guest_name=$_POST['guestname'];
	$guest_nrc=$_POST['guestnrc'];
	// $guest_email=$_POST['guestemail'];
	$guest_phone=$_POST['guestphone'];
	
	$room_no=$_POST['roomno'];
	$room_type=$_POST['roomtype'];
	$room_price=$_POST['roomprice'];

	$booking_id=$_POST['bookingid'];
	$prepaid=$_POST['prepaid'];
	$checkin=$_POST['checkin'];
	$checkout=$_POST['checkout'];
	$subtotal=$_POST['total'];
	$discount=$_POST['discount'];
	$total=$_POST['remaintotal'];

	$sql1_booking="UPDATE `booking` SET `checkout`='$checkout', `total`='$subtotal',`discount`='$discount',`remainprice`='$total' WHERE guest_id='$guest_id' ";
	$query1_booking=mysqli_query($connect,$sql1_booking);


	$sql2_invoice="INSERT INTO invoice(booking_id,guest_id,guest_name,guest_nrc,guest_phone,room_no,room_type,room_price,prepaid,checkin,checkout,subtotal,discount,total) VALUES ('$booking_id','$guest_id','$guest_name','$guest_nrc','$guest_phone','$room_no','$room_type','$room_price','$prepaid','$checkin','$checkout','$subtotal','$discount','$total')";
	$query2_invoice=mysqli_query($connect,$sql2_invoice);


	$sql_guest_del="DELETE FROM guest WHERE guest_id='$guest_id'";
	$query3_sql_guest_del=mysqli_query($connect,$sql_guest_del);


	$sql_booking_del="DELETE FROM booking WHERE booking_id='$booking_id'";
	$query4_sql_booking_del=mysqli_query($connect,$sql_booking_del);

	echo "<script>alert('The Guest is Successfully Checkout!');location.href='../invoice_detail.php'</script>";
    		
	
}

?>