<?php ob_start() ?>

Ici le contenue de ma page d'accueil


<?php
$content = ob_get_clean();
$titre = "Bibliothèque MGA";
 require 'template.php';
 ?>
