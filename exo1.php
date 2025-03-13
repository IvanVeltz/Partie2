<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Resultat</h2>
<?php

function convertirMajRouge($texte){
    return mb_strtoupper("<span style='color:red'>$texte</span>");
    //strtoupper permet de mettre la chaine de caractere en majuscule
    //mb_strtoupper traitre aussi les caractere avec accent
}

$texte = "mon texte en paramètre";

echo convertirMajRouge($texte);