<?php
session_start();

$lives = $_SESSION['lives'];
$skor = $_SESSION['skor'];

if($lives != 0){
    
    $a1 = rand(1,20);
    $a2 = rand(1,20);
    
    $_SESSION['hasil'] = $a1 + $a2;
}else{
    header('Location: gameover.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal</title>

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("background.jpg");
        }
        .back{
            background: #fff;
            padding: 10px;
        }
    </style>

</head>

<body>
    <div class="container p-5 mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 back">
                <center>
                    <h1>Hello <?php echo $nama ?>, Semangat You Can Do The Best!!!</h1>
                    <h1>Lives : <?php echo $lives ?> | Skor : <?php echo $skor ?></h1>
                    <h2>Berapakah </h2>
                    <h2 class="display-4"><?php echo $a1; echo '+'; echo $a2 ?></h2>
                    <form action="cekjawaban.php" method="post">
                        <input type="text" name="jawaban" class="form-control mb-3" placeholder="Masukkan jawaban anda" autocomplete="off">
                        <button type="submit" class="btn btn-primary" name="btnJawab">Jawab</button>
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>

</html>