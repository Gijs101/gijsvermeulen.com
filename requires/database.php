<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 */
$hostname = "localhost";
$dbname = "u49677p46778_gijs";
$dbusername = "u49677p46778_gijsomans";
$dbpw = "Gijs8898";
try {    $dbh = new PDO( "mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpw);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
die ( "Fout met de database: {$e->getMessage()} " );
}
?>


