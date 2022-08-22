<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>La Licorne - La carte </title>
</head>
<body>
    <?php
    include "navbar.php";
    include 'mesfonctionsTable.php';
    include 'securityCheck.php';
    
    ?>
    <div id="bannerlacarte" class="banner-menu vw-99.99 vh-100 d-flex justify-content-center align-items-center">
        <!-- <h1 class="special-heading-1 text-secondary mx-auto mt-1 shadow-xl p-3 mb-4 rounded">La carte</h1> -->
    </div>
    <div class="menu-container d-flex flex-column">
        <div>
            <h2 class="menu-title">Menu :</h2>
        </div>
        <div class="boxGeneCat d-flex fst-italic align-self-start">
            <?php
                $i = $_GET['title'];
                switch ($i) {
                    case "plats":
                        echo "<h3><u>Les plats :</u></h3>";
                        break;
                    case "entrées":
                        echo "<h3><u>Les entrées :</u></h3>";
                        break;
                    case "désserts":
                        echo "<h3><u>Les désserts :</u></h3>";
                        break;
                    case "boissons":
                        echo "<h3><u>Les boissons :</u></h3>";
                        break;
                }           
            ?>
        </div>
        <?php 
            checkCategorie();
            
        ?>
        
        <div class="containerBoxFood">
            
            <?php daProduits(); ?>
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