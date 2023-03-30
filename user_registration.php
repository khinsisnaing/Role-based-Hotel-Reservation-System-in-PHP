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
            
        <h3 class="mt-4">User Registration</h3>
        <br>
        <div class="card mb-4">
        
        <div class="card-body">
                        

            <form method="POST" action="function/user_register.php">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="username">Name</label>
                            <input type="text" name="username" class="form-control form-control-lg" required />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="select form-control-sm">Job Role</label>
                        <select class="form-select form-select-lg" aria-label=".form-select example" name="role" required> 
                            <option value="1">Choose option</option>
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                        </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg" required/>
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" name="password" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                </div>


                <div class="mt-4 pt-2">
                    <button class="btn btn-primary btn-lg" type="submit" name="user_register" >Submit</button>
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



