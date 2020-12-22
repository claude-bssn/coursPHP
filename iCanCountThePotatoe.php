<!-- Nom du fichier : iHardlyCanCountToPotatoe.php
Ecrivez un script PHP qui :
- Stocke dans une variable nommée 'limit' la valeur du paramètre fourni via votre URL nommé 'number'
- Affiche tout les nombres entiers de 0 à limit
// note : chaque nombre doit être affiché sur une ligne différente
// note : la boucle while est interdite pour cet exercice -->

<?php

$limit = $_GET["number"];
$i=0;

while($i <= $limit ){
    echo $i."<br/>";
    $i++;  
}
?>