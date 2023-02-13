<?php

declare(strict_types=1);
//function calcul($prixHT, $tva)
//{
//  $prixHT = 34;
//$tva = 10;
//$prixTTC = $prixHT + ($prixHT * $tva) / 100;
//return $prixTTC;
//}
//echo calcul(34,10);

//calcul TTC
//fonction
function calculPrixTTC($prixht, $tva)
{

    $prixTTC = $prixht + ($prixht * $tva) / 100;
    return $prixTTC;
}
// echo calculPrixTTC(34, 10);
//calcul age
// function calculAge($anneDeNaissance)
// {
//     $anneeEnCours = date("Y");
//     $age = $anneeEnCours - $anneDeNaissance;
//     return $age;
// }
// echo calculAge(1986);



//function calcul($a, $b = 5) $b- constante
//{
// $c = $a + $b;
//return $c;

//}
//echo calcul(23);

// define('xxx', 10);
// echo 'La valeur de xxx est de '.xxx;
//function calcul($anneeDeNaissance, $anneeEnCours)
//{
//  $anneeDeNaissance = 1986;
//$anneeEnCours = date("Y");
//$age = $anneeEnCours - $anneeDeNaissance;

// return $age;
//}
//echo calcul(1986, "Y");


//fonction dd
function dbug($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 300px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 450px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}
//on forces le typage : int
// function maFonction(): int
// {
//     return 3;
// }
// dd(maFonction());
//function qui n'envoye rien !!
//  function maFonction(): void
// {
//      return null;
//  }
//  dd(maFonction());
//fonction pour envoyer un tableau ou int ou float
//function maFonction(): array|int|float
//pour envoyer toute les types
// function maFonction(): mixed
// {
//     return 4.5;
// }
// dd(maFonction());

// function maFonction(array|int $x): mixed
// {
//     return $x;
// }
// dd(maFonction(34));
//inverser une chaine de caractere
$article = "Je suis un article";
// echo strrev($article);
//Transforme une chaine de caractere en majuscule
// echo strtoupper($article);
//Longueur d'une chaine de caractere
// echo strlen($article);
//Remplace un element dans une chaine de caractere
//replacer 'un' par 'cet'
// echo  str_replace("un","cet", $article);
//Retourne un segment d'une chaine de caractere
//renvoyer les 6premieres elements d'une chaine de caracteres
//dd(substr($article, 0, 6)); -- fontion dd ou echo

// $x = 5;
// $y = 3;
// $z = 6;
// function calcul($x)
// {
//     global $y;
//      $y = 7;
//     return $x + $y;
// }
// echo calcul(5);
// dd($y);
// global $z ;
// $z=' le monde';
// echo 'Hello' . $GLOBALS['z'];


