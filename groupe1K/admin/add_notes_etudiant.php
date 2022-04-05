<?php
session_start();
include("../connect.php");

if (isset($_POST['ajouter'])) {
    if (
        !empty($_POST['ine'])
        and !empty($_POST['html5'])
        and !empty($_POST['reseaux'])
        and !empty($_POST['design_editorial'])
        and !empty($_POST['montage_audiovisuel'])
        and !empty($_POST['e_crm'])
    ) {

        $ine = htmlspecialchars($_POST['ine']);
        $html5 = htmlspecialchars($_POST['html5']);
        $reseaux = htmlspecialchars($_POST['reseaux']);
        $design_editorial = htmlspecialchars($_POST['design_editorial']);
        $montage_audiovisuel = htmlspecialchars($_POST['montage_audiovisuel']);
        $e_crm = htmlspecialchars($_POST['e_crm']);

        $insertNotes = $bdd->prepare('INSERT INTO gestion_des_notes (ine, html5, reseaux, design_editorial, montage_audiovisuel, e_crm)VALUES(?,?,?,?,?,?) ');
        $insertNotes->execute(array($ine, $html5, $reseaux, $design_editorial, $montage_audiovisuel, $e_crm));

        echo "<big>Note bien ajoutée</big>";
    } else {

        echo "<big>Veuillez ajouter une note</big>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter les notes d'un étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">

    <h1 class="text-center">Ajouter les notes d'un étudiant</h1>
    </div>
    <div class="row justify-content-center my-5">
    <div class="col-md-3">
    <form action="" method="post" align="center">

        <div class="form-group">
        <label class="form-label">INE</label>
        <input class="form-control" type="text" name="ine" placeholder="INE de l'étudiant">
        </div>

        <div class="form-group">
        <label class="form-label">HTML5</label>
        <input class="form-control" type="number" name="html5" placeholder="../20">
        </div>

        <div class="form-group">
        <label class="form-label">Réseaux</label>
        <input class="form-control" type="number" name="reseaux" placeholder="../20">
        </div>

        <div class="form-group">
        <label class="form-label">Design Editorial</label>
        <input class="form-control" type="number" name="design_editorial" placeholder="../20">
        </div>

        <div class="form-group">
        <label class="form-label">Montage audiovisuel</label>
        <input class="form-control" type="number" name="montage_audiovisuel" placeholder="../20">
        </div>

        <div class="form-group">
        <label class="form-label">E-CRM</label>
        <input class="form-control" type="number" name="e_crm" placeholder="../20">
        </div>
        <br>

        <input type="submit" value="Ajouter" name="ajouter" class="btn btn-light text-primary"s>
        <br>
    </form>
    </div></div>
    
    <a class="btn btn-light text-primary" href="accueil_admin.php">Accueil Admin</a>
    <a class="btn btn-danger" href="deconnexion.php">Déconnecter</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>