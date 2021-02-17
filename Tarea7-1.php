<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &;
    print_r($a&$b);
    echo "<br>";
    print_r($A&$B);
    echo "<br>";
    //operador |;
    print_r($a|$b);
    echo "<br>";
    print_r($A|$B);
    echo "<br>";
    //operador ^;
    print_r($a^$b);
    print_r($A^$B);
    echo "<br>";
    //repite el código para el operador >>;
    echo "<br>";
    print_r($A >> $B);
    print_r($a >> $b); //El operador realiza dos pasos a la derecha, cada paso quiere decir dividir por 2
    //repite el código para el operador <<;
    echo "<br>";
    print_r($a << $b);
    print_r($A << $B); //El operador realiza dos pasos a la izquierda, cada paso quiere decir multiplicar por 2
    //operador ~
    print_r(~$a);
?>