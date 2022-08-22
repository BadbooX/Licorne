<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Licorne - Connexion administrateur</title>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <div class="fibre">
        <h1 class="h1Connex d-flex justify-content-center align-items-center text-white">Connexion administrateur :</h1>
        <div class="container d-flex flex-column justify-content-center align-items-center mx-auto">
            <?php 
            /* Gestion des erreurs en get*/

            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'mdp':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Mot de passe incorrect.</strong>
                        </div>
                        <?php
                        break;
                    case 'session':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Connexion invalide.</strong>
                        </div>
                        <?php
                        break;
                    case 'succesdisco':
                        ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Succès: Déconnexion réussi</strong>
                        </div>
                        <?php
                        break;
                    case 'identifiant':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Identifiant incorrect.</strong>
                        </div>
                        <?php
                        break;
                    case 'inexistant':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Compte inexistant.</strong>
                        </div>
                        <?php
                        break;
                    case 'button':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Vous devez remplir le formulaire pour aller plus loin.</strong>
                        </div>
                        <?php
                        break;
                    case 'allInputs':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur : Tout les champs ne sont pas remplis.</strong>
                        </div>
                        <?php
                        break;
                }
            }
        ?>
            <form  id="formConnex" action="connexion_traitement.php" class="formConnex col-md-3" method="post">
                <div class="col-md-12">
                    <label for="nom" class="form-label text-white">Identifiant :</label>
                    <input type="text" name="pseudo" placeholder="Entrez votre Identifiant" class="form-control mb-4" id="nomreserv" autocomplete="off" required>
                </div>
                <div class="col-md-12">
                    <label for="prenom" class="form-label text-white">Mot de passe :</label>
                    <input type="password" name="password" placeholder="Entrez votre mot de passe" class="form-control mb-5" id="prenomreserv" autocomplete="off" required>
                </div>
                <div class="col-md-12 d-flex justify-content-center mx-auto">
                        <button type="submit" name='sendy' class="btn btn-dark">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    <?php 
    include "footer.php";
    ?>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/effets.js"></script>
</body>
</html>