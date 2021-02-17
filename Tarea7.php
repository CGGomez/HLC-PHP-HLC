<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos  
    echo ((real)$a1),"<br>"; //Este no mostrará nada pues real no corresponde a ningún tipo
    echo ((double)$a2),"<br>"; //Está permitido su cambio, se encuentra dentro del rango del tipo
    echo ((float)$a3),"<br>"; //Está permitido su cambio, está dentro del rango del tipo
    echo ((integer)$a4),"<br>"; //Está permitido el cambio, debido a que está dentro del rango
    echo ((int)$a6),"<br>"; //int e integer son similares por lo que se el cambio es posible
    echo ((int)$a8),"<br>"; //No será posible pues no se puede convertir una cadena de texto literal a numerico
    echo ((double)$a9),"<br>"; //El número se verá afectado, pero la cadena no
    echo ((int)$a10),"<br>"; //Es un espacio y no tiene valor numérico para el cambio
 
?> 