<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); ?> 
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
            
        <h3 class="mt-4">Room Registration</h3>
        <br>
        <div class="card mb-4">
        
        <div class="card-body">
                        

            <form method="POST" action="function/room_register.php">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomno">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-lg" required />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomType">Room Type</label>
                            <input type="text" name="roomtype" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roomprice">Room Price</label>
                        <input type="number" name="roomprice" class="form-control form-control-lg" required />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roommax">Max Person</label>
                        <input type="number" name="roommax" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roomdescription">Room Description</label>
                        <input type="text" name="roomdescription" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>


                <div class="mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" type="submit" name="room_register" />
                </div>

            </form>
        </div>
        </div>
        </div>
        </div>
    </main>

    </div>
    </div>

</body>
</html>
