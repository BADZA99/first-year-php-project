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
    //echo $id;
    $requete = "SELECT * FROM lesbus WHERE id=$id";
    $resultat = mysqli_query($connexion, $requete);
    $ligne = mysqli_fetch_row($resultat);
    // var_dump($ligne);
    // recuperer les nom et le prenom de la table chauffeur
    $requete2 = "SELECT nom,prenom,id FROM chauffeur";
    $resultat2 = mysqli_query($connexion, $requete2);
    //$ligne2 = mysqli_fetch_assoc($resultat2);
    //var_dump($ligne2);
    if (isset($_POST['save'])) {
        $couleur = $_POST['couleur'];
        $marque = $_POST['marque'];
        $numero = $_POST['numero'];
        $indexchauff = intval($_POST['conducteur']);
        //var_dump($indexchauff);
        $requete3 = "SELECT nom,prenom FROM chauffeur WHERE id=$indexchauff";
        $exrequete = mysqli_query($connexion, $requete3);
        $rowchauf = mysqli_fetch_row($exrequete);
        //var_dump($rowchauf);
        $nomchauf = $rowchauf[1] . " " . $rowchauf[0];
        //var_dump($nomchauf);
        $sql = "UPDATE `lesbus` SET  `couleur`='$couleur',`marque`='$marque',`numero`='$numero',`conducteur`='$nomchauf' WHERE id=$id";


        if (!mysqli_query($connexion, $sql)) {
            echo "erreur";
        } else {
            echo "MODIFIER";
            header('Location: bus.php');
        }
    }
    ?>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">formulaire de modifiactions</h2>

                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="couleur" name="couleur" id="color" value=<?= $ligne[0] ?>>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="marque" name="marque" id="marque" value=<?= $ligne[1] ?>>
                        </div>
                        <div class="input-group">
                            <label for="" style="color:white ;">numero</label>
                            <select name="numero" id="">
                                <option value=<?= $ligne[2] ?>><?php echo  $ligne[2] ?></option>
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

                                <?php while ($ligne2 = mysqli_fetch_row($resultat2)) { ?>
                                    <option value=<?= $ligne2[2] ?>?><?php echo  $ligne2[0] . " " . $ligne2[1] ?> </option>
                                <?php } ?>
                            </select>
                        </div>



                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="save" id="save">modifier</button>
                        </div>
                    </form>
                    <script>
                        const color = document.getElementById("color");
                        const marque = document.getElementById("marque");
                        const save = document.getElementById("save");

                        save.addEventListener("click", validation);

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
                                alert("modifie avec succès");
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