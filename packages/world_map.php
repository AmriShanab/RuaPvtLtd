<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Abroad Destinations Map</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            color: #1f1f1f;
            overflow-x: hidden;
        }

        .main-container {
            display: flex;
            flex-direction: row;
            gap: 40px;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            flex-wrap: wrap;
        }

        .map-column {
            flex: 1;
            min-width: 400px;
            display: flex;
            justify-content: center;
        }

        .text-column {
            flex: 1;
            min-width: 400px;
            padding: 0 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: fadeIn 1.2s ease-in-out;
        }

        .map-column,
        .text-column {
            order: 0;
        }

        .text-column h1 {
            font-family: 'Cinzel', serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: #4b2e00;
            margin-bottom: 20px;
            position: relative;
        }

        .text-column h1::after {
            content: '';
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #d4af37, #c89f28);
            display: block;
            margin: 12px 0 0;
            border-radius: 2px;
        }

        .text-column p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #2f1b00;
            margin-bottom: 18px;
            max-width: 95%;
        }

        .map-container {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle at center, #f8f1e5, #e8dcb9);
            border-radius: 50%;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
            border: 6px solid #e8dcb9;
            transition: transform 0.3s ease;
            margin-top: 50px !important;
        }

        .map-container:hover {
            transform: scale(1.03);
        }

        #world-map {
            width: 100%;
            height: 100%;
            background: url('your-world-map-image.png') center/cover no-repeat;
        }

        .text-container {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeIn 1.2s ease-in-out;
        }

        .text-column p {
            text-align: justify;
        }

        .map-tooltip {
            position: absolute;
            display: none;
            background: rgba(255, 253, 245, 0.95);
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            border: 1px solid #d4af37;
            max-width: 250px;
            z-index: 100;
            pointer-events: none;
        }

        .map-tooltip h3 {
            margin: 0 0 8px 0;
            color: #800000;
            font-size: 1.2rem;
        }

        .map-tooltip p {
            margin: 0 0 8px 0;
            font-size: 0.9rem;
            color: #333;
        }

        .map-tooltip ul {
            margin: 5px 0;
            padding-left: 15px;
        }

        .map-tooltip li {
            font-size: 0.85rem;
            margin-bottom: 3px;
            color: #555;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .map-column {
            animation: slideInLeft 1s ease-in-out;
        }

        .text-column {
            animation: slideInRight 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 900px) {
            .main-container {
                flex-direction: column;
                gap: 30px;
            }

            .map-container {
                width: 90vw;
                height: 90vw;
            }

            .text-container h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Text Column -->
        <div class="text-column ">
            <h1 class="cinzel-font">Explore Study Abroad Destinations</h1>
            <p>Embark on an educational journey across the globe. Our premier study abroad programs offer unparalleled opportunities in some of the world's most sought-after destinations.</p>
            <p>Click on any destination marker to learn more about our programs in that location. From the historic universities of Europe to the innovative institutions of Australia and New Zealand, your academic adventure awaits.</p>
            <p>Our expert advisors will guide you through every step of the process, ensuring you find the perfect program to match your academic goals and personal interests.</p>
        </div>

        <!-- Map Column -->
        <div class="map-column ">
            <div class="map-container">
                <div id="world-map"></div>
                <div class="map-tooltip" id="map-tooltip"></div>
            </div>
        </div>
    </div>

    <!-- Include D3.js and TopoJSON -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script src="https://d3js.org/d3-geo-projection.v4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/d3-geo-polygon@3"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Map dimensions
            const width = document.getElementById('world-map').clientWidth;
            const height = document.getElementById('world-map').clientHeight;

            // Study abroad destinations with coordinates and info
            const destinations = [{
                    name: "Australia",
                    lat: -25.2744,
                    lng: 133.7751,
                    info: "Top universities in Sydney, Melbourne, and Brisbane",
                    universities: ["University of Sydney", "University of Melbourne", "ANU"]
                },
                {
                    name: "New Zealand",
                    lat: -40.9006,
                    lng: 174.8860,
                    info: "Quality education in Auckland and Wellington",
                    universities: ["University of Auckland", "Victoria University"]
                },
                {
                    name: "Dubai, UAE",
                    lat: 25.2048,
                    lng: 55.2708,
                    info: "Growing hub for international education",
                    universities: ["NYU Abu Dhabi", "University of Dubai"]
                },
                {
                    name: "United Kingdom",
                    lat: 55.3781,
                    lng: -3.4360,
                    info: "Home to Oxford, Cambridge, and other prestigious universities",
                    universities: ["University of Oxford", "University of Cambridge", "Imperial College"]
                },
                {
                    name: "United States",
                    lat: 37.0902,
                    lng: -95.7129,
                    info: "Leading destination with Ivy League and top state universities",
                    universities: ["Harvard", "Stanford", "MIT"]
                },
                {
                    name: "Germany",
                    lat: 51.1657,
                    lng: 10.4515,
                    info: "Popular for engineering and tuition-free education",
                    universities: ["TU Munich", "Heidelberg University"]
                },
                {
                    name: "France",
                    lat: 46.2276,
                    lng: 2.2137,
                    info: "Renowned for arts, business, and engineering schools",
                    universities: ["Sorbonne", "École Polytechnique"]
                },
                {
                    name: "Italy",
                    lat: 41.8719,
                    lng: 12.5674,
                    info: "Historic universities with strong arts programs",
                    universities: ["University of Bologna", "Sapienza University"]
                },
                {
                    name: "Spain",
                    lat: 40.4637,
                    lng: -3.7492,
                    info: "Affordable education with vibrant student life",
                    universities: ["University of Barcelona", "Complutense Madrid"]
                },
                {
                    name: "Netherlands",
                    lat: 52.1326,
                    lng: 5.2913,
                    info: "English-taught programs in Amsterdam and Rotterdam",
                    universities: ["University of Amsterdam", "Delft University"]
                }
            ];

            // Create SVG container
            const svg = d3.select("#world-map")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

            // Define a light beige gradient for the ocean background
            const defs = svg.append("defs");
            const radialGradient = defs.append("radialGradient")
                .attr("id", "ocean-gradient")
                .attr("cx", "50%")
                .attr("cy", "50%")
                .attr("r", "70%");

            radialGradient.append("stop")
                .attr("offset", "0%")
                .attr("stop-color", "#f8f1e5"); // Light beige center

            radialGradient.append("stop")
                .attr("offset", "100%")
                .attr("stop-color", "#e8dcb9"); // Slightly darker beige outer

            // Create a group for the map with higher z-index
            const mapGroup = svg.append("g")
                .attr("class", "map-group");

            // Create a group for destination markers with highest z-index
            const markersGroup = svg.append("g")
                .attr("class", "markers-group");

            // Create a tooltip
            const tooltip = d3.select("#map-tooltip");

            // Enhanced projection with more realistic curvature
            const projection = d3.geoOrthographic()
                .scale(height / 2.1)
                .translate([width / 2, height / 2])
                .clipAngle(90)
                .precision(0.1);

            const path = d3.geoPath().projection(projection);

            // Rotation variables
            let rotation = [0, 0];
            let rotating = false;
            let rotateInterval;

            // Load and draw the world map with maroon land colors
            d3.json("https://cdn.jsdelivr.net/npm/world-atlas@2/countries-110m.json").then(function(world) {
                const countries = topojson.feature(world, world.objects.countries);

                // Draw oceans first (background)
                mapGroup.append("path")
                    .datum({
                        type: "Sphere"
                    })
                    .attr("d", path)
                    .attr("fill", "url(#ocean-gradient)")
                    .attr("stroke", "#d4af37")
                    .attr("stroke-width", 0.5);

                // Draw countries with maroon land colors
                // Update the country paths in your D3 code:
                mapGroup.selectAll(".country")
                    .data(countries.features)
                    .enter()
                    .append("path")
                    .attr("class", "country")
                    .attr("d", path)
                    .attr("fill", "#A9A9A9") // Gray land
                    .attr("stroke", "#696969") // Dim gray border
                    .attr("stroke-width", 0.5)
                    .on("mouseover", function() {
                        d3.select(this)
                            .attr("fill", "#D3D3D3") // Light gray on hover
                            .attr("stroke-width", 1.2); // Slightly thicker border
                    })
                    .on("mouseout", function() {
                        d3.select(this)
                            .attr("fill", "#A9A9A9") // Reset to gray
                            .attr("stroke-width", 0.5); // Reset stroke
                    });

                // Add graticule (latitude/longitude lines)
                const graticule = d3.geoGraticule10();
                mapGroup.append("path")
                    .datum(graticule)
                    .attr("class", "graticule")
                    .attr("d", path)
                    .attr("fill", "none")
                    .attr("stroke", "rgba(139, 0, 0, 0.2)") // Dark red/maroon lines
                    .attr("stroke-width", 0.5);

                // Add destination markers with gold styling
                markersGroup.selectAll(".destination-marker")
                    .data(destinations)
                    .enter()
                    .append("circle")
                    .attr("class", "destination-marker")
                    .attr("cx", d => projection([d.lng, d.lat])[0])
                    .attr("cy", d => projection([d.lng, d.lat])[1])
                    .attr("r", 8)
                    .attr("fill", "#D4AF37") // Gold color
                    .attr("stroke", "#800000") // Maroon border
                    .attr("stroke-width", 1.5)
                    .attr("opacity", 0.9)
                    .on("mouseover", function(event, d) {
                        d3.select(this)
                            .attr("r", 10)
                            .attr("stroke-width", 2)
                            .attr("opacity", 1);

                        // Create university list
                        const uniList = d.universities ?
                            `<ul style="padding-left:15px;margin:5px 0 0 0;">${
                d.universities.map(u => `<li style="margin-bottom:3px;">${u}</li>`).join('')
            }</ul>` :
                            '';

                        tooltip.style("display", "block")
                            .html(`
                <h3>${d.name}</h3>
                <p>${d.info}</p>
                ${uniList}
                <div style="margin-top:10px; text-align:center;">
                    <button style="
                        background: #800000;
                        color: white;
                        border: none;
                        padding: 5px 10px;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 12px;
                    ">View Details</button>
                </div>
            `);
                    })
                    .on("mouseout", function() {
                        d3.select(this)
                            .attr("r", 8)
                            .attr("stroke-width", 1.5)
                            .attr("opacity", 0.9);
                        tooltip.style("display", "none");
                    })
                    .on("mousemove", function(event) {
                        tooltip.style("left", (event.pageX + 15) + "px")
                            .style("top", (event.pageY - 15) + "px");
                    })
                    .on("click", function(event, d) {
                        event.stopPropagation();
                        window.location.href = `destination-details.php?destination=${encodeURIComponent(d.name)}`;
                    });

                // Add animated glow to markers
                markersGroup.selectAll(".destination-glow")
                    .data(destinations)
                    .enter()
                    .append("circle")
                    .attr("class", "destination-glow")
                    .attr("cx", d => projection([d.lng, d.lat])[0])
                    .attr("cy", d => projection([d.lng, d.lat])[1])
                    .attr("r", 8)
                    .attr("fill", "#D4AF37")
                    .attr("opacity", 0)
                    .attr("pointer-events", "none");

                // Animate the glow
                function pulseGlow() {
                    markersGroup.selectAll(".destination-glow")
                        .attr("r", 8)
                        .attr("opacity", 0.7)
                        .transition()
                        .duration(2000)
                        .ease(d3.easeSinInOut)
                        .attr("r", 20)
                        .attr("opacity", 0)
                        .on("end", pulseGlow);
                }
                pulseGlow();

                // Add country name labels
                markersGroup.selectAll(".destination-label")
                    .data(destinations)
                    .enter()
                    .append("text")
                    .attr("class", "destination-label")
                    .attr("x", d => projection([d.lng, d.lat])[0] + 15)
                    .attr("y", d => projection([d.lng, d.lat])[1] + 5)
                    .text(d => d.name)
                    .attr("font-size", "12px")
                    .attr("fill", "#800000") // Maroon text
                    .attr("text-shadow", "0 0 4px rgba(248, 249, 247, 0.8)")
                    .attr("font-weight", "600");

                // Drag behavior for rotating the globe
                const drag = d3.drag()
                    .on("start", function() {
                        if (rotating) {
                            clearInterval(rotateInterval);
                            rotating = false;
                        }
                    })
                    .on("drag", function(event) {
                        const rotationSpeed = 0.5;
                        rotation[0] += event.dx * rotationSpeed;
                        rotation[1] -= event.dy * rotationSpeed;
                        projection.rotate(rotation);
                        updateMap();
                    });

                svg.call(drag);

                // Function to update the map when rotated
                function updateMap() {
                    mapGroup.selectAll("path")
                        .attr("d", path);

                    markersGroup.selectAll(".destination-marker, .destination-glow, .destination-label")
                        .attr("cx", d => projection([d.lng, d.lat])[0])
                        .attr("cy", d => projection([d.lng, d.lat])[1]);

                    markersGroup.selectAll(".destination-label")
                        .attr("x", d => projection([d.lng, d.lat])[0] + 15)
                        .attr("y", d => projection([d.lng, d.lat])[1] + 5);
                }

                // Initial rotation to show more of the popular destinations
                rotation = [-20, -20];
                projection.rotate(rotation);
                updateMap();

                // Add subtle ambient rotation when idle
                let idleTimeout;

                function startIdleRotation() {
                    if (!rotating && !idleTimeout) {
                        idleTimeout = setTimeout(() => {
                            const idleInterval = setInterval(() => {
                                if (rotating || d3.event && d3.event.type === 'drag') {
                                    clearInterval(idleInterval);
                                    idleTimeout = null;
                                } else {
                                    rotation[0] += 0.05;
                                    projection.rotate(rotation);
                                    updateMap();
                                }
                            }, 50);
                        }, 5000); // Start after 5 seconds of inactivity
                    }
                }

                svg.on("mousemove touchstart", function() {
                    clearTimeout(idleTimeout);
                    idleTimeout = null;
                    startIdleRotation();
                });

                startIdleRotation();
            });
        });
    </script>
</body>

</html>