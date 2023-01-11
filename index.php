<?php 
 session_start();
$nbr=0;
if(isset($_SESSION['panier']))$nbr=array_sum($_SESSION['panier']); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'BELDI</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="cssstylecard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/f6854c4bea.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: black;">
        <div class="container">
          <a class="navbar-brand" href="#" style="color: white;"><span class="text-warning">L'BEL</span>DI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Nos produits</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Nos valeurs</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link nav-nav" href="#contact">Contact</a>
              </li>        
              <li class="nav-item" style="margin-top: 5px;">
                <a href="panier.php" class="link">Panier<span class="idd"><?= $nbr ?></span></a>
              </li>        
            </ul>
          </div>
        </div>
      </nav>
      <!-- accueil section starts -->
      <section id="about" class="about section-padding" style="background: rgba(0, 0, 0, 0.7) url(img/JLX-SIAM-030516.webp);
      background-size: cover;
      background-blend-mode: darken;
      padding: 125px 0px;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="img/beldi.webp" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text text-white">
                            <h2><span class="text-warning" style="font-weight: bold;">L'BEL</span>DI est une marque <span class="auto-type"></span></h2>
                            <p style="font-size: 19px;">Les articles que nous commercialisons aussi bien dans nos magasins que sur notre site web sont produits par des experts métier. Nous maitrisons toutes nos filières depuis la production jusqu’à la commercialisation du produit fini.</p>
                            <a href="#portfolio" class="btn btn-warning">Voir Plus</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- accueil section Ends -->
      <!-- Produit strats -->
      <section id="portfolio" class="cardss container">
        <div class="row">
          <div class="col-md-12">
              <div class="section-header text-center text-black pb-5" style="margin-top: 74px; margin-bottom: -54px;">
                  <h2>Nos produits</h2>
              </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
        <?php 
        //inclure la page de connexion
        include_once "conpanier.php";
         //afficher la liste des produits
         $req = mysqli_query($con, "SELECT * FROM products");
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
          <form action="">
           <div class="item">
            <article class="cardi cardo--1">
              <div class="card__info-hover">
                <svg class="card__like"  viewBox="0 0 24 24">
                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
            </svg>
                  <div class="card__clock-info">
                    <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                    </svg><span class="card__time">15 min</span>
                  </div>
              </div>
              <div class="card__img"></div>
              <a href="#" class="card_link">
                 <div><img src="img/<?=$row['img']?>" class="card__img--hover card_img"></div>
              </a>
              <div class="card__info"> 
                <span class="card__category"><?=$row['name']?></span>
                <h5 class="card__title" style="color: black;"><?=$row['description']?></h5>
                <span class="card__by"><a href="ajoutpanier.php?id=<?=$row['id']?>" class="id_product">Ajouter au panier</a></span>
              </div>
            </article>
          </div>
        </form>
        <?php } ?>
      </section>
      <!-- Produit ends -->
      
      <!-- Valeur section Starts -->
      <section class="services section-padding serv" id="services" style="background-color: #F3E9DD;">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center text-black pb-5">
                          <h2 >Nos valeurs</h2>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <img src="img/badge.png" style="width: 98px; margin-bottom: 20px; margin-left: 30px;" alt="">
                            <h3 class="card-title">Qualité</h3>
                            <p class="lead">Chez L'BELDI la qualité est le premier pilier.
                            <br>
                                100% Bio
                            <br>   
                                100% Naturel</p>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <img src="img/customer-service (5).png" style="width: 98px; margin-bottom: 20px;" alt="">
                              <h3 class="card-title">Service</h3>
                              <p class="lead">Après la qualité, le bon service est prémordiale pour nous.
                                Satisfaire le client est une priorité</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                              <img src="img/best-price (1).png" alt="" style="width: 98px; margin-bottom: 20px;">
                              <h3 class="card-title">Prix</h3>
                              <p class="lead">Puisque le prix est important, L'BELDI vous propose des produits haute gamme à un prix raisonnable</p>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Valeur section Ends -->
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding" style="background-color: #F3E9DD;">
        <div class="container mt-5 mb-5">
			<div class="contact-us">
                <div class="contact-box">
                    <div class="left" style="background-image: url(img/beldi.webp)"></div>
                    <div class="right">
                        <h2>Contactez Nous</h2>
                        <form action="contactForm.php" method="post">
                            <input type="text" class="field" name="Nom" placeholder="Votre Nom" required>
                            <input type="text" class="field" name="Prenom" placeholder="Votre Prénom" required>
                            <input type="email" class="field" name="Email" placeholder="Email" required>
                            <textarea placeholder="Message" name="Message" class="field" required></textarea>
                            <button type="submit" class="btn">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="footer-distributed">
        <div class="footer-left">
            <h3><span class="text-warning">L'BEL</span>DI</h3>
            <p class="footer-links">
                <a href="#">ACCUIEL</a>
                <br>
                <a href="#portfolio">NOS PRODUITS</a>
                <br>
                <a href="#services">NOS VALEURS</a>
                <br>
                <a href="#contact">CONTACT</a>
            </p>
        </div>
        <div class="footer-center">
            <div style="padding-right: 76px;">
                <i class="fa fa-map-marker"></i>
                <p><span>Maroc</span>
                    Casablanca</p>
            </div>
            <div style="padding-right: 54px;">
                <i class="fa fa-phone"></i>
                <p>+212 6****9**25</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:L'BELDI@gmail.com">Contact@LBELDI.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>A propos de nous</span>
                <strong>L'BELDI</strong> 
                est une marque basée en Casablanca.
                En tant que marque innovante, Saramah s'attache à offrir les meilleurs produits naturels et biologiques à base de l'huile d'argan pour le corps et les cheveux. Nous défendons l'intégrité et la qualité exceptionnelle de nos produits, qui sont purement destinés à promouvoir la santé et le bien-être
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="bottom">
        <p class="footer-company-name" style="text-align: center; position: relative; bottom: -33px;">Copyright © 2022 <strong>L'BEL</span>DI</strong> Tous droits réservés</p>
        </div>
    </footer>
      <!-- footer ends -->








    
    
    <!-- Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["100% BIO","sans additifs","naturel"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
       $(document).ready(function(){
        $('.navbar-nav').on('click','a',function(){
            $('.navbar-nav a.active').removeClass('active');
            $(this).addClass('active');
        })
       })
    </script>
</body>

</html>