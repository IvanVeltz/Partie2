<h1>Exercice 10</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>Resultat</h2>

<style>
    form * {
        margin: 1em;
    }
</style>

<?php
function afficherInput($nomsInput){
    
        foreach($nomsInput as $nomInput){
            echo "<label>$nomInput : </label><br>";
            echo "<input type='text'><br>";
        }
}

function alimenterListeDeroulante($elements){
    ?>

    <select name="" id="">
        <option value="" selected disabled >Choisissez une option</option>
        <?php
            foreach($elements as $element){
                echo "<option value='$element'>$element</option>";
            }
        ?>
    </select>

    <?php
}

$nomsInput = ["Nom", "Prenom", "Adresse e-mail", "Ville", "Sexe"];
$elements = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];
?>



<form action="/">
    <p>Remplissez le formulaire suivant :</p>
    <?php

    afficherInput($nomsInput);
    alimenterListeDeroulante($elements);
    ?>
    <br>
    <input type="submit" value="Envoyer" />
</form>
