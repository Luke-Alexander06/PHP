<from method="POST">
    persjoner
    <br><input type="text" name="navnedit"><br>
    <br><input type="submit" name="leggtil" value="legg til navn">
</from>

<?php
include "azure.php";
if(isset($_POST["leggtil"])){
    $nvnet = $_POST["navn"];
    $år = $_POST[år];

    $sql = "INSERT INTO persjon(navn,kjøn)VALUES('$navnet','$år')";

    if($conn->query($sql)){
        echo "navn med år $navnet og alderen din $år"
    }
}


$Naql = "INSERT INTO persjoner (marker) VALUES ('knut gunar')";

if($conn->query($aql)) {
    echo "du ble lakt til adresen";
}

?>