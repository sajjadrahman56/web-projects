<?php

include 'config.php';

$id = $_REQUEST['id'];
echo $id;
$fetchQuery = "SELECT `id`, `name`, `price`, `image` FROM `product` WHERE id='$id' ";

$allDataQuery = mysqli_query($conn,$fetchQuery);

$arrayData = mysqli_fetch_array($allDataQuery);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Form </title>
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
        <div>Update Form </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 text-secondary">

                <form action="updateAction.php" method="post" enctype="multipart/form-data">

                    <div class="mt-2 ">
                        Product Name :
                        <input class="form-control" type="text" name="name" value="<?php echo $arrayData['name'] ?>">
                        <br>
                    </div>

                    <div class="mt-2 ">
                        Product Price : <input class="form-control" type="text" name="price"
                            value="<?php echo $arrayData['price'] ?>">
                        <br>
                    </div>

                    <div class="mt-2">
                        Product Image:
                        <input class="form-control" type="file" name="image" id="imageInput" required>
                        <br>
                        <img id="previewImage" width="100px" src="<?php echo $arrayData['image'] ?>" alt="">
                    </div>
                    <input type="hidden" value="<?php echo $arrayData['id'] ?>" name="id" id="">
                    <div>
                        <button type="login" class="btn btn-primary col-12">Insert</button>
                    </div>

                </form>

            </div>
        </div>



    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#imageInput').on('change', function () {
                var file = this.files[0];

                if (file) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        var imageData = e.target.result;

                        $('#previewImage').attr('src', imageData);
                    }

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

</body>

</html>