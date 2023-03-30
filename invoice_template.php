
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

<div id="layoutSidenav_content">

<div class="card" id="invoiceprint_section">
  <div class="card-body">
    <div class="container mb-5 mt-3">

      <?php
            if(isset($_GET['invoiceprint']))

            $invoice_id=$_GET['invoiceprint'];
            $sql_invoice="SELECT * FROM invoice WHERE invoice_id='$invoice_id'";
            $query_invoice=mysqli_query($connect,$sql_invoice);
            $row_invoice=mysqli_fetch_assoc($query_invoice);
      { ?>

     <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px; margin-top: 5px; margin-left: 15px;">Invoice <strong>ID: #<?php echo $row_invoice['invoice_id']; ?></strong></p>
        </div>

        
        <hr>
      </div>

     <div class="container">
        <div class="col-md-12">
          	<div class="text-center">
            	<p class="pt-0"><img src="img/logo3.jpg" style="width:25%"></p>
          	</div>
        </div>


        <div class="row"> 
          <div class="col-xl-8 col-6">
            <ul class="list-unstyled">
              <li class="text-black">To: <span style=" font-weight: bold;"><?php echo $row_invoice['guest_name']; ?></span></li>
              <li class="text-black"><i class="fas fa-phone"></i>  <?php echo $row_invoice['guest_phone']; ?></li>
            </ul>
          </div>
          <div class="col-xl-4 col-6">
            <p class="text-black">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-black"><i class="fas fa-circle" style="color:#FFC107 ;"></i> <span
                  class="fw-bold">ID: </span>#<?php echo $row_invoice['invoice_id']; ?></li>
              <li class="text-black"><i class="fas fa-circle" style="color:#FFC107 ;"></i> <span
                  class="fw-bold">Creation Date: </span><td><?php echo $row_invoice['checkout']; ?></td></li>
              <li class="text-black"><i class="fas fa-circle" style="color:#FFC107 ;"></i> <span
                  class="me-1 fw-bold">Receiptionist:</span> <?php echo $user['username']; ?></li>
              
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#FFC107 ;" class="text-black">
              <tr>
                <th scope="col">Room No</th>
                <th scope="col">Room Type</th>
                <th scope="col">Price Per Night</th>
                <th scope="col">Check In Date</th>
                <th scope="col">Check Out Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo $row_invoice['room_no']; ?></th>
                <td><?php echo $row_invoice['room_type']; ?></td>
                <td><?php echo $row_invoice['room_price']; ?></td>
                <td><?php echo $row_invoice['checkin']; ?></td>
                <td><?php echo $row_invoice['checkout']; ?></td>
              </tr>
              
            </tbody>

          </table>
        </div>

        <div class="row">
          <div class="col-xl-8">
            	<!-- <p class="ms-3">Add additional notes and payment information</p> -->
          </div>
          <div class="col-xl-3">
            <ul class="list-unstyled">
              
              <li class="text-muted ms-3 mt-2"><span class="text-black me-4"> Prepaid	</span><?php echo $row_invoice['prepaid']; ?></li>
              <li class="text-muted ms-3 mt-1"><span class="text-black me-4">Sub Total</span><?php echo $row_invoice['subtotal']; ?></li>
              <li class="text-muted ms-3 mt-3"><span class="text-black me-4">Discount</span><?php echo $row_invoice['discount']; ?></li>
            </ul>
            <p class="text-black float-start bg-warning" style="font-weight:bold;"><span class="text-black me-3">  Total Amount</span><span
                style="font-size: 25px;"><?php echo $row_invoice['total']; ?></span></p>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-xl-10">
            <p><span class="text-black me-3" style="font-weight:bold"><i class="fa-solid fa-square-h"></i>  The AMARA Hotel</span> <i class="fa-solid fa-envelope"></i> the.amara@gmail.com       <i class="fa-solid fa-phone"></i> +95912345678</p>
           
          </div>
          <!-- <div class="col-xl-2">
            <button type="button" class="btn btn-primary text-capitalize"
              style="background-color:#60bdf3 ;">Pay Now</button>
          </div> -->
        </div>

    </div>

    <?php } ?>

      <div class="col-xl-2 float-end">
          <a class="btn btn-primary btn-md text-capitalize" onclick="printDivSection('invoiceprint_section')"><i class="fa-solid fa-print"></i> Print</a>
        </div>
        

        

        


    </div>
  </div>
</div>

</div>

</div>



<script type="text/javascript">
  function printDivSection(setion_id) 
  {
     var Contents_Section = document.getElementById(setion_id).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = Contents_Section;

     window.print();

     document.body.innerHTML = originalContents;
    
}


</script>
</body>
</html>

