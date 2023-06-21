<?php

/*setlocale(LC_ALL, "sk_SK.UTF-8");*/
/*setlocale(LC_ALL, 'slovak');*/
/*setlocale(LC_ALL, null);
setlocale(LC_ALL, 'sk_SK','Slovak');*/

$datum_narodenia = "03.04.2000";
$znamka = 1.5;
$rok = "septembra 2022";
$znamka =  str_replace(".", ",", $znamka);
echo "Študent Jozef mrkvička sa narodil " .$datum_narodenia;
echo ", z maturitnej skúšky má známku " .$znamka;
echo " a od " .$rok;
echo " nastúpi do nového zamestnania ako PHP programátor. ";
echo " <br><br> V Bratislave dňa " .date("d.m.Y");

/*echo "Maturita formalita " . str_replace(".", ",", $znamka);*/
/*printf(", z maturitnej skúšky má známku %.2f ", $znamka);*/
