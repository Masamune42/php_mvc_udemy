<?php ob_start() ?>

Ici le contenu de ma page listant les livres

<?php
$titre = "Les livres de la bibliothèque";
$content = ob_get_clean();
require "template.php";
?>