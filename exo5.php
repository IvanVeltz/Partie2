<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>

<h2>Resultat</h2>

<?php
function afficherInput($nomsInput){
    ?>
    <form action="/">
        <?php
        foreach($nomsInput as $nomInput){
            echo "<label>$nomInput</label><br>";
            echo "<input type='text'><br>";
        }
        ?>
    </form>
    <?php
}

$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);

