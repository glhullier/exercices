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



?>