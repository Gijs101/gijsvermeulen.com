<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 */
include 'database.php';
if(isset($_POST['newusername'])) {
    $newusername = $_POST['newusername'];
    $newpassword = $_POST['newpassword'] ;
    $newfirstname = $_POST['firstname'];
    $newlastname = $_POST['lastname'];
    $newemail = $_POST['email'];
    $newadres = $_POST['adres'] ." , " .$_POST['place'] . " , " . $_POST['land'];
    $newdate = $_POST['date'];
    $newrekening = $_POST['rekening'];
    $newsubtype = $_POST['subtype'];

    $sql = "INSERT INTO CustomerPHP (username,password,lastname,firstname,email,address,birthdate,payment_number,subtype) VALUES (?,?,?,?,?,?,?,?,?)";
    $query = $dbh->prepare($sql);
    $query->execute(array($newusername,$newpassword,$newlastname,$newfirstname,$newemail,$newadres,$newdate,$newrekening,$newsubtype));
}