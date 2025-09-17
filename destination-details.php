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
            <p id="sub-heading">Find Your Perfect Education Destination</p>
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
            <p id="country-description">Select a country to view education information.</p>
        </section>

        <h2 id="cost-heading">Cost of Education</h2>
        <div class="data-container">
            <div class="chart-box">
                <h3 class="chart-title" id="living-cost-title">Living Cost Per Year</h3>
                <canvas id="livingCostChart"></canvas>
            </div>

            <div class="chart-box">
                <h3 class="chart-title" id="tuition-title">Tuition Fee Range</h3>
                <canvas id="tuitionFeeChart"></canvas>
            </div>
        </div>

        <section class="universities">
            <div class="section-header">
                <h2 id="universities-heading">Featured Universities</h2>
                <div class="controls">
                    <button id="prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button id="next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            
            <div class="carousel-container">
                <div class="carousel" id="universities-container">
                    <div class="uni-card">
                        <h3>Select a country to view universities</h3>
                    </div>
                </div>
            </div>
            
            <p class="status-text" id="uni-status">Select a country to view universities</p>
        </section>

        <h2 id="requirements-heading">Entry Requirements</h2>
        <div class="requirements">
            <div class="req-card">
                <h3>Undergraduate Programs</h3>
                <ul id="ug-requirements">
                    <li>Select a country to view requirements</li>
                </ul>
            </div>

            <div class="req-card">
                <h3>Postgraduate Programs</h3>
                <ul id="pg-requirements">
                    <li>Select a country to view requirements</li>
                </ul>
            </div>

            <div class="req-card">
                <h3>Scholarships</h3>
                <ul id="scholarships">
                    <li>Select a country to view scholarship information</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="assets/js/study_abroad.js"></script>
</body>

</html>