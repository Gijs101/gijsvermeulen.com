<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 * Verandert:
 * -php naar boven gehaald
 *
 */
require_once 'requires/header.php';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Over ons</title>
    <link rel="stylesheet" href="css/css.css"/>
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>




<?php
echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "<br>";
echo 'gebruikersnaam: ' . $_SESSION['username'] . "<br>";
echo 'ingelogd op ' .$_SESSION['datum'] . ' om ' . $_SESSION['inlogtijd'] . "<br>";

?>
<a href="loguit.php">loguit</a>


<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>

</body>
</html>