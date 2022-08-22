<?php 
    
    
    function getAllReservation(){
        include 'config.php'; 
        $check = $bdd->prepare('SELECT * FROM reservation_licorne');
        $check->execute();
        $reserv = $check->fetchAll();
        return $reserv;
    }
    function getAllPendingReservation(){
        include 'config.php'; 
        $check = $bdd->prepare("SELECT * FROM reservation_licorne WHERE validate = '0' ");
        $check->execute();
        $reserv = $check->fetchAll();
        return $reserv;
    }
    function getAllValidateReservation(){
        include 'config.php'; 
        $check = $bdd->prepare("SELECT * FROM reservation_licorne WHERE validate = '1' ");
        $check->execute();
        $reserv = $check->fetchAll();
        return $reserv;
    }
    function getAllProduct(){
        $url = $_GET['title'];
        include 'config.php';
        try {
            $requete = $bdd->prepare("SELECT nom_plat,image_plat,composition_plat,prix_plat,categorie_plat  FROM plat_licorne  WHERE categorie_plat = '$url'");
            $requete->execute();
            $products = $requete->fetchAll();
            return $products;
        }
        catch (PDOException $e){
        echo $products . "<br>" . $e->getMessage();
        return false;
    }}
    function getAllProductCrud(){
        include 'config.php';
        try {
            $requete = $bdd->prepare("SELECT * FROM plat_licorne");
            $requete->execute();
            $produits = $requete->fetchAll();
            return $produits;
        }
        catch (PDOException $e){
        echo $produits . "<br>" . $e->getMessage();
        return false;
    }}

    function createReservation($nom, $prenom, $tel, $mail, $horaires, $place, $choix){

        try {
             include 'config.php';
                $data = [
                    'nom_reservation' => $nom,
                    'prenom_reservation' => $prenom,
                    'tel_reservation' => $tel,
                    'mail_reservation' => $mail,
                    'horaire_reservation' => $horaires,
                    'place_reservation' => $place,
                    'choix_reservation' => $choix,
                    'validate' => 0,
                ];

            $sql = "INSERT INTO reservation_licorne (nom_reservation, prenom_reservation, tel_reservation, mail_reservation, horaire_reservation, place_reservation,choix_reservation, validate) VALUES (?,?,?,?,?,?,?,?)";
            $stmt= $bdd->prepare($sql);
            $stmt->execute([$nom,$prenom,$tel,$mail,$horaires, $place,$choix, 0]);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    function readReservation($id){
        include 'config.php'; 
        $checke = $bdd->prepare("SELECT * FROM reservation_licorne WHERE id_reservation = '$id' ");
        $checke->execute();
        $reserve = $checke->fetchAll();
        if(!empty($reserve)){
            return $reserve[0];
        }else{
            echo "Erreur: Code bleu";
        }
    }

    function updateReservation($id, $nom, $prenom, $tel, $mail, $horaires, $place){
        try {
             include 'config.php'; 
            $request = $bdd->prepare("UPDATE reservation_licorne SET
                                    nom_reservation = '$nom',
                                    prenom_reservation = '$prenom',
                                    tel_reservation = '$tel',
                                    mail_reservation = '$mail',
                                    horaire_reservation = '$horaires',
                                    place_reservation = '$place'
                                    WHERE id_reservation = '$id' ");
            $request->execute();
        }
        catch (PDOException $e){
            echo $request . "<br>" . $e->getMessage();
        }
    }

    function deleteReservation($id){
        try {
            include 'config.php'; 
            $requete = $bdd->prepare("DELETE FROM reservation_licorne WHERE id_reservation = '$id' ");
            $requete->execute();
        }
        catch (PDOException $e){
            echo $requete . "<br>" . $e->getMessage();
        }
    }

    
    
    function createPlat($nomCard,$compositionCard,$prixCard,$imageCard,$categorieCard){
        try {
            include 'config.php';

            $check = $bdd->prepare('INSERT INTO plat_licorne(nom_plat, composition_plat, prix_plat, image_plat, categorie_plat) VALUES (:nomPlat,:compositionPlat,:prixPlat,:imagePlat,:categoriePlat)');
            $check->execute(array(
                'nomPlat' => $nomCard,
                'compositionPlat' => $compositionCard,
                'prixPlat' => $prixCard,
                'imagePlat' => $imageCard,
                'categoriePlat' => $categorieCard
            ));
            
        }
        catch (PDOException $e){
            echo $requete . "<br>" . $e->getMessage();
        }
    }

?>