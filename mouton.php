<!-- Nom du fichier : mouton.php
Vous devez écrire un script PHP qui :
 - Déclare une fonction 'myCount' qui :
 - Prend en paramètre un tableau nommé 'sheeps'
 - Affiche le nombre total des éléments contenus dans le tableau 'sheeps' suivi de un retour à la ligne
 - Appelle la fonction 'myCount', une fois pour chacun des tableaux ci-après, en lui passant le tableau en paramètre
 // note : les seules fonctions PHP autorisées pour cet exercice sont les fonctions echo et array
 // note: vous ne pouvez utilisez echo qu'une seule fois -->
<?php
$tab0 = ['Goodbye','Dennis'];
$tab1 = ['U','DUN','GOOFED'];
$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];
$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];

function myCount($sheeps){
    // $lengthTab=count($sheeps);
    // echo ($lengthTab."<br/>");
    $lengthTab = 0;
    foreach ($sheeps as $value){
        $lengthTab ++;
    }
echo($lengthTab. '<br>');
    

}


myCount($tab0);
myCount($tab1);
myCount($tab2);
myCount($tab3);
myCount($tab4);

?>