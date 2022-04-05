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

    <title>Etudiants</title>
    <style>

    </style>
</head>

<body class="bg-light container-fluid">

<div class="card-header bg-primary text-light">
<h1 class="text-center"><?php echo "Votre Identifiant est : " . $_SESSION['ine']; ?></h1>
</div>

    <div class="row justify-content-center my-3">
        <div class="col-md-3">
        <a class="btn btn-primary" href="./voir_ses_infos_administratives.php">Voir ses informations administratives</a>
        <hr>
        <a class="btn btn-primary" href="./voir_ses_notes_matiere.php">Voir ses notes dans une matière</a>
       <hr>
        <a class="btn btn-primary" href="./voir_ses_notes.php">Voir toutes ses notes</a>
        <hr>
        <a class="btn btn-primary" href="./edit_password.php">Modifier son mot de passe</a>
        </div>
    </div>

    <a class="btn btn-danger" href="deconnect.php">Déconnecter</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>