
<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 * Verandert:
 * -Naam van het bestand
 */
include 'requires/database.php';

if(isset($_POST['username'])){
    $us = $_POST['username'];
    $pw = $_POST['password'];
    $sql = $dbh->query("select firstname,lastname from CustomerPHP where username = '$us' and password = '$pw'");

    $result = $sql->fetch();


}else{
    $result = false;
}
if($result == true){
    $_SESSION['username']= $_POST['username'];
    $_SESSION['firstname'] = $result['firstname'];
    $_SESSION['lastname'] = $result['lastname'];
    $_SESSION['inlogtijd'] = date('H:i');
    $_SESSION['datum'] = date('d-m-Y');

}
?>