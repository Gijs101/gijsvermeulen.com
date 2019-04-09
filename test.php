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
//require_once 'requires/header.php';

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
/**
 * Created by PhpStorm.
 * User: gijso
 * Date: 20-3-2019
 * Time: 11:22
 */
/* De onderstaande code is van Gijs.*/
$email = "gijs";//str_rot13($_POST['mail_adres']);
$to      = "me@example.com";// $_POST['mail_adres'];// Send email to our user
$subject = 'Vertificatie'; // Give the email a subject
$message = '

Bedankt voor het aan maken van een account,
U moet uw account nog verifiëren.

Klik op de link hier onder:

http://iproject42.icasites.nl/verificatie.php?verificatie=1&email='. $email .''; // Our message above including the link

$headers = 'From:noreply@gijsvermeulen' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
echo "gelukt";



?>
<a href="loguit.php">loguit</a>


<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>

</body>
</html>