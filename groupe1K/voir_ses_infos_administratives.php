<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Informations administratives</title>

    </style>
</head>

<body class="bg-light container-fluid">
    <div class="card-header text-light bg-primary">
        <h1 class="text-center">Mes Informations administratives</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

                <div class="form-group">
                    <label class="form-label">INE</label>
                    <input class="form-control" type="text" name="ine">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Afficher" name="afficher">
            </form>
        </div>
    </div>

    <div class="row justify-content-center my-5">
        <div class="col-md-8">
    <?php
    if (isset($_POST['afficher'])) {
        $recupUsers = $bdd->query('SELECT * FROM etudiants');

        $ine = htmlspecialchars($_POST['ine']);

        $recupUsers = $bdd->query("select * from etudiants where ine = '$ine' ");

        print '<table class="table"><tr><th>Id</th><th>Identifiant(INE)</th><th>Prénom</th><th>Nom</th><th>E-mail</th><th>Téléphone</th></tr>';
        while ($user = $recupUsers->fetch()) {
            print "<tr>";
            echo "<td>" . $user["id"] . "</td>";
            echo "<td>" . $user["ine"] . "</td>";
            echo "<td>" . $user['prenom'] . "</td>";
            echo "<td>" . $user['nom'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['tel'] . "</td>";
            print "</tr>";
        }
        print '</table>';
    }
    ?>
        </div>
    </div>
    <br>
    <a class="btn btn-primary" href="plateforme.php">Mon profil</a>
    <a class="btn btn-primary" href="deconnect.php">Déconnecter</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>