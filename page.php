<?php

$sante = "Comment tu vas?<br/>";
$texte = "Comment va la terre?";

echo $sante;

function situation ($coucou){
    echo $coucou.' Cette phrase est écrite dans une fonction saisie dans un fichier distinct <br/>';
}

situation('Salut');

echo str_replace('terre', 'planete',$texte)."Ecrit avec str_replace<br/>";
echo str_repeat ('Bonjour',3)."Ecrit avec str_repeat<br/>";
echo strtoupper($texte)."Phrase majuscule ecrite avec strtoupper<br/>";
echo strpos('Bonjour à tous', 'tous').'Ce chiffre s\'obtient grâce à la fonction strpos qui compte le nombre BONJOUR dans BONJOUR A TOUS <br/>';

$str = 'J\'aime le<strong> "PHP"</strong>';
echo htmlspecialchars($str)."La fonction htmlspecialchars garde le html<br/>";

$voitures = array(
    "Citroen"=>"DS3",
    "Renault"=>"Clio",
);

echo "<pre>";
print_r(array_values($voitures));
echo "</pre>";
echo "Ce tableau s'affiche lisiblement";
echo "<br/><br/>";

if(array_key_exists("Citroen",$voitures)){
    echo "La clé existe";
}else{
    echo "La clé n'existe pas";
}
echo "  Cle trouvee grace à la méthode array_key_exists<br/><br/>";

$compare= array( "a"=>"bleu", "b"=>"noir","c"=>"brun" );
$comparant = array("a"=>"bleu", "b"=>"noir" );

print_r(array_diff_assoc($compare,$comparant));
echo"Ceci est le resultat de la methode array_diff_assoc <br/><br/>";


print_r(array_keys($voitures));
echo "<br/>La méthode array_keys affiche la clé de chaque élément du tableau voitures <br/>";

$phrase = array ("Bonjour", "à","tous");
echo implode(" ",$phrase)."Phrase obtenue à partir d'un tableau grâce à la méthode implode <br/>";
echo "<br/><br/>";
$mot = "Bonjour à tous";
print_r (explode(" ",$mot));
echo "<br/>Transformation d'un string en array grâce à la méthode explode<br/>";
echo "<br/><br/>";

echo date("d-m-Y")."<br/><br/>";
echo "Date affichee grace à la méthode date";

echo "<br/><br/>";



?>