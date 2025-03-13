<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>Resultat</h2>

<?php 

function afficherRadio($nomsRadio){
    ?>
    <fieldset>
        <?php
        foreach($nomsRadio as $nomRadio){
            echo "<div><input type='radio' id='$nomRadio' name='sexe' value='$nomRadio'/>
                    <label for='$nomRadio'>$nomRadio</label></div>";
        }

        ?>
    </fieldset>
    <?php
}

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

afficherRadio($nomsRadio);