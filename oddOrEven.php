<!-- Nom du fichier: oddOrEven.php
Ecrivez un script PHP qui :
- Déclare une fonction nommée oddOrEven qui :
- Prend un paramètre nommé var
- Affiche 'Odd' si le parametre var est un nombre impair
- Affiche 'Even' si le parametre var est un nombre pair
- Stocke dans une variable nommée 'number' la valeur du paramètre fourni via votre URL nommé 'data'
- Appelle la fonction 'oddOrEven' en lui passant la variable number en paramètre1
// note : seule la fonction PHP echo est autorisée pour cet exercice -->

<?php
 function oddOrEven($var){

    if ($var % 2 == 0){
        echo ("Even");
    } else {
        echo ("Odd");
    }
}
$number = $_GET["data"];
oddOrEven($number);

?>