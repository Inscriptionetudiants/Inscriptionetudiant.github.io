<?php
session_start();
include("../connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir notes étudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">
    <h1 class="text-center">Liste des étudiants d'une formation</h1>
</div>

<div class="row justify-content-center my-3">
    <div class="col-md-3">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

        <div class="form-group">
        <label class="form-label">Formation</label>
        <select name="formation_notes" class="form-select">
            <option value="MIC">MIC</option>
            <option value="MAI">MAI</option>
            <option value="IDA">IDA</option>
            <option value="CD">CD</option>
        </select>
    </div>
        <br>
        <input type="submit" name="rechercher" value="Rechercher" class="btn btn-light text-primary">
    </form>
</div></div>
<div class="row justify-content-center my-5">
    <div class="col-md-8">
    <?php
    if (isset($_POST['rechercher'])) {

        $formation_notes = htmlspecialchars($_POST['formation_notes']);

        $recupUsers = $bdd->query("select * from gestion_des_notes where formation_notes ='$formation_notes'");

        print '<table class="table"><tr><th>Id</th><th>INE</th><th>Formation</th></tr>';
        while ($user = $recupUsers->fetch()) {
            print "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['ine'] . "</td>";
            echo "<td>" . $user['formation_notes'] . "</td>";
            print "</tr>";
        }
        print '</table>';
    }
    ?>

</div></div>
    <br>
    <big>Retourner à l'accueil admin </big><a class="btn btn-light text-primary" href="accueil_admin.php">Accueil Admin</a>
    <a class="btn btn-danger" href="deconnexion.php">Déconnecter</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>