<?php
$host = "localhost";
$username = "root";
$password = "virtuoso";
$dbname = "employees";

// Create a new mysqli object to establish a database connection
try {
    $con = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        throw new Exception("Connection failed: " . $con->connect_error);
    }
    mysqli_set_charset($con, 'utf8');
} catch (Exception $ex) {
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e) {
    print "The system is busy please try later";
}
