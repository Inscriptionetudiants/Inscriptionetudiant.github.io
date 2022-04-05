<?php
session_start();
include("../connect.php");



if (isset($_POST['ajoute'])) {
    if (!empty($_POST['formation']) and !empty($_POST['matieres'])) {
        $formation = htmlspecialchars($_POST['formation']);
        $matieres = htmlspecialchars($_POST['matieres']);

        $insertFormation = $bdd->prepare('INSERT INTO gestion_des_formations (formation, matieres)VALUES(?,?) ');
        $insertFormation->execute(array($formation, $matieres));

        echo "<big>Formation bien ajoutée</big>";
    } else {
        echo "<big>Veuillez remplir tous les champs</big>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoutez une formation/matières</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-primary container-fluid">
<div class="card-header bg-light text-primary">
    <h1 class="text-center text-primary">Ajouter une formation et les matières de la formation</h1>
    </div>

    <div class="row justify-content-center my-3">
<div class="col-md-3">

    <form action="" method="post" align="center">

    <div class="form-group">
        <label>Formation</label>
        <select name="formation" class="form-select">
            <option value="MIC">MIC</option>
            <option value="MAI">MAI</option>
            <option value="IDA">IDA</option>
            <option value="CD">CD</option>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label ">Matières de la formation</label>
         <select name="matieres" class="form-select">
            <option value="HTML5">HTML5</option>
            <option value="Réseaux">Réseaux</option>
            <option value="Design Editorial">Design Editorial</option>
            <option value="Montage audiovisuel">Montage audiovisuel</option>
            <option value="E-CRM">E-CRM</option>
            <option value="Projet Tutoré">Projet Tutoré</option>
        </select>
    </div>
<br>
        <input type="submit" value="Ajouter" name="ajoute" class="btn btn-light text-primary">
    </form>
</div></div>
    <big>Retourner à l'accueil admin </big><a class="btn btn-light text-primary" href="accueil_admin.php">Accueil Admin</a>
    <a class="btn btn-danger text-light" href="deconnexion.php">Déconnecter</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>