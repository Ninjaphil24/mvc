<?php
class UserController {
    protected $con;

    public function __construct($con) {
        $this->con = $con;
    }
    public function create() {
        // Handle form submission
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $store = new Employee();
        $result = $store->createEmployee($this->con, $first_name, $last_name, $email);

        if ($result === true) {
            header("Location: /success.php"); 
            exit; // Exit to prevent further execution
        } else {
            // $result contains an error message
            $error_message = $result;
        }
    }
}
