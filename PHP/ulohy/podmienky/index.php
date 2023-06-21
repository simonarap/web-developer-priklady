<?php

// 1. pomocou if-u naprogramujte ulohu, ktora vam na zaklade definovanych casovych intervalov povie ci je rano, den, alebo NoClassDefFoundError

//možnosť 1
/*$hour = 5;
if ($hour < 9) {
    echo "je ráno";
}
if ($hour >= 9 && $hour < 19) {
    echo "je deň";
}
if ($hour >= 19) {
    echo "je noc";
}*/


// možnosť 2
/*if ($hor < 8) {
    echo "este je skore rano\n";
}elseif ($hour <20){
    echo "je den\n";
}else{
    echo "uz zacina noc\n";
}*/



// 2. pomocou if-u naprogramujte ulohu, ktora dostane v premennej cislo a vypise nazov mesiaca 04 => april

// možnosť 1
/*$mounth = 2;
if ($mounth == 2) {
    echo "február";
} elseif ($mounth == 3) {
    echo "marec";
} elseif ($mounth == 4) {
    echo "april";
}*/


// možnosť 2
/*$month_num = 11;
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
echo $month_name."\n";*/



// 3. uloha - pouzite switch na desifrovanie cisla do nazvu prislusneho mesiaca

// možnosť 1
/*$mesiac = 5;

switch ($mesiac) {
    case 1:
        echo "január\n";
        echo "\n";
        break;
    case 2:
        echo "február\n";
        echo "\n";
        break;
    case 3:
        echo "marec\n";
        echo "\n";
        break;
    case 4:
        echo "apríl\n";
        echo "\n";
        break;
    case 5:
        echo "máj\n";
        echo "\n";
        break;
    case 6:
        echo "jún\n";
        echo "\n";
        break;
    default:
        echo "nepoznám";
}*/


// 4. pomocou "switch"-u naprogramujte program, ktory vie rozpoznat
// a vypisat vasu oblubenu farbu, ale len v pripade, ze je vasa oblubena farba cervena, zlta, alebo zelena zelena ---> Super, tvoja oblubena farba je zelena


$color = "modrá";

switch ($color) {
    case "zelená":
        echo "Super, moja oblubena farba je " .$color . "\n";
        break;
    case "červená":
        echo "Super, moja oblubena farba je " .$color . "\n";
        break;
    case "žltá":
        echo "Super, moja oblubena farba je " .$color . "\n";
        break;
    default:
        echo "Toto nie je moja obľúbená farba :(";
}