<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="jquery.bxslider.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,600italic,700italic,200,300,400,600,700,900">
    <link rel="stylesheet" type="text/css" href="styles.css?version=51">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--potrebno za responsive design-->
    
    <title>OPG Ćuić Naslovna</title>
</head>
<body>
    <h1>Dobrodošli na OPG Ćuić službenu stranicu!</h1>  
    <nav>
        <div class="logo">
               <h4>OPG Ćuić</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Početna</a></li>
            <li><a href="gallery.php">Galerija</a></li>
            <li><a href="wineoffer.php">Ponuda Vina</a></li>
        </ul>
        <div class="burger">
            <div class="linija1"></div>
            <div class="linija2"></div>
            <div class="linija3"></div>
        </div>
        <div>
        <?php
        if(isset($_SESSION['userId'])){
            echo ' <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Odjava</button>
            </form>';
        }
        else{
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Prijava</button>
            <a href="signup.php">Registracija</a>
            </form>';
        }
        ?>
        </div>
    </nav>

    <div class="About">
        <h2>O nama</h2>
        <p class="ONama">
            Obiteljsko poljoprivredno gospodarstvo Ćuić bavi se prodajom vina i grožđa raznih sorti. Sastoji se od 2 kućanstva i 7 ljudi koji rade u vinogradu. Vinograd je posađen 2005. godine, a 2008. je prvi put urodio plodom.
            Veličine je 2 hektara i smješten je na brdskom području, što najbolje odgovara rađanju kvalitetnog grožđa i vina.
            U vinogradu je posađeno 5 sorti vinskog grožđa(Frankovka, Zweigelt, Bijeli Pinot, Graševina i Chardonnay), te mnoge sorte stolnog grožđa (Muškat ottonel, Muškat hamburg, Kardinal, Muškat bijeli, Plemenka bijela itd.).
            Grožđe se prodaje tijekom berbe(krajem kolovoza, te početkom i sredinom rujna), a vino je u prodaji tijekom cijele godine. 
            Također, od preostalog koma grožđa pravimo komovu rakiju(komovicu) koja u prosjeku ima 20 gradi. 
            Brojni kupci grožđa, vina i rakije svjedoče nesumnjivoj kvaliteti naših proizvoda i našeg napornog rada.
            Požurite s narudžbom jednog od naših proizvoda ili nas posjetite na adresi <b>Šalapanka 24 Brezik Našički</b> kako biste svjedočili istinskoj ljepoti našičkog brdskog kraja &#128522;.
        </p>
    </div>
    <div class="uspjesi">
        <h2>Neki od naših uspjeha na lokalnim vinskim natjecanjima</h2>
    <div id=slider>
        <ul class="bxslider">
            <img src="img/11.jpg" alt="">
            <img src="img/22.jpg" alt="">
            <img src="img/33.jpg" alt="">
            <img src="img/44.jpg" alt="">
            <img src="img/5.jpg" alt="">
            <img src="img/6.jpg" alt="">
        </ul>
    </div>
    </div>

    <script src="http://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/my.js"></script>
</body>
</html>

<main>
<?php
if(isset($_SESSION['userId'])){
    echo '<p class="prijava">Prijavljeni ste!</p>';
}
else{
    echo '<p class="prijava">Niste prijavljeni!</p>';
}
?>
</main>