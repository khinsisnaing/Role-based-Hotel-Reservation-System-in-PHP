<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); include("db.php"); ?> 
    <title>User - Dashboard</title>  
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
            <h3 class="mt-4">User Detail Dashboard</h3>
                        
            <div class="card mb-4">
                <div class="card-header" style="background-color: grey;">
                    <span style="color: white; font-style: italic;" ><i class="fas fa-table me-1"></i>User Data Table</span>
                </div>
                            
                <div class="card-body">

                <table id="datatablesSimple"  class="cell-border">

                    <thead>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Created Date</th>
                        <th>Job Role</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </thead>
                    
                    <tbody>

                    <?php

                            $sql="SELECT * FROM user";
                            $query=mysqli_query($connect,$sql);
                            while ($row=mysqli_fetch_assoc($query))
                     { ?>
                        <tr>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['created_date']; ?></td>
                            <td><?php echo $row['role']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td class="text-nowrap">
                                <a class="btn btn-warning btn-xs userbtn" data-bs-toggle="modal" data-bs-target="#userForm_modal"
                                user_id="<?php echo $row['user_id']; ?>"
                                username="<?php echo $row['username']; ?>"
                                role="<?php echo $row['role']; ?>"
                                email="<?php echo $row['email']; ?>" 
                                password="<?php echo $row['password']; ?>" 
                                ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-danger btn-xs" href="function/user_delete.php?udelete=<?php echo $row['user_id']; ?>"><i class="fa-solid fa-trash"></i></a>

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

<?php include('modal_user.php'); ?>

<script type="text/javascript">
    
    $(document).ready( function(){
        // $('#datatablesSimple_userdetail').DataTable();
        $('.userbtn').click(function()
        {
            var user_id=$(this).attr('user_id');
            var username=$(this).attr('username');
            var role=$(this).attr('role');
            var email=$(this).attr('email');
            var password=$(this).attr('password');

            // alert(user_id);
            
            $(".user_id").val(user_id);
            $(".username").val(username);
            $(".role").val(role);
            $(".email").val(email);
            $(".password").val(password);
        });
    });

    

</script>
</body>
</html>


