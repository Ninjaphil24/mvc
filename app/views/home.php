<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apply</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" href="./public/form.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>


  <div class="box"> 
<form method="POST" action="index.php" enctype="multipart/form-data">
<h2>Input form</h2>
    <div class="inputBox">
        <input type="text" id="first_name" name="first_name" required><br>
        <label for="first_name">First Name:</label>
    </div>
    <div class="inputBox">
        <input type="text" id="last_name" name="last_name" required><br>
        <label for="last_name">Last Name:</label>
    </div>
    <div class="inputBox">
        <input type="email" id="email" name="email" required><br>
        <label for="email">Email:</label>
    </div>
     <br> <br>
    <div class="inputBox">
        <input type="submit" name="submit" value="Υποβολή">
    </div>
    </form>


</div>
</section>
</body>
</html>			