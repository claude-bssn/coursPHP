# PHP
1. En php on commence toujours par ouvrir la balise  

        <?php  -------> Au début du fichier php


        ?>  -----> A la fin du fichier, afin d'englober tout le script php.


2. Pour déclarer une variable en php on utilise toujours le signe '$'. 

On termine toujours une une instance par un ' ; '.

    ex: $var="toto";

__echo__ sert afficher quelque chose dans le navigateur    

    ex: echo($vas); 
_affichera toto dans le navigateur web_ 

3. Pour concaténer en php on utilise le point ' . ' et pas le '+'.

4. <u> Le var_dump();</u>   
sert à afficher dans la page html des infos sur la variable passer en paramètre.   

        var_dump($var);  -------> affichera dans le navigateur le type, le length et le path ou se trouve la variable $var

 5. <u>phpinfo(); </u>    

Fait afficher dans le navigateur toute les information sur la version de php que l'on utilise, cela est utile pour savoir ou se trouve le fichier php.ini afin d'activer les options de débuggage.  

Trouver la ligne  [xdebug] et la dé-commenter  en supprimant le point virgule, puis suivre ce tuto.  
https://codingexplained.com/dev-ops/mac/enabling-php-error-reporting-mamp

## 1.  Les différent types d'écriture 
 
__camelCase__  
$mySuperVariable
- on l'utilise surtout pour les variable et les fonctions.  

__PascalCase__  
$MySuperVariable
- On l'utilise surtout pour les classes.

 __SnakeCase__  
$my_super_variable
- On peut l'utiliser à la place du camelCase.

## 2.  Les fonctions 
 Elles servent à réaliser une action en englobant une ou plusieurs étapes.
 on ne place pas de ; après l'accolade à la fin de la fonction car elle n'est pas une instance. 
 
 C'est à dire qu'elle ne s'exécutera que si elle est appelée dans le script.

    function coucou() {    ----------------> Pour déclarer une fonction  

        echo 'hello < br >< br >';    -----> Ce que la fonction va faire.                          
    }                                                 
    coucou();    --------------------------> Pour appeler une fonction      

    
## 3. Les conditions en PHP

Les conditions en php fonctionnes comme en javaScript. voir les cours d'algorithmie.

### <u> if </u>

    if (la condition a remplir){
        l'action à accomplir;
    }

On utilise les elseif et les else comme en javaScript  
- condition ternaire s'utilise le plus souvent lorsque l'on a seulement deux comparaisons if et else. Sinon l'écriture devient trop compliquée à lire et à maintenir.

        function oddOrEven($number){
            ($number%2=== 0)? 'even' : 'odd';
        }
    Cette fonction vérifie si le chiffre est pair ou impair 
### <u> while </u>
Le while est une boucle qui s'execute tant que sa condition n'est pas remplit.  

    while($number <= 8){
        echo $number;
    $number++;
    }

### <u>for</u>
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
### <u> foreach </u>
Foreach sert à parcourir toute les entrées d'un tableau.

    foreach($tab as $value){
        whatToDo... ;
    }
On peut également avec cette méthode récupérer une entrée par son index à l'aide de cette syntax:

    foreach($tab as $key => $value){
        if($key === 2 ){
            echo strtoupper($value);
        }else{
            echo $value;
        }
    }

si on souhaite afficher des tableaux se trouvant eux même dans un tableau il faudra alors répéter un foreach de cette manière.

    foreach($tab as $value){
        foreach($tab as $value){
            echo $value . '< br>;
        }
    }

### <u> switch </u>

    switch($variable){
        case 'M':
            echo("Bonjour Monsieur");
            break;
        case 'Mme':
            echo("Bonjour Madame");
            break;
        default:
            echo("Bonjour ");
    }



## 4. Les méthode en PHP
Les Méthodes en php son de fonction préexistante.  
### <u> strlen </u>
    strlen();  ---> Nous donne la longueur d'une string
### <u> strtoupper </u>
    strtoupper();  ---> Convertie une string en lettre capitale.    

