<h1>Exercice 14</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
</p>

<h2>Resultat</h2>

<?php

$emails = ['elan@elan-formation.fr', 'contact@elan'];

foreach($emails as $email){
    $pref = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $pref = "in";
    }
    echo "L'adresse $email est une adresse e-mail $pref"."valide<br>";
}
