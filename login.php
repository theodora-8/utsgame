<?php
session_start();
if(isset($_POST['btnLogin']))
{
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['loggedin'] = 1;
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>

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
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Masuk</h1>
                <form action="" method="post">
                    <input type="text" class="form-control mb-4" name="nama" required placeholder="Nama Anda">
                    <input type="email" class="form-control mb-4" name="email" required placeholder="Email Anda">
                    <button type="submit" class="btn btn-primary" name="btnLogin">Submit</button>
                </form>
            </div>
        </div>
        
    </div>
</body>

</html>