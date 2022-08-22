<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>La Licorne - Réservation</title>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <div class="banner-reserv w-99.99 vh-100  d-flex justify-content-flex-start align-items-center">
        
    </div>
    <div class="container mt-5">
        <h2 class="d-flex justify-content-center">Formulaire de réservation :</h2>
        
        <form action="reservation_traitement.php" method="post" id="formContact"  autocomplete="off" class="row g-3 d-flex flex-column justify-content-center mx-auto align-items-center">
        <?php 
            /* Gestion des erreurs en get*/
            if(isset($_GET['book_err']))
            {
                $errB = htmlspecialchars($_GET['book_err']);

                switch($errB)
                {
                    case 'button':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Vous devez remplir le formulaire pour aller plus loin.</strong>
                        </div>
                        <?php
                        break;

                    case 'all_inputs':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Toutes les champs doivent être saisis.</strong>
                        </div>
                        <?php
                        break;
                    case 'name_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Le nom est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'ncname_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Le prénom est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'tel_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Le numéro de téléphone est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'email_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : L'adresse mail est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'date_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : La date de réservation entrée est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'cutlery_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Le nombre de couvert choisis est invalide.  </strong>
                        </div>
                        <?php
                        break;
                    case 'choice_validate':
                        ?>
                        <div class="alert alert-danger col-md-6">
                            <strong>Erreur : Cette préférence est impossible.  </strong>
                        </div>
                        <?php
                        break;
                    case 'success':
                        ?>
                        <div class="alert alert-success col-md-6">
                            <strong class='mx-auto'>Succès : Un mail de confirmation vous a été envoyé.  </strong>
                        </div>
                        <?php
                        break;
                }
            }
        ?>
            <div class="col-md-6">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" name="nom_reserv" placeholder="Entrez votre nom" autocomplete="off" class="form-control" id="nomreserv" required>
            </div>
            <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" name="prenom_reserv" placeholder="Entrez votre prénom" autocomplete="off" class="form-control" id="prenomreserv" required>
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Téléphone :</label>
                <input type="number" name="tel_reserv"  placeholder="0645265798" autocomplete="off"  class="form-control" id="telreserv" required>
            </div>
            <div class="col-md-6">
                <label for="mail" class="form-label">Mail :</label>
                <input type="email" name="mail_reserv" placeholder="Entrez votre e-mail" autocomplete="off"  class="form-control" id="mail_reserv" required>
            </div>
            
            <div class="col-md-6">
                <label for="horaire" class="form-label">Date et heure :</label>
                <input type="datetime-local" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" name="horaire_reserv"  class="form-control" min="2022-09-01T11:30" max="2022-10-01T23:30"  id="placesreserv" required>
            </div>
            <div class="col-md-6">
                <label for="places" class="form-label">Nombre de couverts :</label>
                <select class="form-select form-select-md" name="place_reserv" aria-label=".form-select-lg example">
                    <option selected value='1'>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>

            </div>
            
            <div class="col-md-6">
                <label for="places" class="form-label">Préférence :</label>
                <fieldset class='d-flex ' > 
                    <div class="form-check align-items-center">
                        <input type="radio" class="form-check-input" name='choix_reserv' value='Intérieur' id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">Intérieur</label>
                    </div>
                    <div class="form-check align-items-center">
                        <input type="radio" class="form-check-input" name="choix_reserv" value='Terrasse' id="flexRadioDefault2" required>
                        <label class="form-check-label" for="flexRadioDefault2">Terrasse</label>
                    </div>
                    
                </fieldset>
            </div>
            
            <div class="col-md-12 d-flex justify-content-center mx-auto">
                    <button type="submit" name='buttonSend'class="btn btn-dark">Envoyer</button>
            </div>
        </form>
    </div>
    <?php 
    include "footer.php";
    ?>
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/effets.js"></script>
</body>
</html>