En php il existe énormément de méthodes pour réaliser des opérations ayant pour but de  simplifier le script. (voir la doc php).

## 5.  Les tableaux multidimensionnels 
Les tableaux multidimensionnels sont des tableaux contenant eu même des tableaux. comme expliquer dans le foreach, pour parcourir et atteindre toutes les entrées des tableaus il faudra répéter les foreach .

## 6. les formulaires 
Pour le tag < form> en html il faudra toujours attribuer une methode et une action.
la plupart du temps la methode sera 'post' et l'action prendre l'adresse de l'url sur laquelle on veut envoyer les datas. 

Le bouton 'valider' envoi une requête au serveur qui lui envoi une réponse.

on récupère alors les datas à l'aide d'une superglobales que l'on pourra stocker dans une variable afin de la réutiliser dans le script php.

    $varData = $_POST;

l'attribue <u> name </u> des tag < input> sera le nom de la clé de la donnée récupérer par la super globale et l'attribue <u> value </u> la valeur de la data collectée.

le bouton valider envoi une requête au serveur qui lui envoi une réponse.



## 7.Les Super-Globales
Les Superglobales sont des variables internes qui sont toujours disponibles, quel que soit le contexte
### $_GET[" "] 
La méthode http Get sert a récupérer des données de l'URL.
$_GET[" "] créer un tableau avec les donées récupérées. 

    <?php
    echo 'Bonjour ' . $_GET["name"]) . '!';
    ?>

sous réserve que l'utilisateur est écrit l'url de cette manière:

    http://example.com/?name=Yann

Le navigateur affichera : Bonjour Yann!

Pour le $_GET on écrit l'url toujours de cette manière: 

    ?name=Yann

Cela permettra de récupérer la valeur de 'name' et de l'utiliser dans notre script.
On pourras également le stocker dans une variable.

    $name = $_GET["name"];


### $_POST 
Pour exploiter de la donée, on peut utiliser la méthode $_POST. 

    <?php 
        $hello = 'Bonjour';
        if ($_POST['gender']='M'){
            $hello .= 'Monsieur';
        }elseif ($_POST['gender']='Mme'){
            $hello .= 'Madame';
        }
    ?>

Ensuite on intègre un echo de la variable $hello dans notre page afin d'afficher le résultat.

## 8. Fonction include 'URL'

La fonction include sert à lier un fichier php dans un autre fichier comme par exemple un header ou/et un footer. 

include 'TypeYourUrlHere';

## 9. Les tableaux

Dans une variable de type array on peut stocker plusieurs valeurs.

Pour déclarer une variable de type array:

    $tab =[];

Lorsque l'on veut ajouter une valeur dans un tableau la syntax est la suivante:

    $tab[] = "superman';
        Ajoutera superman a la suite des autres entrées.

    $tab[2]= "superman";
        Ajoutera superman a l'index 2 du tableau en écrasant tout se qui se trouvera à l'intérieur.

Pour attribuer des clé personnalisé a chaque valeur dans un tableau on procède comme suit:

    $tab = ['prof' => 'Vincent' , 'élève1' => 'John' , 'élève2' => 'Paul' ,'élève3' => 'George' ,'élève4' => 'Ringo' ,];

Lorsque l'on souhaite influencer sur les clés des tableaux on utilise la syntax suivante:

    foreach( $tab as $key => $value){
        $mirror[$value] = $key;
    }
    Dans cette fonction on inverse les clés et les valeurs de chaque entrée du tableau. La clé devient value et la value devient la clé.

## 10. les opérateurs 
Comme en php il éxiste le meme opérateurs 

    <   strictement inférieur
    <=  inférieur ou égale
    >   supérieur 
    >=  supérieur ou égale
    !=  différent de 
    ==  égale  (valeur)
    === égale  (valeur et type) dns le doute toujours utiliser ce égale afin d'éviter les érreurs dans le script.
    -=  soustrait et renvoie le résultat
    +=  additionne et renvoie le résultat 
    .=  concatène et renvoie le résultat
    &&  et logique 
    ||  ou logique
    !   non logique 






       

