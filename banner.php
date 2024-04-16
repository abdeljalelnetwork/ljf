<?php
// Contenu de la bannière à définir
$messages = array(
    "Des artisans à votre service",
    "Nous sommes disponible 24/24 7j/7",
    "Contactez-nous",
 
);
?>

<div class="scrolling-banner">
    <ul>
        <?php foreach ($messages as $message) : ?>
            <li><?php echo $message; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
