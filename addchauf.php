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
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">formulaire d'ajout</h2>

                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nom" name="nom" id="nom">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Prenom" name="prenom" id="prenom">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" id="phone">
                        </div>
                        <div class="input-group">
                            <div class="input-group">
                                <input class="input--style-3" type="number" placeholder="age" name="age" id="age">
                            </div>
                            <select name="typepermis" id="typep">
                                <option value="A">type A</option>
                                <option value="B">type B</option>
                            </select>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" id="submit">ajouter</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['typepermis']) &&  isset($_POST['phone'])) {
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $permis = $_POST['typepermis'];
                        $phone = $_POST['phone'];
                        $age = $_POST['age'];
                        $db = mysqli_connect('localhost', 'root', '', 'projetexamen');
                        $sql = "INSERT INTO `chauffeur` ( `nom`, `prenom`, `telephone`, `age`, `type permis`) VALUES ( '$nom', '$prenom', '$phone', '$age', '$permis');";
                        $result = mysqli_query($db, $sql);
                        if ($result) {
                            echo "ajout??";
                            header('Location: chauffeurs.php');
                        } else {
                            echo "erreur";
                        }
                    }
                    ?>
                    <!-- partie validation du formulaire en js -->
                    <script>
                        const nom = document.getElementById('nom');
                        const prenom = document.getElementById('prenom');
                        const phone = document.getElementById('phone');
                        const age = document.getElementById('age');
                        const submit = document.getElementById('submit');

                        submit.addEventListener("click", validation);

                        function validation(event) {
                            if (nom.value == "" || prenom.value == "" || phone.value == "" || age.value == "" || typep.value == "") {
                                event.preventDefault();
                                alert("tous les champs sont obligatoires");
                            }
                            // le nom et le prenom doivent contenir que des lettres
                            else if (!nom.value.match(/^[a-zA-Z]+$/)) {
                                event.preventDefault();
                                alert("le nom doit contenir que des lettres");
                            } else if (!prenom.value.match(/^[a-zA-Z]+$/)) {
                                event.preventDefault();
                                alert("le prenom doit contenir que des lettres");
                            }
                            // le phone doit contenir que des chiffres
                            else if (!phone.value.match(/^[0-9]+$/)) {
                                event.preventDefault();
                                alert("le phone doit contenir que des chiffres");
                            }
                            // le age doit contenir que des chiffres et ne doit pas depasser 100
                            else if (!age.value.match(/^[0-9]+$/)) {
                                event.preventDefault();
                                alert("l'age doit contenir que des chiffres");
                            } else if (age.value > 80) {
                                event.preventDefault();
                                alert("l'age doit etre inferieur a 80");
                            } else {
                                alert("ajout avec succes");
                            }


                        }
                    </script>

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