<?php 
require('mysqli_connect.php');
require_once("app/models/UserModel.php");
require_once("app/controllers/UserController.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form was submitted
    $controller = new UserController($con);
    $controller->create();
} else {
    // No form submission, display the form
    require_once("app/views/home.php");
}