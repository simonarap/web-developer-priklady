<?php

/*príklad 1
$cislo = 20;

while ($cislo <= 10) {
    echo $cislo . " ";
    $cislo++;
    $cislo+=2; //párne číslo
}
echo "<br> teraz som von z cyklu ";
echo "<br> v premennej cislo mame hodnotu: " .$cislo;*/


/*príklad 2 - nevieme počet opakovaní
$cislo = 20;

do {
    echo "Číslo je: " .$cislo;
    $cislo++;
} while ($cislo <= 19);

echo "<br> teraz som von z cyklu ";
echo "<br> v premennej cislo mame hodnotu: " .$cislo;*/


/*príklad 3 - vieme počet opakovaní
for ($i = 1; $i <= 10; $i++) {
    echo "Číslo je: " .$i . "\n";
}
echo "\nteraz som von z cyklu\n";*/


// 5. Napíš program, ktorý zo znakov hviezdička ('*') vytvorí takýto
// trojuholník: v 1. riadku je jedna hviezdička, v 2. dve, v 3. tri, …,
// v n-tom riadku je n hviezdičiek. Môžeš dostať takýto výstup:
// zadaj n: 6
// *
// **
// ***
// ****
// *****
// ******

/*$n = 6;
for($i = 1; $i < $n; $i++){
    echo str_repeat("*", $i);
    echo "<br>";
}*/

/* 5. vykreslit piramidu naopak  - hore hlavou
$n = 15;
for($i = $n; $i >= 1; $i--){
    echo str_repeat("*", $i);
    echo "<br>";
}*/



// 6. s pouzitim cyklu naprogramujte algoritmus, ktory dostane v premennej cislo, a vrati/vypise vam sucet 1..n