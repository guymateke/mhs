<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MHSCOURTAGE</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo1.jpeg" rel="icon">
  <link href="assets/img/lol.jpeg" rel="logo">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo1.jpeg" alt="logo">
        <h1 class="sitename">MHSCOURTAGE </h1>
      </a>


    </div>
  </header>

  <body>






  <!-- page produit -->


  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Produits | MHS COURTAGE</title>
  <!-- Lien vers Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    /* Style personnalisé pour les images interactives */
    .product-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }
    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .product-card img {
      width: 100%;
      height: auto;
      transition: opacity 0.3s ease;
    }
    .product-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      opacity: 0;
      color: #fff;
      font-size: 1.2rem;
      font-weight: bold;
      text-align: center;
      transition: opacity 0.3s ease;
    }
    .product-card:hover .product-overlay {
      opacity: 1;
    }
  </style>
</head>
<body>

<!-- Section Nos Produits -->
<section id="products" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bold text-primary">Nos Produits</h1>
      <p class="text-muted">Découvrez les solutions d'assurance de <strong>MHS COURTAGE</strong>, conçues pour répondre à tous vos besoins avec une approche innovante et sur mesure.</p>
    </div>

    <!-- Grid des Produits -->
    <div class="row g-4">
      <!-- Produit 1 -->
      <div class="col-md-4">
        <div class="product-card">
          
          <img src="assets/img/famille.jpeg" alt="Assurance Santé">
          
          <div class="product-overlay">
            <a href="/assurance/assuranceSante.php"><span>Assurance Santé</span></a>
            
          </div>
        </div>
      </div>

      <!-- Produit 2 -->
      <div class="col-md-4">
        <div class="product-card">
          <img src="assets/img/habitat.png" alt="Assurance Habitat">
          <div class="product-overlay">
            <span>Assurance Habitat</span>
          </div>
        </div>
      </div>

      <!-- Produit 3 -->
      <div class="col-md-4">
        <div class="product-card">
          <img src="assets/img/auto.png" alt="Assurance Auto/Moto">
          <div class="product-overlay">
            <span>Assurance Auto/Moto</span>
          </div>
        </div>
      </div>

      <!-- Produit 4 -->
      <div class="col-md-4">
        <div class="product-card">
          <img src="assets/img/voyage.jpg" alt="Assurance Voyage">
          <div class="product-overlay">
            <span>Assurance Voyage</span>
          </div>
        </div>
      </div>

      <!-- Produit 5 -->
      <div class="col-md-4">
        <div class="product-card">
          <img src="assets/img/seniorheureux.jpg" alt="Assurance Vie et Prévoyance">
          <div class="product-overlay">
            <span>Assurance Vie et Prévoyance</span>
          </div>
        </div>
      </div>

      <!-- Produit 6 -->
      <div class="col-md-4">
        <div class="product-card">
          <img src="assets/img/scolaire.jpeg" alt="Assurance Scolaire">
          <div class="product-overlay">
            <span>Assurance Scolaire</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lien vers Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



  </body>
  <footer id="footer" class="footer position-relative light-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">MHSCOURTAGE</span>
      </a>
      <div class="footer-contact pt-3">
        <p>6 Av. des Champs-Élysées</p>
        <p>Paris, France</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+33 1 84 80 87 02</span></p>
        <p><strong>Email:</strong> <span>Contact@mhscourtage.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="https://x.com/mhscourtage"><i class="bi bi-twitter-x"></i></a>
        <a href="https://web.facebook.com/profile.php?id=61570554551051"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/mhscourtage/"><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Liens</h4>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="quisommesNous.php">Qui sommes-nous</a></li>
        <li><a href="NosProduits.php">Nos produits</a></li>
        <li><a href="mentionlegale.php">Mention legales</a></li>
        <li><a href="policy.php">Politique de confidentialité</a></li>
        <li><a href="cookie.php">Cookies</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Nos produits</h4>
      <ul>
        <li><a href="assurance/assuranceSante.php">Assurance Santé</a></li>
        <li><a href="assurance/assuranceAutomoto.php">Assurance Auto/Moto</a></li>
        <li><a href="assurance/assurancehabitat.php">Assurance Habitation</a></li>
        <li><a href="assurance/assuranceVieetprevoyance.php">Assurance Vie et Prevoyance</a></li>

      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Newsletter</h4>
      <p>Abonnez-vous à notre newsletter et recevez les dernières nouvelles sur nos produits et services!</p>
      <form action="/" method="post" class="php-email-form">
        <div class="newsletter-form"><input type="email" name="email" placeholder="Votre email" required><input type="submit" value="S'abonner"></div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Votre demande d/’abonnement a bien été envoyée. Merci !</div>
      </form>


    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© 2024<span>Copyright</span> <strong class="px-1 sitename">MHSCOURTAGE </strong><span>Tous droits reservés</span></p>
  <div class="credits">

  </div>
</div>

</footer>
  </html>