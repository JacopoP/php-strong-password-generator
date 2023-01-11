<?php
    session_start();

    function generatePswd($length, $rep){
        $charUpArray=['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'U', 'W', 'X', 'Y', 'Z'];
        $charLowArray=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $charNumArray=['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $charSpecArray=['!', '$', '%', '&', '/', '=', '?', '@', '.', ';', ':'];
        $pswd= '';
        $nUp=rand(1, ($length - 3));
        $nLow=rand(1, ($length - 2 - $nUp));
        $nNum=rand(1, ($length - 1 - $nUp - $nLow));
        $nSpec=$length - $nUp - $nLow - $nNum;
        for($i=0; $i<$nUp; $i++){
            $char=$charUpArray[rand(0, 25)];
            if($rep=='y' && str_contains($pswd, $char)){
                $i--;
            }
            else{
                $pswd.=$char;
            }
        }
        for($i=0; $i<$nLow; $i++){
            $char=$charLowArray[rand(0, 25)];
            if($rep=='y' && str_contains($pswd, $char)){
                $i--;
            }
            else{
                $pswd.=$char;
            }
        }
        for($i=0; $i<$nNum; $i++){
            $char=$charNumArray[rand(0, 9)];
            if($rep=='y' && str_contains($pswd, $char)){
                $i--;
            }
            else{
                $pswd.=$char;
            }
        }
        for($i=0; $i<$nSpec; $i++){
            $char=$charSpecArray[rand(0, 10)];
            if($rep=='y' && str_contains($pswd, $char)){
                $i--;
            }
            else{
                $pswd.=$char;
            }
        }
        return $pswd;
    }