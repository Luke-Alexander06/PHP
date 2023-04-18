<?php
include "kobling.php";

$sql = "SELECT * FROM persjon WHERE '1'";
$resultat = $con->query($sql);

($rad = $resultat->fetch_assoc())

    $id = $rad['id'];
    $alder = $rad['alder'];
    $fodsels_år = $rad['fodsels år'];
    $kjonn = $rad['kjonn'];
    $telefonnr = $rad['telefonnr'];
    $telefoonr_jobb = $rad['telefonnr jobb'];
    $telefoonr_hjemme = $rad['telefonnr hjemme'];
    $epost = $rad['epost'];
    $navn = $rad['navn'];


?>