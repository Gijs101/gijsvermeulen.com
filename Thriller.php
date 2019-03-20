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

?>
<?php

$film ='';

$query=$dbh->query("select * from Filmoverzicht where genre like '%Thriller%' ");
while($r = $query->fetch()){
    $title = $r['title'];
    $poster = $r['poster'];

    $film .= "<a href='film.php?id=$r[id]'><img src='$poster' width='250' height='150' alt='$title' title='$title'></a>";
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Filmoverzicht</title>
    <link rel="stylesheet" href="css/css.css"/>
    <link rel="icon" href="images/other/fletnixlogo.ico">
</head>
<body>
<div class='movie-list'>
    <form action="search.php" method="post">
        <select name="searchtype">
            <option value="title">titel</option>
            <option value="genre">genre</option>
            <option value="year">jaar</option>
            <option value="director">regisseur</option>
        </select>
        <input type="text" name="zoek">
        <input type="submit">
    </form>
    <h1>Filmoverzicht</h1>

    <?php
    echo $film;
    ?>

</div>

<div class="footer">
    Fletnix© - Gijs Vermeulen en Mike van Ewijk, 2017-heden
</div>
</body>
</html>