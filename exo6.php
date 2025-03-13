<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<h2>Resultat</h2>

<?php
function alimenterListeDeroulante($elements){
    ?>

    <select name="sexe" id="sexe-select">
        <option value="" selected disabled >Choisissez une option</option>
        <?php
            foreach($elements as $element){
                echo "<option value='$element'>$element</option>";
            }
        ?>
    </select>

    <?php
}

$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
