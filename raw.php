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
-----------------------------------
<?php
// session_start();
include ('../db.php');

if(isset($_POST['room_update']))
{   
    $roomid=$_POST['roomid'];
    $roomno=$_POST['roomno'];
    $roomtype=$_POST['roomtype'];
    $roomprice=$_POST['roomprice'];
    $roommax=$_POST['roommax'];
    $roomdescription=$_POST['roomdescription'];

     $query_booking = mysqli_query($connect,"SELECT * FROM booking WHERE room_id='$roomid'"); 

     if(mysqli_num_rows($query_booking) > 0)
    {
        echo "<script>alert('You cannot update this room!');location.href='../room_detail.php'</script>";
    }
    else
    {
       $sql="UPDATE `room` SET `room_no`='$roomno',`room_type`='$roomtype',`room_price`='$roomprice',`room_max`='$roommax',`room_description`='$roomdescription' WHERE room_id='$roomid' ";
        mysqli_query($connect,$sql);
        echo "<script>alert('Room is Successfully Update!');location.href='../room_detail.php'</script>";
    }
    
        
    
}


?>
