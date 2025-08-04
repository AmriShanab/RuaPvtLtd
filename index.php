<?php
include 'navbar.php';
?>

<body>
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
            <h1 class="cinzel-font">WELCOME TO RUA (PVT) LTD</h1>
            <p>Discover Our World of Refined Experiences</p>
        </div>
    </div>

    <div class="welcome-section ">
        <div class="section-blur-top"></div>
        <div class="section-blur-bottom"></div>
        <div class="welcome-container">
            <div class="welcome-left">
                <div class="welcome-ornament">
                    <!-- <svg viewBox="0 0 100 100" class="gold-ornament">
                    <path d="M50,10 L60,50 L90,50 L65,70 L75,90 L50,75 L25,90 L35,70 L10,50 L40,50 Z" 
                          fill="#c99b32" opacity="0.8"/>
                </svg> -->
                </div>
            </div>
            <div class="welcome-content autoBlur">
                <h2 class="cinzel-font">Elegance in Simplicity</h2>
                <div class="welcome-divider"></div>
                <p class="welcome-text ">At Rua, we bring together the elegance of choice and the ease of experience through simple offerings: From trusted study abroad guidance for students aiming higher to the timeless richness of agarwood fragrances for those who value calm and clarity, and curated recreational experiences to help you unwind.</p>
                <p class="welcome-text">Whether you're planning your future, finding balance, or taking a break — Rua is here to make it all feel effortless.</p>
                <p class="welcome-tagline">No noise. Just quality, intention, and calm.</p>
            </div>
            <div class="welcome-right autoBlur">
                <div class="welcome-ornament right">
                    <svg viewBox="0 0 100 100" class="gold-ornament">
                        <path d="M50,10 L60,50 L90,50 L65,70 L75,90 L50,75 L25,90 L35,70 L10,50 L40,50 Z"
                            fill="#c99b32" opacity="0.8" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <section class="services-section">
        <div class="section-blur-top"></div>
        <div class="section-blur-bottom"></div>
        <div class="services-header autoBlur">
            <h2 class="cinzel-font">Our Services</h2>
            <div class="services-divider">
                <div class="divider-line"></div>
                <div class="divider-icon">✦</div>
                <div class="divider-line"></div>
            </div>
            <p class="services-description">Explore our diverse offerings designed to enrich your life.</p>
        </div>
        <div class="services-container">
            <!-- Eduventure Section -->
            <div class="service-card autoBlur">
                <div class="bottom-border"></div>
                <div class="right-border"></div>
                <div class="service-icon-circle">
                    <i class="fas fa-graduation-cap service-icon"></i>
                </div>
                <div class="service-content">
                    <h3 class="cinzel-font">Rua Eduventure</h3>
                    <div class="service-divider"></div>
                    <p>At Rua Eduventure, we guide ambitious students toward life-changing opportunities in top global destinations — the UK, Australia, Dubai, the USA, and across Europe. From university selection to visa support, our personalized approach ensures a smooth, confident transition into international education.</p>
                    <p class="highlight-text">With Rua, it's more than studying abroad — it's about starting your future with clarity, support, and purpose.</p>
                </div>
            </div>

            <!-- El Oud Section -->
            <div class="service-card autoBlur">
                <div class="bottom-border"></div>
                <div class="right-border"></div>
                <div class="service-icon-circle">
                    <i class="fas fa-spa service-icon"></i>
                </div>
                <div class="service-content">
                    <h3 class="cinzel-font">Rua El Oud</h3>
                    <div class="service-divider"></div>
                    <p>From the heart of the forest to the palm of your hand, Rua El Oud offers rare agarwood, pure oud oil, and signature fragrances crafted with intention. Sourced locally and distilled with care, each drop carries the depth of tradition and a hint of mystery.</p>
                    <p class="highlight-text">Whether for personal ritual or global connoisseurs, Rua El Oud invites you to experience the unseen — timeless, evocative and authentic.</p>
                </div>
            </div>

            <!-- Recreation Section -->
            <div class="service-card autoBlur">
                <div class="bottom-border"></div>
                <div class="right-border"></div>
                <div class="service-icon-circle">
                    <i class="fas fa-walking service-icon"></i>
                </div>
                <div class="service-content">
                    <h3 class="cinzel-font">Rua Recreation</h3>
                    <div class="service-divider"></div>
                    <p>At Rua Recreation, we create spaces and experiences designed for rest, movement, and connection. From serene holiday rentals and mindful meditation to high-energy Zumba fitness, indoor football, and pool sessions.</p>
                    <p class="highlight-text">Whether you're escaping the routine or embracing it differently, Rua Recreation makes every moment count.</p>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include 'footer.php';
?>