<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="../assets/js/form.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Macé<span>Admin</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="../index.php" class="nav-link">Acceuil</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="rooms.php" class="nav-link">Location</a></li>
                <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Nous contacter</a></li>
                <li class="nav-item active"><a href="form.php" class="nav-link">Se connecter / S'enregistrer</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <form class="login-form" action="../assets/fonctions/config2.php" method="post">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Nom d'Administrateur</label>
                    <input id="user" type="text" class="input" name="username" required>
                </div>
                <div class="group">
                    <label for="pass" class="label">Mot de passe</label>
                    <input id="pass" type="password" class="input" data-type="password" name="password" required>
                </div>

                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
            </div>

        </form>
    </div>
</div>
</div>
<a href="adminlog.php" >Admin?</a>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading"><a href="#" class="logo">Vacation Rental</a></h2>
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


</body>
</html>