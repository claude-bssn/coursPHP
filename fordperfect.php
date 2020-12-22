<!-- Nom du fichier : fordPerfect.php
Écrivez un script PHP qui :
- déclare une fonction qui déclare un tableau contenant les titres des différents volumes (officiels) de la trilogie du guide du voyageur intergalactique (en français) et qui affiche le contenu de ce tableau
- appelle la fonction précédemment déclarée
// note : lors de l'affichage chaque titre doit être suivi d'un retour à la ligne
// note : l'utilisation des double quotes (") est interdite pour cet exercice, vous devez utiliser des simple quotes (') uniquement
// note : les seules fonctions PHP autorisées pour cet exercice sont les fonctions echo et array (ou []) vous ne pouvez les utilisez qu'une seule fois chacune -->


<?php
function fordPerfect(){ 
$tabBooks = ['Le Guide du voyageur galactique' ,'Le Dernier Restaurant avant la fin du monde', 'La Vie, l\'Univers et le Reste', 'Salut, et encore merci pour le poisson', 'Globalement inoffensive'];
 foreach($tabBooks as $title){
     echo( $title . '</br>');
 }
}
fordPerfect();
 
?>