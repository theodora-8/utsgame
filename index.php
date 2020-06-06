<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('Location: login.php');
}else{
    $nama = $_SESSION['nama'];
    $_SESSION['skor'] = 0;
    $_SESSION['lives'] = 5;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO <?php echo $nama ?></title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("background.jpg");
        }
        .container{
            background: #fff;
        }
    </style>
</head>

<body>
    <div class="container p-5 mt-5">
        <center>
            <h1 class="display-1">Hello <?php echo $nama ?></h1>
            <h1 class="display-5">Selamat datang di Game ini</h1>
            <a href="mulaigame.php" class="btn btn-primary">Mulai</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </center>
    </div>

</body>

</html>