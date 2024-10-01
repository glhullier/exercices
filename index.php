<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="titre">
        <h1>Il fait beau aujourd'hui</h1>
    </div>
    <?php 
    $condition = 0;
    $boucle = 0;   
    $tableau = array (56,45,76);//tableau
    echo $tableau[1]."<br/>";
    $data = 20;
    $prenoms= array('Pierre', 'Paul', 'Jacques');//tableau
    echo 'Le second prénom du tableau est:'.$prenoms[1].'<br/>';
    $age = array('Pierre'=>1, 'Paul'=>2, 'Jacques'=>3);//Tableau associatif
    echo $age['Paul'];
    for ($x=0;$x<=2;$x++){
        echo $prenoms[$x].'<br/>';
    }//Boucle for pour le tableau prenom
    
    foreach($age as $valeurs){
        echo $valeurs.'<br/>';       
    }//Affichage d'un tableau associatif
    
    echo 'L\'age de Paul est égal à :'.$age['Paul'].'<br/>';
    while ( $boucle<=3){
        echo $boucle."<br/>";//boucle while
        $boucle++;
    }
    do{
        echo 'Ceci est le résultat de la boucle DOWHILE:'.$condition.' <br/>';
        $condition++;
    } while($condition < 4);//boucle dowhile

   for($bcle=0; $bcle<4;$bcle++){
    echo 'Ceci est le résultat de la boucle for:'.$condition.'<br/>';
    $bcle++;

   }

    $donnee = ($data<30)? "data est inférieur à 30 <br/>" : "data est supérieur à 30 <br/>";//ternaire
    echo $donnee;
    $variable = "Ceci est une variable";
    $variable = "Ceci est la variable modifiée";//variable modifiée
    if($data < 20){
        echo "data est inférieur à 20 <br/>";//condition
    }
    echo   'Est ce une variable?  <br/> '.$variable.'<br/>';//concatenation
    echo $variable.'<br/>';
echo "Je suis là ";
include ('page.php')//Integrer une page php
    ?>
    <script src="script.js"></script>
</body>

</html>