<?php
include "azure.php";

$id = $_GET['bruker_id'];

$sql = "SELECT * FROM bruker WHERE idbruker = '$id'";
$resultat = $con->query($sql);

$rad = $resultat->fetch_assoc();

    $brukernavn = $rad['brukernavn'];
    $fornavn = $rad['fornavn'];
    $ettarnavn = $rad['etternavn'];
    $bio = $rad['bio'];
    $passord = $rad['passord'];
    $epost = $rad['epost'];
    $tlf = $rad['tlf'];
    $skole = $rad['skole'];
    $bosted = $rad['bosted'];
    $fodselsdato = $rad['fodselsdato'];
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

echo "
    <div class='profildiv'>
        <h1> Profilen til: $brukernavn </h1>
        <div class='h4tekst'>
            <h4 class=c1>$fornavn</h4>
            <h4 class=c2>$ettarnavn</h4>
            <h4 class=c3>$bio</h4>
            <h4 class=c5>$epost</h4>
            <h4 class=c7>$skole</h4>

        </div>


    </div>
    ";
    include "bilde.php";

    
    ?>

<form method='Post'>
    Skriv ditt innlegg:<br>
    <input type="submit" name='submit' value='legg ut'><br><br>
</form>
<?php
if(isset($_POST["submit"])){
    include "azure.php";
    $tekst = $_POST["tekst_innleg"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, data)VALUES('$tekst','$id',now())";

    if($conn)
}

<div class='bilde_div'>
    <?php
     $sql = "SELECT * FROM media WHERE idbruker='$id'";
     $resultat = $con ->query($sql);

     while($rad = $resultat->fetch_assoc()){
        $media_navn = $rad['media_navn'];
        echo "<img class='bilder'src='img/$media_navn'>";
     }




    ?>
    </div>    


</body>
</html>