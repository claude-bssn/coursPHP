<!-- Nom du fichier : lenolife.php
Vous devez écrire un script PHP qui :
- Déclare une fonction 'onlyTheBest' qui :
- Prend en paramètre un tableau nommé 'adata'
- Affiche la string la plus longue parmi les valeurs contenues dans 'adata', et ce en lettres capitales, suivie de deux retours à la ligne
- Appelle la fonction 'onlyTheBest', une fois pour chacun des tableaux ci-après, en lui passant à chaque fois le tableau voulu en paramètre -->

<?php
$tab0 = ['Goodbye','Dennis'];
$tab1 = ['U','DUN','GOOFED'];
$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];
$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];

// $adata = [$tab0, $tab1, $tab2, $tbab3, $tab4];

function onlyTheBest($adata){

        foreach($adata as $value){
            if (strlen($value)>$length){ // compare la longeur de chaque entrée du bureau avec la longueur stockée dans la variable length 
                $length = strlen($value);// stock la longueur de l'entrée dans la variable length si elle est plus grande que la valeur qu'elle contient actuelement.
                $strValue = $value; // récupere la valeur ( ici un string) de l'entrée stockée dans la variable.
                               
            }
        }
        echo strtoupper( $strValue. '<br><br>'); // affiche la valeur stockée dan la variable de en fin d'éxecution de la fonction écrit en majuscule. Donc la plus grande chaine de charactères. 
    
}

onlyTheBest($tab3); // appelle de la fonction.
?>