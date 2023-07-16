 
 
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

                <form action="welcome.php" method="get" >

                    <div>
                        <img class="d-flex mx-auto" src="log-in.png" height="200" width="300" alt="">
                    </div>

                    <div    class="mt-2 p-2 "> Name : <input class="mx-3" type="text" name="name" required><br></div>
                   
                   <div    class="mt-2 p-2 " > E-mail : <input class="mx-3" type="text" name="email" required><br></div>
                   
                    <div   class="mt-2 p-2 " >
                        not register ? <a href="register.php">register</a>   
                    </div>
                    
                    <input class="mt-1 p-2   text-primary " type="submit">
                </form>

            </div>
        </div>
    </div>
</body>
</html>

 