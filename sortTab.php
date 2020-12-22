<?php
 
 $tab = [9,4,8,12,7,6,1,3,5,12,2,5];
  
 // Tri par insertion
  
 function my_min($tab) {
     $valeur_min = null;
     $cle_valeur_min = null;
  
     foreach ($tab as $key => $value) {
         if ($valeur_min == null) { 
             $valeur_min = $value;
             $cle_valeur_min = $key;
         } elseif ($value < $valeur_min) {
             $valeur_min = $value;
             $cle_valeur_min = $key;
         }
     }
     return $cle_valeur_min;
 }
  
 function my_insertion_sort($tab) {
     $sorted_tab = [];
  
     while (empty($tab)==false) {
         echo("---");
         $cle_min = my_min($tab);
         $sorted_tab[] = $tab[$cle_min];
         var_dump($sorted_tab);
         unset($tab[$cle_min]);
         var_dump($tab);
     }
  
     return $sorted_tab;
 }
  
 var_dump(my_insertion_sort($tab));

//  ###################################################


 
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

//  ###################################################

// quick sort
function my_quick_sort($tab)
{
    if (count($tab) > 1)
    {
        $pivot = array_shift($tab);
 
        echo $pivot;
 
        $tab_inf = [];
        $tab_sup = [];
 
        foreach ($tab as $val)
        {
            if ($val < $pivot)
                $tab_inf[] = $val;
            else
                $tab_sup[] = $val;
        }
 
        $tab = array_merge(
            my_quick_sort($tab_inf),
            array($pivot),
            my_quick_sort($tab_sup));
    }
 
    return $tab;
}
//  ###################################################

$tab = [9,4,8,12,7,6,1,3,5,12,2,5];
 
function my_verbose_quick_sort($tab, $level = 1)
{
    if (count($tab) > 1)
    {
        $space = str_repeat("&nbsp;", $level*5);
        echo $space;
        echo "ordering tab <br>";
        print_r($tab);
        echo " <br>";
        echo $space;
        $pivot = array_shift($tab);
        echo "pivot is ".$pivot." <br>";
        echo $space;
 
 
        $tab_inf = [];
        $tab_sup = [];
 
        foreach ($tab as $val)
        {
            if ($val < $pivot)
                $tab_inf[] = $val;
            else
                $tab_sup[] = $val;
        }
        echo "tab_inf is ";
        print_r($tab_inf);
        echo " <br>";
        echo $space;
        echo "tab_inf sup ";
        print_r($tab_sup);
        echo " <br><br>";
 
        $tab = array_merge(
            my_verbose_quick_sort($tab_inf),
            array($pivot),
            my_verbose_quick_sort($tab_sup));
    }
 
    return $tab;
}