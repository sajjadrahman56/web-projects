<?php


$user_name_get = $_GET['name'];
$user_email_get = $_GET['email'];

   

// Initialize an array to store any validation errors
$errors = array();

// Validate name field
if (empty($user_name_get)) {
    $errors[] = "Name is required";
} else {
    // Check if the name contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $user_name_get)) {
        $errors[] = "Only letters and whitespace are allowed in the name field";
    }
}

// Validate email field
if (empty($user_email_get)) {
    $errors[] = "Email is required";
} else {
    // Check if the email is valid
    if (!filter_var($user_email_get, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
}

// Check if there are any validation errors
if (!empty($errors)) {
    // Display the errors to the user
    foreach ($errors as $error) {
        echo "<h1 style='color: red;'>".$error."</h1>" ."<br>";
    }
} else {
    // All fields are valid, continue with further processing
    
     
echo "all right" ;

 
}






?>


   