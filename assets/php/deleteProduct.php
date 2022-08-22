<?php
require_once('config.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {

$id = $_GET['id'];

$requete = $bdd->prepare("DELETE FROM plat_licorne WHERE id_plat = '$id' ");
$requete->execute();
header('location:crud.php');
} else {
    echo "<span class='alertcommentaire' style='color: red;'>Erreur, réessayez</span>";
}
?>
