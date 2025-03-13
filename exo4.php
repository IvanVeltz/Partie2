<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).

On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/

Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
</p>

<h2>Resultat</h2>

<style type='text/css'>
    table {border-collapse: collapse; text-align: left;}
    th, td{border: 1px solid;padding: 0 1em}
</style>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

function afficherTableHTML($capitales){
    ksort($capitales)
    // Trie le tableau selon la clé par ordre alphabétique
    ?>
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Lien Wiki</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $lienWiki = "https://fr.wikipedia.org/wiki/";
            foreach($capitales as $pays => $capitale){
                echo "<tr>
                        <td>".strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td><a href='$lienWiki$capitale' target='_blank'>Wiki</a></td>
                    </tr>";
            }
        ?>
        </tbody>
    </table>
    <?php
}

afficherTableHTML($capitales);