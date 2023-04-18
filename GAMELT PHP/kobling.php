<?php
$server = "";
$brukernavn = "root";
$passord = "";
$database = "persjoner";

$kobling = new mysqli($server, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("noe gikk galt: " . $kobling->connect_error);
} else {
    echo "hei hei";
}

$sql = "SELECT * FROM persjoner";
$resultat = $kobling->query($sql);

echo "<ul>";

while ($rad = $resultat ->fetch_assoc()) {
    $blad_id = $rad ["blad_id"];
    $bladnavn = $rad ["bladnavn"];

    echo "<li>$blad_id. $bladnavn</li>";
}


echo "</ul>";

while($rad = $resultat->fetch_assoc()){
    $id = $rad['id'];
    $alder = $rad['alder'];
    $føtsels_år = $rad['føtsels år'];
    $kjøn = $rad['kjøn'];
    $telefonnr = $rad['telefonnr'];
    $telefonnr_job = $rad['telefonnr job'];
    $telefonnr_jeme = $rad['telefonnr jeme'];
    $epost = $rad['epost'];
    $navn = $rad['navn'];

    echo "$id, $alder, $føtsels_år, $kjøn, $telefonnr, $telefonnr_job, $telefonnr_jeme, $epost,$navn<br> ";
}