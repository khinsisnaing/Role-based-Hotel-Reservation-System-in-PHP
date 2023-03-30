<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); include("db.php"); ?> 
    <title>Reservation Dashboard</title>
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
            <h1 class="mt-4">Current Booking/Check In Guest</h1>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>Check In Data Table</span>
                </div>
                            
                <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Room No</th>
                            <th>Room Type</th>
                            <th>Guest Name</th>
                            <th>Phone Number</th>
                            <th>Check In Date/Time</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php  
                            $current="SELECT booking.room_id, booking.guest_id, booking.checkin, room.room_id, room.room_no,room.room_type, guest.guest_id, guest.guest_name, guest.guest_phone FROM booking  LEFT JOIN room ON booking.room_id=room.room_id  LEFT JOIN guest ON booking.guest_id= guest.guest_id" ;

                            $current_guest=mysqli_query($connect, $current); 
                            
                            if(mysqli_num_rows($current_guest) > 0)  
                                {  
                                    while($result= mysqli_fetch_assoc($current_guest))  
                                        {  
                        ?>  
                                            <tr> 
                                                <td><?php echo $result["room_no"];?></td>
                                                <td><?php echo $result["room_type"];?></td>
                                                <td><?php echo $result["guest_name"];?></td>
                                                <td><?php echo $result["guest_phone"];?></td>
                                                <td><?php echo $result["checkin"];?></td>
                                            </tr>  
                        <?php  
                                        }  
                                }  
        
                        ?> 
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
</body>
</html>
