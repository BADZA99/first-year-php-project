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
    $db = mysqli_connect('localhost', 'root', '', 'projetexamen');
    $sql = "SELECT nom,prenom,id FROM chauffeur ";
    $result = mysqli_query($db, $sql);
    //$ligne = mysqli_fetch_row($result);
    //var_dump($ligne);

    if (isset($_POST['couleur']) && isset($_POST['marque']) && isset($_POST['numero']) && isset($_POST['conducteur'])) {
        $color = $_POST['couleur'];
        $marque = $_POST['marque'];
        $number = $_POST['numero'];
        $indexchauff = intval($_POST['conducteur']);
        //var_dump($_POST);
        $db = mysqli_connect('localhost', 'root', '', 'projetexamen');
        $requete = "SELECT nom,prenom FROM chauffeur WHERE id=$indexchauff";
        $exrequete = mysqli_query($db, $requete);
        $rowchauf = mysqli_fetch_row($exrequete);
        //var_dump($rowchauf);
        $nomchauf = $rowchauf[0] . " " . $rowchauf[1];
        //var_dump($nomchauf);
        $sql = "INSERT INTO `lesbus` ( `couleur`, `marque`, `numero`, `conducteur`) VALUES ( '$color', '$marque', '$number', '$nomchauf');";
        if (mysqli_query($db, $sql)) {
            echo "ajouté";
            header('Location: bus.php');
        } else {
            echo "erreur";
        }
    }

    ?>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <!-- <a href="chauffeurs.php"><button class="btn btn--green"><b>page des bus</b></button></a> -->
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">formulaire d'ajout</h2>

                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="couleur" name="couleur" id="color">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="marque" name="marque" id="marque">
                        </div>
                        <div class="input-group">
                            <label for="" style="color:white ;">numero</label>

                            <select name="numero" id="">
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="10">10</option>
                                <option value="7">7</option>
                                <option value="63">63</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="input-group">

                            <label for="" style="color:white ;">conducteurs</label>
                            <select name="conducteur" id="">
                                <?php while ($ligne = mysqli_fetch_row($result)) { ?>
                                    <option value=<?= $ligne[2] ?>?><?php echo  $ligne[1] . " " . $ligne[0] ?> </option>
                                    endwhile;
                                <?php
                                } ?>
                            </select>
                        </div>


                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="ajouter" id="submit">ajouter</button>
                        </div>
                    </form>
                    <script>
                        const color = document.getElementById("color");
                        const marque = document.getElementById("marque");
                        const submit = document.getElementById("submit");

                        submit.addEventListener("click", validation);

                        function validation(event) {
                            if (color.value == "" || marque.value == "") {
                                event.preventDefault();
                                alert("les champs sont obligatoires");
                            }
                            // la couleur et la marque doivent contenir que des lettres
                            else if (!color.value.match(/^[a-zA-Z]+$/) || !marque.value.match(/^[a-zA-Z]+$/)) {
                                event.preventDefault();
                                alert("la couleur et la marque doivent contenir que des lettres");
                            } else {
                                alert("ajouté avec succès");
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