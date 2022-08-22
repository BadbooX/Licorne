<?php 
    function reservationEnAttente() {
        $reserv = getAllpendingReservation()
        ?>
        <table class='d-flex justify-content-center align-items-center flex-column mx-auto'>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Tèl</th>
                <th>Mail</th>
                <th>Horaires</th>
                <th>Place</th>
                <th>Choix</th>
                <th>Action</th>
            </tr>
            <?php foreach($reserv as $reservs): ?>
            <tr>
                <td ><p><?= $reservs['id_reservation'] ?></p></td>
                <td ><p><?= $reservs['nom_reservation'] ?></p></td>
                <td ><p><?= $reservs['prenom_reservation'] ?></p></td>
                <td ><p><?= $reservs['tel_reservation'] ?></p></td>
                <td><p><?= $reservs['mail_reservation'] ?></p></td>
                <td ><p><?= $reservs['horaire_reservation'] ?></p></td>
                <td ><p><?= $reservs['place_reservation'] ?></p></td>
                <td ><p><?= $reservs['choix_reservation'] ?></p></td>
                <td class='d-flex gap-3'>
                    
                    <!-- MODAL VALIDER -->
                    <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#myModalpe">
                        <i class="fa-solid fa-check"></i>
                    </button>
                        <!-- The Modal -->
                    <div class="modal" id="myModalpe">
                        <div class="modal-dialog">
                            <div class="modal-content">
                             <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark">Voulez vous valider cette réservation ? </h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <table class='text-dark d-flex justify-content-center'>
                                        <tr class='d-flex gap-5'>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Tèl</th>
                                        </tr>
                                        <tr class='d-flex gap-5'>
                                            <td><?=$reservs['id_reservation']?></td>
                                            <td><?=$reservs['nom_reservation']?></td>
                                            <td><?=$reservs['prenom_reservation']?></td>
                                            <td><?= $reservs['tel_reservation'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a class='btn btn-primary' href="validateBooking.php?id=<?= $reservs['id_reservation']; ?>">Valider</a>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN MODAL VALIDATE -->

                    <!-- MODAL DELETE -->
                    <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#myModalp">
                        <i class="fa-solid fa-xmark text-danger"></i>
                    </button>
                        <!-- The Modal -->
                    <div class="modal" id="myModalp">
                        <div class="modal-dialog">
                            <div class="modal-content">
                             <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-dark">Voulez vous supprimer cette réservation ? </h4>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <table class='text-dark d-flex justify-content-center gap-5'>
                                        <tr class='d-flex gap-5'>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Tèl</th>
                                        </tr>
                                        <tr class='d-flex gap-5'>
                                            <td><?=$reservs['id_reservation']?></td>
                                            <td><?=$reservs['nom_reservation']?></td>
                                            <td><?=$reservs['prenom_reservation']?></td>
                                            <td><?= $reservs['tel_reservation'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a class='btn btn-dark' href="deleteBooking.php?id=<?= $reservs['id_reservation']; ?>">Supprimer</a>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN MODAL DELETE -->
                </td>
            </tr>
            <?php endforeach ?>
        </table>
<?php
}

    function affichierTableauProduit() {
        $produit = getAllProductCrud();
        ?>
        <table>
            <div>
                <tr class=''>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Composition</th>
                    <th>Catégorie</th>
                    <th>Action</th> 
                </tr>
            </div>
            <?php foreach($produit as $produits): ?>
            <div>
                <tr>
                    <td class="responseBddA"><p><?= $produits['id_plat']; ?></p></td>
                    <td><img class='BoxImgProduct' src='../img/<?= $produits['image_plat'];?>'></td>
                    
                    <td class="responseBddA" ><p><?= $produits['nom_plat']; ?></p></td>
                    <td class="responseBddA"><p><?= $produits['prix_plat'] . "€"; ?></p></td>
                    <td class="responseBddA overflow-hidden"><p><?= $produits['composition_plat']; ?></p></td>
                    <td class="responseBddA"><p><?= $produits['categorie_plat']; ?></p></td>
                    <td class="responseBddA">
                        <a href="updateBooking.php?id=<?= $produits['id_plat'];?>"><i class="fa-solid fa-pen"id="action"></i></a>
                       <!-- MODAL DELETE -->
                        <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#myModali">
                            <i class="fa-solid fa-xmark text-danger"></i>
                        </button>
                            <!-- The Modal -->
                        <div class="modal" id="myModali">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                 <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title text-dark">Voulez vous supprimer ce produit ? </h4>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <table class='text-dark d-flex justify-content-center'>
                                            <tr class='d-flex gap-5'>
                                                <th>ID</th>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                
                                            </tr>
                                            <tr class='d-flex gap-5'>
                                                <td><?=$produits['id_plat']?></td>
                                                <td><?=$produits['nom_plat']?></td>
                                                <td><?=$produits['prix_plat']. "€";?></td>
                                                
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a class='btn btn-dark' href="deleteProduct.php?id=<?= $produits['id_plat']; ?>">Supprimer</a>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIN MODAL DELETE -->
                    </td>
                </tr>
            </div>
            <?php endforeach ?>
        </table>
    <?php
}

    function reservationValide() {
        $reserv = getAllValidateReservation()
        ?>
        <table class='d-flex justify-content-center align-items-center flex-column mx-auto'>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Tèl</th>
                <th>Mail</th>
                <th>Horaires</th>
                <th>Place</th>
                <th>Choix</th>
            </tr>
            <?php foreach($reserv as $reservs): ?>
            <tr>
                <td ><p><?= $reservs['id_reservation'] ?></p></td>
                <td ><p><?= $reservs['nom_reservation'] ?></p></td>
                <td ><p><?= $reservs['prenom_reservation'] ?></p></td>
                <td ><p><?= $reservs['tel_reservation'] ?></p></td>
                <td><p><?= $reservs['mail_reservation'] ?></p></td>
                <td ><p><?= $reservs['horaire_reservation'] ?></p></td>
                <td ><p><?= $reservs['place_reservation'] ?></p></td>
                <td ><p><?= $reservs['choix_reservation'] ?></p></td>
            </tr>
            <?php endforeach ?>
        </table>
<?php
}
    function daProduits(){
        include 'mesfonctionsSQL.php';
        include 'config.php';
        $products = getAllProduct();
        
        
        foreach ($products as $product):
            
           
                if(!$product){
                        //ERREUR
                        return;
                }
                echo "<div class='boxDivProduct d-flex gap-4'>

                  <img class='BoxImgProduct' src='../img/". $product['image_plat'] . "'>
                  <div><p class='descCard'><h4>" . $product['nom_plat'] ."</h4><p class='descCard'> ". $product['composition_plat'] ."</p></div><i> ". $product['prix_plat'] ."€ 
                  </i></div>";
            endforeach;
    }
?>

<?php 
    function daSwitch(){
        /* Gestion des erreurs en get*/
        if(isset($_GET['book_err']))
        {
            $errB = htmlspecialchars($_GET['book_err']);
            
            switch($errB)
            {
                case 'button':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Vous devez remplir le formulaire pour aller plus loin.</strong>
                    </div>
                    <?php
                    break;
                    
                case 'all_inputs':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Toutes les champs doivent être saisis.</strong>
                    </div>
                    <?php
                    break;
                case 'name_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Le nom est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'ncname_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Le prénom est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'tel_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Le numéro de téléphone est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'email_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : L'adresse mail est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'date_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : La date de réservation entrée est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'cutlery_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur(Réservation) : Le nombre de couvert choisis est invalide.  </strong>
                    </div>
                    <?php
                    break;
                case 'choice_validate':
                    ?>
                    <div class="alert alert-danger col-md-6 w-50">
                        <strong>Erreur : Cette préférence est impossible.  </strong>
                    </div>
                    <?php
                    break;
                case 'success':
                    ?>
                    <div class="alert alert-success col-md-6 w-50">
                        <strong class='mx-auto'>Succès : La réservation a été ajouté au panel.  </strong>
                    </div>
                    <?php
                    break;
            }
        }elseif(isset($_GET['card_err'])){
            {
                $errC = htmlspecialchars($_GET['card_err']);
                
                switch($errC)
                {
                    case 'button':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : Vous devez remplir le formulaire pour aller plus loin.</strong>
                        </div>
                        <?php
                    break;
                    case 'all_inputs':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : Toutes les champs doivent être saisis.</strong>
                        </div>
                        <?php
                    break;
                    case 'name_validate':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : Le nom du plat est invalide.  </strong>
                        </div>
                        <?php
                    break;
                    case 'composition_validate':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : La composition du plat est invalide.  </strong>
                        </div>
                        <?php
                    break;
                    case 'price_validate':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : Le prix du plat est invalide.  </strong>
                        </div>
                        <?php
                    break;
                    case 'categorie_validate':
                        ?>
                        <div class="alert alert-danger col-md-6 w-50">
                            <strong>Erreur(Carte) : La catégorie du plat est invalide.  </strong>
                        </div>
                        <?php
                    break;
                    case 'success':
                        ?>
                        <div class="alert alert-success col-md-6 w-50">
                            <strong class='mx-auto'>Succès : Le nouveau plat a été ajouté à la carte.  </strong>
                        </div>
                        <?php
                    break;
                }
            }
        }
    } 
?>