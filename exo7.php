<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.</p>

<h2>Resultat</h2>

<?php

function genererCheckbox($elements){
    ?>
    <fieldset style="width : 100px">
        <?php
            foreach($elements as $element){
                if ($element[1]){
                    echo "<input type='checkbox' id='$element[0]' name='$element[0]' checked>$element[0]<br>";
                } else {
                    echo "<input type='checkbox' id='$element[0]' name='$element[0]'>$element[0]<br>";
                }
            }

        ?>
    </fieldset>
    <?php
}

$elements = [
    "1" => ["Choix 1", False],
    "2" => ["Choix 2", True],
    "3" => ["Choix 3", False],
];

genererCheckbox($elements);