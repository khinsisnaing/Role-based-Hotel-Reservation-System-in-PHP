<?php

include ('../db.php');
if(isset($_GET['udelete']))
{
	$uid=$_GET['udelete'];

	$query_user = mysqli_query($connect,"SELECT * FROM user WHERE user_id='$uid'"); 

	if(mysqli_num_rows($query_user))
	{
    //Rows are returned
    	while($row_user = mysqli_fetch_assoc($query_user))
    	{
        //Do stuff with row data
        	if($row_user['user_id'] == 1)
        	{
        		echo "<script>alert('You cannot delete this main account!');location.href='../user_detail.php'</script>";
            
        	}
        	else
        	{
            
            	$sql="DELETE FROM user WHERE user_id='$uid'";
            	$u_delete=mysqli_query($connect,$sql);
            	echo "<script>alert('User Deleted!');location.href='../user_detail.php'</script>";
        	}
    	}
	}

}

?>