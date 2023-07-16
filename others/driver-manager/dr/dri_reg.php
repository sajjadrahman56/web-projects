<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Driver Registration</title>
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 20px;
        }
    </style>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 text-secondary">

                <form action="dr_registerAction.php" method="post">

                    <div class="mb-3">
                        <h3 class="text-center text-secondary">Registration as Driver</h3>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="rf_name" placeholder=" First Name" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="rl_name" placeholder=" Last Name" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="r_phone" placeholder=" Phone Number" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" name="r_car" placeholder=" Car model no" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="r_email" placeholder=" Email" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" name="r_pass" placeholder=" Password" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" name="rc_pass" placeholder=" confirm password" required>
                        </div>
                    </div>

               
                    
                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary col-12">Send</button>
                        </div>
                    </div>
                    <h6>have an account ? <a href="dr_log.php">log in</a> </h6>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
