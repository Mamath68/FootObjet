<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/f0dc5fab26.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/CSS/smartphone.css">
    <link rel="stylesheet" href="public/CSS/tablette.css">
    <!-- <link rel="stylesheet" href="public/CSS/tv.css"> -->
    <link rel="stylesheet" href="public/tarteaucitron/css/tarteaucitron.css">
    <script src="public/tarteaucitron/tarteaucitron.js"></script>
    <link rel="shortcut icon" href="public/img/FIFA.png" type="image/x-icon">
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <header>
        <nav>
            <a href="index.php?ctrl=home&action=index">Accueil</a>
            <a href="index.php?ctrl=Team&action=findLigueOneTeams">Ligue 1</a>
            <a href="index.php?ctrl=Team&action=findLigueTwoTeams">Ligue 2</a>
            <a href="index.php?ctrl=Team&action=findNationalTeams">National</a>
            <a href="index.php?ctrl=Team&action=findRegionalTeams">Regional</a>
        </nav>
    </header>
    <main>
        <?= $contenu;
        include_once("comment_button.php");
        ?>
    </main>

    <footer class="text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: CTA -->
            <section>
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3"> © 2023 FIFA Stamm - Nouvelle version</span>
                </p>
            </section>
            <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 footer">

            <a class="text-white" href="index.php?ctrl=home&action=about" target="_blank">A
                Propos</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="public/js/script.js"></script>
    <script src="public/js/tarteaucitron.js"></script>
    <script src="public/tarteaucitron/advertising.js"></script>
    <script src="public/tarteaucitron/tarteaucitron.services.js"></script>
    <script src="public/tarteaucitron/lang/tarteaucitron.de.js"></script>
</body>

</html>