<?php
    include "connect.php";
    $art_naam = $_POST['artikel-naam'];
    $art_prijs = $_POST['artikel-prijs'];
    $sql_insert_artikel = "INSERT into artikel (artikelnaam, prijs) values ('$art_naam',$art_prijs)";
    $conn->query($sql_insert_artikel);
    header("location: ../artikelen.php");
?>