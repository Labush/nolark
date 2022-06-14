<?php
// Sommes-nous sur l'index ? Récupération du nom de page dans $pageActuelle
$scriptName = filter_input(INPUT_SERVER, 'SCRIPT_NAME');
$pageActuelle = substr($scriptName, strrpos($scriptName, '/') + 1);
if ($pageActuelle === 'index.php') {
    $dirIndex = './';
    $dirPages = './pages/';
} else {
    $dirIndex = '../';
    $dirPages = './';
}
// Construction d'un tableau associatif contenant les correspondances
// noms de pages / liens de la barre de navigation
$pages = array(
    'Accueil' => $dirIndex . 'index.php',
    'Route' => $dirPages . 'route.php',
    'Cross' => $dirPages . 'cross.php',
    'Piste' => $dirPages . 'piste.php',
    'Enfants' => $dirPages . 'enfants.php',
    'Nous contacter' => $dirPages . 'nous-contacter.php'
);
?>

<header>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 collapse_menu">
            <!-- <h5 class="text-white h4">Menu</h5> -->
            <li><?php
                // Affichage des liens de la barre de navigation
                foreach ($pages as $nom => $url) {
                    echo "\n", '<li><a href="', $url, '" style="color: #e04848;">', $nom, '</a></li>';
                }
                ?>
            </li>
        </div>
    </div>

    <style>
        li:hover {
            color: white !important;
        }
    </style>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
</header>