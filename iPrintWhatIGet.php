<!-- Nom du fichier: iPrintWhatIGet.php

Ecrivez un script PHP qui :
 Déclare une fonction nommée iPrintWhatIGet qui :
 - Stocke dans une variable nommée var la valeur du paramètre fourni via votre URL nommé 'data'
 - Affiche la string "data=" suivi de la valeur de la variable var
 - Appelle la fonction 'iPrintWhatIGet'
 // note : vous n'avez le droit qu'a un seul appel à la fonction echo pour cet exercice et à aucune autre fonction -->
<?php

function iPrintWhatIGet (){
    $var = $_GET["data"]; 
    echo ( "data = ". $var);
}
 iPrintWhatIGet();

?>