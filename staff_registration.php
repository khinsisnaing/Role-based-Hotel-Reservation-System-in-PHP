<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("cdn.php"); ?> 
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
            
        <h3 class="mt-4">Staff Registration</h3>
        <br>
        <div class="card mb-4">
        
        <div class="card-body">
                        

            <form method="POST" action="function/staff_register.php">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffname">Name</label>
                            <input type="text" name="staffname" class="form-control form-control-lg" required />
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffnrc">NRC / Passport</label>
                            <input type="text" name="staffnrc" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffdob">Date of Birth</label>
                            <input type="date" name="staffdob" class="form-control form-control-lg" required />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4" >
                        <div class="form-outline">
                        <label class="select form-control-sm">Gender</label>
                            <select class="form-select form-select-lg staffrole" aria-label=".form-select example" name="staffgender" required>
                                <option value="1" readonly>Choose Option</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">  
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="staffphone">Phone Number</label>
                        <input type="number" name="staffphone" placeholder="959-----------" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffentry">Entry Date</label>
                            <input type="date" name="staffentry" placeholder="DD/MM/YY" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffaddress">Address</label>
                            <input type="text" name="staffaddress" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="form-outline">
                        <label class="select form-control-sm">Job Role</label>
                        <select class="form-select form-select-lg" aria-label=".form-select example" name="staffrole" required >
                            <option value="1" readonly>Choose option</option>
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                            <option value="Housekeeper">Housekeeper</option>
                            <option value="Worker">Worker</option>
                            <option value="Guard">Guard</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffsalary">Salary</label>
                            <input type="number" name="staffsalary" placeholder="MMK" class="form-control form-control-lg" required />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                    <label class="select form-control-sm">Choose Working Hours</label>
                        <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="staffworkinghr" required >
                        <option value="1" readonly>Choose option</option>
                        <option value="Morning Shift">Morning Shift (5:00 am - 12:00 pm)</option>
                        <option value="Evening Shift">Evening Shift (12:00 pm - 7:00 pm)</option>
                        <option value="Night Shift">Night Shift (7:00 pm - 2:00 am)</option>
                        </select>
                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <button class="btn btn-primary btn-lg" type="submit" name="staff_register">Submit</button>
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
