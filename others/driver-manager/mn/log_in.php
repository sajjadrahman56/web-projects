<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        form {
            background: #fff;
            ;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 20px;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-dark text-white">
    <div class="conatiner">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5 col-md-5 col-sm-6 text-secondary">

                <form action="mn_logAction.php" method="post" id="loginForm">

                    <div class="mb-3">
                        <h3 class="text-center text-secondary">Log in as Manager</h3>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="l_name" placeholder=" name" required>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" name="l_pass" placeholder=" Password" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <a class="text-muted" href="../index.html">home ? </a>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary col-12 text-center">Log In</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function () {
            var form = document.getElementById("loginForm");
            form.style.animation = "fadeOut 1s forwards";
        });
    </script>
</body>

</html>