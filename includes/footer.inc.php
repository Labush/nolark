<footer class="bg text-center text-lg-start" style="border-top:solid 4px #e04848;">
    <br>
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Nous contacter</h5>

                <p>
                    🕒 Nous répondons à vos questions du lundi au samedi de 9h à 19h.
                    <br>
                    <br><span>📞</span> <a href="tel:+33412345678" style="color: #262626;">04 12 34 56 78</a>
                    <br><span>＠</span> <a href="<?= $dirIndex; ?>pages/nous-contacter.php#contact" style="color: #262626;">Par email</a>
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">À propos de Nolark</h5>

                <p>📍 <a href="<?= $dirIndex; ?>pages/nous-contacter.php" style="color: #262626;">Nous trouver</a></p>
                <p>📑 <a href="<?= $dirIndex; ?>pages/cgu.php" style="color: #262626;">Consulter nos C.G.U. <br>(conditions générales d'utilisation)</a></p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
    <div class="container pt-4 text-center">
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/Casques.Nolark" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f fa-2x"></i></a>

            <!-- Twitter -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://twitter.com/Casques_Nolark" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter fa-2x"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.linkedin.com/company/nolark" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin fa-2x"></i></a>

            <!-- Snapchat -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/casquesnolark/" role="button" data-mdb-ripple-color="dark"><i class="fab fa-snapchat fa-2x"></i></a>

            <!-- Instagram -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/casquesnolark/" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram fa-2x"></i></a>
        </section>
    </div>

    <!-- Copyright -->
    <div class="text-center" style="background-color: #e04848;height:60px;color:#fbfbfb;">
        <?php
        setlocale(LC_ALL, 'fr-FR.utf8', 'fra');
        date_default_timezone_set('Europe/Paris');
        ?>
        <p style="padding-top: 18px;">&copy; <?= strftime("%Y"); ?> Nolark - BTS SIO</p>
    </div>
    <!-- Copyright -->
</footer>