<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="style/style_apropos.css">
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

        <!-- Section principale de la page À propos -->
        <main class="main-content">
            <div class="content-wrapper">
                <section class="intro">
                    <h1 class="presentation-subtitle"> Ma présentation</h1>
                    <p class="presentation">
                        Bonjour, je m'appelle Lucas Bourguet.<br><br>
                        Je suis actuellement étudiant au lycée Pardailhan à Auch en deuxième année de BTS SIO (Services Informatiques aux Organisations) dans l'option SLAM (Solutions Logicielles et Application Métier) qui est une option spécialisée pour le développement.<br><br>
                        Actuellement toujours en cours d'étude, je vous propose sur ce portfolio de retrouver les différentes études et projets professionnels que j'ai pu entreprendre au sein de ma carrière mais également la veille technologique et les stages que j'ai effectués durant ces 2 ans de BTS.<br><br>
                        Vous retrouverez ci-dessous mon CV ainsi que mon tableau de synthèse.
                    </p>
                    <a href="Pièces/CV_Auch.pdf" class="download-btn" download>
                        <button class="btn">Télécharger mon CV</button>
                    </a>
                    <a href="Pièces/Tableau_de_synthèse-Lucas_Bourguet-Epreuve_E6.pdf" class="download-btn" target="_blank">
                        <button class="btn">Voir mon tableau de synthèse</button>
                    </a>
                </section>
                <section class="bts">
                    <h1 class="presentation-subtitle"> Le BTS SIO </h1>
                    <p class="presentation">
                        Le BTS SIO (Services Informatiques aux Organisations) est une formation de deux ans qui prépare les étudiants à devenir des techniciens supérieurs dans le domaine de l'informatique.<br><br>
                        Ce BTS se décline en deux options : <br>
                    <ul class="bts-options">
                        <li><strong>SLAM (Solutions Logicielles et Applications Métiers)</strong> : Cette option se concentre sur le développement d'applications et la gestion de projets informatiques.</li>
                        <li><strong>SISR (Solutions d'Infrastructure, Systèmes et Réseaux)</strong> : Cette option se focalise sur l'administration des systèmes et des réseaux informatiques.</li>
                    </ul>
                    </p>
                </section>
            </div>
            <section class="parcours">
                <h1 class="presentation-subtitle"> Mon Parcours</h2>
                    <p class="presentation">
                        J'ai débuté mon parcours académique par l'obtention du Baccalauréat STI2D option SIN avec mention assez bien en juillet 2020 au lycée Jean Moulin à Langon. <br> <br>
                        Par la suite, j'ai intégré l'IUT de Bordeaux en DUT Informatique, où j'ai effectué une première année.
                        Avec la réforme du DUT en BUT, j'ai redoublé en première année de BUT Informatique. <br> <br>
                        Finalement, j'ai décidé de me réorienter en BTS SIO option SLAM, formation que je suis actuellement en train de suivre.
                    </p>
            </section>

        </main>

        <!-- Inclure le footer -->
        <?php include('footer.php'); ?>
    </div>
    <script src="script/script_backToTop.js"></script>
    <script src="script/script_fond.js"></script>
</body>

</html>