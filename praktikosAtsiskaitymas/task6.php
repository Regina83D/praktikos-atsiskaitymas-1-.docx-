<?php

/*6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų
tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius,
reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)*/

$int1 = readline('įrašykite pirmą skaicių: ');
$int2 = readline('įrašykite antrą skaicių: ');

if (is_numeric($int1) && is_numeric($int2)) {
    $total = pow (($int1 * $int2), 2);
    echo $int1. ' dauginam iš '. $int2. ' dvigubai pakeltas '. $total;
}else {
    echo 'Error įvedėtė ne skaičių';
}