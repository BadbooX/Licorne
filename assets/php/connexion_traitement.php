<?php 
    session_start();
    include "config.php";
    if(isset($_POST['sendy'])){
        if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password'])){

            $pseudo = htmlspecialchars($_POST['pseudo']);
            $password = htmlspecialchars($_POST['password']);

            $check = $bdd->prepare('SELECT pseudo_admin, mdp_admin FROM admin_licorne WHERE pseudo_admin=?');
            $check->execute(array($pseudo));
            $data = $check->fetch();
            $row = $check->rowCount();
            
            if($row == 1){
                if(preg_match('/^[a-zA-Zéèà_]{3,25}+$/', $pseudo) AND $data['pseudo_admin'] === $pseudo){
                    if(preg_match('/^[0-9a-zA-Zéèà!$]{3,25}+$/', $password)){ 

                        $password = hash('md5', $password);

                        if($data['mdp_admin'] === $password){

                            $_SESSION['admin'] = $pseudo;
                            $_SESSION['logged'] = 7;
                            header('Location:crud.php');
                            
                        }else header('Location:connexionadmin.php?login_err=mdp');
                    }else header('Location:connexionadmin.php?login_err=mdp');
                }else header('Location:connexionadmin.php?login_err=identifiant');
            }else header('Location:connexionadmin.php?login_err=inexistant');
        }else header('Location:connexionadmin.php?login_err=allInputs');
    }else header('Location:connexionadmin.php?login_err=button');
?>