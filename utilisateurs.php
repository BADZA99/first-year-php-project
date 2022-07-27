<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'add') {
        header('location: adduser.php');
    } elseif ($page == 'update') {
        header('location: updateUser.php');
    } elseif ($page == 'delete') {
        $id = $_GET['id'];
        $db = mysqli_connect('localhost', 'root', '', 'projetexamen');
        $sql = "DELETE FROM utilisateur WHERE id = $id";
        mysqli_query($db, $sql);
        // recharger la page
        // supprimer la ligne correspondante dans le tableau
        // header('location: utilisateurs.php');
    }
}
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- pour le tableau -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="csstabuser/style.css">
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
                    <li><a class="nav-link scrollto" href="utilisateurs.php">utilisateurs</a></li>
                    <li><a class="nav-link scrollto" href="chauffeurs.php">CHAUFFEUR</a></li>
                    <li><a class="nav-link scrollto" href="receveurs.php">RECEVEUR</a></li>
                    <li><a class="nav-link scrollto" href="bus.php">NOS BUS</a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="login.php">deconnexion</a></li>
            </nav>
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- PHP POUR RECUPERER LES DONNEES DE LA BDD ET LE LISTER MODIFIER SUPPRIMER -->
    <?php
    $db = mysqli_connect('localhost', 'root', '', 'projetexamen');
    $sql = "SELECT * FROM utilisateur";
    $result = mysqli_query($db, $sql);
    ?>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-2">
                    <h2 class="heading-section">Tableau des utilisateurs</h2>
                </div>
            </div>
            <a href="?page=add" class="btn btn-primary mb-3">AJOUTER</a>

            <div class="row">
                <div class="col-md-12">
                    <!-- <h4 class="text-center mb-4">gestion des utilisateurs</h4> -->
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Login</th>
                                    <th>Password</th>
                                    <th>MODIFIER</th>
                                    <th>SUPPRIMER</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($ligne = mysqli_fetch_row($result)) { ?>
                                    <tr>
                                        <?php $ligne[6] = password_hash($ligne[6], PASSWORD_DEFAULT); ?>
                                        <td><?php echo $ligne[2]; ?></td>
                                        <td><?php echo $ligne[0]; ?></td>
                                        <td><?php echo $ligne[1]; ?></td>
                                        <td><?php echo $ligne[3]; ?></td>
                                        <td><?php echo $ligne[4]; ?></td>
                                        <td><?php echo $ligne[5]; ?></td>
                                        <td><?php echo $ligne[6]; ?></td>
                                        <td> <a href="updateUser.php?page=update&id=<?php echo $ligne[2]; ?>" class="btn btn-success">modifier</a></td>
                                        <td> <a href="?page=delete&id=<?php echo $ligne[2]; ?>" class="btn btn-danger">supprimer</a></td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>

    </script>

</body>

</html>