<?php
/**
 * Team: Gijs
 * Auteur: Gijs
 * Datum: 16-3-2018
 * Versie: 2
 */
include 'database.php';
if(isset($_POST['message']) && isset($_SESSION['firstname'])) {
    $messagefirstname = $_SESSION['firstname'];
    $messagelastname = $_SESSION['lastname'];
    $datum = date('d-m-Y');
    $time = date('H:i');
    $newmessage = $_POST['message'];

    $messagesql = "INSERT INTO Guestbook (firstname,lastname,message,date,time) VALUES (?,?,?,?,?)";
    $messagequery = $dbh->prepare($messagesql);
    $messagequery->execute(array($messagefirstname,$messagelastname,$newmessage,$datum,$time));
}