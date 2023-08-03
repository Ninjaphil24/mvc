<?php
require_once('./models/UserModel.php');

// Initialize
$first_name = $last_name = $email = "";

if (isset($_POST['submit'])) {

    // Retrieve user input
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $result = createEmployee($con, $first_name, $last_name, $email);

        // Handle result
        if ($result === true) {
            header("Location: success.php"); // Redirect to confirmation.php
            exit; // Exit to prevent further execution
        } else {
            // $result contains an error message
            $error_message = $result;
        }
    }