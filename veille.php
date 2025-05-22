<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veille technologique</title>
    <link rel="stylesheet" href="style/style_veille.css">
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
                <section class="veille">
                    <div class=veille-title>
                        <h1 class="veille-subtitle"> Ma Veille Technologique</h1>
                    </div>
                    <p class="veille-text">
                        Dans le cadre de ma veille technologique pour le BTS SIO option SLAM, j’ai choisi de m’intéresser à Unreal Engine, un moteur de jeu vidéo très populaire et en pleine évolution. 
                        Ce moteur est largement utilisé dans l’industrie du jeu vidéo mais également dans d’autres secteurs comme la simulation, la réalité virtuelle, ou la production audiovisuelle. 
                        Cette veille vise à comprendre ses fonctionnalités, ses avantages, ses limites, ainsi que son positionnement par rapport à d’autres moteurs de jeux, notamment Unity.
                    </p>
                    <h2 class="veilleTech-subtitle"> Unreal Engine, c'est quoi ? </h2>
                    <p class="veille-text">
                        Unreal Engine est un moteur de jeu 3D développé par Epic Games. 
                        La toute première version, Unreal Engine 1, est sortie en 1998, concomitamment avec le jeu Unreal, et a révolutionné l’industrie grâce à ses avancées en rendu 3D temps réel. <br> <br>
                        Depuis, Unreal Engine a connu plusieurs évolutions majeures, avec des versions successives qui ont amélioré les capacités graphiques, la gestion de la physique, et l’ergonomie pour les développeurs. 
                        Sa dernière version majeure, Unreal Engine 5, est sortie officiellement en avril 2022. 
                        Cette version introduit des innovations techniques comme Nanite, qui permet de gérer des modèles 3D très détaillés sans perte de performance, et Lumen, un système d’éclairage global dynamique en temps réel. <br> <br>
                        Unreal Engine utilise principalement le langage C++ pour la programmation avancée, mais propose également un système de script visuel appelé Blueprints, qui facilite la création de gameplay sans nécessiter de code.
                    </p>
                    <h2 id="avantage" class="veilleTech-subtitle"> Avantages </h2>
                    <p class="veille-text">
                        Unreal Engine a plusieurs avantages :
                    </p>
                    <ul class="veille-liste">
                        <li> Graphismes de très haute qualité </li>
                        <li> Système Blueprint puissant pour les non-programmeurs </li>
                        <li> Mises à jour régulières et communauté active </li>
                        <li> Adapté aussi à la réalité virtuelle, à la réalité augmentée et à la simulation professionnelle </li>
                        <li> Licence gratuite jusqu’à un certain seuil de revenus </li>
                    </ul>
                    <h2 id="inconvenient" class="veilleTech-subtitle"> Inconvénients </h2>
                    <p class="veille-text">
                        Unreal Engine possède aussi plusieurs inconvénients :
                    </p>
                    <ul class="veille-liste">
                        <li> Courbe d’apprentissage assez élevée, surtout pour le C++ </li>
                        <li> Exigeant en ressources matérielles </li>
                        <li> Taille des projets souvent importante </li>
                        <li> Nécessite une bonne maîtrise technique pour exploiter tout le potentiel </li> 
                    </ul>
                    <h2 id="unity" class="veilleTech-subtitle"> Unreal Engine VS Unity </h2>
                    <p class="veille-text">
                        Unreal Engine et Unity sont deux moteurs de jeu très populaires, mais ils ont des caractéristiques différentes qui les destinent à des usages variés. 
                        Unreal Engine utilise principalement le langage C++ et propose également un système de script visuel appelé Blueprints, ce qui permet de créer des jeux complexes avec un haut niveau de détail graphique. 
                        Unity, quant à lui, s’appuie principalement sur le langage C#, qui est généralement considéré comme plus accessible pour les débutants. <br> <br>
                        En termes de qualité graphique, Unreal Engine est réputé pour ses rendus très réalistes, adaptés aux projets de grande envergure, souvent appelés AAA. 
                        Unity offre une bonne qualité graphique également, mais il est souvent privilégié pour des projets mobiles, web, ou des jeux nécessitant une optimisation poussée. <br> <br>
                        Concernant la facilité d’apprentissage, Unity est souvent considéré comme plus simple à prendre en main, grâce à son langage C# plus abordable et une interface intuitive. 
                        Unreal Engine, de son côté, présente une courbe d’apprentissage plus élevée, notamment pour maîtriser le C++, bien que le système Blueprints facilite la création sans code. <br> <br>
                        Enfin, les deux moteurs proposent des modèles de licence différents. 
                        Unreal Engine est gratuit jusqu’à un certain seuil de revenus, tandis que Unity propose différentes formules d’abonnement selon l’usage et le chiffre d’affaires.
                    </p>
                    <h2 id="outil" class="veilleTech-subtitle"> Outils utilisés </h2>
                    <p class="veille-text">
                        Pour réaliser cette veille technologique sur Unreal Engine, j’ai choisi d’utiliser principalement deux outils :
                    </p>
                    <ul class="veille-liste">
                        <li> 
                            <strong> Feedly : </strong> 
                            un agrégateur de flux RSS qui me permet de centraliser et suivre en temps réel les articles et actualités publiés par des blogs, sites spécialisés, et sources officielles autour d’Unreal Engine. 
                            Cela facilite le suivi régulier sans avoir à visiter chaque site individuellement. 
                        </li>
                        <li> 
                            <strong> Google Alert : </strong> 
                            un service d’alerte par e-mail qui m’envoie automatiquement les nouveautés publiées sur le web contenant les mots-clés “Unreal Engine" et “Unreal Engine 5”. 
                            Cela me permet de ne manquer aucune information importante, même sur des sites moins connus. 
                        </li>
                    </ul>
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