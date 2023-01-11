<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pswd generator</title>
    <?php
    session_start();
        require __DIR__ . './libs/helper.php';
        $pswdLength=$_GET['pswd-input'] ?? false;
        $repChar=$_GET['repChar'] ?? false;
    ?>
</head>
<body>
    <form>
        <label for="pswd-input">Quanto lunga vuoi la password? (Min 4 caratteri)</label>
        <input type="text" name='pswd-input'>
        <label for="repChar">Caratteri ripetuti?</label>
        <input type="radio" name='repChar' value='y'
        <?php if(!$repChar) echo 'checked'?>
        >
        <input type="radio" name='repChar' value='n'>
        <input type="submit" value='Genera'>
    </form>
    <?php
        $pswdLength=intval($pswdLength);
        if($pswdLength && $pswdLength>=4){
            $_SESSION['newPswd'] = str_shuffle(generatePswd($pswdLength, $repChar));
            header('Location: ./result.php');
        }
    ?>
</body>
</html>