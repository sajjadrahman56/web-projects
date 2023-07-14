<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-4VPsOUdI8CYUvxRql7/6z7tcwXH9vKo8XYLTcaJr6rqd/2Krnb4M2VteDgOmmqTTjuvV23h/19JK75eLfqkzWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">
            <div class="container bg-danger   text-white">
                <div class="container">
                    <h1 class="text-center">I AM MANAGER</h1>
                    <div class=" m-2 p-5 container bg-dark text-white">
                        <form action="data_get_send.php" method="POST" class=" ">
                            <div class="mt-2">
                                <label for="car_number">Car number :</label>
                                <input type="text" id="car_number" name="car_number" required>
                            </div>

                            <div class="mt-2">
                                <label for="status">Status:</label>
                                <select class="mx-5" id="status" name="status" required>
                                    <option class="bg-success" value="present">Available</option>
                                    <option class="bg-danger" value="absent">Not Available</option>
                                </select>
                            </div>
                            <div class="mt-2">
                                Amount:
                                <input class="mx-4" type="number" id="date" name="amount" value=0>
                            </div>

                            <div class="mt-2">
                                <label for="date">Date:</label>
                                <input class="mx-5" type="date" id="date" name="date" required>
                            </div>

                            <div class="mt-2 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>                     

                        </form>
                    </div>

                    <div class="container">
                        <h4 id="popupText1">more about</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var popupText = document.getElementById("popupText");

            popupText.addEventListener("click", function () {
                alert("This is the alert message!");
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>