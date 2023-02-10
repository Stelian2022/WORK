<?php
//phpinfo(); informations php
//operateurs
$x = 4;
$y = 2;
$z = 5;
//-
$calcul2 = $x - $y;
//+
$calcul = $x + $y;
//*
$calcul3 = $x * $y * $y;
// /
$calcul4 = $x / $y;
// ** exponentiel
$calcul6 = $x % $y;
$calcul5 = $x ** $y;
$calcul7 = ($x + $y) * $y;
//echo "<p> $calcul" . "<br>" . "$calcul2" . "<br>" . "$calcul3" . "<br>" . "$calcul4" . "<br>" . "$calcul5" . "<br>" . " $calcul6</p>";
//echo $calcul7;
"<br>";
//affectation
$a = 5;
$b = 7;
//$a += 6; //$a=$a + 6;
//$a -= 6; //$a=$a - 6;
//$a *= 6;//$a=$a * 6;
//$a %=6;//$a=$a % 6;
//$a **=6;//$a=$a ** 6;
//echo $a;
$c = 'Hello';
$c .= ' World!';
//echo $c;
//creer 2 variables prix ht et tva
//afficher lecalcul de prix ttc
$prixHT = 34;
$tva = 10;
$prixTTC = $prixHT + ($prixHT * 10) / 100;
echo $prixTTC;

//calculer l'age d'une personne en fonction
//de son annee de naissance
$anneeDeNaissance = 1986;
$anneeEnCours = date("Y"); //format date year
$age = $anneeEnCours - $anneeDeNaissance;

echo "<br>$age" . " ans";
//incrementation
$i = 0;
$i++; //i=i+1
// incrementation par 2  $i+=2;
echo "<br>$i";
$j = 10;
$j--; //j=j-1

echo "<br>$j";
