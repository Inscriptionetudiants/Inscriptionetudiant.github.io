<?php
session_start();
include("../connect.php");

if (isset($_POST['update'])) {
    if (
        isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['tel']) && !empty($_POST['tel'])
    ) {
        extract($_GET);
        extract($_POST);
        $id = ($_GET['id']);
        $prenom = ($_POST['prenom']);
        $nom = ($_POST['nom']);
        $email = ($_POST['email']);
        $tel = ($_POST['tel']);



        $sql1 = "UPDATE etudiants SET prenom =:prenom, nom =:nom, email =:email, tel =:tel WHERE id =:id;";

        $query = $bdd->prepare($sql1);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':prenom', $nom, PDO::PARAM_STR);
        $query->bindValue(':nom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':tel', $tel, PDO::PARAM_INT);

        $query->execute();
        echo "Modifications fait avec succès !";
        header('Location: see_etudiants.php');
    }
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = ($_GET['id']);
    $sql2 = "SELECT * FROM etudiants WHERE id=:id;";

    $query = $bdd->prepare($sql2);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier-Etudiant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">
    <h1 class="text-center">Modification information étudiant</h1>
</div>

 <div class="row justify-content-center my-3">
    <div class="col-md-3">

    <form action="" method="post" align="center">
        <div class="form-group">
        <label class="form-label">Prenom</label>
        <input class="form-control" type="text" name="prenom" value="<?= $result['prenom'] ?>">
        </div>

        <div class="form-group">
        <label class="form-label">Nom</label>
        <input class="form-control" type="text" name="nom" value="<?= $result['nom'] ?>">
        </div>

        <div class="form-group">
        <label class="form-label">E-mail</label>
        <input class="form-control" type="email" name="email" value="<?= $result['email'] ?>">
        </div>

        <div class="form-group">
        <label class="form-label">Téléphone</label>
        <input class="form-control" type="number" name="tel" value="<?= $result['tel'] ?>">
        </div>      
        <br>

        <input type="hidden" name="id" id="id" value="<?= $result['id'] ?>">
        <input type="submit" value="Modifier" name="update" class="btn btn-warning text-primary">
        
    </form>
</div>
</div>
    <a class="btn btn-light text-primary" href="accueil_admin.php">Accueil Admin</a>
    <a class="btn btn-danger" href="deconnexion.php">Déconnecter</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>