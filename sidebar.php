


<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">


        <div class="sb-sidenav-menu">
            <div class="nav">
                
            <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="reservation_dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                </a>

                <!-- <a class="nav-link" href="guest_registration.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bed"></i></div>Guest Reservation
                </a> -->

                <a class="nav-link" href="current_guest.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-clock"></i></div>Check In Guest
                </a>

                <a class="nav-link" href="invoice_detail.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>Invoice and Print
                </a>


                <!-- Room -->
                <div class="sb-sidenav-menu-heading">Room Management</div>
                    <a class="nav-link" href="room_detail.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hotel"></i></div>Room Detail
                    </a>


                <?php if($_SESSION['role'] == 'Manager'){ ?>
                    
                        <a class="nav-link" href="room_registration.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house-user"></i></div>Room Registration
                        </a>
                        

                    <!-- Staff -->
                        <div class="sb-sidenav-menu-heading">Staff Management</div>
                            <a class="nav-link" href="staff_detail.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>Staff Detail
                            </a>
                            
                            <a class="nav-link" href="staff_registration.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-plus"></i></div>
                                Staff Registration
                            </a>

                    <!-- User -->
                        <div class="sb-sidenav-menu-heading">User Management</div>
                            <a class="nav-link" href="user_detail.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></i></div>
                                User Detail
                            </a>

                            <a class="nav-link" href="user_registration.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user-plus"></i></div>
                                User Registration
                            </a>
                <?php } ?>
                </div>
            </div>



            <div class="sb-sidenav-footer bg-warning text-black">
                <div class="small">Logged in as:</div><?php echo $user['username']; ?>
            </div>

        
    </nav>
</div>