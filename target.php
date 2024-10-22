<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Bonjour,
        <?php
        function securisation($donnees)
        {
            $donnees = trim($donnees);
            return $donnees;
        }
        $prenom = securisation($_POST['prenom']);
        echo $prenom;

        // echo ($_POST['prenom']);
        ?>
        fais comme chez toi. La méthode trim permet de supprimer des espaces dans le prénom . La fonction securisation
        supprime les espaces dans le prenom
    </p>

</body>

</html>