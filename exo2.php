<h1>Exercice 1</h1>

<p>Soit le tableau suivant :
$capitales =
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Resultat</h2>

<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];

function afficherTableHTML($capitales){
    ksort($capitales)
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