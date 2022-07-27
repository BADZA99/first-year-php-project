<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="login form/css/style.css">

</head>

<body class="body" style="background-image:url(bus.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center position-sticky">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url(busform.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">connectez vous</h3>
                                </div>

                            </div>
                            <form action="index.php" method="POST" class="signin-form">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" id="login" name="login" required>
                                    <label class="form-control-placeholder" for="username">login</label>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control mb-3" name="password" required>
                                    <label class="form-control-placeholder" for="password">mot de passe</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3"><b>se connecter</b></button>
                                </div>
                            </form>

                            <?php
                            if ((isset($_POST['login'])) && isset($_POST['password'])) {

                                // recuperer la valeur du mot de passe et du login
                                $login = $_POST['login'];
                                $password = $_POST['password'];
                                // convertir le login et mot de passe en chaine de caractere
                                //$login = (string) $login;
                                //$password = (string) $password;
                                // convertir le login et le mot de passe en minuscule
                                //$login = strtolower($login);
                                //$password = strtolower($password);
                                // connexion au la base de données
                                $connexion = mysqli_connect("localhost", "root", "", "projetexamen");
                                // requete pour recuperer le mot de passe et le login de l'utilisateur
                                $requete = "SELECT *FROM utilisateur WHERE login = '$login'";
                                // execution de la requete
                                $resultat = mysqli_query($connexion, $requete);
                                // recuperer resultat
                                $ligne = mysqli_fetch_assoc($resultat);
                                //var_dump($ligne);
                                // recuperer le mot de passe dans une variable
                                $password_base = $ligne['mot de passe'];
                                //$login_bdd = $ligne['login'];
                                //$password_bdd = $ligne['password'];
                                // verifier si le mot de passe et le login sont corrects
                                if ($password_base == $password) {
                                    // si le mot de passe et le login sont corrects
                                    // rediriger l'utilisateur vers la page d'accueil
                                    header('Location: homepage.php');
                                } else {
                                    // si le mot de passe et le login sont incorrects
                                    // afficher un message d'erreur
                                    echo "<b>LOGIN OU MOT DE PASSE INCORRECT</b>";
                                   
                                }
                            }
                            ?>
                            <a href="inscription.php"><b class="font-size:12px">creer un compte</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="home">
    </section> -->



</body>

</html>





<?php
?>