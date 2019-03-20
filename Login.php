<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 * Verandert:
 * -php naar boven gehaald
 */
include 'requires/header.php';

if(isset($_SESSION['username'])){
    header('location: Filmoverzicht.php');
}else if(isset($_POST['username'])){
    echo 'gegevens kloppen niet';
}
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>



<div class="LoginScherm">
    <h1>Login</h1><br><br>
    <form action="Login.php" method="post">
        <input name="username" type="text" placeholder="gebruikersnaam"/><br>
        <input name="password" type="password" placeholder="Wachtwoord"/><br>
        <input type="submit">
    </form>
</div>

<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>

</body>
</html>