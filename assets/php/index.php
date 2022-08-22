<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>La Licorne - Accueil</title>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <div class="banner-image vw-99.99 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="special-heading-1 text-light mx-auto  shadow-xl pt-n5 rounded">La Licorne vous souhaite la bienvenue</h1>
    </div>

    <div class="containerpictext">
        <div class="card">
            <div class="left-side">
                <img class="picun" src="../img/hamburger-frites.jpeg" alt="">
            </div>
            <div class="textindex">
                <br><br><h2>Nos valeurs</h2><br>
                <p class="textcard">Nous sommes un restaurant aux saveurs et valeurs ardennaises,
                nous vous proposons une cuisine familiale et traditionnelle.
            </div>
        </div>

        <div id="secondcard" class="card">
            
            <div class="textindex">
                <br><br><h2>Nos produits</h2><br>
                <p class="textcard">Nos produits sont d'origine française et de qualité, vous assurant la satisfaction d'un bon repas à partager.</p>
            </div>
            <div class="left-side">
                <img class="picun" src="../img/lasagnesduchef.jpg" alt="">
            </div>
        </div>  
    </div>
    <div class="banner-menu">
        <div class="wrapper container clearfix">
            <div class="textbanner row_inner container clearfix">
            <a class="linkPlatJour" href='lacarte.php' id='targetUnderline'><span class="special-heading-2 text-black text-align-center">Découvrez notre carte.</span></a>
                <div class='souliProg' id='souliProg'></div>
            </div>
        </div>
    </div>

    <div class="containerpictext">
        <div class="card">
            <div class="left-side">
                <img class="picun" src="../img/restauextern.png" alt="">
            </div>
            <div class="textindex">
                <br><br><h2>Nos locaux</h2><br>
                <p class="textcard">Un cadre sain, convivial et chaleureux, l'endroit idéal pour un repas d'affaires, diner en famille ou boire un verre entre amis.
            </div>
        </div>

        <div id="secondcard" class="card">
            
            <div class="textindex">
                <br><br><h2>Notre capacité</h2><br>
                <p class="textcard">Notre établissement dispose d'une capacité de 50 couverts à l'interieur ainsi que 20 couverts en terrasse.</p>
            </div>
            <div class="left-side">
                <img class="picun" src="../img/restauinterne.jpg" alt="">
            </div>
        </div>  
    </div>
    
   

    
    <?php 
    include "footer.php";
    ?>

    <script src="https://kit.fontawesome.com/b6728b60f5.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/effets.js"></script>
</body>
</html>