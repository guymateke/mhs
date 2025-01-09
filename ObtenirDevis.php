<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demande de Devis | MHSCOURTAGE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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
<body>
  <div class="container my-5">
    <h1 class="text-center mb-4 text-primary">Demande de Devis</h1>
    <form action="forms/devisform.php" method="POST">
  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-3">Informations Personnelles</legend>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
      </div>
      <div class="col-md-6">
        <label for="lastName" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" required>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" class="form-control" name="email" placeholder="Entrez votre email" required>
      </div>
      <div class="col-md-6">
        <label for="phone" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" name="telephone" placeholder="Entrez votre numéro de téléphone" required>
      </div>
    </div>
  </fieldset>

  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-3">Type d'Assurance</legend>
    <div class="mb-3">
      <label for="insuranceType" class="form-label">Type d'Assurance</label>
      <select class="form-select" name="type_assurance" required>
        <option value="" disabled selected>Choisissez une option</option>
        <optgroup label="Particulier">
          <option value="sante">Assurance Santé</option>
          <option value="habitation">Assurance Habitation</option>
          <option value="auto-moto">Assurance Auto/Moto</option>
        </optgroup>
        <optgroup label="Professionnel">
          <option value="vtc">Assurance VTC</option>
          <option value="decennale">Assurance Décennale</option>
          <option value="rc-pro">RC Pro</option>
        </optgroup>
      </select>
    </div>
  </fieldset>

  <fieldset class="border p-3 mb-4">
    <legend class="w-auto px-3">Détails Supplémentaires</legend>
    <div class="mb-3">
      <label for="details" class="form-label">Vos Besoins</label>
      <textarea class="form-control" name="details" rows="4"></textarea>
    </div>
    <div class="mb-3">
      <label for="preferred_date" class="form-label">Date Préférée</label>
      <input type="date" class="form-control" name="preferred_date">
    </div>
  </fieldset>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Envoyer</button>
    <button type="reset" class="btn btn-secondary">Réinitialiser</button>
  </div>
</form>

  </div>

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
        <li><a href="assurance/assuranceVtc.php">VTC</a></li>
        <li><a href="assurance/assuranceDecennale.php">DECENNALE</a></li>
        <li><a href="assurance/assuranceRcpro.php">RC PRO</a></li>
        

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
  <p>© <span>2024</span> <strong class="px-1 sitename">MHSCOURTAGE</strong><span>Tous droits reservés</span></p>
  <div class="credits">

  </div>
</div>

</footer>
</html>
