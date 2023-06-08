<?php

//defined('FROM_INDEX') or die('coquin');

$title = "Ajout d'une marque";

ob_start();
?>

<div class="container">
    <form action="/Classes/Controllers/BrandController.php" method="post">
        <div class="flex ecarte fields">
            <fieldset class="col left">
                <legend>Ajouter une marque</legend>
                
                <div class="field nom">
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom" size="28rem">
                </div>
            </fieldset>
            <br>
        <div class="submit">
            <input type="submit" value="Annuler" class="btn rounded bg-primary inline">
            <input type="submit" value="Ajouter la marque" class="btn rounded bg-warning inline">
        </div>
    </form>

</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';





