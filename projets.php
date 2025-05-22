<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="style/style_projets.css">
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
                <section class="projet">
                    <div class=projet-title>
                        <h1 class="projet-subtitle"> Mes Projets</h1>
                    </div>
                    <p class="projet-text">
                        Durant mes deux années de BTS, j'ai effectué 3 projets aussi appelé PPE.
                    </p>
                    <h2 class="ppe-subtitle"> PPE 1 </h2>
                    <p class="projet-text">
                        Le premier PPE consistait en un travail de recherche sur les progiciels de gestion intégrés (PGI).
                        J’ai réalisé ce projet en binôme avec Decrouy Aristide. <br> <br>
                        L’objectif était de comparer trois PGI — Sage, Cegid et OpenERP — afin d’aider une entreprise à choisir la solution la plus adaptée à ses besoins. <br> <br>
                        À l’issue de ce projet, nous avons rédigé un compte rendu présentant les résultats de notre analyse comparative. <br> <br>
                        Voici ce compte rendu en pdf :
                    </p>
                    <a href="Pièces/Rapport-Technique-PPE1.pdf" class="btn" target="_blank">Voir le PDF</a>
                    <h2 id="ppe2" class="ppe-subtitle"> PPE 2 </h2>
                    <p class="projet-text">
                        Le deuxième PPE consistait à concevoir et développé un site internet.
                        J’ai réalisé ce projet en collaboration avec Decrouy Aristide et Roman Ambroziewicz. <br> <br>
                        L’objectif était de créer un site web pour les restaurants pédagogiques Baron et Pardailhan.
                        Ces restaurants souhaitent permettre aux clients de découvrir les établissements, consulter les menus et les cartes des vins, et effectuer des réservations en ligne.
                        Un espace d’administration était également prévu pour la gestion du contenu par les responsables. <br><br>
                        À ce stade du projet, nous avons réalisé la page d’accueil, ainsi que les pages de connexion et d’inscription. <br><br>
                        Voici le lien du GitHub où se trouve le projet :
                    </p>
                    <a href="https://github.com/MC-Blue/Project_PPE2/tree/develope" target="_blank" class="btn">Voir le projet sur GitHub</a>
                    <h2 id="ppe3" class="ppe-subtitle"> PPE 3 </h2>
                    <p class="projet-text">
                        Le troisième PPE consistait à concevoir et développé une application mobile.
                        J’ai réalisé ce projet en collaboration avec Decrouy Aristide et Bouzid Ghlamallah. <br> <br>
                        L’objectif était de créer une application mobile pour une société de maintenance, afin de permettre à ses techniciens de gérer et suivre les interventions directement sur le terrain.
                        L’application permet de consulter les interventions en cours, d’ajouter des commentaires, de mettre des photos, de recueillir la signature du client, et de générer un rapport final. <br><br>
                        À la fin du projet, l’application a été entièrement développée et finalisée. Elle est désormais totalement fonctionnelle. <br><br>
                        Voici le lien du GitHub où se trouve le projet :
                    </p>
                    <a href="https://github.com/KCBento/techplan/tree/Prog" target="_blank" class="btn">Voir le projet sur GitHub</a>
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