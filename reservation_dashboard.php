<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php");  include("db.php"); ?> 
    <title>The AMARA Hotel - Reservation Dashboard</title>
    <link rel="icon" href="img/hotel_point.png">
</head>

<body class="sb-nav-fixed">

    <?php include("nav.php"); ?>

    <!------------------------------------------------------------------------------------------------------------->

    <div id="layoutSidenav">

    <?php include("sidebar.php"); ?>

    <!------------------------------------------------------------------------------------------------------------>
        <div id="layoutSidenav_content">
        
        <main>
        
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>Data Table</span>
                </div>
                            
                <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Room Price</th>
                            <th>Booking</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php

                            $sql1="SELECT * FROM room";
                            $query1=mysqli_query($connect,$sql1);
                            while ($row1=mysqli_fetch_assoc($query1))
                     { 
                            $roomid=$row1['room_id'];
                            ?>

                        <tr>
                            <td hidden><?php echo $row1['room_id']; ?></td>
                            <td><?php echo $row1['room_no']; ?></td>
                            <td><?php echo $row1['room_type']; ?></td>
                            <td><?php echo $row1['room_price']; ?></td>
                            <td class="text-nowrap">
                                <?php 
                                    $query2=mysqli_query($connect,"SELECT * FROM booking WHERE room_id=$roomid"); 
                                    $num_row=mysqli_num_rows($query2);

                                    if($num_row >0){  ?>
                                        <button class="btn btn-danger btn-sm">Booked</button>
                                <?php }else{ ?>
                                    <a class="btn btn-success btn-sm bookingbtn" data-bs-toggle="modal" data-bs-target="#bookingForm_Modal"
                                            roomid="<?php echo $row1['room_id']; ?>"
                                            roomno="<?php echo $row1['room_no']; ?>"
                                            roomtype="<?php echo $row1['room_type']; ?>">Booking</a>
                                <?php } ?>
                            </td>

  <!---------------------------------------------------Check In Form Button ----------------------------------- -->

                            <td class="text-nowrap">
                                <?php
                                    while ($row2=mysqli_fetch_assoc($query2)) 
                                    {
                                        $guest_id=$row2['guest_id'];
                                    
                                        $query_guest=mysqli_query($connect,"SELECT * FROM guest WHERE guest_id=$guest_id");
                                        while ($row_guest=mysqli_fetch_assoc($query_guest))
                                        {
                                            $guest_id=$row_guest['guest_id'];
                                            $guest_name=$row_guest['guest_name'];
                                            $guest_nrc=$row_guest['guest_nrc'];
                                            $guest_phone=$row_guest['guest_phone'];
                                        }
                                        $query_guest2=mysqli_query($connect,"SELECT * FROM booking WHERE guest_id=$guest_id");
                                            while ($row_guest2=mysqli_fetch_assoc($query_guest2))
                                            {
                                                $prepaid=$row_guest2['prepaid'];
                                                $reservedate=$row_guest2['reservedate'];
                                            }
                                    }
                                    
                                    if($num_row >0)
                                    {  
                                        if($guest_nrc == "")
                                        {   ?>
                                           <a class="btn btn-success btn-sm checkinbtn" data-bs-toggle="modal" data-bs-target="#checkinForm_modal"
                                            roomid="<?php echo $row1['room_id']; ?>"
                                            roomno="<?php echo $row1['room_no']; ?>"
                                            roomtype="<?php echo $row1['room_type']; ?>" 
                                            guest_id="<?php echo $guest_id ; ?>" 
                                            guest_name="<?php echo $guest_name ; ?>" 
                                            guest_phone="<?php echo $guest_phone ; ?>" 
                                            prepaid="<?php echo $prepaid ; ?>"
                                            reservedate="<?php echo $reservedate ; ?>"  >Check In</a>
                                  <?php }
                                        else
                                        {   ?>
                                            <button class="btn btn-danger btn-sm">Checked</button>
                                  <?php }
                                
                                    }else { 

                                          } ?>
                            </td>


    <!-------------------------------------------------Check Out Form Button -------------------------------- -->

                            <td class="text-nowrap">
                                <?php



                                    $query5=mysqli_query($connect,"SELECT * FROM booking WHERE room_id=$roomid");
                                    $booking_check_row=mysqli_num_rows($query5);
                                    if ($booking_check_row==0){

                                    }
                                    else{
                                        while ($row3=mysqli_fetch_assoc($query5))
                                        {
                                            $guest_id=$row3['guest_id'];
                                            $room_id=$row3['room_id'];
                                            $booking_id=$row3['booking_id'];

                                            $query_guest3=mysqli_query($connect,"SELECT * FROM guest WHERE guest_id=$guest_id");
                                            while ($row_guest3=mysqli_fetch_assoc($query_guest3))
                                            {
                                                //$guest_id=$row_guest3['guest_id'];
                                                $guest_name=$row_guest3['guest_name'];
                                                $guest_nrc=$row_guest3['guest_nrc'];
                                                $guest_phone=$row_guest3['guest_phone'];
                                                $guest_email=$row_guest3['guest_email'];
                                            }

                                            $query_guest4=mysqli_query($connect,"SELECT * FROM booking WHERE guest_id=$guest_id");
                                            while ($row_guest4=mysqli_fetch_assoc($query_guest4))
                                            {
                                                $prepaid=$row_guest4['prepaid'];
                                                $checkin=$row_guest4['checkin'];
                                                $reservedate=$row_guest4['reservedate'];
                                            }

                                            $query_room=mysqli_query($connect,"SELECT * FROM room WHERE room_id=$room_id");
                                            while($row_room=mysqli_fetch_assoc($query_room))
                                            {
                                                $room_id=$row_room['room_id'];
                                                $room_no=$row_room['room_no'];
                                                $room_type=$row_room['room_type'];
                                                $room_price=$row_room['room_price'];
                                            }
                                        }

                                        if($guest_nrc=="")
                                        {

                                        }
                                        else
                                        {   ?>
                                            <a class="btn btn-success btn-sm checkoutbtn"
                                               guest_name='<?php echo $guest_name ;?>'
                                               guest_nrc='<?php echo $guest_nrc ;?>'
                                               guest_email='<?php echo $guest_email ;?>'
                                               guest_phone='<?php echo $guest_phone ;?>'
                                               checkin1='<?php echo $checkin ;?>'
                                               prepaid='<?php echo $prepaid ;?>'
                                               room_no='<?php echo $room_no ;?>'
                                               room_type='<?php echo $room_type ;?>'
                                               room_price='<?php echo $room_price ;?>'
                                               guest_id='<?php echo $guest_id ;?>'
                                               room_id='<?php echo $room_id ;?>'
                                               booking_id='<?php echo $booking_id ;?>'
                                               data-bs-toggle="modal" data-bs-target="#checkoutForm_modal">Check Out</a>
                                        <?php }
                                    }



                                ?>
                                
                            </td>


    <!--------------------------------------------------View Button-------- ---------------------------------- -->

                            <td class="text-nowrap">
                            <?php


                                $select_booking = mysqli_query($connect,"SELECT * FROM booking WHERE room_id=$roomid");
                                $select_booking_num_row=mysqli_num_rows($select_booking);

                                if ($select_booking_num_row==0){

                                }
                                else{


                                while ($booking_row=mysqli_fetch_assoc($select_booking))

                                {
                                    $guest_id=$booking_row['guest_id'];
                                    $bookingdate=$booking_row['bookingdate'];
                                    $reservedate=$booking_row['reservedate'];
                                    $prepaid=$booking_row['prepaid'];
                                    $checkin=$booking_row['checkin'];
                                }
                                    //echo $checkin1=strtotime($checkin);

                                $select_guest = mysqli_query($connect,"SELECT * FROM guest WHERE guest_id=$guest_id");
                                while ($guest_row=mysqli_fetch_assoc($select_guest))
                                {
                                    $guest_id=$guest_row['guest_id'];
                                    $guest_name=$guest_row['guest_name'];
                                    $guest_nrc=$guest_row['guest_nrc'];
                                    $guest_dob=$guest_row['guest_dob'];
                                    $guest_gender=$guest_row['guest_gender'];
                                    $guest_email=$guest_row['guest_email'];
                                    $guest_phone=$guest_row['guest_phone'];
                                    $guest_address=$guest_row['guest_address'];
                                    $adult=$guest_row['adult'];
                                    $child=$guest_row['child'];
                                }
                                
                                if($select_booking_num_row > 0)
                                { ?>
                                    

                                <a class="btn btn-info btn-sm guestviewbtn" data-bs-toggle="modal" data-bs-target="#modalguestview"
                                guest_name="<?php echo $guest_name ; ?>"
                                guest_nrc="<?php echo $guest_nrc ; ?>"
                                guest_dob="<?php echo $guest_dob ; ?>"
                                guest_gender="<?php echo $guest_gender ; ?>"
                                guest_email="<?php echo $guest_email ; ?>"
                                guest_phone="<?php echo $guest_phone ; ?>"
                                guest_address="<?php echo $guest_address ; ?>"
                                adult="<?php echo $adult ; ?>"
                                child="<?php echo $child ; ?>"
                                prepaid="<?php echo $prepaid ; ?>"
                                bookingdate="<?php echo $bookingdate ; ?>"
                                reservedate="<?php echo $reservedate ; ?>"
                                checkin="<?php echo $checkin ; ?>" ><i class="fa-solid fa-eye"></i></a>


                <!--------------------------------------------------Edit Button --------------------------------------------->

                                <a class="btn btn-warning btn-sm guesteditbtn" data-bs-toggle="modal" data-bs-target="#modalguestedit" 
                                guest_id="<?php echo $guest_id ; ?>"
                                guest_name="<?php echo $guest_name ; ?>"
                                guest_nrc="<?php echo $guest_nrc ; ?>"
                                guest_dob="<?php echo $guest_dob ; ?>"
                                guest_gender="<?php echo $guest_gender ; ?>"
                                guest_email="<?php echo $guest_email ; ?>"
                                guest_phone="<?php echo $guest_phone ; ?>"
                                guest_address="<?php echo $guest_address ; ?>"
                                adult="<?php echo $adult ; ?>"
                                child="<?php echo $child ; ?>"
                                ><i class="fa-solid fa-pen-to-square"></i></a>

                <!--------------------------------------------------Delete Button -------------------------------------------->
                                <a class="btn btn-danger btn-sm" href="function/booking_delete.php?bookingdelete=<?php echo $guest_id; ?>"><i class="fa-solid fa-trash"></i></a>

                        <?php  }  else  {   ?>

                                    

                                    <?php }
                                }

                            ?>
                                
                                
                            </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KSN 2022</div>
                    </div>
                </div>
            </footer>
        </div>
        </div>

<?php include('modal_dashboard.php'); include('modal_view.php'); ?>

<script type="text/javascript">
    $(document).ready( function()
    {

        // --booking button function---------------------------------------------------
        $('.bookingbtn').click(function()
        {
            var roomid=$(this).attr('roomid');
            var roomno=$(this).attr('roomno');
            var roomtype=$(this).attr('roomtype');
            var roomprice=$(this).attr('roomprice');
            var roommax=$(this).attr('roommax');
            var roomdescription=$(this).attr('roomdescription');

            // alert(roomid);
            
            $(".roomid").val(roomid);
            $(".roomno").val(roomno);
            $(".roomtype").val(roomtype);
            $(".roomprice").val(roomprice);
            $(".roommax").val(roommax);
            $(".roomdescription").val(roomdescription);
        });

        // --checkin button function---------------------------------------------------

        $('.checkinbtn').click(function()
        {
            var roomid=$(this).attr('roomid');
            var roomno=$(this).attr('roomno');
            var roomtype=$(this).attr('roomtype');
            var guest_id=$(this).attr('guest_id');
            var guest_name=$(this).attr('guest_name');
            var guest_phone=$(this).attr('guest_phone');
            var prepaid=$(this).attr('prepaid');
            var reservedate=$(this).attr('reservedate');

            //alert(roomid);
            //alert(roomno);
             // alert(reservedate);
            
            $(".roomid").val(roomid);
            $(".roomno").val(roomno);
            $(".roomtype").val(roomtype);
            $(".guest_id").val(guest_id);
            $(".guest_name").val(guest_name);
            $(".guest_phone").val(guest_phone);
            $(".prepaid").val(prepaid);
            $(".reservedate").val(reservedate);
        });

        // --guest view button function---------------------------------------------------

        $('.guestviewbtn').click(function()
        {
            var guest_name=$(this).attr('guest_name');
            var guest_nrc=$(this).attr('guest_nrc');
            var guest_dob=$(this).attr('guest_dob');
            var guest_gender=$(this).attr('guest_gender');
            var guest_email=$(this).attr('guest_email');
            var guest_phone=$(this).attr('guest_phone');
            var guest_address=$(this).attr('guest_address');
            var adult=$(this).attr('adult');
            var child=$(this).attr('child');
            var bookingdate=$(this).attr('bookingdate');
            var reservedate=$(this).attr('reservedate');
            var prepaid=$(this).attr('prepaid');
            var checkin=$(this).attr('checkin');

            //alert(guest_name);
            
            $(".guest_name").val(guest_name);
            $(".guest_nrc").val(guest_nrc);
            $(".guest_dob").val(guest_dob);
            $(".guest_gender").val(guest_gender);
            $(".guest_email").val(guest_email);
            $(".guest_phone").val(guest_phone);
            $(".guest_address").val(guest_address);
            $(".adult").val(adult);
            $(".child").val(child);
            $(".bookingdate").val(bookingdate);
            $(".reservedate").val(reservedate);
            $(".prepaid").val(prepaid);
            $(".checkin").val(checkin);

        });

        // --guest edit button function---------------------------------------------------
        $('.guesteditbtn').click(function()
        {
            var guest_id=$(this).attr('guest_id');
            var guest_name=$(this).attr('guest_name');
            var guest_nrc=$(this).attr('guest_nrc');
            var guest_dob=$(this).attr('guest_dob');
            var guest_gender=$(this).attr('guest_gender');
            var guest_email=$(this).attr('guest_email');
            var guest_phone=$(this).attr('guest_phone');
            var guest_address=$(this).attr('guest_address');
            var adult=$(this).attr('adult');
            var child=$(this).attr('child');
            

            //alert(guest_name);
            $(".guest_id").val(guest_id);
            $(".guest_name").val(guest_name);
            $(".guest_nrc").val(guest_nrc);
            $(".guest_dob").val(guest_dob);
            $(".guest_gender").val(guest_gender);
            $(".guest_email").val(guest_email);
            $(".guest_phone").val(guest_phone);
            $(".guest_address").val(guest_address);
            $(".adult").val(adult);
            $(".child").val(child);
            

        });
        

        // --checkout  button function---------------------------------------------------
        $('.checkoutbtn').click(function()
        {
            var guest_name=$(this).attr('guest_name');
            var guest_nrc=$(this).attr('guest_nrc');
            var guest_email=$(this).attr('guest_email');
            var guest_phone=$(this).attr('guest_phone');
            var checkin1=$(this).attr('checkin1');
            var prepaid=$(this).attr('prepaid');
            var room_no=$(this).attr('room_no');
            var room_type=$(this).attr('room_type');
            var room_price=$(this).attr('room_price');

            var guest_id=$(this).attr('guest_id');
            var room_id=$(this).attr('room_id');
            var booking_id=$(this).attr('booking_id');
            
        
            //alert(room_no);
            //alert(room_type);
            //alert(room_price);
            // alert(booking_id);

            $(".guest_name").val(guest_name);
            $(".guest_nrc").val(guest_nrc);
            $(".guest_email").val(guest_email);
            $(".guest_phone").val(guest_phone);
            $(".checkin1").val(checkin1);
            $(".prepaid").val(prepaid);
            $(".room_no").val(room_no);
            $(".room_type").val(room_type);
            $(".room_price").val(room_price);

            $(".guest_id").val(guest_id);
            $(".room_id").val(room_id);
            $(".booking_id").val(booking_id);
            

        });
        // ---------------------------------------------------------------------
    });

    

</script>

</body>
</html>
