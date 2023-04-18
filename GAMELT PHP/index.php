<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "azure.php";

$sql = "SELECT * FROM persjoner";
$resultat = $con->query($sql);

echo "<table id='persjon'>";
echo "<tr>";
 echo "<th> alder";
 echo "<th> føtsels år";
 echo "<th> kjøn";
 echo "<th> telefonnr";
 echo "<th> telefonnr job";
 echo "<th> telefonnr jeme";
 echo "<th> epost";
 echo "<th>navn";
 echo "</tr>";

while($rad = $resultat->fetch_assoc()){
    $id = $rad['id'];
    $alder = $rad['alder'];
    $fodsels_år = $rad['fodsels år'];
    $kjonn = $rad['kjonn'];
    $telefonnr = $rad['telefonnr'];
    $telefoonr_jobb = $rad['telefonnr jobb'];
    $telefoonr_hjemme = $rad['telefonnr hjemme'];
    $epost = $rad['epost'];
    $navn = $rad['navn'];

    echo"<tr>
    <td>$alder</td>
    <td>$fodsels_år</td>
    <td>$kjonn</td>
    <td>$telefonnr</td>
    <td>$telefonnr_jobb</td>
    <td>$telefonnr_hjemme</td>
    <td>$epost</td>
    <td>$navn</td>
    </tr>";

}

echo"</tabel>";

?>
</body>
</html>