<!-- Nom du fichier : boyard.php
Vous devez écrire un script PHP qui :
- Déclare une fonction 'my_array_print' qui prend en paramètre un tableau associatif et qui affiche son contenu
- Créé les tableaux associatifs listés ci-après
- Appelle la fonction 'my_array_print' une fois pour chacun de ces tableaux, en lui passant à chaque fois le tableau voulu en paramètre
// note : l'affichage doit se faire sur le modèle clef => valeur (ex: "toto=>tata") et chaque entrée du tableau doit être suivie d'un retour à la ligne
// note : les seules fonctions PHP autorisées pour cet exercice sont les fonctions echo et array
// note : vous ne pouvez utilisez echo qu'une seule fois -->


<?php
$tab0 = ['Goodbye','Dennis'];
$tab1 = ['U','DUN','GOOFED'];
$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];
$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];


function my_array_print($tab){
    foreach($tab as $key =>$value){
        
        echo($key.'=>'.' ' .$value.'<br/>' );
    }
}
my_array_print($tab0);
my_array_print($tab1);
my_array_print($tab2);
my_array_print($tab3);
my_array_print($tab4);
my_array_print($tab5);
?>