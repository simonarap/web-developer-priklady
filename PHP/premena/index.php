<?php
// http://localhost/premena/index.php?x=1024

include "hlavicka.php";

/*$mojemeno = $_GET["meno"];
$mesto = $_GET["mesto"];
$psc = $_GET["psc"];


if (isset($_GET["stat"])) {
    $stat = $_GET ["stat"];
    echo "<p> $stat </p>";
}

echo "<p> $mojemeno </p>";
echo "<p> $mesto </p>";
echo "<p> $psc </p>";*/


echo "<h1>Premena jednotiek:</h1>";
$mojax = $_GET["x"];
echo $mojax . " B = " . $mojax / 1024 . " KiB";



include "pata.php";
?>