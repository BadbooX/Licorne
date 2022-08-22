<?php
    require_once('config.php');
    if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $requete = $bdd->prepare("UPDATE `reservation_licorne` SET `validate`='1' WHERE id_reservation = '$id' ");
    $requete->execute();
    header('location:crud.php');
    }
    ?>