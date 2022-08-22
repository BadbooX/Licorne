<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>La Licorne - La carte</title>
</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div id="bannerlacarte" class="banner-menu vw-99 vh-100 d-flex  justify-content-center align-items-center">
        
    </div>
    

    <div class="menu-container">
        <div><h2 class="menu-title">Menu :</h2></div>

        <div class="menu-categories" >
            
            <button class="menu-category">
                <a href="lacarteautomatised.php?title=entrées">Les entrées</a>
            </button>
            <button class="menu-category">
                <a href="lacarteautomatised.php?title=plats">Les plats</a>
            </button>
            <button class="menu-category">
                <a  href="lacarteautomatised.php?title=désserts">Les désserts</a>
            </button>
            <button class="menu-category">
                <a  href="lacarteautomatised.php?title=boissons">Les boissons</a>
            </button>
            
        </div>
            
    </div>


    <?php 
    include "footer.php";
    ?>
    
    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/effets.js"></script>
</body>
</html>