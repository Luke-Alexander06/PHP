<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>velkommen til world chat</h1>
<?php
include "azure.php";

$sql = "SELECT idbruker, brukernavn FROM bruker ";
$resultat = $con->query($sql);

while($rad = $resultat->fetch_assoc()){
    $idbruker = $rad['idbruker'];
    $brukernavn = $rad['brukernavn'];

    echo "<a href='profil.php?bruker_id=$idbruker'>$brukernavn</a><br>";
}
?>


</body>
</html>