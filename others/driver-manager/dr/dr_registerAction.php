<?php

    include 'dr_config.php';

    $rfrist_name = $_POST['rf_name'];
    $rlast_name = $_POST['rl_name'];
    $rphone = $_POST['r_phone'];
    $rcar = $_POST['r_car'];
    $remail = $_POST['r_email'];
    $rpass = $_POST['r_pass'];
    $rc_pass = $_POST['rc_pass'];


    
   
    $name_pattern = "/[A-Za-z .]{3,20}/";
    $phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
    $rcar_pattern ="/^[0-9]+$/";
    $email_pattern = "/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/";
    $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

    $duplicate_email = mysqli_query($conn, "SELECT * FROM `dr-registration` WHERE email='$remail'");
    

    if(mysqli_num_rows($duplicate_email) > 0)
    {
        echo "<script>alert('Email Already Taken')</script>";
        echo "<script>location.href='dr_reg.php'</script>";
    }

    elseif(!preg_match($name_pattern, $rfrist_name))
    {
        echo "<script>alert('Name only conatin latters')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }
    elseif(!preg_match($name_pattern, $rlast_name))
    {
        echo "<script>alert('Name only conatin latters')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }
    elseif(!preg_match($phone_pattern, $rphone))
    {
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }
    elseif(!preg_match($rcar_pattern, $rcar))
    {
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }

    elseif(!preg_match($email_pattern, $remail))
    {
        echo "<script>alert('Invalid Email')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }

    elseif(!preg_match($pass_pattern, $rpass))
    {
        echo "<script>alert('Invalid Password')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }

    elseif($rpass!=$rc_pass)
    {
        echo "<script>alert('Password & confirm Password not matched')</script>";
        echo "<script>location.href='dr_register.php'</script>";
    }
    else
    {
        $insert_query = "INSERT INTO `dr-registration`(`first-name`, `last-name`, `phone`,`car-model` ,`email`, `password`) 
        VALUES ('$rfrist_name','$rlast_name','$rphone',$rcar,'$remail','$rc_pass')";
       
        if(!mysqli_query($conn, $insert_query))
        {
            die("Not Inserted...!!!");
        }
        else
        {
            echo "<script>alert('Data Inserted')</script>";
            echo "<script>location.href='dr_log.php'</script>";
        }
    }

?>