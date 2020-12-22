<!-- déclare une fonction qui décompte jusqu'a 0 et affiche 'Go!' après 0 en utilisant la récursivité  -->

<?php
function recurse($limit){
    echo ($limit--. '<br>');
    if ($limit >=0){
        recurse($limit);
    } else {
        echo 'GO!';
    }
}
recurse(42);

//################################################
// correction 

 
function final_countdown($limit) {
    for (; $limit >= 0; $limit--) {
        echo $limit . ' ';
    }
    echo "Go !";
}
 
function final_countdown_r($limit) {
    if ($limit >= 0) {
        echo $limit . ' ';
        final_countdown_r($limit - 1);
    } else {
        echo "<br>";
    }
 
    echo "Go = " . $limit . ' | ';
}
 
//final_countdown(42);
 
final_countdown_r(5);