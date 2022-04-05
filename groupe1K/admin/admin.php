<?php
session_start();
include('../connect.php');

if (isset($_POST['envoi'])) {
    if (!empty($_POST['login_admin']) and !empty($_POST['mdp_admin'])) {

        $login_admin = htmlspecialchars($_POST['login_admin']);
        $pass = ($_POST['mdp_admin']);


        $recupUsers = $bdd->prepare('SELECT * FROM administrateur WHERE login_admin = ? AND mdp_admin = ?');
        $recupUsers->execute(array($login_admin, $pass));

        if ($recupUsers->rowCount() > 0) {
            $_SESSION['login_admin'] = $login_admin;
            $_SESSION['mdp_admin'] = $pass;
            $_SESSION['id_admin'] = $recupUsers->fetch()['id_admin'];
            header('Location: accueil_admin.php');
        } else {
            echo "<big>Votre mot de passe ou login incorrect</big>";
        }
    } else {
        echo "<big>Veuillez completez tous les champs</big>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">s
</head>

<body class="container-fluid bg-primary">
    <div class="card-header bg-light text-primary">
        <h1 class="text-center">Plateforme Admin</h1>
   </div>

    <div class="row justify-content-center my-3">
    <div class="col-md-3">

        <form action="" method="post">

            <div class="form-group">
            <label class="form-label">Login</label>
            <input class="form-control" type="text" name="login_admin">
            </div>

            <div class="form-group">
            <label class="form-label">Mot de passe</label>
            <input class="form-control" type="password" name="mdp_admin">
            </div>
            <br>
            <input type="submit" value="Connecter" name="envoi">
        </form>
    </div>
    </div>
    <big>Retourner à l'accueil </big><a class="btn btn-light text-primary" href="../accueil.php">Accueil du site</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>