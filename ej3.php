<?php

$paroimpar = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($paroimpar);
$par = [];
$impar = [];
$pospar = 0;
$posimpar = 0;

foreach ($paroimpar as $elem){
    if ($elem % 2 == 0){
            $par[$pospar] = $elem;
            $pospar++;
            //array_push($par, $elem); esta instrucción sustituye a las 2 anteriores
    } else {
        $impar[$posimpar] = $elem;
        $posimpar++;
            //array_push($impar, $elem); esta instrucción sustituye a las 2 anteriores

    }
}

echo "El array original: ";
implode("-", $paroimpar);
echo "<br>";
echo "El array de pares: ";
implode("-", $par);
echo "<br>";
echo "El array de impares: ";
implode("-", $impar);
echo "<br>";

?>