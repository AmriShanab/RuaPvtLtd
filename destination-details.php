<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Abroad Guide</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', serif;
            background-color: #f8f9f7;
            /* Off White */
            color: #220000;
            /* Maroon */
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: #220000;
            /* Maroon */
            color: #ccc0b2;
            /* Beige */
            padding: 40px 20px;
            text-align: center;
            border-bottom: 5px solid #ccc0b2;
        }

        h1 {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            margin-bottom: 20px;
            margin-top: 75px;
        }

        h2 {
            font-family: 'Cinzel', serif;
            color: #220000;
            margin: 30px 0 20px;
            border-bottom: 2px solid #ccc0b2;
            padding-bottom: 10px;
        }

        .intro {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .data-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 40px;
        }

        .chart-box {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .chart-title {
            text-align: center;
            margin-bottom: 15px;
            font-family: 'Cinzel', serif;
            color: #220000;
        }

        .universities {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .carousel {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 20px 10px;
            scrollbar-width: thin;
        }

        .carousel::-webkit-scrollbar {
            height: 8px;
        }

        .carousel::-webkit-scrollbar-thumb {
            background: #ccc0b2;
            border-radius: 4px;
        }

        .uni-card {
            flex: 0 0 auto;
            width: 250px;
            background: #f8f9f7;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-left: 4px solid #220000;
        }

        .requirements {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 40px;
        }

        .req-card {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .req-card h3 {
            font-family: 'Cinzel', serif;
            color: #220000;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ccc0b2;
        }

        .req-card ul {
            list-style-type: none;
        }

        .req-card li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .req-card li:before {
            content: "•";
            color: #220000;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* footer {
            background: #220000;
            color: #ccc0b2;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        } */

        .country-selector {
            text-align: center;
            margin: 20px 0;
        }

        .country-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background: #220000;
            color: #ccc0b2;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .country-btn:hover {
            background: #500000;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            .data-container {
                flex-direction: column;
            }
        }
    </style>
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
            <h2 id="universities-heading">Featured Universities</h2>
            <div class="carousel" id="universities-container">
                <div class="uni-card">
                    <h3>Select a country to view universities</h3>
                </div>
            </div>
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

    <script>
        // Country data - you can expand this with more countries
        const countryData = {
            "Australia": {
                title: "The Land Down Under!",
                description: "Australia is one of the most popular destinations for Sri Lankan students, offering worldclass universities, globally recognized degrees, and excellent career prospects. With programs in business, IT, engineering, health sciences, hospitality, and more, Australian qualifications are highly respected worldwide. Beyond academics, students enjoy a safe, multicultural society that values diversity and provides a strong Sri Lankan community for support—making Australia the ideal blend of quality education and rewarding lifestyle.",
                livingCost: 29710,
                tuitionRange: [20000, 50000],
                currency: "AUD",
                universities: [
                    "RMIT", "Deakin", "Victoria", "La Trobe", "Monash",
                    "Southern Cross", "Torrens", "Uni of Canberra", "Swinburne Uni",
                    "Uni of Tasmania", "University of Newcastle", "Charles Sturt University",
                    "ECU", "Uni of Queensland", "Australian Catholic Uni",
                    "Murdoch Uni", "Curtin Uni", "Uni of Wollongong"
                ],
                requirements: {
                    undergraduate: "A/Ls with 3C passes",
                    postgraduate: "Bachelor's degree with 65% or more",
                    english: "IELTS or PTE",
                    scholarships: "Various scholarships available for international students"
                },
                costBreakdown: {
                    accommodation: 15000,
                    food: 8000,
                    transport: 3000,
                    other: 3710
                }
            },
            "Canada": {
                title: "The Great White North!",
                description: "Canada is known for its high-quality education system, diverse culture, and welcoming environment for international students. Canadian degrees are recognized globally, and students can benefit from post-graduation work opportunities. With stunning natural landscapes and vibrant cities, Canada offers an exceptional study experience.",
                livingCost: 25000,
                tuitionRange: [15000, 40000],
                currency: "CAD",
                universities: [
                    "University of Toronto", "University of British Columbia", "McGill University",
                    "McMaster University", "University of Montreal", "University of Alberta",
                    "University of Calgary", "University of Ottawa", "Western University"
                ],
                requirements: {
                    undergraduate: "A/Ls with 3C passes",
                    postgraduate: "Bachelor's degree with 70% or more",
                    english: "IELTS or TOEFL",
                    scholarships: "Limited scholarships available for international students"
                },
                costBreakdown: {
                    accommodation: 12000,
                    food: 6000,
                    transport: 2000,
                    other: 5000
                }
            },
            "United Kingdom": {
                title: "The UK Experiance!",
                description: `The United Kingdom is a leading destination for Sri Lankan students, offering world-class
education, globally recognised degrees, and centuries of academic excellence. Home to
some of the world’s top universities, the UK provides programs across business,
engineering, medicine, law, arts, and more—qualifications that are highly valued by
employers worldwide. Beyond academics, students experience a vibrant, multicultural
environment with peers from over 180 countries, while a strong Sri Lankan community
ensures a welcoming home away from home.`,
                livingCost: 13347,
                tuitionRange: [10800, 30000],
                currency: "GBP",
                universities: [
                    "University of East London", "Coventry University", "University of Bedfordshire",
                    "University of Sunderland", "Teesside University", "Middlesex University of london",
                    "University of Hertfordshire", "University of Greenwich", "University of South Wales", "London Metropolitan University", "University of West london", "Stafforshire University", "Birmingham City University", "De Montfort University", "University of Wolverhampton"
                ],
                requirements: {
                    undergraduate: "A/Ls with 3C passes",
                    postgraduate: "PG - 55% or more",
                    english: "IELTS or PTEs",
                    scholarships: "Various scholarships and bursaries available"
                },
                costBreakdown: {
    accommodation: 7200,  // biggest expense (student housing/shared flat)
    food: 3000,           // groceries + some eating out
    transport: 1047,      // student rail/bus passes
    other: 2100           // utilities, phone, leisure, study materials, misc.
}
            },
            "United States": {
                title: "Why USA ?",
                description: `The United States is one of the most popular study destinations for Sri Lankan students,
offering world-class education, globally recognised degrees, and limitless opportunities.
With over 4,000 universities and colleges, the USA provides flexible study options,
cutting-edge research, and access to prestigious institutions. American qualifications are
highly respected worldwide, giving graduates a strong career advantage across fields like
business, IT, engineering, medicine, law, and the arts. As a Sri Lankan student, you’ll also
thrive in the USA’s diverse and welcoming culture, gaining both academic excellence and
enriching global experiences.`,
                livingCost: 15000,
                tuitionRange: [25000, 45000],
                currency: "USD",
                universities: [
                    "University of South Florida", "Illinois State University", "Wichita State University",
                   "Minnesota State University", "Kent State University", "Webster University",
                    "Concordia University", "Eastern Michingan University", "Troy University","exas  A&M University-Commerce"
                ],
                requirements: {
                    undergraduate: "A/Ls with 3B passes and SAT/ACT",
                    postgraduate: "Bachelor's degree with 65% or more and GRE/GMAT",
                    english: "TOEFL or IELTS",
                    scholarships: "Merit-based and need-based scholarships available"
                },
               costBreakdown: {
    accommodation: 9000,  // on-campus housing/shared apartment
    food: 3500,           // groceries + occasional dining out
    transport: 1000,      // public transport, ride-sharing, campus shuttle
    other: 1500           // utilities, phone, leisure, study materials, health insurance, misc.
}
            },
            "New Zealand": {
                title: "New Zealand at a Glance!",
                description: "New Zealand is a fast-growing choice for Sri Lankan Students, Offering world-class universities, globally recognized degrees, and a safe, welcoming ennvironment. With strong programs in business, IT, engineering, health sciences, hospitality, and more, New Zealand qualifications are highly respected worldwide. Beyond academics, students enjoy a high quality of life in a beautiful, multicultural society that values diversity and provides a strong Sri Lankan community for support—making New Zealand the ideal blend of quality education and rewarding lifestyle.",
                livingCost: 20000,
                tuitionRange: [20000, 35000],
                currency: "NZD",
                universities: [
                    "University of Auckland", "University of Canterbury", "University of Otago",
                    "Massey University", "University of Waikato", "Auckland University of Technology",
                    "Toi Ohomai Institue of Technology", "Le Cordon Bleu", "Lincoln University", "Southern Institute of Technology"
                ],
                requirements: {
                    undergraduate: "A/Ls with 3C passes",
                    postgraduate: "Bachelor's degree with 65% or more",
                    english: "IELTS or PTE",
                    scholarships: "Limited scholarships for international students"
                },
                costBreakdown: {
                    accommodation: 10000,
                    food: 5000,
                    transport: 2000,
                    other: 3000
                }
            },
            "Dubai, UAE": {
                title: "UAE Awaits....",
                description: `UAE is a fast-growing study destination for Sri Lankan students, offering world-class
education in a safe, modern, and multicultural environment. Known as the education hub
of the Middle East, it hosts globally recognised universities and branch campuses from
the UK, USA, and Australia, giving you an international qualification closer to home. With
programs in business, IT, engineering, hospitality, and health sciences, UAE degrees are
highly respected worldwide. Beyond academics, students thrive in a vibrant, diverse
society with over 200 nationalities, while a strong Sri Lankan community ensures a
welcoming home away from home.`,
                livingCost: 4000,
                tuitionRange: [50000, 100000],
                currency: "Dirhams (AED)",
                universities: [
                    "Middlesex", "Wollongong", "De Mont Fort", "Curtin Dubai", "Heriot-Watt University",    
                ],
                requirements: {
                    undergraduate: "A/Ls with 3C passes",
                    postgraduate: "Bachelor's degree with 55% or more",
                    english: "IELTS or PTE",
                    scholarships: "Limited scholarships for international students"
                },
                costBreakdown: {
                    accommodation: 1500,
                    food: 500,
                    transport: 500,
                    other: 1500
                }
            }
        };

        // Get country parameter from URL
        const urlParams = new URLSearchParams(window.location.search);
        let country = urlParams.get('destination');

        // Default to Australia if no country specified or invalid country
        if (!country || !countryData[country]) {
            country = "Australia";
        }

        // Update page content based on country
        function updateContent() {
            const data = countryData[country];

            // Update headings and descriptions
            document.getElementById('main-heading').textContent = data.title;
            document.getElementById('sub-heading').textContent = `Study in ${country}`;
            document.getElementById('country-description').textContent = data.description;

            // Update cost headings
            document.getElementById('living-cost-title').textContent = `Living Cost Per Year (${data.currency})`;
            document.getElementById('tuition-title').textContent = `Tuition Fee Range (${data.currency})`;

            // Update universities
            const universitiesContainer = document.getElementById('universities-container');
            universitiesContainer.innerHTML = '';

            data.universities.forEach(uni => {
                const uniCard = document.createElement('div');
                uniCard.className = 'uni-card';
                uniCard.innerHTML = `<h3>${uni}</h3>`;
                universitiesContainer.appendChild(uniCard);
            });

            // Update requirements
            document.getElementById('ug-requirements').innerHTML = `
                <li>${data.requirements.undergraduate}</li>
                <li>English Proficiency: ${data.requirements.english}</li>
            `;

            document.getElementById('pg-requirements').innerHTML = `
                <li>${data.requirements.postgraduate}</li>
                <li>English Proficiency: ${data.requirements.english}</li>
            `;

            document.getElementById('scholarships').innerHTML = `
                <li>${data.requirements.scholarships}</li>
            `;

            // Update charts
            updateCharts(data);
        }

        // Update charts with country data
        function updateCharts(data) {
            // Living Cost Chart
            const livingCostCtx = document.getElementById('livingCostChart').getContext('2d');

            if (window.livingCostChartInstance) {
                window.livingCostChartInstance.destroy();
            }

            window.livingCostChartInstance = new Chart(livingCostCtx, {
                type: 'pie',
                data: {
                    labels: ['Accommodation', 'Food', 'Transport', 'Other Expenses'],
                    datasets: [{
                        data: [
                            data.costBreakdown.accommodation,
                            data.costBreakdown.food,
                            data.costBreakdown.transport,
                            data.costBreakdown.other
                        ],
                        backgroundColor: [
                            '#220000',
                            '#8B0000',
                            '#A52A2A',
                            '#ccc0b2'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + data.currency + ' ' + context.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });

            // Tuition Fee Chart
            const tuitionFeeCtx = document.getElementById('tuitionFeeChart').getContext('2d');

            if (window.tuitionFeeChartInstance) {
                window.tuitionFeeChartInstance.destroy();
            }

            window.tuitionFeeChartInstance = new Chart(tuitionFeeCtx, {
                type: 'bar',
                data: {
                    labels: ['Minimum', 'Average', 'Maximum'],
                    datasets: [{
                        label: data.currency,
                        data: [
                            data.tuitionRange[0],
                            (data.tuitionRange[0] + data.tuitionRange[1]) / 2,
                            data.tuitionRange[1]
                        ],
                        backgroundColor: '#220000',
                        borderColor: '#220000',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: `${data.currency}`
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return data.currency + ' ' + context.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            updateContent();
        });
    </script>
</body>

</html>