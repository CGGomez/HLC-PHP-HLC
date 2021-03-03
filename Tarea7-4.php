<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        echo ++$a; //Incrementa $a en 1 y lo muestra
        echo "<br>";
        echo ++$a*2; //Incrementa $a en 1, mostrandolo y después lo múltiplica por 2
        echo "<br>";
        echo ++$b;
        echo "<br>";
        echo ++$b*2;
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        echo --$a*2; //Reduce $a en 1, lo muestra y lo múltiplica por 2.
        $b="pepe";
        echo "<br>";
        $b="pepe";
        echo "<br>";
    //probando el operador +=n;
        print_r("Probando el operador +=n");
        echo "<br>";
        echo $a+=5; //Suma de la variable $a con el valor 5.
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a+=5; //Multiplica $a por 2 y se le suma el valor 5.
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b+=5; //Acción no válida, el valor de concatenar es .=; en este caso dará error.
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b+=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "<br>";
        echo $a-=5; //Se le resta a $a el valor 5.
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a-=5; //Multipilica $a por 2 y después le resta 5 a ese resultado.
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $b-=5; //Acción no válida, el valor para concatenar es .=; en este caso dará error.
        echo "<br>";
        echo $b;
        echo "<br>";
        echo 2*$b-=5;
        echo "<br>";
        echo 2*$b;
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        echo $a++; //aumenta el valor de $a en 1.
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a++; //Multiplica $a por 2 y después incrementa en 1.
        echo "<br>";
        echo 2*$a;
        echo "<br>";
        echo $a--; //Resta el valor de $a en 1.
        echo "<br>";
        echo $a;
        echo "<br>";
        echo 2*$a--; //Multiplica $a por 2 y después resta en 1.
        echo "<br>";
        echo 2*$a;
?>