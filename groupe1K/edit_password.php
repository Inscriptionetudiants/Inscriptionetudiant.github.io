<?php
session_start();
include("connect.php");

$mess = '';

?>
<?php

$pass1 = @$_POST['password'];
$pass2 = @$_POST['npassword'];
$cpass = @$_POST['cpassword'];
if (isset($_POST['bval'])) {

    $recupUsers = $bdd->query("select * from etudiants ");
    while ($rsu = $recupUsers->fetch()) {

        if ($pass1 == $rsu['password']) {
            
            $recupUsers=$bdd->prepare("update secret set password='$pass2' where  password='$pass1'");

            $mess = 'Changement réussie !';
        } else
            $mess = "Autorisation refusée !!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer Mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-light container-fluid">
    <hr>
<div class="card-header bg-primary text-light">
        <h1 class="text-center">CHANGEMENT DE MOT DE PASSE</h1>
        </div>

        <div class="row justify-content-center">
<div class="col-md-3">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" align="center">

        <?php print $mess; ?>
        <div class="form-group">
        <label class="form-label">Ancien Mot de passe</label>
        <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
        <label class="form-label">Ancien Mot de passe</label>
        <input type="password" name="password" class="form-control">
        </div>
       
        <div class="form-group">
        <label class="form-label">Nouveau Mot de passe :</label>
        <input type="password" name="npassword" class="form-control">
        </div>
      <br>
        <input type="submit" name="bval" value="Valider" class="btn btn-primary">

    </form>
    </div>
    </div>
    <hr>
    <br>
    <a class="btn btn-primary" href="plateforme.php">Mon profil</a>
    <a class="btn btn-primary" href="deconnect.php">Déconnecter</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>