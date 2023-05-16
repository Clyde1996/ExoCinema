<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>III.Cinéma</title>
</head>
<body>
<!-- <h1>Exercice Cinéma</h1>
<p><h2><u>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</u></h2></p>

<div>
    <ul>
        <li>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).
</li>

<li>Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).</li>

<li>Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !</li>

<li><mark>Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)</mark></li>

</ul>
</div>

<div>
    <h2>On doit pouvoir :</h2>
<ul>
    <li><strong>Lister</strong> la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...)</li>
    
    <li><strong>Lister</strong>  le  casting  d'un  film  (dans  le  film  Star  Wars  Episode  IV,  Han  Solo  a  été  incarné  par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>
    
    <li><strong>Lister</strong>  les  films  par  genre  (exemple  :  le  genre SF  est  associé  à  X  films  :  Star  Wars,  Blade Runner, ...)</li>
    
    <li><strong>Lister</strong> la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
    
    <li><strong>Lister</strong> la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
</ul>
</div> -->

<?php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name .'.php';
    });



    //Spider-Man

    /*Genre des films*/ 
$action = new Genre("Action");
$aventure = new Genre("Aventure");
$fantastique = new Genre("Fantastique");
$thriller = new Genre("Thriller");


/*Role */

$spiderMan = new Role("Spider Man");
$hank = new ROle("Hank Mitchell");

/*Acteurs*********/ 

/*Spider Man*/
$tobey = new Acteur("Maguire", "Tobey", "Homme", "1975-06-27");
$andrew = new Acteur("Andrew", "Garfield", "Homme", "1983-08-20");
$tom = new Acteur("Holland", "Tom", "Homme", "1990-05-25");
$zendaya = new Acteur ("Coleman", "Zendaya", "Femme", "1996-08-01");

/*A Simple Plan*/
$bill = new Acteur ("Paxton", "Bill", "Homme", "1955-05-17");


/*Realisateurs******/ 
$samRaimi = new Realisateur("Raimi", "Sam", "Homme", "1959-10-23");



/*Films*************/ 
/*Spider Man Movies */

$spiderMan1 = new Film("Spider-Man <strong>1</strong>", "2007-05-01", 150, [$action, $aventure, $fantastique], $samRaimi);
$spiderMan2 = new Film("Spider-Man <strong>4</strong>", "2012-12-15",167 ,[$action, $fantastique], $samRaimi);
$spiderMan3 = new Film("Spider-Man  No Way Home", "2021-12-25",139, [$action, $aventure, $fantastique], $samRaimi);

/*A Simple Plan Movie*/ 
$aSimplePlan= new Film("A Simple Plan", "2009-01-22", 121, [$action, $aventure], $samRaimi );


/*Distribution*********/ 

$distributionSpiderMan1 = new Distribution($tobey, $spiderMan1, $spiderMan);
$distributionSpiderMan2 = new Distribution($andrew, $spiderMan2, $spiderMan);
$distributionSpiderMan3 = new Distribution($tom, $spiderMan3, $spiderMan);
$distributionSpiderMan4 = new Distribution($zendaya, $spiderMan3, $spiderMan);
$distributionAsimplePlan = new Distribution ($bill, $aSimplePlan, $hank);



/*Afichage*/

echo $spiderMan1;
echo $spiderMan2;
echo $spiderMan3;
echo $aSimplePlan;

echo $distributionSpiderMan1;
echo $distributionSpiderMan2;
echo $distributionSpiderMan3;
echo $distributionAsimplePlan;


// echo $realisateur2. "</br>";
// echo $realisateur3. "</br>";

// echo $film1;
// echo $film2;
// echo $film3;








?>
    
</body>
</html>