<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    require __DIR__ . './libs/helper.php';    
    ?>
</head>
<body>
    <?php
        echo ('<h1>' .$_SESSION['newPswd'] .'</h1>');
    ?>
</body>
</html>