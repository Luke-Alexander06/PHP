<?php

$tall = array(4, 56, 1, 46, 150, 34, 999, 9, 12, 3,);
for ($i=0; $i<count($tall); $i++) {
    if ($tall[$i] > 10){
        echo "over 10 <br>";
    }
    else{
        echo "under 10 <br>";
    }
}   
?>