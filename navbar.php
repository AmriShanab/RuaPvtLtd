<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="description" content="Rua (Pvt) Ltd - Your gateway to global education and travel experiances. Explore our services for students, travelers, and educational institutions.">
  <meta name="keywords" content="Rua, Education, Travel, Global, Students, Institutions, Services, Study Abroad, Travel Experiences, Rua Eduvanture, Rua El Oud, Rua Recreation">
  <meta name="author" content="Rua (Pvt) Ltd">
  <link rel="icon" href="assets/images/logo.png" type="image/png">

  <title>RUA (PVT) LTD</title>
  <link rel="stylesheet" href="assets/styles/main_styles.css">
  <link rel="stylesheet" href="assets/styles/hero-sections.css">
  <link rel="stylesheet" href="assets/styles/rua_eduvanture.css">
  <link rel="stylesheet" href="assets/styles/contact.css">
  <link rel="stylesheet" href="assets/styles/partners.css">
  <link rel="stylesheet" href="assets/styles/about.css">
  <link rel="stylesheet" href="assets/styles/rua_el_oud.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
</head>

<body>
  <div class="loader-wrapper" id="loaderWrapper">
    <div class="loader-logo">
      <img src="assets/images/Only_logo.png" alt="Your Company Logo" class="loader-logo-img">
    </div>
  </div>

  <header class="navbar-container">
    <nav class="navbar">
      <div class="navbar-logo">
        <a href="index.php" class="logo-link">
          <img src="assets/images/Logo.pdf.png" alt="Rua" class="logo-img">
        </a>
      </div>
      <ul class="navbar-links" id="navbarLinks">
        <li><a href="index" class="cinzel-font <?= ($currentPage === 'index.php') ? 'active-link' : '' ?>">Home</a></li>
        <li><a href="rua_eduventure" class="cinzel-font <?= ($currentPage === 'rua_eduventure.php') ? 'active-link' : '' ?>">Rua Eduventure</a></li>
        <li><a href="rua_el_oud" class="cinzel-font <?= ($currentPage === 'rua_el_oud.php') ? 'active-link' : '' ?>">Rua El Oud</a></li>
        <li><a href="rua_recreation" class="cinzel-font <?= ($currentPage === 'rua_recreation.php') ? 'active-link' : '' ?>">Rua Recreation</a></li>
        <li><a href="about" class="cinzel-font <?= ($currentPage === 'about.php') ? 'active-link' : '' ?>">About Us</a></li>
        <li><a href="contact" class="cinzel-font <?= ($currentPage === 'contact.php') ? 'active-link' : '' ?>">Contact</a></li>
      </ul>

      <button class="navbar-toggle" id="navbarToggle">
        <i class="fas fa-bars"></i>
      </button>
    </nav>
  </header>




  <script src="assets/js/main_script.js"></script>
</body>

</html>