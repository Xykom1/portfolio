<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="style/style_index.css">
  <link rel="stylesheet" href="style/style_header.css">
  <link rel="stylesheet" href="style/style_footer.css">
  <link rel="stylesheet" href="style/style_fond.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
  <div class="container">
    <!-- Inclure la barre de navigation -->
    <?php include('header.php'); ?>

    <!-- Section principale de la page d'accueil -->
    <main class="main-content">
      <section class="intro">
        <h1 class="welcome-text">BIENVENUE SUR MON</h1>
        <h2 class="portfolio-title">Portfolio</h2>
        <p class="subtitle">Je m'appelle Lucas Bourguet. J'ai 22 ans et je suis actuellement en seconde année de BTS SIO au lycée Pardailhan à Auch.</p>
        <a href="apropos.php" class="learn-more-btn"><button class="btn">En savoir plus</button></a>
      </section>
    </main>

    <!-- Inclure le footer -->
    <?php include('footer.php'); ?>
  </div>
  <script src="script/script_backToTop.js"></script>
  <script src="script/script_fond.js"></script>
</body>

</html>