<!-- créez une fonction qui a pour but d'afficher toutes les données du tableau à la suite des autres avec un espace insecable (voir la doc ASCII) et appelle cette fonction .  -->

<?php

// function my_print($data) {
//     echo($data."&nbsp;"); //pour rajouter un espace non sécable 

// }
// $first = "I";

// my_print("I");
// my_print("CALL");
// my_print("THE");
// my_print("CYBER");
// my_print("POLICE");


$txt= ["I", "CALL", "THE", "CYBER", "POLICE"];

foreach ($txt as $word){
    my_print($word);
}

function my_print($word){
    echo $word." ";
}
var_dump($txt);



?>

