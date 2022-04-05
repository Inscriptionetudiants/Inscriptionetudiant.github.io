<?php
include('connect.php');

if (isset($_POST['inscrit'])) {
    if (
        !empty($_POST['ine'])
        and !empty($_POST['prenom'])
        and !empty($_POST['nom'])
        and !empty($_POST['email'])
        and !empty($_POST['tel'])
        and !empty($_POST['password'])
    ) {
        $ine = htmlspecialchars($_POST['ine']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $password = ($_POST['password']);

        $insertUser = $bdd->prepare('INSERT INTO etudiants (ine, prenom, nom, email, tel, password)VALUES(?,?,?,?,?,?)');
        $insertUser->execute(array($ine, $prenom, $nom, $email, $tel, $password));
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
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>

<body class="bg-light container-fluid">
    <div class="card-header bg-primary text-light">
        <h1 class="text-center">Page d'inscription</h1>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-md-3">

            <form action="" method="post">

                <div class="form-group">
                    <label class="form-label">INE</label>
                    <input class="form-control" type="text" name="ine">
                </div>

                <div class="form-group">
                    <label class="form-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom">
                </div>

                <div class="form-group">
                    <label class="form-label">Nom</label>
                    <input class="form-control" type="text" name="nom">
                </div>

                <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label class="form-label">Téléphone</label>
                    <input class="form-control" type="number" name="tel">
                </div>

                <div class="form-group">
                    <label class="form-label">Mot de passe</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <br>


                <input type="submit" value="S'inscrire" name="inscrit" class="btn btn-primary">
            </form>
        </div>
    </div>


    <big>J'ai déjà un compte </big><a href="login.php" class="btn btn-primary">Se connecter</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>