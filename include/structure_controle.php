<?php
/* if/else/elseif

>
<
>=
<=
== : comparaison d'egalité en valeur
=== : comparaison d'egalité en valeur et en type
!= different en valeur
!== different en type et en valeur

*/

// $age=10;
// if ($age >=18) {
//     echo 'Vous avez le droit de voter!!';
// } else {
//     echo 'Pas le droit de voter!!';
// }

$heure = 23;

//heure<12h cest matin si  >18h c'est soir

//j'utilise la fonction elseif
// if ($heure <=12 )
// {
//     echo 'On est le matin';
// }  elseif($heure >=18 ) { 
//     echo 'On est le soir';
// }
// $heure = date('H');
// if ($heure <= 12) {
//     echo 'On est le matin';
// } elseif ($heure >= 18) {
//     echo 'On est le soir';
// } else {
//     echo 'On est l\'apres midi';
// }
// echo '<pre></pre>';
$a = '20';
$b = 5;

// if ($b != 3) {
//     echo 'La variable $b n\'est pas egale a 3.';
// }

// if ($b=='5'){
//     echo 'Egalité';
// }
// if ($b === '5') {
//     echo 'Egalité';
// } else {
//     echo 'Non egalité en valeur et en type';
// }

if($a != 20){
    echo '$a est different de 20.';
} else{
    echo '$a est 20';
}
echo '<pre></pre>';
if($a !==20){
    echo '$a est different de 20.';
} else{
    echo '$a est 20';
}
echo '<pre></pre>';
$vrai=false;
if ($vrai){
    echo 'vrai';
}else {
    echo 'faux';
}

//switch/case


