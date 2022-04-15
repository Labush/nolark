<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2020
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->
<html lang="fr-FR">

<head>
    <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
    <meta charset="UTF-8">
    <meta name="author" content="José GIL">
    <meta name="description" content="Nolark - Les casques moto qui vous protègent efficacement. Enfin disponibles en ligne : au meilleur prix et en livraison gratuite !">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/cookies/tarteaucitron/tarteaucitron.js"></script>
    <script src="js/cookies/tarteaucitron.init.js"></script>

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</head>

<body>
    <?php
    include('./includes/header.html.inc.php');
    ?>

    <div style="height:750px;background-image:url('images/banniere.jpg');background-size:100%;">
        <!-- source : https://unsplash.com/photos/zsH35a6Rl3o -->
        <br><br><br><br><br><br><br>
        <a class="btn_call">
            <button class="btn btn-dark">Découvrir Nolark <i class="fas fa-level-down-alt" style="margin-left: 10px;"></i></button>
        </a>
    </div>

    <section id="principal">
        <img id="postit" src="images/post-it.png">

        <article>
            <p>
                Au-delà de l'obligation légale, <span>le port d'un casque</span> est le garant de votre
                <span>sécurité</span>. Le choix de votre casque doit se faire en fonction de <span>vos besoins</span>
                (route, cross, piste...).
            </p>
            <p>
                Spécialiste reconnu dans l'univers de la sécurité du deux-roues, <span>Nolark vous
                    propose des milliers de modèles de casques disponibles au travers de plus de
                    50 marques</span>. Vous trouverez ici tous les types de casques moto : jet, intégral,
                modulable, transformable, piste, cross ou encore un large choix de casques
                moto enfant (taille et poids spécialement adaptés).
            </p>
            <p>
                Nolark c'est également la <span>disponibilité de toutes les couleurs et matières</span> et
                ce, pour toutes les bourses.
            </p>
            <p>
                Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin
                de trouver le modèle qui correspond à vos besoins.
            </p>
            <p>
                <span><i class="fas fa-caret-right" style="margin-right: 10px;"></i></span> Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe
                de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de
                répondre au mieux à vos attentes.
            </p>
        </article>

    </section>
    <section id="thematique">
        <h1 id="titre_categories">
            Catégories les plus populaires
        </h1>
        <h1>
            <a href="pages/route.php" class="pop"><i class="fas fa-caret-right"></i> Route</a>
            <a href="pages/cross.php" class="pop"><i class="fas fa-caret-right"></i> Cross</a>
            <a href="pages/piste.php" class="pop"><i class="fas fa-caret-right"></i> Piste</a>
        </h1>
    </section>
    <?php
    include('./includes/footer.inc.php');
    ?>
</body>

</html>