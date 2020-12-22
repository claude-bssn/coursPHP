<?php
 
 $tab = [9,4,8,12,7,6,1,3,5,12,2,5];
  
 // selection sort
 
function my_max($tab, $i) {
    $valeur_max = null;
    $cle_valeur_max = null;
 
    foreach ($tab as $key => $value) {
        if ($key < $i) {
            if ($valeur_max == null) {
                $valeur_max = $value;
                $cle_valeur_max = $key;
            } elseif ($value > $valeur_max) {
                $valeur_max = $value;
                $cle_valeur_max = $key;
            }
        }
    }
    return $cle_valeur_max;
}
 
function my_swap($tab, $cle_valeur_max, $i) {
    $valeur_max = $tab[$cle_valeur_max];
    $last_value = $tab[$i];
 
    $tab[$i] = $valeur_max;
    $tab[$cle_valeur_max] = $last_value;
 
    return $tab;
}
 
function my_selection_sort($tab) {
 
    for ($i = count($tab); $i >= 1; $i--) {
        $cle_valeur_max = my_max($tab, $i);
        $tab = my_swap($tab, $cle_valeur_max, $i - 1);
    }
 
    return $tab;
}
 
// var_dump(my_selection_sort($tab));