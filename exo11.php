<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
</p>

<h2>Resultat</h2>

<?php


function formaterDateFr($date){
    $date = new DateTime($date);
    // Permet d'indiquer que notre chaine de caractere est une date
    $formatter = new IntlDateFormatter('fr',IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    // Créer le formateur de date avec la langue, le format de la date, le format de l'heure
    echo $formatter->format($date);
    // Utlise la fonction format du formatteur qui renvoie une chiane de caractere à partir d'une date
}

formaterDateFr("2018-02-23");