<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 */
$hostname = "db.gijsvermeulen.com";
$dbname = "md450226db414902";
$dbusername = "md450226db414902";
$dbpw = "Gijs8898";
try {    $dbh = new PDO( "mysql:host=$hostname;dbname=$dbname", $dbusername, $dbpw);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
die ( "Fout met de database: {$e->getMessage()} " );
}
?>


