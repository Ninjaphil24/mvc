<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Create a new mysqli object to establish a database connection
try{
    
    $con = new mysqli($host, $username, $password, $dbname);
    mysqli_set_charset($con, 'utf8');

}catch (Exception $ex){
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e){
    print "The system is busy please try later";
}