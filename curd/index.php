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
        }
    </style>
</head>

<body>
    <div class="conatiner">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 text-secondary">

                <form action="insert.php" method="post" enctype="multipart/form-data">

                    <div class="mt-2 ">
                        Product Name : <input class="form-control" type="text" name="name" required><br>
                    </div>

                    <div class="mt-2 ">
                        Product Price : <input class="form-control" type="text" name="price" required><br>
                    </div>

                    <div class="mt-2">
                        Product Image :
                        <input class=" form-control" type="file" name="image" required><br>
                    </div>

                    <div>
                        <button type="login" class="btn btn-primary col-12">Insert</button>
                    </div>

                </form>

            </div>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    include 'config.php';
                    $allData = mysqli_query($conn,"SELECT * FROM `product`");

                    while($row=mysqli_fetch_array($allData))
                    {
                    echo"
                    <tr>
                     <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><img src='$row[image]' alt='image missing' width='100px' height='100px'></td>
                    <td><a href='update.php ?id=$row[id]' class='btn btn-warning'>Update</a></td>
                    <td><a href='delete.php ?id=$row[id]' class='btn btn-danger'>Delete</a></td>   
                    </tr>
                    ";
                    }
                    ?>



                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>