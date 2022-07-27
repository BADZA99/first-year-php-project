<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="home assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="home assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="home assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="home assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="home assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="home assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="home assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="homepage.php">AFTU CORP</a></h1>

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="utilisateurs.php">UTILISATEURS</a></li>
                    <li><a class="nav-link scrollto" href="chauffeurs.php">CHAUFFEUR</a></li>
                    <li><a class="nav-link scrollto" href="receveurs.php">RECEVEUR</a></li>
                    <li><a class="nav-link scrollto" href="bus.php">NOS BUS</a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="login.php">deconnexion</a></li>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
    <section id="hero" class="mt-1">
        <div class="hero-container" data-aos="fade-up">
            <h1>Bienvenue chez AFTU CORP</h1>
            <div class="container">

                <h2>L’objectif de <span>AFTU CORP</span> est de mettre en place un mini-logiciel de gestion des bus pour le
                    transport en commun au Sénégal.</h2>
            </div>
            <a href="#main" class="btn-get-started scrollto">commencer</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title" data-aos="zoom-in">

                    <h3>QUE VOULEZ VOUS <span>FAIRE</span>?</h3>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <a href="bus.php">
                            <div class="box" data-aos="fade-up" data-aos-delay="100">
                                <span>01</span>
                                <h4>Gestion des bus</h4>
                                <p>Un bus est caractérisé par son id (auto), sa couleur, sa marque, son numéro, #conducteur)
                                    numéro (80,90,10,63,5,7)
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <a href="chauffeurs.php">
                            <div class="box" data-aos="fade-up" data-aos-delay="100">
                                <span>02</span>
                                <h4>Gestion des chauffeurs</h4>
                                <p>Un receveur est caractérisé par son id (auto), son nom, son prénom, son téléphone, son
                                    âge.</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <a href="receveurs.php">
                            <div class="box">
                                <span>03</span>
                                <h4> Gestion des receveurs</h4>
                                <p>Un chauffeur est caractérisé par son id (auto), son nom, son prénom, son téléphone, son
                                    âge et son type de permis.</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="221" data-purecounter-duration="2" class="purecounter"></span>
                        <p>controleurs</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="2" class="purecounter"></span>
                        <p>vehicules</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="14463" data-purecounter-duration="2" class="purecounter"></span>
                        <p>passagers</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="553" data-purecounter-duration="2" class="purecounter"></span>
                        <p>receveurs</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

    </main><!-- End #main -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="home assets/vendor/purecounter/purecounter.js"></script>
    <script src="home assets/vendor/aos/aos.js"></script>
    <script src="home assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="home assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="home assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="home assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="home assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="home assets/js/main.js"></script>




</body>

</html>