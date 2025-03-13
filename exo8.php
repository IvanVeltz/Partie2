<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<h2>Resultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

// Fonction qui repete n fois l'image provenant d'un url
function repeterImage($url, $n){
    ?>
    <div style='display:flex;'>
    <?php
        for ($i=1; $i<=$n; $i++){
            echo "<figure style='margin: 0;'>
                    <img src='$url' alt=''>
                </figure>";
        }
    ?>
    </div>
    <?php
}

repeterImage($url, 4);