<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Mobile Friendly -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <!-- SEO Meta Tags -->
  <title>RUA (PVT) LTD | Global Education & Travel Experiences</title>
  <meta name="description" content="RUA (Pvt) Ltd - Your trusted gateway to study abroad opportunities, travel experiences, and global education services for students, travelers, and institutions.">
  <meta name="keywords" content="RUA, Study Abroad, Education, Global Travel, Students, Institutions, Overseas Education, Travel Experiences, Rua Eduvanture, Rua El Oud, Rua Recreation">
  <meta name="author" content="RUA (Pvt) Ltd">

  <!-- Open Graph (Facebook & LinkedIn) -->
  <meta property="og:title" content="RUA (PVT) LTD | Global Education & Travel">
  <meta property="og:description" content="Explore study abroad programs, travel experiences, and global education services with RUA (Pvt) Ltd.">
  <meta property="og:image" content="https://rua.international/assets/images/logo.png">
  <meta property="og:url" content="https://rua.international">
  <meta property="og:type" content="website">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="RUA (PVT) LTD | Global Education & Travel">
  <meta name="twitter:description" content="Explore study abroad programs, travel experiences, and global education services with RUA (Pvt) Ltd.">
  <meta name="twitter:image" content="https://rua.international/assets/images/logo.png">

  <!-- Favicon & App Icons -->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/Logo.pdf.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/Logo.pdf.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Logo.pdf.png">
  <link rel="manifest" href="assets/images/site.webmanifest">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/styles/main_styles.css">
  <link rel="stylesheet" href="assets/styles/hero-sections.css">
  <link rel="stylesheet" href="assets/styles/rua_eduvanture.css">
  <link rel="stylesheet" href="assets/styles/contact.css">
  <link rel="stylesheet" href="assets/styles/partners.css">
  <link rel="stylesheet" href="assets/styles/about.css">
  <link rel="stylesheet" href="assets/styles/rua_el_oud.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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