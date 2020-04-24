<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Macé Rental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/crudform.css">

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Macé<span>Rental</span> Administration Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="../pages/admin.php" class="nav-link">Admin</a></li>
                <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="../pages/about.php" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="../pages/services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="../pages/rooms.php" class="nav-link">Location</a></li>
                <li class="nav-item"><a href="../pages/blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="../pages/form.php" class="nav-link">Login utilisateurs</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="ftco-section bg-light" >
    <div class="container" >
        <h1>Liste des utilisateurs</h1>
<?php
include '../assets/fonctions/mesFunctionsSQL.php';
include '../assets/fonctions/mesFunctionsTable.php';

$headers = getHeaderTable();
$users = getAllUsers();
afficherTableau($users, $headers);
?>

<a href=../assets/fonctions/formulaireUtilisateur.php?id=0 >Creer un utilisateur</a>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading"><a href="#" class="logo">Macé Rental</a></h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Services</h2>
                <ul class="list-unstyled">
                    <li><a href="#" class="py-1 d-block">Map Direction</a></li>
                    <li><a href="#" class="py-1 d-block">Accomodation Services</a></li>
                    <li><a href="#" class="py-1 d-block">Great Experience</a></li>
                    <li><a href="#" class="py-1 d-block">Perfect central location</a></li>
                </ul>

            </div>
            </form>
            <h2 class="footer-heading mt-5">Suivez nous</h2>
            <ul class="ftco-footer-social p-0">
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
    </div>
    </div>
    <div class="w-100 mt-5 border-top py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-lg-4 text-md-right">
                    <p class="mb-0 list-unstyled">
                        <a class="mr-md-3" href="#">Terms</a>
                        <a class="mr-md-3" href="#">Privacy</a>
                        <a class="mr-md-3" href="#">Compliances</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.easing.1.3.js"></script>
<script src="../assets/js/jquery.waypoints.min.js"></script>
<script src="../assets/js/jquery.stellar.min.js"></script>
<script src="../assets/js/jquery.animateNumber.min.js"></script>
<script src="../assets/js/bootstrap-datepicker.js"></script>
<script src="../assets/js/jquery.timepicker.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../assets/js/google-map.js"></script>
<script src="../assets/js/main.js"></script>



</body>
</html>