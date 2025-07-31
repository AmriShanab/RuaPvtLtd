<?php
include '../layouts/navbar.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Segoe+UI&display=swap" rel="stylesheet">
    <style>
        body {
            /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at top left, #fefcea, #f1e0c9);
            color: #1f1f1f;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 30px;
            padding: 10px 20px;
            background: #d4af37;
            color: #1f1f1f;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .back-button:hover {
            background: #c89f28;
            transform: translateY(-2px);
        }

        h1 {
            font-family: 'Cinzel', serif;
            font-size: 2.5rem;
            /* color: #4b2e00; */
            margin-bottom: 20px;
        }

        .destination-content {
            display: flex;
            gap: 40px;
            margin-bottom: 40px;
        }

        .destination-image {
            width: 400px;
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .destination-info {
            flex: 1;
        }

        .universities-section {
            background: rgba(255, 255, 255, 0.3);
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .universities-section h2 {
            font-family: 'Cinzel', serif;
            color: #4b2e00;
            margin-top: 0;
        }

        .universities-list {
            columns: 2;
            list-style-type: none;
            padding: 0;
        }

        .universities-list li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            line-height: 1.6;
        }

        .universities-list li:before {
            content: "•";
            color: #d4af37;
            font-size: 1.8rem;
            position: absolute;
            left: 0;
            top: -8px;
        }

        @media (max-width: 768px) {
            .destination-content {
                flex-direction: column;
            }

            .destination-image {
                width: 100%;
                height: auto;
                max-height: 300px;
            }

            .universities-list {
                columns: 1;
            }
        }
    </style>
</head>

<body>

    <div class="hero-section">
        <video autoplay muted loop playsinline class="hero-video">
            <!-- Primary video source -->
            <source src="../assets/videos/sample_background.mp4" type="video/mp4">

            <!-- Fallback video source -->
            <source src="https://pixabay.com/videos/download/video-45707_large.mp4" type="video/mp4">

            <!-- Final fallback image -->
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&auto=format&fit=crop&w=1900&q=80" alt="Luxury gold texture">
        </video>
        <div class="hero-content">
            <h1 class="cinzel-font" id="destination-name"></h1>
            <p>Discover Our World of Education Packages</p>
        </div>
    </div>
    <div class="container">
        <a href="../pages/rua_eduventure.php" class="back-button">← Back to Map</a>

        <div class="destination-content">
            <img id="destination-image" src="" alt="" class="destination-image">
            <div class="destination-info">
                <h1 id="destination-name"></h1>
                <p id="destination-description"></p>
            </div>
        </div>

        <div class="universities-section">
            <h2>Featured Universities</h2>
            <ul class="universities-list" id="universities-list">
                <!-- Universities will be inserted here by JavaScript -->
            </ul>
        </div>
    </div>

    <script>
        // This will contain the data processing logic
        document.addEventListener('DOMContentLoaded', function() {
            // Get the destination name from URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const destinationName = urlParams.get('destination');

            // In a real application, you would fetch this from an API or database
            // For this example, we'll use a simple lookup object
            const destinationsData = {
                "Australia": {
                    description: "Australia offers world-class education in vibrant cities like Sydney and Melbourne, with stunning natural landscapes and a high quality of life. Australian universities are known for their research excellence and innovative teaching methods.",
                    imageUrl: "https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                    universities: [
                        "University of Sydney",
                        "University of Melbourne",
                        "Australian National University",
                        "University of Queensland",
                        "University of New South Wales"
                    ]
                },
                "New Zealand": {
                    description: "New Zealand provides excellent education in a safe, English-speaking environment with breathtaking scenery and outdoor activities. The education system emphasizes practical learning and critical thinking.",
                    imageUrl: "https://images.unsplash.com/photo-1507699622108-4be3abd695ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                    universities: [
                        "University of Auckland",
                        "Victoria University of Wellington",
                        "University of Otago",
                        "Massey University"
                    ]
                },
                // Add similar entries for all your destinations
                "United Kingdom": {
                    description: "The UK is home to some of the world's most prestigious universities with centuries of academic tradition. British degrees are recognized globally for their quality and rigorous standards.",
                    imageUrl: "https://images.unsplash.com/photo-1486299267070-83823f5448dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                    universities: [
                        "University of Oxford",
                        "University of Cambridge",
                        "Imperial College London",
                        "London School of Economics",
                        "University College London"
                    ]
                }
                // Continue with other destinations...
            };

            // Display the destination data
            if (destinationName && destinationsData[destinationName]) {
                const destination = destinationsData[destinationName];

                // Set page title
                document.title = `${destinationName} | Study Abroad`;

                // Update the DOM elements
                document.getElementById('destination-name').textContent = destinationName;
                document.getElementById('destination-description').textContent = destination.description;
                document.getElementById('destination-image').src = destination.imageUrl;
                document.getElementById('destination-image').alt = `Photo of ${destinationName}`;

                // Populate universities list
                const universitiesList = document.getElementById('universities-list');
                destination.universities.forEach(university => {
                    const li = document.createElement('li');
                    li.textContent = university;
                    universitiesList.appendChild(li);
                });
            } else {
                // Handle case when destination isn't found
                document.getElementById('destination-name').textContent = "Destination Not Found";
                document.querySelector('.container').innerHTML = `
                    <h1>Destination Not Found</h1>
                    <p>The requested destination could not be found.</p>
                    <a href="index.html" class="back-button">← Back to Map</a>
                `;
            }
        });
    </script>
</body>

</html>