<?php
session_start();

$nama = $_SESSION['nama'];
$lives = $_SESSION['lives'];
$skor = $_SESSION['skor'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benar</title>

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
        <h1>Hello <?php echo $nama ?>, Selamat jawaban anda benar!!!</h1>
        <h1>Lives : <?php echo $lives ?> | Skor : <?php echo $skor ?></h1>
        <a href="mulaigame.php" class="btn btn-primary">Soal Selanjutnya</a>
    </div>
</body>

</html>