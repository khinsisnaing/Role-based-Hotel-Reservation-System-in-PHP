<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); include("db.php"); ?> 
    <title>Staff - Dashboard</title> 
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
            <h3 class="mt-4">Staff Detail Dashboard</h3>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>Staff Data Table</span>
                </div>
                            
                <div class="card-body table-responsive">
                <table id="datatablesSimple" class="cell-border">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>NRC</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Job Role</th>
                        <th>Salary</th>
                        <th>Working Hours</th>
                        <th>Entry Date</th>
                        <th>Action</th>
                    </thead>
                    
                    
                    <tbody>

                     <?php

                            $sql="SELECT * FROM staff";
                            $query=mysqli_query($connect,$sql);
                            while ($row=mysqli_fetch_assoc($query))
                     { ?>
                        <tr>
                            <td><?php echo $row['staff_id']; ?></td>
                            <td><?php echo $row['staff_name']; ?></td>
                            <td><?php echo $row['staff_nrc']; ?></td>
                            <td><?php echo $row['staff_dob']; ?></td>
                            <td><?php echo $row['staff_gender']; ?></td>
                            <td><?php echo $row['staff_address']; ?></td>
                            <td><?php echo $row['staff_phone']; ?></td>
                            <td><?php echo $row['staff_role']; ?></td>
                            <td><?php echo $row['staff_salary']; ?></td>
                            <td><?php echo $row['staff_workinghr']; ?></td>
                            <td><?php echo $row['staff_entry']; ?></td>
                            <td class="text-nowrap">
                                <a class="btn btn-warning btn-xs staffbtn" data-bs-toggle="modal" data-bs-target="#staffForm_modal"
                                staffid="<?php echo $row['staff_id']; ?>"
                                staffname="<?php echo $row['staff_name']; ?>" 
                                staffnrc="<?php echo $row['staff_nrc']; ?>"
                                staffdob="<?php echo $row['staff_dob']; ?>"
                                staffgender="<?php echo $row['staff_gender']; ?>"
                                staffaddress="<?php echo $row['staff_address']; ?>"
                                staffphone="<?php echo $row['staff_phone']; ?>"
                                staffrole="<?php echo $row['staff_role']; ?>"
                                staffsalary="<?php echo $row['staff_salary']; ?>"
                                staffworkinghr="<?php echo $row['staff_workinghr']; ?>"
                                staffentry="<?php echo $row['staff_entry']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger btn-xs" href="function/staff_delete.php?sdelete=<?php echo $row['staff_id']; ?>"><i class="fa-solid fa-trash"></i></a>
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

<?php include('modal_staff.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        // $('#datatablesSimple_staffdetail').DataTable();
        $('.staffbtn').click(function()
        {
            var staffid=$(this).attr('staffid');
            var staffname=$(this).attr('staffname');
            var staffnrc=$(this).attr('staffnrc');
            var staffdob=$(this).attr('staffdob');
            var staffgender=$(this).attr('staffgender');
            var staffaddress=$(this).attr('staffaddress');
            var staffphone=$(this).attr('staffphone');
            var staffrole=$(this).attr('staffrole');
            var staffsalary=$(this).attr('staffsalary');
            var staffworkinghr=$(this).attr('staffworkinghr');
            var staffentry=$(this).attr('staffentry');

            //alert(staffid);
            
            $(".staffid").val(staffid);
            $(".staffname").val(staffname);
            $(".staffnrc").val(staffnrc);
            $(".staffdob").val(staffdob);
            $(".staffgender").val(staffgender);
            $(".staffaddress").val(staffaddress);
            $(".staffphone").val(staffphone);
            $(".staffrole").val(staffrole);
            $(".staffsalary").val(staffsalary);
            $(".staffworkinghr").val(staffworkinghr);
            $(".staffentry").val(staffentry);
        });
    });

</script>



</body>
</html>
