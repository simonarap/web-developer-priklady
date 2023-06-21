<?php
function sucet($cis1, $cis2) {
    //* Vo vnútri funkcie sa mozu pouzit dalsie PHP prikazy, ktore rozsiruju aplikacnu logiku
    return $cis1 + $cis2;
}

function rozdiel($cis1, $cis2) {
    return $cis1 - $cis2;
}

function sucin($cis1, $cis2) {
    return $cis1 * $cis2;
}

function podiel($cis1, $cis2) {
    return $cis1 / $cis2;
}

function modulo($cis1, $cis2) {
    return $cis1 % $cis2;
}



$cislo1 = 10;
$cislo2 = 8;

echo "Výsledkom sčítania hodnôt ".$cislo1." a ".$cislo2." je ".sucet($cislo1, $cislo2);
echo "<br>Výsledkom odčítania hodnôt ".$cislo1." a ".$cislo2." je ".rozdiel($cislo1, $cislo2);
echo "<br>Výsledkom násobenia hodnôt ".$cislo1." a ".$cislo2." je ".sucin($cislo1, $cislo2);
echo "<br>Výsledkom delenia hodnôt ".$cislo1." a ".$cislo2." je ".podiel($cislo1, $cislo2);
echo "<br>Výsledkom zvyšku po delení (modulo) hodnôt ".$cislo1." a ".$cislo2." je ".modulo($cislo1, $cislo2);