<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //print_r($_SESSION);
        session_unset();
        session_destroy();
        header("Location: http://localhost/fingerprint/biometrics/index.php");
        exit();
    ?>
</body>
</html>