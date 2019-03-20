<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 * Verandert:
 * -php naar boven gehaald
 */
require_once 'requires/header.php';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registreer</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>



<div class="register">
    <h1>Registeren</h1><br><br>
    <form action="Filmoverzicht.php" method="post">
        <input type="text" placeholder="voornaam" name="firstname"><br>
        <input type="text" placeholder="achternaam" name="lastname"><br>
        <input type="text" placeholder="gebruikersnaam" name="newusername"><br>
        <input type="email" placeholder="e-mail" name="email"><br>
        <input type="text" placeholder="adres" name="adres"><br>
        <input type="text" placeholder="plaats" name="place"><br>
        <input type="text" placeholder="land" name="land"><br>
        <input type="date" name="date" ><br>
        <input type="text" placeholder="rekeningnummer" name="rekening"><br>
        <input type="password" placeholder="Wachtwoord" name="newpassword"><br>
        <input type="password" placeholder="Wachtwoord check"><br>
        <input type="radio" name="subtype" value="Basis" checked>Basis
        <input type="radio" name="subtype" value="Pro">Pro
        <input type="radio" name="subtype" value="Prime">Prime<br>
        <input type="submit">
    </form>
</div>
<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>
</body>
</html>
