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

    <title>Voir ses Notes</title>
    <style>

    </style>
</head>

<body class="bg-light container-fluid">
    <div class="card-header bg-primary text-light">
        <h1 class="text-center">Affichages notes par matière</h1>
    </div>
<div class="row justify-content-center">
<div class="col-md-3">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <div class="form-group">
    <label class="form-label">INE</label>
        <input class="form-control" type="text" name="ine">
    </div>

    <div class="form-group">

    </div>
        <label class="form-label">Matières</label>
   
        <select name="matieres" class="form-select">
            <option value="HTML5">HTML5</option>
            <option value="Reseaux">Réseaux</option>
            <option value="Design Editorial">Design Editorial</option>
            <option value="Projet Tutore">Projet Tutore</option>
            <option value="Montage audiovisuel">Montage audiovisuel</option>
            <option value="E-CRM">E-CRM</option>
        </select>
    <br>
        <input type="submit" name="afficher" value="Afficher" class="btn btn-primary">
    </form>
</div>
</div>

<div class="row justify-content-center my-5">
<div class="col-md-8">
    <?php
    if (isset($_POST['afficher'])) {

        $ine = htmlspecialchars($_POST['ine']);
        $matieres = htmlspecialchars($_POST['matieres']);

        $recupUsers = $bdd->query("select * from gestion_des_formations where ine ='$ine' AND matieres = '$matieres'");

        print '<table  class="table"><tr><th>INE</th><th>Formation</th><th>Notes</th></tr>';
        while ($user = $recupUsers->fetch()) {
            print "<tr>";
            echo "<td>" . $user['ine'] . "</td>";
            echo "<td>" . $user['matieres'] . "</td>";
            echo "<td>" . $user['notes'] . "</td>";
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