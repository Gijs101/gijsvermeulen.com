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
$id = $_GET['id'];

$query=$dbh->query("select * from Filmoverzicht where '$id' = id ");
$r = $query->fetch();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Thor Ragnarok</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>



<?php

echo "<a href='$r[trailer]'><img class='poster' src='$r[poster]' title='Klik hier om de film te bekijken!'></a>";
?>
<h1><?php echo $r['title'];?></h1>



<br>

<br> Directors: <?php echo $r['director'];?>
<br> Tijdsduur: <?php echo $r['duration'];?> minuten
<br> Genre: <?php echo $r['genre'];?>
<br> Cast: <?php echo $r['moviecast'];?>
<br> Samenvatting:
<br> <?php echo $r['summary'];?>
<br>
<iframe width="420" height="315"
        src="<?php echo $r['trailer'];?>">
</iframe>

<br>
Klik op de video hierboven om de trailer te bekijken!<br>
Klik op de poster om de film te bekijken.

<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>

</body>
</html>
