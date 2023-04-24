<?php
    function hello(){
            static $hello = 'Watashi wa Caleb Chemwa, nenre juuhachisai.<br>
            Watashi no senkou wa Computer Science desu.<br>
            Watashi wa Strathmre no gakusei desu.<br>
            Watashi wa Ngumo kara kimashita.<br>
            Douzo yoroshiku onegaishimasu.';
            echo $hello;
    }
    hello();
    
?>