<?php 
require('mysqli_connect.php');
require_once("app/models/UserModel.php");
require_once("app/controllers/UserController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Input</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="./public/index.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<h1>Εταιρία Λυρικού Θεάτρου Ελλάδος</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form was submitted
    $controller = new UserController();
    $controller->create();
} else {
    // No form submission, display the form
    require_once("app/views/home.php");
}
?>

</body>
</html>			