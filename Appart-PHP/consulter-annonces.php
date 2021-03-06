<?php 
    require_once('inc/init.php');
?> 
<!doctype html>
<html lang="fr">

<head>
    <?php require("inc/meta.html") ; ?>
    <title>Le Bon Appart - Location et vente d'appartement en ligne</title>
</head>

<body>
    <!-- LA NAVIGATION EN INCLUDE -->
    <?php
    require('inc/nav.inc.php')
    ?>
    <!-- JUMBOTRON -->
    <div class="jumbotron text-center">
        <h1>Consulter toutes les annonces</h1>
    </div>
        

        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
            <main class="container bg-white">

                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="">Les annonces du site</h2>
                    <div class="col-sm-12">
                    <?php
                        $requete = $pdoBonAppart->query("SELECT * FROM advert ORDER BY id DESC");
                        tableau_annonces($requete) ;
                    ?>
                </div><!-- fin col -->
            </main>

    <!-- LE FOOTER EN REQUIRE -->
    <?php
        require("inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>