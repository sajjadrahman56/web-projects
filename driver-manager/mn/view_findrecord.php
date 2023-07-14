

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

            <div class="container bg-danger mt-5">
                <div class="container">
                    <h1 class="text-center animated-text">HISTORY</h1>
                    <h4 class="text-center ">of the Driver</h4>

                    <div class="container  text-white justify-content-center">
                        <form action="retrive_attendance.php" method="GET">

                            <div class="mt-3 text-center">
                               
                                <input type="text" id="search_car_number" name="car_number" required>
                            </div>
                            <div class="mt-2 text-center ">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                                <br>
                            </div>
                        </form>
                    </div>

                    <!-- ---------------------------- -->

                    <div class="container">
                        <h4 id="popupText">more about</h4>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <script>

        function CustomAlert() {
            this.alert = function (message, title) {
                document.body.innerHTML = document.body.innerHTML + '<div id="dialogoverlay"></div><div id="dialogbox" class="slit-in-vertical"><div><div id="dialogboxhead"></div><div id="dialogboxbody"></div><div id="dialogboxfoot"></div></div></div>';

                let dialogoverlay = document.getElementById('dialogoverlay');
                let dialogbox = document.getElementById('dialogbox');

                let winH = window.innerHeight;
                dialogoverlay.style.height = winH + "px";

                dialogbox.style.top = "100px";

                dialogoverlay.style.display = "block";
                dialogbox.style.display = "block";

                document.getElementById('dialogboxhead').style.display = 'block';

                if (typeof title === 'undefined') {
                    document.getElementById('dialogboxhead').style.display = 'none';
                } else {
                    document.getElementById('dialogboxhead').innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i> ' + title;
                }
                document.getElementById('dialogboxbody').innerHTML = message;
                document.getElementById('dialogboxfoot').innerHTML = '<button class="pure-material-button-contained active" onclick="customAlert.ok()">OK</button>';
            }

            this.ok = function () {
                document.getElementById('dialogbox').style.display = "none";
                document.getElementById('dialogoverlay').style.display = "none";
            }
        }

        let customAlert = new CustomAlert();
    </script>


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