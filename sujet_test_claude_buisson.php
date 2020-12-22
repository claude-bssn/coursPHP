<?php
// VOTRE NOM ET PRENOM : Buisson Claude 

// EXAM - vous devez coder après chaque consigne directement dans ce fichier.

// 1 - Déclarer une variable nommé 'discord' et contenant la valeur 'nsfw'
//1pt
$discord = 'nsfw';

/* 2 - Utiliser la fonction 'echo' pour afficher la valeur contenue dans la variable 'discord' suivi de deux
       retours a la ligne
*/
echo($discord. '<br><br>');
//1pt

/* 3 - Déclarer une fonction appellée 'coucou' qui affiche 'Hello' suivi de deux retours a la ligne quand on
       l'execute
*/
function coucou(){
       echo('Hello' . '<br><br>');
}
//1pt

// 4 - Executez la fonction 'coucou'
coucou();     
//1pt

/* 5 - Déclarer une fonction 'my_print_uppercase' qui prends un parametre nommé 'string' et qui affiche
       la valeur reçue en parametre en lettres majuscules suivi de deux retours a la ligne quand on l'execute,
       puis executez cette fonction en lui passant la valeur 'caps lock is cruise control for cool'.
*/
function my_print_uppercase($string){
       echo(strtoupper($string).'<br><br>');
}
my_print_uppercase('caps lock is cruise control for cool');

//2pt

/* 6 - Déclarer une fonction qui prends en parametre une chaine de caractère et qui affiche 'OK' si la chaine
       recue en parametre est 'cool' et qui affiche 'KO' dans tout les autres cas, puis l'appeler une fois en lui
       passant la valeur 'pas cool' puis une seconde fois en lui passant la valeur 'cool'. Dans tout les cas la
       fonction devra afficher un retour a la ligne avant de se terminer.
*/
function ahTuTrouvesCaCool($suggestion){
       if($suggestion == 'cool'){
              echo('OK'.'<br>');
       }else{
              echo('KO'.'<br>');
       }
       echo('<br>');
}
ahTuTrouvesCaCool('pas cool');
ahTuTrouvesCaCool('cool');
//2pt

/* 7 - Déclarer une fonction qui prends en parametre un tableau nommé 'mots' et qui affiche chacune des
       valeurs contenues dans le tableau en les séparant par des espaces, puis qui affiche deux retours a la
       ligne une fois toutes les valeurs affichées. Enfin, executez la fonction en lui passant le tableau
       suivant : ['Luke,','je','suis','ton','père'];
*/
function papa($mots){
       foreach($mots as $value){
              echo($value.' ');
       }
       echo('<br><br>');
}

papa(['Luke,','je','suis','ton','père']);
//3pt

/* 8 - Déclarer une fonction nommée my_max qui prends en parametre un tableau de chiffres et qui RENVOIE
       la plus grande valeur de ce tableau, puis l'appeler en lui passant le tableau suivant :
       $tab = [23, 42, 15, 16, 8, 4]; puis une seconde fois en lui passant le tableau suivant :
       $tab = [999, 42, 1337, 16, 4, 50]; Pour chaque appel, vous devez recuperer le resultat dans une
       variable $result, puis afficher la variable $result en utilisant echo()
*/
$tab1 = [23, 42, 15, 16, 8, 4];
$tab2 = [999, 42, 1337, 16, 4, 50];
function my_max($tab){
       $valueMax = null;

       foreach ($tab as $value) {         
              if ($valueMax == null){
                     $valueMax = $value;
              }elseif( $value > $valueMax){
                     $valueMax = $value;
              }
       }
       return $valueMax;
       echo('<br>');
}

my_max($tab1);
$result = my_max($tab1);
echo($result.'<br>');

my_max($tab2);
$result = my_max($tab2);
echo($result.'<br>');




//3pt

/* 9 - Déclarer une fonction nommée reverse_print qui prends un tableau en parametre et qui affiche une
par une toutes ses valeurs suivi d'un retour a la ligne, mais dans l'ordre inverse du tableau
(de la dernière valeur a la premiere valeur); puis executez cette fonction une fois en lui passant la
valeur : $tab = [999, 42, 1337, 16, 4, 50]; et une seconde fois en lui passant la valeur :
$tab = ['cinq', 'quatre', 'trois', 'deux, 'un'];
*/
$tab = [999, 42, 1337, 16, 4, 50];
function reverse_print($tab){
       for ($i = count($tab)-1; $i >= 0; $i-- ){
              echo($tab[$i] . '<br>');
       }
echo('<br>');
}
reverse_print($tab);
//3pt

/* 10 - Déclarer une fonction nommée 'best_even' qui prends en parametre un tableau nommé 'numbers' et
        qui renvoie le plus grand nombre pair contenu dans le tableau recu en parametre quand on l'éxécute.
        Puis executez cette fonction en lui passant le tableau suivant : [1,2,3,4,5,6,12,23,36,42,55,69,73,81,2,99]
        Enfin, récupérez la valeur de retour lors de l'execution de cette fonction et affichez la avec la
        fonction 'echo'
*/
//3pt
function best_even($number){
       $maxEven = null;
       foreach ($number as  $value) {
              if($value %2 == 0){
                     if ($maxEven === null){
                            $maxEven =$value;
                     }elseif($maxEven < $value){
                            $maxEven = $value;
                     }
              }
       }
       
return $maxEven;
}
$tab4 = [1,2,3,4,5,6,12,23,36,42,55,69,73,81,2,99];
echo (best_even($tab4).'<br><br>');

/* BONUS - tri de liste: Déclarer une fonction capable de renvoyer un tableau d'entiers positifs
   après l'avoir trié dans l'ordre croissant
  	 - Executez cette fonction en lui passant le tableau suivant : [6,9,1,4,7,5,3,2,8]
     - récuperez la valeur de retour dans une variable, puis affichez son contenu grace a la fonction var_dump()
*/
//4pt
function minValue($tab){
       $minValue = 0;
       $minKeyValue = 0;
       foreach ($tab as $key => $value) {
              if($minValue===0){
                     $minValue = $value;
                     $minKeyValue = $key;
              }elseif($value < $minValue && $value > 0){
                     $minValue = $value;
                     $minKeyValue = $key;
              }
       }
       return $minKeyValue; 
}
$unsortedTab=[6,9,1,4,7,5,-3,2,8]; //I replace the 3 by a -3 to test if as a negativ value it would be processed by the positivity condition.


function sortingTab($tab){
       $sortedTab = [];
       while(empty($tab)===false){
                     if ($tab[minValue($tab)]>=0){ // this to check if the value is positive 
                     $sortedTab[] = $tab[minValue($tab)];
                     unset($tab[minValue($tab)]);
              }elseif ($tab[minValue($tab)]<0){
                     unset($tab[minValue($tab)]);
              }
       }
return $sortedTab;
}
$positivSortedTab= sortingTab($unsortedTab);
var_dump($positivSortedTab);
