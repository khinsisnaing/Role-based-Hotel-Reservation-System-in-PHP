<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); include("db.php");?> 
    <title>Room - Dashboard</title>
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
            <h3 class="mt-4">Room Detail Dashboard</h3>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>Room Data Table</span>
                </div>
                            
                <div class="card-body">
                <table id="datatablesSimple" class="cell-border">
                    <thead>
                        <th hidden>Room ID</th>
                        <th>Room No</th>
                        <th>Room Type</th>
                        <th>Room Price</th>
                        <th>Max Person</th>
                        <th>Room Description</th>
                        <?php if($_SESSION['role'] == 'Manager'){ ?>
                                <th>Action</th>
                        <?php } ?>
                    </thead>
                    
                    <tbody>
                    <?php

                            $sql="SELECT * FROM room";
                            $query=mysqli_query($connect,$sql);
                            while ($row=mysqli_fetch_assoc($query))
                     { ?>

                        <tr>
                            <td hidden><?php echo $row['room_id']; ?></td>
                            <td><?php echo $row['room_no']; ?></td>
                            <td><?php echo $row['room_type']; ?></td>
                            <td><?php echo $row['room_price']; ?></td>
                            <td><?php echo $row['room_max']; ?></td>
                            <td><?php echo $row['room_description']; ?></td>

                            <?php if($_SESSION['role'] == 'Manager') { ?>
                            <td class="text-nowrap">
                                <a class="btn btn-warning btn-xs roombtn" data-bs-toggle="modal" data-bs-target="#roomForm_modal"
                                roomid="<?php echo $row['room_id']; ?>"
                                roomno="<?php echo $row['room_no']; ?>"
                                roomtype="<?php echo $row['room_type']; ?>"
                                roomprice="<?php echo $row['room_price']; ?>"
                                roommax="<?php echo $row['room_max']; ?>"
                                roomdescription="<?php echo $row['room_description']; ?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger btn-xs" href="function/room_delete.php?r_delete=<?php echo $row['room_id']; ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                            <?php } ?>
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

<?php include('modal_room.php'); ?>

<script type="text/javascript">
    $(document).ready( function(){
        // $('#datatablesSimple_roomdetail').DataTable();
        $('.roombtn').click(function()
        {
            var roomid=$(this).attr('roomid');
            var roomno=$(this).attr('roomno');
            var roomtype=$(this).attr('roomtype');
            var roomprice=$(this).attr('roomprice');
            var roommax=$(this).attr('roommax');
            var roomdescription=$(this).attr('roomdescription');

            // alert(user_id);
            
            $(".roomid").val(roomid);
            $(".roomno").val(roomno);
            $(".roomtype").val(roomtype);
            $(".roomprice").val(roomprice);
            $(".roommax").val(roommax);
            $(".roomdescription").val(roomdescription);
        });
    });

    

</script>

</body>
</html>
