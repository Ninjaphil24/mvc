<?php
require('../../mysqli_connect.php');

function createEmployee($con, $first_name, $last_name, $email){
    global $con;

    $query = "INSERT INTO users(first_name, last_name, email)
            VALUES
            (?,?,?)";

$stmt = $con->prepare($query);

$stmt->bind_param(
    "sss",
    $first_name,
    $last_name,
    $email
);
// Execute the prepared statement
if ($stmt->execute()) {
    // Success! Data inserted into the table.
    header("Location: success.php"); // Redirect to confirmation.php
    exit; // Exit to prevent further execution
} else {
    // Check if the error is due to duplicate entry (unique constraint violation)
    if ($con->errno === 1062) {
        $error_message = "Duplicate entry. Please check your input.";
    } else {
        // Other errors
        $error_message = "Error: " . $stmt->error;
    }
}

// Close the statement and database connection
$stmt->close();
$con->close();
}