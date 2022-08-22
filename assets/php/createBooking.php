<?php
    session_start();
    include "config.php";
    include 'mesfonctionsSQL.php';
    
    if(isset($_POST['buttonSandwich'])){
        if(isset($_POST['nom_reserv']) && !empty($_POST['nom_reserv']) 
        && isset($_POST['prenom_reserv']) && !empty($_POST['prenom_reserv'])
        && isset($_POST['tel_reserv']) && !empty($_POST['tel_reserv'])
        && isset($_POST['mail_reserv']) && !empty($_POST['mail_reserv'])
        && isset($_POST['horaire_reserv']) && !empty($_POST['horaire_reserv'])
        && isset($_POST['place_reserv']) && !empty($_POST['place_reserv'])
        && isset($_POST['choix_reserv'])){

            $nom = htmlspecialchars($_POST['nom_reserv']);
            $prenom = htmlspecialchars($_POST['prenom_reserv']);
            $tel = htmlspecialchars($_POST['tel_reserv']);
            $mail = htmlspecialchars($_POST['mail_reserv']);
            $horaire = htmlspecialchars($_POST['horaire_reserv']);
            $place = htmlspecialchars($_POST['place_reserv']);
            $choix = htmlspecialchars($_POST['choix_reserv']);
            
            if(preg_match('/^[a-zA-Zéèà]{3,25}+$/', $nom)){
                if(preg_match('/^[a-zA-Zéèà]{3,25}+$/', $prenom)){
                    if(preg_match('/^[0-9]{10}+$/', $tel)){
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                                if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}+$/', $horaire)){
                                    if(preg_match('/^[1-9]{1}[0-5]{0,1}+$/', $place)){
                                        if($choix != "Intérieur" OR $choix != "Terrasse"){

                                            createReservation($nom,$prenom,$tel,$mail,$horaire,$place,$choix);
                                            header('location:crud.php?book_err=success');

                                        }else header('location:crud.php?book_err=choice_validate');
                                    }else header('location:crud.php?book_err=cutlery_validate');
                                }else header('location:crud.php?book_err=date_validate');
                        }else header('location:crud.php?book_err=email_validate');
                    }else header('location:crud.php?book_err=tel_validate');
                }else header('location:crud.php?book_err=ncname_validate');
            }else header('location:crud.php?book_err=name_validate');
        }else header('location:crud.php?book_err=all_inputs');
    }else header('location:crud.php?book_err=button');
    ?>