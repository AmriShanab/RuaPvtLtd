<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study Abroad Guide</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles/study_abroad.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="header">
    <div class="container">
      <h1 id="main-heading">Study Abroad Guide</h1>
      <!-- <p id="sub-heading">Find Your Perfect Education Destination</p> -->
    </div>
  </div>

  <div class="country-selector">
    <a href="?destination=Australia" class="country-btn">Australia</a>
    <!-- <a href="?destination=Canada" class="country-btn">Canada</a> -->
    <a href="?destination=United Kingdom" class="country-btn">United Kingdom</a>
    <a href="?destination=United States" class="country-btn">United States</a>
    <a href="?destination=New Zealand" class="country-btn">New Zealand</a>
    <a href="?destination=Dubai, UAE" class="country-btn">Dubai</a>
  </div>

  <div class="container">
    <section class="intro">
      <h2 class="cinzel-font" id="sub-heading"></h2>
      <p id="country-description">Select a country to view education information.</p>
    </section>

    <section class="universities">
      <div class="section-header">
        <h2 id="universities-heading">Featured Universities</h2>
        <div class="controls">
          <button id="prev-btn"></button>
          <button id="next-btn"></button>
        </div>
      </div>

      <div class="carousel-container">
        <div class="carousel" id="universities-container">
          <div class="uni-card">
            <h3>Select a country to view universities</h3>
          </div>
        </div>
      </div>

      <!-- <p class="status-text" id="uni-status">Select a country to view universities</p> -->
    </section>

    <h2 id="cost-heading">Key Information</h2>
    <div class="pyramid-container">
      <div class="pyramid">

        <div class="pyramid-row level-1" id="box1">
          <div class="pyramid-box">
            <h3>Living Cost</h3>
            <p class="info">Loading...</p>
          </div>
        </div>

        <div class="pyramid-row level-2" id="box2">
          <div class="pyramid-box">
            <h3>Tuition Fee</h3>
            <p class="info">Loading...</p>
          </div>
        </div>

        <div class="pyramid-row level-3" id="box3">
          <div class="pyramid-box">
            <h3>Entry Requirements</h3>
            <p class="info">Loading...</p>
          </div>
        </div>

        <div class="pyramid-row level-4" id="box4">
          <div class="pyramid-box">
            <h3>English Proficiency</h3>
            <p class="info">Loading...</p>
          </div>
        </div>

        <div class="pyramid-row level-5" id="box5">
          <div class="pyramid-box">
            <h3>Scholarships</h3>
            <p class="info">Loading...</p>
          </div>
        </div>

      </div>
    </div>


  </div>

  <?php include 'footer.php'; ?>

  <script src="assets/js/study_abroad.js"></script>
</body>

</html>