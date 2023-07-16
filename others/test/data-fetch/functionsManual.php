<?php
    include 'db.php';
    
    function display_data()
    {
        global $con;
        
        $query = "SELECT * FROM `register-info` ";

        $result = mysqli_query($con,$query);

        return $result;
    }

?>