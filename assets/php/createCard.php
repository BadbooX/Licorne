<?php
    session_start();
    include "config.php";
    include 'mesfonctionsSQL.php';

    
    if(isset($_POST['buttonCard'])){
        if(isset($_POST['nom_plat']) && !empty($_POST['nom_plat'])
        && isset($_POST['composition_plat']) && !empty($_POST['composition_plat'])
        && isset($_POST['prix_plat']) && !empty($_POST['prix_plat'])
        && isset($_FILES['image_plat']) && !empty($_FILES['image_plat'])
        && isset($_POST['categorie_plat']) && !empty($_POST['categorie_plat'])){

            /* Variables en post */
            $nomCard = htmlspecialchars($_POST['nom_plat']);
            $compositionCard = htmlspecialchars($_POST['composition_plat']);
            $prixCard = htmlspecialchars($_POST['prix_plat']);
            $categorieCard = htmlspecialchars($_POST['categorie_plat']);
            /* fin */

            /* Vérification de l'image */
            $nameImageCard = $_FILES['image_plat']['name'];
            $typeImageCard = $_FILES['image_plat']['type'];
            $sizeImageCard = $_FILES['image_plat']['size'];
            $tmpImageCard = $_FILES['image_plat']['tmp_name'];
            $errImageCard = $_FILES['image_plat']['error'];
            
            $extensions = ['png','jpg','jpeg'];
            $type = ['image/png','image/jpg', 'image/jpeg'];

            $extension = explode('.', $nameImageCard);

            $max_size = 100000;

            /* if(in_array($typeImageCard, $type))
            {
                if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions))
                {
                    if($sizeImageCard <= $max_size && $errImageCard == 0)
                    {
                        if(move_uploaded_file($tmpImageCard, '../img' . uniqid() . '.' . strtolower(end($extension)))){

                            echo "Succès: Image envoyée";

                        }else echo "Erreur: l'image n'a pas pu être envoyée"; 
                    }else echo "Erreur: Image non valide";
                }else echo "Erreur: Veuillez entrer une image.";
            }else echo "Erreur: Type d'image non autorisé.";
            /* Fin  */
            
           
            
            if(preg_match('/^[a-zA-Zéèà]{3,25}+$/', $nomCard)){
                if(preg_match('/^[a-zA-Zéèà\s]{5,200}+$/', $compositionCard)){
                    if(preg_match('/^[0-9\.]{1,3}+$/', $prixCard)){
                        if(in_array($typeImageCard, $type)){
                            if(count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions)){
                                if($sizeImageCard <= $max_size && $errImageCard == 0){
                                    if(preg_match('/^[a-zA-Zéàa]{1,8}+$/', $categorieCard)){
                                        if(move_uploaded_file($tmpImageCard, '../img' . uniqid() . '.' . strtolower(end($extension)))){

                                            createPlat($nomCard,$compositionCard,$prixCard,$nameImageCard,$categorieCard);
                                            header('location:crud.php?card_err=success');

                                        }else header('location:crud.php?img_err=not_uploaded');
                                    }else header('location:crud.php?img_err=no_validate');
                                }else header('location:crud.php?img_err=false_image');
                            }else header('location:crud.php?img_err=type_image');
                        }else header('location:crud.php?card_err=categorie_validate');
                    }else header('location:crud.php?card_err=price_validate');
                }else header('location:crud.php?card_err=composition_validate');
            }else header('location:crud.php?card_err=name_validate');
        }else header('location:crud.php?card_err=all_inputs');
        
    }else header('location:crud.php?card_err=button');

    
    
    ?>