<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Il fait beau aujourd'hui</h1>

    <?php
    $data = 20;
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