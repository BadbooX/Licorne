<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>La Licorne - Panel administrateur</title>
</head>
<body>
    <?php 
       /*  include 'config.php'; */
        session_start();
        
        include 'config.php';
        include 'mesfonctionsSQL.php';
        include 'mesfonctionsTable.php';
        include 'security.php';
        
        if($_SESSION['logged'] != 7){
            header('Location:connexionadmin.php?login_err=session');
        }

    ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img class="tinylogo"src="../img/logolicorne.png" alt=""></a>
            <button 
                class="navbar-toggler"
                type="button"
                data-bs-target="#navbarNav"
                data-bs-toggle="collapse"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="disconnect.php" class="nav-link text-white text-uppercase">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    <div class="carterdclio"></div>
    
    <div class="container-tools flex-column">
        <h2 class='mb-4'>Outils :</h2>
        <!-- Tableau switch -->
        <?php 
            daSwitch();
        ?>
        <div class="boxTools d-flex">
            <div class="d-flex flex-column">
                <label for="hideshow" class='mb-4'>Réservation :</label>
                <button type="button" class="btn btn-dark">Afficher/masquer</button>
            </div>
            <div class='d-flex flex-column'>

                <label class="mb-4">Créer :</label>
                <!-- Modal Réservation / carte-->
                
                <button type='button' class='btn btn-primary mb-4' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@getbootstrap'>Réservation</button>

                <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Créer une réservation :</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <form action='createBooking.php' method='post' id='formContact'>
                                <div class='w-100 col-md-6 mb-2'>
                                    <label for='nomReserv' class='form-label d-flex'>Nom :</label>
                                    <input type='text' name='nom_reserv' id='nomReserv' placeholder='Entrez votre nom' autocomplete='off' class='form-control' id='nomreserv' required>
                                </div>
                                <div class='w-100 col-md-6 mb-2'>
                                    <label for='prenomReserv' class='form-label d-flex'>Prénom :</label>
                                    <input type='text' name='prenom_reserv' id='prenomReserv' placeholder='Entrez votre prénom' autocomplete='off' class='form-control' id='prenomreserv' required>
                                </div>
                                <div class=' w-100 col-md-6 mb-2'>
                                    <label for='telReserv' class='form-label d-flex'>Téléphone :</label>
                                    <input type='number' name='tel_reserv' id='telReserv' placeholder='0645265798' autocomplete='off'  class='form-control' id='telreserv' required>
                                </div>
                                <div class='w-100 col-md-6 mb-2'>
                                    <label for='emailReserv' class='form-label d-flex'>Mail :</label>
                                    <input type='email' name='mail_reserv' placeholder='Entrez votre e-mail' id='mailReserv' autocomplete='off'  class='form-control' required>
                                </div>

                                <div class=' w-100 col-md-6 mb-2'>
                                    <label for='horaireReserv' class='form-label d-flex'>Date et heure :</label>
                                    <input type='datetime-local' pattern='[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}' name='horaire_reserv' id='horaireReserv' class='form-control' min='2022-09-01T11:30' max='2022-10-01T23:30'  id='placesreserv' required>
                                </div>

                                <div class=' w-100 col-md-6 mb-2'>
                                    <label for='placeReserv' class='form-label d-flex'>Nombre de couverts :</label>
                                    <select class='form-select form-select-md' name='place_reserv' id='placeReserv' aria-label='.form-select-lg example'>
                                        <option selected value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                        <option value='13'>13</option>
                                        <option value='14'>14</option>
                                        <option value='15'>15</option>
                                    </select>
                                </div>

                                <div class='w-100 col-md-6 mb-2'>
                                    <label for='choixReserv' class='form-label d-flex'>Préférence :</label>
                                    <fieldset class='d-flex '> 
                                        <div class='form-check align-items-center'>
                                            <input type='radio' class='form-check-input' name='choix_reserv' id='choixReserv' value='Intérieur' id='flexRadioDefault1' required>
                                            <label class='form-check-label' for='flexRadioDefault1'>Intérieur</label>
                                        </div>
                                        <div class='form-check align-items-center'>
                                            <input type='radio' class='form-check-input' name='choix_reserv' id='choixReserv' value='Terrasse' id='flexRadioDefault2' required>
                                            <label class='form-check-label' for='flexRadioDefault2'>Terrasse</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class='col-md-12 d-flex justify-content-center mx-auto'>
                                        <button type='submit' name='buttonSandwich'class='btn btn-dark'>Envoyer</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type='button' class='btn btn-primary mb-4' data-bs-toggle='modal' data-bs-target='#exampleModale' data-bs-whatever='@getbootstrap'>Choix à la carte</button>

                <div class='modal fade' id='exampleModale' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>Créer un choix à la carte :</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                        <div class='modal-body'>
                        <form action='createCard.php' method='post' id='formContact' enctype='multipart/form-data'>
                            <div class='w-100 col-md-6 mb-2'>
                                <label for='nomPlat' class='form-label d-flex'>Nom du produit :</label>
                                <input type='text' name='nom_plat' id='nomPlat' placeholder='Entrez le nom du plat' autocomplete='off' class='form-control w-100' required>
                            </div>
                            <div class='w-100 col-md-6 mb-2'>
                                <label for='descriptionPlat' class='form-label d-flex'>Description du plat :</label>
                                <textarea class='form-control w-100' id='compositionPlat' placeholder='Viande de bœuf crue, coupée en tranches très fines, assaisonnée traditionnellement avec ...' name='composition_plat' rows='3'></textarea>
                            </div>
                            <div class='w-100 col-md-6 mb-2'>
                                <label for='prixPlat' class='form-label d-flex'>Prix du produit :</label>
                                <input type='number' name='prix_plat' id='prixPlat' placeholder='Entrez le prix du plat' autocomplete='off'  class='form-control'  required>
                            </div>
                            <div class='w-100 col-md-6 mb-2'>
                                <label for='imagePlat' class='form-label d-flex'>Image du produit :</label>
                                <input id='imagePlat'class='form-control w-100'  type='file' name='image_plat'  autocomplete='off' required>
                            </div>
                            <div class='w-100 col-md-6 mb-2'>
                                <label for='categoriePlat' class='form-label d-flex'>Catégorie du produit :</label>
                                <select class='form-select form-select-md' name='categorie_plat' id='categoriePlat' aria-label='.form-select-lg example'>
                                    <option selected value='entrées'>Entrée</option>
                                    <option value='plats'>Plat</option>
                                    <option value='désserts'>Déssert</option>
                                    <option value='boissons'>Boisson</option>
                                </select>
                            </div>

                            <div class='col-md-12 d-flex justify-content-center mx-auto'>
                                    <button type='submit' name='buttonCard'class='btn btn-dark'>Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                <!-- Fin Modal Réservation / carte -->
            </div>
        </div>
    </div>     

    <div class="container-reserv">
        
        <div class="container-allreserv">
            
            
            
            <div class="waiting-reserv d-flex flex-column">
                <h4>Les réservations en attente </h4>
                <br>
                <?php reservationEnAttente(); ?>
            </div>

            
            <div class="planned-reserv  d-flex flex-column">
                <h4>Les réservations prévues </h4>
                <br>
                <?php reservationValide(); ?>
            </div>
        </div>
    </div>
    <div >
        <div class="container-product d-flex flex-column">
            <h4>Les choix à la carte </h4>
            <br>
            <?php affichierTableauProduit(); ?>
        </div>
        
    </div>
    <script src="https://kit.fontawesome.com/1f7ab514ca.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/effets.js"></script>
</body>
</html>