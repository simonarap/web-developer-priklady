<?php

// 7. napiste funkciu, ktora vypise sucet dvoch cisel
/*function mojaPrvaFunkcia($meno, $rok){
    echo "Ahoj, " .$meno . " máš " .$rok . " rokov";
}
mojaPrvaFunkcia("Simona", 22);*/


/*function sucetCisel($cislo01, $cislo2){
    echo $cislo01 + $cislo2;
}
$n = 5;
$m = 6;
sucetCisel($n,$m);*/


/*2. naprogramuj funkciu, ktorá načíta vzdialenosť v kilometroch a vypíše ju v námorných míľach, ak vieme, že 1 námorná míľa je 1850 metrov. Vysledok vrati pomocou navratovej hodnoty (pouzi return)

function prevodNaNMile ($vzdialenostVKM) {
    return $vzdialenostVKM * 1850;
}
$vzdialenostVNMilach = prevodNaNMIle (3242);
echo $vzdialenostVNMilach;

// 3. naprogramuj funkciu, ktora načíta stranu kocky a vrati veľkosť jej povrchu.

function povrchKocky ($stenaA) {
    return 6*($stenaA*$stenaA);
}
$povrchKocky = $povrchKocky(5);*/


/*4. naprogramuj funkciu, ktorá načíta koľko banánov zje opičia rodina za jeden deň a počet banánov, ktoré chovateľ priviezol a vypíše, či bude stačiť toľko banánov na jeden týždeň

function opiciaRodina ($bananNaDen, $dovezene);
    $budeStacit = false;
    if(($dovezene/7)>=$bananNaDen){
        $budeStacit = true;
        return $budeStacit;
}
    $vysledok = opiciaRodina(2,40);{
    if ($vysledok);
    echo "Bananov bude dost";
    }
    else {
        echo "Bananov bude malo";
}*/


/* 5. Potrebujeme oplotiť záhradu obdĺžnikového tvaru. Zostav funkciu, ktorá načíta rozmery záhrady a dĺžku pletiva, ktoré máme kúpené a vypíše, či treba ešte pletivo dokúpiť alebo nie.

function dostPletiva ($stranaA, $stranaB, $dlzkuPletiva) {
    $obvod = 2*($stranaA + $stranaB);
    if ($obvod < $dlzkuPletiva) {
        return true;
    } else {
        return false;
    }
}

if (dostPletiva(2,3343, 654)) {
    ;
    echo "Pletiva bude dostť";
} else {
        echo "Treba dokupit pletivo";
    }*/

/* 6. Zostav funkciu, ktorá načíta teplotu vody a teplotu, od ktorej považuješ vodu za teplú a vypíše, či je táto voda teplá alebo nie.

function voda($teplotaVody){
    if ($teplotaVody >= 15){
        echo "Voda je tepla";
    } else {
        echo "Voda nie je tepla";
    }
}
voda (12);*/


/* 7. Zostav funkciu, ktorá načíta počet dievčat a počet chlapcov, ktorí prišli na tanecny kurz a vypíše, či každé dievča bude mať partnera.
function tanecna ($dievcata, $chlapci) {
    if ($chlapci >= $dievcata) {
        echo "Každý má partnera";
    } else {
        echo "Nemá každý partnera";
    }
}
tanecna (15,23);*/


// 8. Vytvor funkciu, ktorá načíta cenu automobilu a priemerú výšku sumy, ktorú môžeme mesačne na auto odložiť. Aplikácia vypíše, že je auto lacné, ak si naň dokážeme našetriť do roka a pol vrátane. Inak vypíše, že je auto drahé.

function auto ($cenaAuta, $cena) {
    $obdobie = $cenaAuta / $cena;
    if ($obdobie >= 18) {
        echo "je lacné";
            } else {
        echo "je drahé";
    }
}
auto (35000, 500);