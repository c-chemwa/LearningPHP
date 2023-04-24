<?php
    function hello(){
            static $hello = 'Watashi wa Caleb Chemwa, nenre juuhachisai.<br>
            Watashi no senkou wa Computer Science desu.<br>
            Watashi wa Strathmre no gakusei
            Watashi wa Ngumo kara kimashita.<br>
            Douzo yoroshiku onegaishimasu.<br><br>';
            echo $hello;
    }
    hello();
    $Num1 = null;
    $Num2 = null;
    function add($Num1,$Num2){
        $Sum = $Num1+$Num2;
        echo $Sum;
    }

    add(67,33);
?>