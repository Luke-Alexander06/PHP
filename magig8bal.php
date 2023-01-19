<?php
$random_tall = rand(1,100);

if($random_tall < 5){
    echo "<p> du får alle gratis tingene! </p>";
} else if($random_tall < 35){
    echo "<p> du får mase gratis ting!!! </p>";
} else if($random_tall < 50){
    echo "<p> du får gratis ting! </p>";
} else {
    echo "<p> ingen ting? </p>;"
}




?>