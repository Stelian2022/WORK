<?php
include './fonctions.php';
// dd('test');

//Tableau indexé
//declaration d'un tableau 

 $tableau = [];
 $tableau2 = array();

 $tableau3 = [
     true,
     4,
    6.7,     [
         5, 
         'truc',
        [
            'muche',
             8,
             8.9
         ]
     ]
];
 dd($tableau3);

$tableau=[];
// $tableau='Janvier';
// $tableau=45; //ca remplace les valeurs precedents

//pour r'ajouter des valeurs
array_push($tableau,'Voiture',true);
//dd($tableau); -Afficher le tableau
//Afficher les nr des elements dans le tableau
$notes = [12,9,13,7,2];
dd($notes);
//fusioner des tableau
$tableauFusion=array_merge($tableau,$notes);
dd($tableauFusion);
//Afficher la note 13 dans le tableau notes
//Afficher la note 13 dans tableau tableauFusion
dd($notes[2]);







