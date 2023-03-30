<?php

include ('../db.php');
if(isset($_GET['invoicedelete']))
{
	$invoice_id=$_GET['invoicedelete'];
	$invoice_sql="DELETE FROM invoice WHERE invoice_id='$invoice_id'";
	$invoice_query=mysqli_query($connect,$invoice_sql);
	echo "<script>alert('Invoice Deleted!');location.href='../invoice_detail.php'</script>";
}
?>