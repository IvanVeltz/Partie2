<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales =
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Resultat</h2>

<style type='text/css'>
    table {border-collapse: collapse; text-align: left;}
    th, td{border: 1px solid;padding: 0 1em}
</style>

<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];


function afficherTableHTML($capitales){
    ksort($capitales)
    // Trie le tableau selon la clé par ordre alphabétique
    ?>
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($capitales as $pays => $capitale){
                echo "<tr><td>".strtoupper($pays)."</td><td>$capitale</td></tr>";
            }
        ?>
        </tbody>
    </table>
    <?php
}

afficherTableHTML($capitales);