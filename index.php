<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pswd generator</title>
    <?php
        $pswdLength=$_GET['pswd-input'] ?? false;
        function generatePswd($length){
            $charUpArray=['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'U', 'W', 'X', 'Y', 'Z'];
            $charLowArray=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
            $charNumArray=['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
            $charSpecArray=['!', '£', '$', '%', '&', '/', '=', '?', '@', '.', ';', ':'];
            $pswd= '';
            $nUp=rand(1, ($length - 3));
            $nLow=rand(1, ($length - 2 - $nUp));
            $nNum=rand(1, ($length - 1 - $nUp - $nLow));
            $nSpec=$length - $nUp - $nLow - $nNum;
            for($i=0; $i<$nUp; $i++){
                $pswd.=$charUpArray[rand(0, 25)];
            }
            for($i=0; $i<$nLow; $i++){
                $pswd.=$charLowArray[rand(0, 25)];
            }
            for($i=0; $i<$nNum; $i++){
                $pswd.=$charNumArray[rand(0, 9)];
            }
            for($i=0; $i<$nSpec; $i++){
                $pswd.=$charSpecArray[rand(0, 12)];
            }
            return $pswd;
        }
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