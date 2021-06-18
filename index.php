<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>

    <header>
        <?php 
            require_once ('header.php');
        ?>
        
        <div class="cadre_principal">
            <div class="cadre_photo">
            </div>
            <img src="img/profil.jpg" alt="profil" class="photo_profil">
        </div>

    </header>

    <section>
        <h1 class="titre">Portfolio développeur | Sacha Mutschler</h1>
        <div class="main-page">
            <div class="description">
            <p>Je m'appelle Sacha, je vis à Strasbourg et je suis actuellement en BTS Service Informatique aux organisations.</p>
            <p>J'ai également crée une entreprise, <a class="lien" href="https://www.horus-web.fr/">Horus Web</a> dans laquelle je conçois des sites internet.</p>
            
            </div>
            <div>
            <h2>
                Mes différents projets :
            </h2>
            <div class="card_ligne1">
                <div class="card border-dark mb-3" style="width: 18rem;">
                    <img src="img/E5_SISR.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">E5 SISR</h5>
                        <p class="card-text">Projet école E5 SISR première année BTS SIO, configuration Réseau de PME par "Horus Network".</p>
                        <a href="e5-sisr.php" class="btn btn-dark">Voir le projet</a>
                    </div>
                </div>
                <div class="card border-dark mb-3" style="width: 18rem;">
                    <img src="img/E5_SLAM.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">E5 SLAM</h5>
                        <p class="card-text">Projet école E5 SLAM première année BTS SIO, Dendo JITENSHA.</p>
                        <a href="e5-slam.php" class="btn btn-dark">Voir le projet</a>
                    </div>
                </div>
            </div>
            <div class="card_ligne2">
                <div class="card border-dark mb-3" style="width: 18rem;">
                    <img src="img/E4.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">E4 SISR</h5>
                        <p class="card-text">Projet école E4 SISR première année BTS SIO, Simulation d'un réseau grande entreprise.</p>
                        <a href="e4.php" class="btn btn-dark">Voir le projet</a>
                    </div>
                </div>
                <div class="card border-dark mb-3" style="width: 18rem;">
                    <img src="img/vuejs.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Veille Technologique Vue JS</h5>
                        <p class="card-text">Projet école Veille Technologique première année BTS SIO, veille Technologique sur le framework JS : Vue</p>
                        <a href="veille.php" class="btn btn-dark">Voir le projet</a>
                    </div>
                </div>
            </div>

        </div>
    </div>  
        
</section>

    <footer>
        <?php require_once ('footer.php');?>
    </footer>

</body>
</html>