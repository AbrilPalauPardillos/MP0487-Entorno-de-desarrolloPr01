<?php
$sumaTotal = 0;
$pares = 0;
$impares = 0;

echo "Números generados: ";
do{
    $numero = rand(0,20);
    echo "$numero ";

    $sumaTotal += $numero;
    
    if ($numero % 2 == 0){
        $pares++;
    }else{
        $impares++;
    }
}while($sumaTotal <= 100);


echo"La suma total de los valores són: " . $sumaTotal . "<br>";
echo "El total de números pares: " . $pares . "<br>";
echo "El total de números impares: " . $impares . "<br>";

?>