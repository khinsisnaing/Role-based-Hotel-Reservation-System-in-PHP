
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); ?> 
    <title>Invoice Dashboard</title>  
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
            <h3 class="mt-4">Invoice Detail Dashboard</h3>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>Invoice Data Table</span>
                </div>
                            
                <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <th>Invoice No</th>
                        <th>Booking ID</th>
                        <th>Guest Name</th>
                        <th>Guest NRC</th>
                        <th>Phone No</th>
                        <th>Room No</th>
                        <th>Room Type</th>
                        <th>Room Price</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Prepaid</th>
                        <th>Sub Total</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Action</th>
                    </thead>
                    
                    <tbody>

                    <?php

                            $sql_invoice="SELECT * FROM invoice";
                            $query_invoice=mysqli_query($connect,$sql_invoice);
                            while ($row_invoice=mysqli_fetch_assoc($query_invoice))
                     { ?>
                        <tr>
                            <td><?php echo $row_invoice['invoice_id']; ?></td>
                            <td><?php echo $row_invoice['booking_id']; ?></td>
                            <td><?php echo $row_invoice['guest_name']; ?></td>
                            <td><?php echo $row_invoice['guest_nrc']; ?></td>
                            <td><?php echo $row_invoice['guest_phone']; ?></td>
                            <td><?php echo $row_invoice['room_no']; ?></td>
                            <td><?php echo $row_invoice['room_type']; ?></td>
                            <td><?php echo $row_invoice['room_price']; ?></td>
                            <td><?php echo $row_invoice['checkin']; ?></td>
                            <td><?php echo $row_invoice['checkout']; ?></td>
                            <td><?php echo $row_invoice['prepaid']; ?></td>
                            <td><?php echo $row_invoice['subtotal']; ?></td>
                            <td><?php echo $row_invoice['discount']; ?></td>
                            <td><?php echo $row_invoice['total']; ?></td>
                            <td class="text-nowrap">
                                
                                <a class="btn btn-primary btn-sm"href="invoice_template.php?invoiceprint=<?php echo $row_invoice['invoice_id']; ?>" ><i class="fa-solid fa-print"></i></a>
                            
                            <?php if($_SESSION['role'] == 'Manager')
                                { 

                                ?>
                                <a class="btn btn-danger btn-sm" 
                                href="function/invoice_delete.php?invoicedelete=<?php echo $row_invoice['invoice_id']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                            <?php } ?>
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



</body>
</html>
