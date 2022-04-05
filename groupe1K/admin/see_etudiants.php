<?php
session_start();
include("../connect.php");


// On écrit notre requête
$sql = "SELECT * FROM etudiants";

// On prépare la requête
$query = $bdd->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les étudiants inscrits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">
<h1 class="text-center">Liste des étudiants inscrits</h1>
</div>
<div class="row justify-content-center my-3">
    <div class="col-md-8">
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Action</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $etudiants){
        ?>
                <tr>
                    <td><?= $etudiants['id'] ?></td>
                    <td><?= $etudiants['prenom'] ?></td>
                    <td><?= $etudiants['nom'] ?></td>
                    <td><?= $etudiants['email'] ?></td>
                    <td><?= $etudiants['tel'] ?></td>
                    <td>  
                    <a class="btn btn-warning" href="edit_info_etudiant.php?id=<?= $etudiants['id'] ?>">Modifier</a>  
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div></div>
    <br>
    <big>Retourner à l'accueil admin </big><a class="btn btn-light text-primary" href="accueil_admin.php">Accueil Admin</a>
    <a class="btn btn-danger" href="deconnexion.php">Déconnecter</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>