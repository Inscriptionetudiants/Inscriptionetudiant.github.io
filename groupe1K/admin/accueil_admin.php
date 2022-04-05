<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">
    <marquee direction="left">
        <h1><?php echo "Bienvenue " . $_SESSION['login_admin']; ?></h1>
    </marquee>
    </div>
<div class="row justify-content-center my-5">
    <div class="col-md-4">
    <a class="btn btn-light mb-2" href="add_etudiants.php">Inscrire un étudiant</a>

    <a class="btn btn-light mb-2" href="add_formation_matieres.php">Ajouter une formation et les matières de la formation</a>
  
    <a class="btn btn-light mb-2" href="add_notes_etudiant.php">Ajouter les notes d'un étudiant</a>
    <br>
    <a class="btn btn-light mb-2" href="see_etudiants.php">Voir l'ensemble des étudiants inscrits</a>

    <a class="btn btn-light mb-2" href="see_all_etudiants_formation.php">Voir l'ensemble des étudiants d'une formation</a>

    <a class="btn btn-light mb-2" href="see_notes_etudiants.php">Voir les notes d'un étudiant</a>
<br>
    <a class="btn btn-light mb-2" href="see_etudiants.php">Modifier les informations d'un étudiant</a>
  
    <a class="btn btn-light mb-2" href="see_notes_etudiants.php">Modifier les notes d'un étudiant </a>
    </div>
</div>
    
    <a class="btn btn-danger" href="deconnexion.php">Déconnecter</a>
    <hr>

    <h1 class="text-center text-light">Page de l'admin</h1>
    <small>COPYRIGHT-GROUPE</small>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>