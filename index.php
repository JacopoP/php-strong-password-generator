<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pswd generator</title>
    <?php
        require __DIR__ . './libs/helper.php';
        $pswdLength=$_GET['pswd-input'] ?? false;
    ?>
</head>
<body>
    <form>
        <label for="pswd-input">Quanto lunga vuoi la password? (Min 4 caratteri)</label>
        <input type="text" name='pswd-input'>
        <input type="submit" value='Genera'>
    </form>
    <?php
        $pswdLength=intval($pswdLength);
        if($pswdLength && $pswdLength>=4){
            echo ('<h1>' .str_shuffle(generatePswd($pswdLength)) .'</h1>');
        }
    ?>
</body>
</html>