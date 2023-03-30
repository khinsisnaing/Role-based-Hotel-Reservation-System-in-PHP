
<?php 
session_start();
include("db.php");
$sql=mysqli_query($connect,"SELECT * FROM user WHERE user_id='".$_SESSION['user_id']."'");
$user=mysqli_fetch_assoc($sql);
if(!$_SESSION['user_id'])
{
  header("location:index.php");
}

?>



<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="reservation_dashboard.php"><span>The Amara Hotel</span></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    
        <!-- Navbar Search-->


        <div class="dropdown d-md-inline-block ms-auto me-md-3" >
            
                <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-circle-arrow-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="function/exportdata_invoices.php">Invoices Data <i class="fa-solid fa-download"></i></a></li>

                        <?php if($_SESSION['role'] == 'Manager'){ ?>
                                <li><a class="dropdown-item" href="function/exportdata_staff.php">Staff Data <i class="fa-solid fa-download"></i></a></li>
                        <?php  } ?>
      
                    </ul>
        </div>

        <a href="function/logout_function.php" type="button" class="btn btn-danger mx-2 float-right"><i class="fa-solid fa-power-off"></i></a>


</nav>

