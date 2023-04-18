<style>
    body {
        background-color: grey ;
    }
</style>
<?php

# oppgave 10.8

$tall1 = 20;
$tall2 = 5;
$tekst1 = "jeg";
$tekst2 = "liker";

$sum = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

$langTekst = $tekst1 . $tekst2; 
$bedreTekst = $tekst1 . " " . $tekst2 . " ost";

echo "Summen blir $sum <br>";
echo "Differansen blir $differanse <br>";
echo "Produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";

echo "<dr><de>";

echo "$langTekst <br>";
echo "$bedreTekst <br>";

# oppgave 10.9
# oppgave 10.10

echo "<a href='#'>Lenke</a><br>";


# eksempel oppgave

$terningkast = rand (1,6);
echo "Du fikk $terningkast på terningen. <br>";
echo "Det er";


if($terningkast == 1) {
    echo " VELDIG! dårlig";
    echo "<img src='img/dice-six-faces-one'>";
} else if ($terningkast == 2) {
    echo " dårlig...";
    echo "<img src='img/dice-six-faces-two'>";
} else if ($terningkast == 3) {
    echo " som passe...";
    echo "<img src='img/dice-six-faces-three'>";
} else if ($terningkast == 4) {
    echo " du nermer deg der";
    echo "<img src='img/dice-six-faces-four'>";
} else if ($terningkast == 5) {
    echo " wow...du er ner";
    echo "<img src='img/dice-six-faces-five'>";
} else if ($terningkast == 6) {
    echo " ...wow......";
    echo "<img src='img/dice-six-faces-six'>"; 
}

#oppgave 10.11

$måned = date("m");
echo "$måned.<br>";

if($måned == 1) {
    echo "Januar";
} else if ($måned == 2) {
    echo "Frebuar";
} else if ($måned == 3) {
    echo "mars";
} else if ($måned == 4) {
    echo "april";
} else if ($måned == 5) {
    echo "mai";
} else if ($måned == 6) {
    echo "juni";
} else if ($måned == 7) {
    echo "juli";
} else if ($måned == 8) {
    echo "august";
} else if ($måned == 9) {
    echo "sptember";
} else if ($måned == 10) {
    echo "oktober";
} else if ($måned == 11) {
    echo "onvember";
} else if ($måned == 12) {
    echo "desember";
}

#oppgave 10.12

$år = ("Y");

$fødselsdag = 2006















?>