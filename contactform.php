<?php
ob_start();
$msg = mysqli_connect("localhost", "root", "", "databaseport");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    $select = "select name from portform where username = '$username' and email = '$email'";
    $querry = mysqli_query($msg, $insert);


    $insert = "INSERT INTO `portform`(`id`, `username`, `email`, `message`) values ('$id', '$username', '$email', '$message')";

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<div class="cover" style="background-color:black;">
        <div class="container pt-5">
            <h1 class="label text-white text-center">Contact</h1>
            <div class="row" style="padding-top: 5%; margin-left: 20%;">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 w-75">
                    <form action="" method="post">
                        <label for="username" class="form-label" style="color: white;">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                        <label for="email" class="form-label" style="color: white;">Email id:</label>
                        <input type="email"  name="email" class="form-control">
                        <label for="message" class="form-label" style="color: white;">Message:</label>
                        <input type="text-area" name="message" class="form-control"> <br>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="asset/js/bootstrap.bundle.min.jss"></script>
    <?php
    ob_end_flush();
    ?>
</body>
</html>