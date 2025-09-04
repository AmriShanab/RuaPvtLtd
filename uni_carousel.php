<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Carousel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .universities {
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            margin-bottom: 20px;
            width: 95%;
            max-width: 1400px;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .section-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #220000;
            position: relative;
        }
        
        .section-header h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #b89a85, #8a5a44);
            border-radius: 2px;
        }
        
        .controls {
            display: flex;
            gap: 12px;
        }
        
        .controls button {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: none;
            background: #f0e6e0;
            color: #8a5a44;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .controls button:hover {
            background: #b89a85;
            color: white;
            transform: scale(1.1);
        }
        
        .carousel-container {
            position: relative;
        }
        
        .carousel {
            display: flex;
            overflow-x: auto;
            gap: 28px;
            padding: 25px 15px;
            scrollbar-width: none;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
        }
        
        .carousel::-webkit-scrollbar {
            display: none;
        }
        
        .uni-card {
            flex: 0 0 auto;
            width: 280px;
            background: linear-gradient(145deg, #ffffff, #f8f8f8);
            padding: 28px 22px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(34, 0, 0, 0.08);
            text-align: center;
            border: 1px solid #f0e6e0;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .uni-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #b89a85, #8a5a44);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .uni-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(34, 0, 0, 0.15);
            border-color: #b89a85;
        }
        
        .uni-card:hover:before {
            transform: scaleX(1);
        }
        
        .logo-container {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 15px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .logo-container:after {
            content: '';
            position: absolute;
            width: 130%;
            height: 130%;
            border-radius: 50%;
            border: 2px solid #b89a85;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .uni-card:hover .logo-container {
            transform: scale(1.1);
        }
        
        .uni-card:hover .logo-container:after {
            opacity: 1;
            transform: scale(0.9);
        }
        
        .uni-logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0px 4px 8px rgba(0, 0, 0, 0.12));
        }
        
        .uni-name {
            font-size: 18px;
            font-weight: 700;
            color: #220000;
            margin-top: 15px;
            transition: color 0.3s ease;
        }
        
        .uni-card:hover .uni-name {
            color: #8a5a44;
        }
        
        .uni-desc {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
            line-height: 1.5;
        }
        
        .country-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 12px;
        }
        
        .country-btn {
            padding: 10px 20px;
            background: #f0e6e0;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            color: #8a5a44;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .country-btn:hover, .country-btn.active {
            background: linear-gradient(90deg, #b89a85, #8a5a44);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(184, 154, 133, 0.3);
        }
        
        .status-text {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #8a5a44;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .universities {
                padding: 25px;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .uni-card {
                width: 240px;
            }
        }
    </style>
</head>
<body>
    <section class="universities">
        <div class="section-header">
            <h2>Featured Universities</h2>
            <div class="controls">
                <button id="prev-btn"><i class="fas fa-chevron-left"></i></button>
                <button id="next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        
        <div class="country-filter">
            <button class="country-btn active">Australia</button>
            <button class="country-btn">UK</button>
            <button class="country-btn">USA</button>
            <button class="country-btn">Canada</button>
        </div>
        
        <div class="carousel-container">
            <div class="carousel" id="universities-container">
                <!-- University cards will be generated here -->
            </div>
        </div>
        
        <p class="status-text">Showing 18 universities in Australia</p>
    </section>

    <script>
        // University data
        const universities = [
            { name: "RMIT", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=RMIT", desc: "Ranked among top 200 universities globally" },
            { name: "Deakin", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Deakin", desc: "Known for innovative teaching and research" },
            { name: "Victoria", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Victoria", desc: "Industry-connected education in Melbourne" },
            { name: "La Trobe", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=La+Trobe", desc: "World-class research and teaching excellence" },
            { name: "Monash", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Monash", desc: "One of Australia's leading research universities" },
            { name: "Southern Cross", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=SCU", desc: "Innovative learning with regional campuses" },
            { name: "Torrens", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Torrens", desc: "Australia's international university" },
            { name: "Uni of Canberra", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=UC", desc: "Practice-based education in the capital" },
            { name: "Swinburne Uni", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Swinburne", desc: "Technology, innovation and industry engagement" },
            { name: "Uni of Tasmania", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Tasmania", desc: "World-class research in a stunning location" },
            { name: "University of Newcastle", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Newcastle", desc: "Industry leaders with global impact" },
            { name: "Charles Sturt University", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=CSU", desc: "Education for the professions since 1989" },
            { name: "ECU", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=ECU", desc: "World-class teaching and research" },
            { name: "Uni of Queensland", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=UQ", desc: "One of Australia's top research institutions" },
            { name: "Australian Catholic Uni", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=ACU", desc: "Integrating teaching, research and community" },
            { name: "Murdoch Uni", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Murdoch", desc: "Free-thinking through innovative education" },
            { name: "Curtin Uni", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=Curtin", desc: "A global university with industry connections" },
            { name: "Uni of Wollongong", logo: "https://placehold.co/120x120/FFE6D6/8a5a44?text=UOW", desc: "World-class education and research" }
        ];

        // Initialize the carousel
        const universitiesContainer = document.getElementById('universities-container');
        
        function renderUniversities() {
            universitiesContainer.innerHTML = '';
            
            universities.forEach(uni => {
                const uniCard = document.createElement('div');
                uniCard.className = 'uni-card';
                uniCard.innerHTML = `
                    <div class="logo-container">
                        <img src="${uni.logo}" alt="${uni.name} logo" class="uni-logo">
                    </div>
                    <h3 class="uni-name">${uni.name}</h3>
                    <p class="uni-desc">${uni.desc}</p>
                `;
                universitiesContainer.appendChild(uniCard);
            });
        }
        
        // Navigation controls
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        
        nextBtn.addEventListener('click', () => {
            universitiesContainer.scrollBy({ left: 300, behavior: 'smooth' });
        });
        
        prevBtn.addEventListener('click', () => {
            universitiesContainer.scrollBy({ left: -300, behavior: 'smooth' });
        });
        
        // Country filter buttons
        const countryBtns = document.querySelectorAll('.country-btn');
        
        countryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                countryBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // In a real application, you would filter universities by country here
                document.querySelector('.status-text').textContent = 
                    `Showing ${universities.length} universities in ${btn.textContent}`;
            });
        });
        
        // Initialize the carousel on page load
        renderUniversities();
    </script>
</body>
</html>