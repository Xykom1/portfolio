<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>
    <link rel="stylesheet" href="style/style_certification.css">
    <link rel="stylesheet" href="style/style_header.css">
    <link rel="stylesheet" href="style/style_footer.css">
    <link rel="stylesheet" href="style/style_fond.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <section class="certification">
                    <div class=certification-title>
                        <h1 class="certification-subtitle"> Mes Certifications</h1>
                    </div>
                    <p class="certification-text">
                        Durant mon BTS, j'ai pû acquérir 3 certifications : le MOOC de l'ANSSI, l'Atelier RGPD et PIX.
                    </p>
                    <h2 class="certif-subtitle"> Le MOOC de l'ANSSI </h2>
                    <p class="certification-text">
                        Le MOOC SecNumacadémie est une formation en ligne gratuite proposée par l'ANSSI, visant à sensibiliser un large public aux enjeux de la cybersécurité.
                        Cette formation m'a permis de renforcer mes compétences en cybersécurité. <br> <br>
                    </p>
                    <img src="Images/Certification_ANSSI_Bourguet_page-0001.jpg">
                    <div class="btn----">
                        <div class="show-2">
                            <img id="show-2" src="Images/Certification_ANSSI_Bourguet_page-0001.jpg" alt="Attestation MOOC ANSSI" title="Afficher l'attestation du MOOC de l'ANSSI en plein d'écran" ondblclick="show_2()">
                            <div class="background-show-2">
                                <a href="Images/Certification_ANSSI_Bourguet_page-0001.jpg" download>
                                    <i id="download" title="Télécharger l'attestation du MOOC de l'ANSSI" class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        <div id="Modal_2" class="modalshow-2">
                            <div class="modal-content-show-2">
                                <i id="x-mark-show-2" title="Fermer" class='bx bxs-x-circle'></i>
                                <div class="minus_pus">
                                    <button type="submit" class="dezoom" onclick="zoomMoins_2()"><i class='bx bx-minus'></i></button>
                                    <div class="line"></div>
                                    <button type="submit" class="zoom" onclick="zoomPlus_2()"><i class='bx bx-plus'></i></button>
                                </div>
                                <div id="zoom_img_2">
                                    <img src="Images/Certification_ANSSI_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="cnil" class="certif-subtitle"> L'Atelier RGPD </h2>
                    <p class="certification-text">
                        Durant ma formation, j’ai suivi l’Atelier RGPD, un module en ligne proposé par la CNIL, visant à comprendre les enjeux du Règlement Général sur la Protection des Données (RGPD).
                        Ce cours permet d'acquérir les bonnes pratiques en matière de protection des données personnelles, aussi bien pour les particuliers que pour les professionnels. <br><br>
                    </p>
                    <div class="btn----">
                        <div class="show-2">
                            <img id="show-2" src="Images/Attestation_module1_CNIL_Bourguet_page-0001.jpg" alt="Attestation module 1 CNIL" title="Afficher l'attestation de l'atelier RGPD en plein d'écran" ondblclick="show_2()">
                            <div class="background-show-2">
                                <a href="Pièces/Attestation_module1_CNIL_Bourguet_page-0001.pdf" target="_blank">
                                    <i id="eye-visual" title="Consulter l'attestation de l'atelier RGPD" class="fas fa-eye"></i>
                                </a>
                                <a href="Pièces/Attestation_module1_CNIL_Bourguet_page-0001.pdf" download>
                                    <i id="download" title="Télécharger l'attestation de l'atelier RGPD" class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        <div id="Modal_2" class="modalshow-2">
                            <div class="modal-content-show-2">
                                <i id="x-mark-show-2" title="Fermer" class='bx bxs-x-circle'></i>
                                <div class="minus_pus">
                                    <button type="submit" class="dezoom" onclick="zoomMoins_2()"><i class='bx bx-minus'></i></button>
                                    <div class="line"></div>
                                    <button type="submit" class="zoom" onclick="zoomPlus_2()"><i class='bx bx-plus'></i></button>
                                </div>
                                <div id="zoom_img_2">
                                    <img src="Images/Attestation_module1_CNIL_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                    <img src="Images/Attestation_module2_CNIL_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                    <img src="Images/Attestation_module3_CNIL_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                    <img src="Images/Attestation_module4_CNIL_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                    <img src="Images/Attestation_module5_CNIL_Bourguet_page-0001.jpg" id="img-cnil" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 id="pix" class="certif-subtitle"> PIX </h2>
                    <p class="certification-text">
                        PIX est une plateforme publique permettant d’évaluer et de certifier les compétences numériques, reconnue par l’État.
                        Elle couvre plusieurs domaines tels que la culture numérique, la sécurité, la communication, la programmation, ou encore la résolution de problèmes.
                        Grâce à cette certification, j’ai pu valider mes compétences numériques de manière officielle. <br><br>
                    </p>
                    <img src="Images/certification-pix_page-0001.jpg">
                </section>
            </div>
        </main>

        <!-- Inclure le footer -->
        <?php include('footer.php'); ?>
    </div>
    <script src="script/script_fond.js"></script>
    <script src="script/script_backToTop.js"></script>
    <script src="script/script_certification.js"></script>
</body>

</html>