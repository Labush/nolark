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
        <h1 class="titre">
            <span style="color:black;">N</span>
            olark
            <span style="color:black;">.</span>
        </h1>

        <p style="text-align:center;margin-top:300px;">
            <i class="fas fa-angle-double-down fa-3x" style="color:white;"></i>
        </p>
    </div>

    <section>
        <!-- <img id="postit" src="images/post-it.png"> -->

        <article>
            <h2>Qui sommes-nous ?</h2>
            <p>
                <span><i class="fas fa-caret-right" style="margin-right: 10px;"></i></span>
                Spécialiste reconnu dans l'univers de la sécurité du deux-roues,

                Nolark vous propose des <span>milliers de modèles</span> de casques disponibles au travers de plus de <span>50 marques</span>.

                <br><br>

                <span><i class="fas fa-caret-right" style="margin-right: 10px;"></i></span>
                Nolark c'est également la <span>disponibilité de toutes les couleurs et matières</span>
                et ce, pour toutes les bourses.

                <br>Vous trouverez ici tous les types de casques moto : jet, intégral,
                modulable, transformable, piste, cross ou encore un large choix de casques
                moto enfant (taille et poids spécialement adaptés).

                <br><br>
                <span><i class="fas fa-caret-right" style="margin-right: 10px;"></i></span>
                Nolark n'est pas seulement un magasin de casques.

                <br>
                C'est avant tout une équipe
                de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de
                répondre au mieux à vos attentes.
            </p>

            <br><br>
            <p style="text-align:center;">
                Au-delà de l'obligation légale, <span>le port d'un casque</span> est le garant de votre
                <span>sécurité</span>.
                <br>Ainsi, le choix de votre casque doit se faire en fonction de <span>vos besoins</span>
                (route, cross, piste...).

                <br><br><br>
                <i class="fas fa-angle-double-down fa-2x" style="color:#e04848;"></i>
            </p>
        </article>

    </section>
    <section id="thematique">
        <!-- <h1 id="titre_categories">
            Catégories les plus populaires
        </h1> -->
        <h1>
            <a href="pages/route.php" class="pop"><i class="fas fa-motorcycle"></i>
                <span style="font-size: 30px;letter-spacing:1px;margin-left:10px;">Route</span>
            </a>

            <a href="pages/cross.php" class="pop"><i class="fas fa-motorcycle"></i>
                <span style="font-size: 30px;letter-spacing:1px;margin-left:10px;">Cross</span>
            </a>

            <a href="pages/piste.php" class="pop"><i class="fas fa-motorcycle"></i>
                <span style="font-size: 30px;letter-spacing:1px;margin-left:10px;">Piste</span>

            </a>
        </h1>
    </section>
    <?php
    include('./includes/footer.inc.php');
    ?>
</body>

</html>