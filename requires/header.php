<!-- SETUP VOOR MENUBALK EN LOGO -->
<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 */
session_start();
include 'logincheck.php';
include 'registercheck.php';
include 'Guestbookcheck.php';

if(isset($_SESSION['username'])){
    echo "<a class='login' href='./profiel.php'>" .$_SESSION['firstname']."&nbsp".$_SESSION['lastname']."<br>"." ingelogd op ".$_SESSION['datum']." om ".$_SESSION['inlogtijd']."</a>";
}else{
    echo "<a class='login' href='./Login.php'>Login</a>";
}

echo "
<div class='header'>
    <a href='./index.php'><img src='./images/other/fletnix.gif' width='150' height='50'  alt='fletnix'></a>
    <ul>
        <li><a href='./index.php'>Home</a></li>
        <li class='dropdown'><a href='./Filmoverzicht.php'>Filmoverzicht</a>
            <div class='dropdown-content'>
                <a href='./Filmoverzicht.php'>Alle</a>
                <a href='./Sci-Fi.php'>Sci-Fi</a>
                <a href='./Horror.php'>Horror</a>
                <a href='./Fantasy.php'>Fantasy</a>
                <a href='./Thriller.php'>Thriller</a>
            </div>
        </li>
        <li><a href='./Abonnementen.php'>Abonnementen</a></li>
        <li><a href='./Guestbook.php'>Gastenboek</a></li>
        <li><a href='./Over_ons.php'>Over ons</a></li>
    </ul>
</div>


    ";
?>