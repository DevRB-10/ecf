<?php

//defined('FROM_INDEX') or die('coquin');

$title = 'Liste des marques';

ob_start();

?>

<div class="ajout_marque m-4">
        <a href="/views/marques.add.php" style="color:#B5752B; text-decoration:none">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                Ajouter une marque
        </a>
</div>
<br>
<div class="container">
<table class="produits">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as  $obj) : ?>
           
                <tr>
                    <td><?= $obj->getName() ?></td>
                    <td class="p-3"><a href="/marques/modifier/<?= $obj->getId() ?>" class="d-inline" style="text-decoration:none; color:#B5752B">Modifier</a></td>
                    <td class=""><a href="/marques/supprimer/<?= $obj->getId() ?>" class="d-inline" style="text-decoration:none; color:#B5752B">Supprimer</a></td>
                </tr>
            

        <?php endforeach ?>
    </tbody>
</table>

</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';





