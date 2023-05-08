<?php
    /*$Num1 = null;
    $Num2 = null;
    function add($Num1,$Num2){
        $Sum = $Num1+$Num2;
        echo $Sum;
    }

    add(67,33);
    */

    $fruits = ['Mango', 'Banana', 'Orange '];
    $length = count($fruits);
    
    for ($x=0; $x < $length ; $x++) {
        echo $fruits[$x];
        echo "<br>";
    }

    $cars = array("Volvo" , "Nissan" , "Volkswagen");
    $length= count($cars);

    foreach($cars as $key => $value){
        echo "I love the " .$value. " very much.";
        echo "<br>";
    }

?>