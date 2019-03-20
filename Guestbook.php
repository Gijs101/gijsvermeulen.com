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
<?php


$echo = '';
$query=$dbh->query("select * from Guestbook ");
while($r = $query->fetch()){
    $message = $r['message'];
    $firstname = $r['firstname'];
    $lastname = $r['lastname'];
    $date = $r['date'];
    $time = $r['time'];
    $text =  "<div class=\"guestbook\">" . $firstname . " " . $lastname . " " . "<br>" . $date . " " . $time . "<br>" . $message . "</div>" . "<br>" ;
    $echo .= $text;


}
$mesasge = '';
if(isset( $_SESSION['firstname'])) {
    $mesasge =  $_SESSION['firstname'] . "&nbsp" .  $_SESSION['lastname'];
}else{
    $mesasge = 'U moet eerst inloggen.';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Gastenboek</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>

<div class="register">
    <h1>Gastenboek</h1><br><br>
    <form action="Guestbook.php" method="post">
        <?php
      echo $mesasge;
        ?>
        <br>
        <textarea name="message" rows="10" cols="30"></textarea><br>
        <input type="submit">
    </form>
</div>

    <p>
<?php
echo $echo;
?>
    </p>


<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>
</body>
</html>
