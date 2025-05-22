<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="style/style_stages.css">
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
                <section class="stage">
                    <div class=stage-title>
                        <h1 class="stage-subtitle"> Mes stages</h1>
                    </div>
                    <p class="stage-text">
                        Pendant mes deux années de BTS, j'ai pu effectuer 2 stages d'une durée de 5 semaines chacune. <br> <br>
                        Le premier stage s'est déroulé au sein du service informatique de la mairie de Auch. <br> <br>
                        Durant ce stage, j’ai étudié la documentation du logiciel de caisse utilisé par le personnel de la piscine municipale d’Auch.
                        J’ai également pris connaissance de leurs besoins spécifiques concernant son utilisation.
                        Enfin, j’ai procédé au paramétrage du logiciel afin de l’adapter à leurs attentes. <br> <br>
                        Voici un aperçu de l'écran d'accueil du logiciel de caisse qui été utilisé :
                    </p>
                    <img src="Images/accueil_logiciel_caisse.png">
                    <p id="stage2" class="stage-text">
                        Le deuxième stage s'est déroulé au sein du registre CNV de l’ISPED à Bordeaux. <br> <br>
                        Durant ce stage, j’ai été chargé de la refonte de la base de données ainsi que des formulaires créés via Microsoft Access.
                        Pour commencer, j’ai pris connaissance de la base de données et des formulaires déjà existants. J’ai ensuite procédé à la migration de la base de données Access vers une base de données MySQL.
                        Ensuite, j’ai migré la base de données ACCESS en base données MySQL.
                        Enfin, j'ai refait les formulaires en utilisant PHP, JAVASCRIPT, HTML et CSS. <br> <br>
                        Voici un aperçu du formulaire refait :
                    </p>
                    <img src="Images/accueil_formulaire_1.png">
                    <img src="Images/accueil_formulaire_2.png">
                </section>
            </div>
        </main>

        <!-- Inclure le footer -->
        <?php include('footer.php'); ?>
    </div>
    <script src="script/script_fond.js"></script>
    <script src="script/script_backToTop.js"></script>
</body>

</html>