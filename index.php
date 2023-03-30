<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("cdn.php"); include("db.php"); ?> 
    <title>Login</title>
    <link rel="icon" href="img/hotel_point.png">
</head>

<body class="bg-warning">
    <div id="layoutAuthentication">

        <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3></div>
                            
                            <div class="card-body">
                                <form method="POST" action="function/login_function.php">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" type="email" placeholder="name@example.com" required />
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password" type="password" placeholder="Password" required/>
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>
                                    </div>
                                </form>

                            </div>

                     

                    </div>
                </div>
            </div>
        </main>
        </div>



        <div id="layoutAuthentication_footer">
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
