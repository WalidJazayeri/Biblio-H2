<?php 
require_once "Livre.class.php";
$l1 = new Livre(1,"Algorithmique selon H2PROG",300,"algo.png");
$l2 = new Livre(2,"Le virus Asiatique",200,"virus.png");
$l3 = new Livre(3,"La France du 19ème",100,"france.png");
$l4 = new Livre(4,"Le Javascript Client",500,"JS.png");

$livres = [$l1, $l2, $l3, $l4];

ob_start(); ?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php foreach($livres as $key => $livre) : ?>
    <tr>
        <td class="align-middke"><img src="public/images/<?= $livre->getImage() ?>" width="60px;" alt=""></td>
        <td class="align-middke"><?= $livre->getTitre() ?></td>
        <td class="align-middke"><?= $livre->getNbPages() ?></td>
        <td class="align-middke"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middke"><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="" class="btn btn-success d-block">Ajouter</a>


<?php
$content = ob_get_clean();
$titre = "Les livres de la blibliothèque";
 require 'template.php';
 ?>
