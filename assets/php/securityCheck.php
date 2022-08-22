<?php 
    function checkCategorie(){
        $url = $_GET['title'];
        
        if($url != "entrées" and $url != "plats" and $url != "désserts" and $url != "platjour" and $url != "boissons"){
            
            echo "<h4 class='text-danger'>ERREUR : Afin de trouver un produit du menu, vous devez cliquer sur l'un des boutons.</h4><br>
            <div class='col-md-12 d-flex justify-content-center mx-auto'>
                    <a type='submit' href='lacarte.php' class='btn btn-dark d-flex justify-content-center mt-3 mx-auto'>Retour</a>
            </div>";
        }      
    }
        

?>