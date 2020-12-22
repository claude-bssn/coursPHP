<!-- Nom du fichier : tnasrevner.php
Vous devez écrire un script PHP qui :
- Déclare une fonction nommée 'my_array_flip' qui :
- Prend en paramètre un tableau nommé 'params'
- Créé un tableau nommé 'mirror' contenant les mêmes entrées que params mais ou les clefs et valeurs des entrées sont inversées (ex: si $params['ma_cle'] == 'ma_valeur', alors $mirror['ma_valeur'] devra contenir comme valeur la string 'ma_cle' )
- Renvoie le tableau 'mirror' obtenu
- Appelle la fonction 'my_array_flip', une fois pour chacun des tableaux ci-après, en lui passant le tableau en paramètre
- Pour chaque appel à 'my_array_flip', vous devez stocker la valeur de retour dans une variable nommée 'result', et afficher le contenu de 'result' en faisant appel a la fonction 'my_array_print' que vous reprendrez de votre exercice 
// note : les seules fonctions PHP autorisées pour cet exercice sont les fonctions echo et array
// note : vous ne pouvez utilisez echo qu'une seule fois -->


<?php
$tab0 = ['Goodbye','Dennis'];
$tab1 = ['U','DUN','GOOFED'];
$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];
$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];
$tab4 = ['x-men', 'spiderman', 'great sayaman','iron man','superman', 'batman', 'wolverine', 'hulk'];

function my_array_flip($params){
    $mirror=[];
    
    foreach($params as $key => $value){
        $mirrorKey= $value;
        $mirrorValue = $key;
        $mirror[$mirrorKey] = $mirrorValue;
    }
    return $mirror; // ici on retourne la valeur de $mirror. Ce qui signifie que lorsqu'on appelle la fonction son résultat est mirror.
    
}

function my_array_print($tab){
    foreach($tab as $key =>$value){
        
        echo($key.'=>'.' ' .$value.'<br/>' );
    }
}
$result= my_array_flip($tab0);
my_array_print($result);
echo "<br>";
$result= my_array_flip($tab1);
my_array_print($result);
echo "<br>";
$result= my_array_flip($tab2);
my_array_print($result);
echo "<br>";
$result= my_array_flip($tab3);
my_array_print($result);
echo "<br>";
$result= my_array_flip($tab4);
my_array_print($result);
echo "<br>";

?>