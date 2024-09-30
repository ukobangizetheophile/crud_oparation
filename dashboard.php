<?php
session_start();
if (!isset($_SESSION['username'])) {
    session_destroy();
    header('location: index.php');
}else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <span>Welcome Mr./Mrs :</span>
                        <span class="text-primary">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                        </span>
                    </h5>
                </div>
                <div class="card-body">
                <a href="logout.php"><button class="btn btn-danger">Logout</button></a>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
    <?php
}
?>