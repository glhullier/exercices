<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST" action="target.php">
        <p><label for='prenom'>Enrez votre prénom</label>
            <input type='text' name='prenom' id="prenom" />
        </p>
        <p>
            <input type='submit' value='Envoyer' />
        </p>
    </form>
    <p>Ce formulaire envoie la donnéee dans le fichier
        <strong class='cible'>target.php</strong>
    </p>
    <br /><br />

    <div class="titre">
        <h1>Il fait beau aujourd' hui</h1>
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
    
    echo '<p class = "espace">Ceci est un texte html dans le php</p>';
    
    if($data < 20){
        echo "data est inférieur à 20 <br/>";//condition
    }
    function bonjour (){
        echo 'Ceci est un bonjour ecrit sous forme de fonction<br/>';
    }
    bonjour();
    function ecrire ($prenom){
        echo 'Je dis bonjour à '.$prenom.' grâce à la fonction ecrire <br/>';
    }
    ecrire ('Pierre');  


    $table= array(
        array('Pierre',34),
        array('Michel',23)
    );    

    echo   'Est ce une variable?  <br/> '.$variable.'<br/>';//concatenation
     echo  'Grâce au tableau multidimentionnel , Michel a '.$table[1][1].'ans <br/>';
    echo $variable.'<br/>';
    echo "Je suis là <br/>";

   
   
include ('page.php')//Integrer une page php


    ?>


    <script src="script.js"></script>
</body>

</html>