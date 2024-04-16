<?php get_header(); ?>

<!-- Contenu de la page d'accueil -->

<?php include 'banner.php'; ?>

<section class="features">
        <?php include 'features.php'; ?>
    </section>


<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrousel d'images en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="carousel">
    <?php include 'carousel.php'; ?>
</div>

<div> <?php include 'footer.php'; ?></div>

</body>

</html>


<?php get_footer(); ?>


