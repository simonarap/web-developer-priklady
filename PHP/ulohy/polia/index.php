<?php

// 9. naprogramujte algoritmus, kde si nadefinujete pole dni v tyzdni a vypisete ich vsetky

$dniVTyzdni = array("Pondelok", "Utorok", "Streda", "Štvrtok", "Piatok", "Sobota", "Nedeľa");
   $pocet = count($dniVTyzdni);
   for ($i = 0; $i < $pocet; $i++) {
       echo $dniVTyzdni [$i] . "\n";
   }
