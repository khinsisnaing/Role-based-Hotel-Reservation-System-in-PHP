<?php

include ('../db.php');
if(isset($_GET['r_delete']))
{
	$rid=$_GET['r_delete'];

    //$query_room = mysqli_query($connect,"SELECT * FROM room WHERE room_id='$rid'"); 
    $query_booking = mysqli_query($connect,"SELECT * FROM booking WHERE room_id='$rid'"); 


    if(mysqli_num_rows($query_booking) > 0)
    {
        echo "<script>alert('You cannot delete this room!');location.href='../room_detail.php'</script>";
    }
    else
    {
        $sql="DELETE FROM room WHERE room_id='$rid'";
        $r_delete=mysqli_query($connect,$sql);
        echo "<script>alert('Room is Deleted!');location.href='../room_detail.php'</script>";
    }

}

?>