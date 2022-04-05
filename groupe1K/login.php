<?php
session_start();
include('connect.php');

if (isset($_POST['envoyer'])) {
    if (
        !empty($_POST['ine'])
        and !empty($_POST['password'])
    ) {

        $ine = htmlspecialchars($_POST['ine']);
        $password =($_POST['password']);


        $recupUsers = $bdd->prepare('SELECT * FROM etudiants WHERE ine = ? AND password = ?');
        $recupUsers->execute(array($ine, $password));

        if ($recupUsers->rowCount() > 0) {
            $_SESSION['ine'] = $ine;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            header('Location: plateforme.php');
        } else {
            echo "<h3>Votre mot de passe ou ine incorrect</h3>";
        }
    } else {
        echo "<h3>Veuillez completez tous les champs</h3>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Connexion</title>
    <style>
    h3{
        text-align: center;
    }
    </style>
</head>

<body class="container-fluid bg-light">
    <div class="card-header bg-primary text-light">
            <h1 class="text-center">Page de connexion</h1>
    </div>

    <div class="row justify-content-center my-3">
        <div class="col-md-3">
        <form action="" method="post">
            <div class="form-group">
                <label class="form-label">INE</label>
                <input class="form-control" type="text" name="ine">
            </div>
        
            <div class="form-group">
                <label class="form-label">Mot de passe</label>
                <input class="form-control" type="password" name="password">
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Connecter" name="envoyer">
        </form>
        </div>
        
    </div>
    <br>
    <big>J'ai pas de compte </big><a href="inscription.php" class="btn btn-primary"> Je m'inscris</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>