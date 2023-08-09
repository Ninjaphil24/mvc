<?php
class UserController {
    public function index() {
        include './app/views/home.php';
    }
    public function create() {
        global $con;
        // Handle form submission
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $store = new Employee();
        $result = $store->createEmployee($con, $first_name, $last_name, $email);

        if ($result === true) {
            header("Location: /success.php"); 
            exit; // Exit to prevent further execution
        } else {
            // $result contains an error message
            $error_message = $result;
        }
    }
}
