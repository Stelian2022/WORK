<?php
include './fonctions.php';
// dd('test');

//Tableau indexé
//declaration d'un tableau 

//  $tableau = [];
//  $tableau2 = array();


//  dd($tableau3);

// $tableau=[];
// $tableau='Janvier';
// $tableau=45; //ca remplace les valeurs precedents

//pour r'ajouter des valeurs
// $tableau = [
//     true,
//     4,
//     6.7,     [
//         5,
//         'truc',
//         [
//             'muche',
//             8,
//             8.9
//         ]
//     ]
// ];
// $notes = [12, 9, 13, 7, 2];
// array_push($tableau, 'Voiture', true);
//dd($tableau); -Afficher le tableau
//Afficher les nr des elements dans le tableau

// dd($notes);
//fusioner des tableau
// $tableauFusion = array_merge($tableau, $notes);
// dd($tableauFusion);
//Afficher la note 13 dans le tableau notes
//Afficher la note 13 dans tableau tableauFusion
// dd($notes[2]);
// dd($tableauFusion[6]);

//Afficher le chiffre 5 dans le tableau 
//tableauFusion
// dd($tableauFusion[3][0]);
// dd($tableauFusion[3][2][2]);

// $fruit = [
//     'banane' => 'jaune',
//     'pomme' => 'rouge',
//     'kiwi' => 'vert'
// ];
// // dd($fruit['kiwi']);

//ajouter des elements dans le tableau
// $fruits['poire'] = 'rouge';

// $chaine = implode('-', $fruits);
// //dd($chaine);
// $fruits2 = explode('*', $chaine);
// dd($fruits2);

//fonction associes au tableau

//creation noveau tableau

//$planetes=['mars','terre','uranus','venus','jupiter'];
//$planetes = ['m' => 'mars', 't' => 'terre', 'u' => 'uranus', 'v' => 'venus', 'j' => 'jupiter'];
//dbug($planetes);
// dd($planetes);
//sort($planetes);
//asort($planetes);
//rsort($planetes);
//ksort($planetes);
//arsort($planetes);
//krsort($planetes);

//foreach ($planetes as $key => $val) {
//    echo "planetes[" . $key . "] = " . $val . "</br>";
//}

// $tab = [];
// $tab[] = ['A', 'B', 'C'];
// $tab[] = ['Q', 'R', 'T'];
// $tab[] = ['E', 'U', 'P', 'I'];



// //Ecrire le mot CEPPIC avec les lettres du tableau $tab

// //dd($tab);

// echo $tab[0][2] . $tab[2][0]  . $tab[2][2] . $tab[2][2] . $tab[2][3] . $tab[0][2];
$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'email@.com'
];
$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludu@caramail.com'
    ],
];
dd($people);
