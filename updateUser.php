<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms</title>

    <!-- Icons font CSS-->
    <link href="form ajout user assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="form ajout user assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="form ajout user assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="form ajout user assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="form ajout user assets/css/main.css" rel="stylesheet" media="all">
</head>


<body>
    <?php
    // charger les données dans chaque champs du formulaire
    $connexion = mysqli_connect("localhost", "root", "", "projetexamen");
    $id = $_GET['id'];
    $requete = "SELECT * FROM utilisateur WHERE id=$id";
    $resultat = mysqli_query($connexion, $requete);
    $ligne = mysqli_fetch_row($resultat);
    // var_dump($ligne);
    if (isset($_POST['save'])) {
        $id = $_GET['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "UPDATE `utilisateur` SET  `Nom`='$nom',`Prenom`='$prenom',`telephone`='$phone',`email`='$email',`login`='$login',`mot de passe`='$mdp' WHERE id=$id";
        // var_dump($sql);
        //$result = mysqli_query($connexion, $sql);
        if (!mysqli_query($connexion, $sql)) {
            echo "erreur";
        } else {
            echo "MODIFIER";
            header('Location: utilisateurs.php');
        }
    }


    ?>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">formulaire de modification</h2>

                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="nom" id="nom" value=<?= $ligne[0] ?>>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prenom" name="prenom" id="prenom" value="<?= $ligne[1] ?>">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-3" type="text" placeholder="login" name="login" id="login" value="<?= $ligne[5] ?>">
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-3" type="text" placeholder="password" name="mdp" id="password" value="<?= $ligne[6] ?>">
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" id="email" value="<?= $ligne[4] ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" id="phone" value="<?= $ligne[3] ?>">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="save" id="save">modifier</button>
                        </div>
                    </form>
                    <script>
                        const nom = document.getElementById("nom");
                        const prenom = document.getElementById("prenom");
                        const login = document.getElementById("login");
                        const password = document.getElementById("password");
                        const email = document.getElementById("email");
                        const phone = document.getElementById("phone");
                        const save = document.getElementById("save");
                        save.addEventListener("click", validation);

                        function validation(event) {
                            if (nom.value == "" ||
                                prenom.value == "" ||
                                login.value == "" ||
                                password.value == "" ||
                                email.value == "" ||
                                phone.value == ""
                            ) {
                                event.preventDefault();
                                alert("tout les champs sont obligatoires");
                            }
                            // le nom,prenom doivent contenir que des lettres
                            else if (!nom.value.match(/^[a-zA-Z]+$/)) {
                                event.preventDefault();
                                alert("le nom doit contenir que des lettres");
                            } else if (!prenom.value.match(/^[a-zA-Z]+$/)) {
                                event.preventDefault();
                                alert("le prenom doit contenir que des lettres");
                            }
                            // le login doit contenir que des lettres et des chiffres
                            else if (!login.value.match(/^[a-zA-Z0-9]+$/)) {
                                event.preventDefault();
                                alert("le login doit contenir que des lettres et des chiffres");
                            }
                            // le mot de passe doit contenir que des lettres et des chiffres
                            else if (!password.value.match(/^[a-zA-Z0-9]+$/)) {
                                event.preventDefault();
                                alert("le mot de passe doit contenir que des lettres et des chiffres");
                            }
                            // le email doit contenir un @ et un .
                            else if (!email.value.match(/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/)) {
                                event.preventDefault();
                                alert("le email doit contenir un @ et un .");
                            }
                            // le telephone doit contenir que des chiffres
                            else if (!phone.value.match(/^[0-9]+$/)) {
                                event.preventDefault();
                                alert("le telephone doit contenir que des chiffres");
                            } else {
                                alert("modifiée avec succès");

                            }
                        }
                    </script>

                    <?php


                    ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="form ajout user assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="form ajout user assets/vendor/select2/select2.min.js"></script>
    <script src="form ajout user assets/vendor/datepicker/moment.min.js"></script>
    <script src="form ajout user assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="form ajout user assets/js/global.js"></script>

</body>


</html>
<!-- end document-->