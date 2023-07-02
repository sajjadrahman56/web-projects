<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        form{
          background: #fff;;
          padding: 15px;
          box-shadow: 0px 0px 10px 0px;
          border-radius: 20px;
        }
      </style>
</head>

<body>
    <div class="conatiner">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 text-secondary">

                <form action=" registerAction.php" method="post">
                    <div class="mb-3">
                      <h3 class="text-center text-secondary">Registration</h3>
                    </div>
            
                    <div class="mb-3">
                    
            
                    
                        <input type="text" name="l_username" class="form-control" name ="f_username" placeholder="user name">
                    </div>
            
            
                    <div class="mb-3">
                                <input type="email" name="l_username" class="form-control" name ="f_email" placeholder ="email">
                    </div>
                
                  <div class="mb-3">
                     
                        <input type="number" name="l_pass" class="form-control" placeholder="phone">
                    </div>
                    
                    <div class="mb-3">
                        <input type="password" name="l_pass" class="form-control" placeholder="password">
                    </div>
            
             <div class="mb-3">
                        <input type="password" name="l_pass" class="form-control" placeholder="confirm password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary col-12">Register</button>
                  have account ? <a href="login.php"> Log in</a>
            
                  </form>

            </div>
        </div>
    </div>
  
</body>

</html>