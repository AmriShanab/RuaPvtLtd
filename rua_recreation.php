<?php
include 'navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rua Recreation | Movement & Stillness</title>
    <style>
        /* Recreation Specific Styles */
        .rec-root {
            --maroon-rec: #220000;
            --beige-rec: #ccc0b2;
            --offwhite-rec: #f8f9f7;
            --gold-rec: #c5a059;
            --teal-rec: #5a8c7e;
        }
        
        .rec-body {
            margin: 0;
            padding: 0;
            font-family: 'Avenir Next', 'Helvetica Neue', sans-serif;
            color: var(--maroon-rec);
            background-color: var(--offwhite-rec);
            line-height: 1.7;
            overflow-x: hidden;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            height: 40vh;
            overflow: hidden;
        }
        
        .hero-video, .hero-video img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* .blur-overlay {
            position: absolute;
            width: 100%;
            height: 80px;
            z-index: 1;
        }
        
        .top-blur {
            top: 0;
            background: linear-gradient(to bottom, var(--maroon-rec), transparent);
        }
        
        .bottom-blur {
            bottom: 0;
            background: linear-gradient(to top, var(--maroon-rec), transparent);
        } */
        
        /* Section Styling */
        .rec-section {
            padding: 3rem 1rem;
            position: relative;
        }
        
        .rec-section-title {
            font-size: 1.8rem;
            color: var(--maroon-rec);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }
        
        .rec-section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: var(--gold-rec);
        }
        
        /* Experience Grid - Mobile First */
        .rec-experiences {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .rec-experience {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .rec-experience:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        
        .rec-experience-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        
        .rec-experience-content {
            padding: 1.5rem;
        }
        
        .rec-experience-title {
            font-size: 1.3rem;
            color: var(--maroon-rec);
            margin-bottom: 0.8rem;
        }
        
        .rec-experience-desc {
            color: #555;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }
        
        /* Balanced Columns - Mobile First */
        .rec-balanced {
            background: var(--beige-rec);
            display: flex;
            flex-direction: column;
            min-height: auto;
        }
        
        .rec-balanced-content {
            padding: 2rem;
            order: 2;
        }
        
        .rec-balanced-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            order: 1;
        }
        
        /* CTA Section */
        .rec-cta {
            background: var(--maroon-rec);
            color: var(--offwhite-rec);
            text-align: center;
            padding: 3rem 1rem;
            position: relative;
        }
        
        .rec-cta-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--gold-rec);
        }
        
        .rec-cta-button {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            background: transparent;
            color: var(--gold-rec);
            border: 2px solid var(--gold-rec);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .rec-cta-button:hover {
            background: var(--gold-rec);
            color: var(--maroon-rec);
        }
        
        /* Decorative Elements */
        .rec-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23c5a059"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23c5a059"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23c5a059"></path></svg>');
            background-size: cover;
        }
        
        /* Media Queries for Larger Screens */
        @media (min-width: 768px) {
            .hero-section {
                height: 60vh;
            }
            
            .rec-section {
                padding: 5rem 2rem;
            }
            
            .rec-section-title {
                font-size: 2.2rem;
            }
            
            .rec-experiences {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            
            .rec-balanced {
                flex-direction: row;
                min-height: 500px;
            }
            
            .rec-balanced-content {
                padding: 3rem;
                order: 1;
                flex: 1;
            }
            
            .rec-balanced-image {
                order: 2;
                flex: 1;
                height: auto;
            }
            
            .rec-cta {
                padding: 4rem 2rem;
            }
            
            .rec-cta-title {
                font-size: 2.2rem;
            }
        }
        
        @media (min-width: 1024px) {
            .rec-section {
                padding: 6rem 10%;
            }
            
            .rec-experiences {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .rec-section-title {
                font-size: 2.5rem;
            }
            
            .rec-cta {
                padding: 5rem 10%;
            }
            
            .rec-cta-title {
                font-size: 2.5rem;
            }
            
            .rec-cta-button {
                padding: 1rem 2.5rem;
                font-size: 1rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Avenir+Next:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="rec-body">
    <div class="blur-overlay top-blur"></div>
    <div class="blur-overlay bottom-blur"></div>
    <div class="hero-section">
        <video autoplay muted loop playsinline class="hero-video">
            <!-- Primary video source -->
            <source src="assets/videos/sample_background.mp4" type="video/mp4">
            <!-- Fallback video source -->
            <source src="https://pixabay.com/videos/download/video-45707_large.mp4" type="video/mp4">
            <!-- Final fallback image -->
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&auto=format&fit=crop&w=1900&q=80" alt="Luxury gold texture">
        </video>
        <div class="hero-content">
            <h1 class="cinzel-font">WELCOME TO RUA RECREATION</h1>
            <p>Discover Our World of Refined Experiences</p>
        </div>
    </div>

    <!-- Experiences Grid -->
    <section class="rec-section">
        <h2 class="rec-section-title cinzel-font">Our Experiences</h2>
        <div class="rec-experiences">
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Serene Escapes</h3>
                    <p class="rec-experience-desc">Step into holiday rentals where the world slows down and your senses awaken. Designed for complete rejuvenation.</p>
                </div>
            </div>
            
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Zumba Fitness</h3>
                    <p class="rec-experience-desc">Where the music lifts you higher and every beat moves you closer to your best self.</p>
                </div>
            </div>
            
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://images.unsplash.com/photo-1540747913346-19e32dc3e97e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Outdoor Football</h3>
                    <p class="rec-experience-desc">The thrill of competition meets the joy of movement in our premium indoor facilities.</p>
                </div>
            </div>
            
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://media.istockphoto.com/id/465383082/photo/female-swimmer-at-the-swimming-pool.jpg?s=612x612&w=0&k=20&c=tcTwN2rTvUBK4wddan_GUCxrXX6bBoU-hyrVMvmT0BM=');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Pool Activities</h3>
                    <p class="rec-experience-desc">Refresh your body and mind with our curated aquatic experiences.</p>
                </div>
            </div>
            
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Mindful Meditation</h3>
                    <p class="rec-experience-desc">Guided sessions to help you find your center and reconnect with yourself.</p>
                </div>
            </div>
            
            <div class="rec-experience">
                <div class="rec-experience-image" style="background-image: url('https://media.istockphoto.com/id/1487463904/photo/happy-friends-browsing-social-media-on-smartphone-in-a-cafe.jpg?s=612x612&w=0&k=20&c=AXI-drxXu6Mq3zjbp2eVZe3CCghTEBvmPW_x-cIOC2Y=');"></div>
                <div class="rec-experience-content">
                    <h3 class="rec-experience-title cinzel-font">Social Spaces</h3>
                    <p class="rec-experience-desc">Connect with friends over games, meals, or shared moments of stillness.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Balanced Living Section -->
    <section class="rec-balanced">
        <div class="rec-balanced-content">
            <h2 style="font-size: 1.8rem; color: var(--maroon-rec); margin-bottom: 1.5rem;" class="cinzel-font">More Than Venues</h2>
            <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">Our spaces are invitations to breathe deeper, move freely, and enjoy life your way. With Rua Recreation, your time isn't just spent it's experienced.</p>
            <p>Whether you're escaping the routine or embracing it differently, every detail is designed for your rest, movement, and connection.</p>
        </div>
        <div class="rec-balanced-image" style="background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80');"></div>
    </section>
    
    <!-- CTA Section -->
    <section class="rec-cta">
        <!-- <div class="rec-wave"></div> -->
        <h2 class="rec-cta-title cinzel-font">Your Balanced Experience Awaits</h2>
        <p style="max-width: 100%; margin: 0 auto 2rem; padding: 0 1rem;">Contact us to plan your next experience and let Rua Recreation make every moment count.</p>
        <!-- <button class="rec-cta-button">Begin Your Journey</button> -->
    </section>

    <script>
        // Animate experiences on scroll
        const experienceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {threshold: 0.1});
        
        document.querySelectorAll('.rec-experience').forEach((exp, index) => {
            exp.style.opacity = '0';
            exp.style.transform = 'translateY(20px)';
            exp.style.transition = `opacity 0.6s ${index * 0.1}s ease, transform 0.6s ${index * 0.1}s ease`;
            experienceObserver.observe(exp);
        });
        
        // Smooth scroll for CTA button
        document.querySelector('.rec-cta-button').addEventListener('click', () => {
            // Replace with your actual contact section ID or link
            document.querySelector('.rec-cta').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>
<?php
include 'footer.php'
?>