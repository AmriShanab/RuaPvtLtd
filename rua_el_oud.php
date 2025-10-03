<?php
include 'navbar.php';
?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rua El Oud | The Essence of Time</title>
    <style>
      
    </style>
   <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Cinzel:wght@400;600&display=swap" rel="stylesheet">
</head>
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
            <h1 class="cinzel-font">WELCOME TO RUA EL OUD</h1>
            <p>Discover Our World of Refined Experiences</p>
        </div>
    </div>

    <section class="oud-section">
        <div class="oud-decoration oud-decoration-1"></div>
        <div class="oud-product-container">
            <div class="oud-product-image" style="background-image: url('assets/images/photo-1682482003115-b6abbd9e6834.avif');"></div>
            <div class="oud-product-content">
                <h2 class="oud-product-title">Pure Agarwood Oil</h2>
                <span class="oud-product-subtitle">"A single drop holds centuries — the soul of the forest, bottled for you."</span>
                <p class="oud-product-description">Distilled from the most precious agarwood trees, our oil is an essence unmatched in depth and purity. Every batch carries the complexity of nature's artistry — smoky, sweet, and serenely powerful. A mark of refinement for personal rituals, perfumery, or collection.</p>
            </div>
        </div>
    </section>
    
    <!-- Raw Agarwood -->
    <section class="oud-section">
        <div class="oud-decoration oud-decoration-2"></div>
        <div class="oud-product-container">
            <div class="oud-product-image" style="background-image: url('https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
            <div class="oud-product-content">
                <h2 class="oud-product-title">Raw Agarwood</h2>
                <span class="oud-product-subtitle">"Nature's rarest wood, where every grain whispers a hidden story."</span>
                <p class="oud-product-description">Sourced from the most resin-rich heartwood, our agarwood pieces are treasures in their purest form. Burn for its sacred aroma, display as an heirloom, or hold as a rare investment — each piece is a fragment of the earth's most mysterious gift.</p>
            </div>
        </div>
    </section>
    
    <!-- Fragrances Inspired by Oud -->
    <section class="oud-section">
        <div class="oud-product-container">
            <div class="oud-product-image" style="background-image: url('https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
            <div class="oud-product-content">
                <h2 class="oud-product-title">Fragrances Inspired by Oud</h2>
                <span class="oud-product-subtitle">"The past and present entwined — a scent that lingers beyond time."</span>
                <p class="oud-product-description">Our perfumes are an elegant fusion of oud's ancient soul with modern artistry. Layered, sophisticated, unforgettable and designed for those who seek scents that are as distinctive as they are memorable, Rua El Oud fragrances are the perfect marriage of heritage and sophistication.</p>
            </div>
        </div>
    </section>
    
    <!-- Your Journey Awaits -->
    <section class="oud-section oud-journey">
        <div class="oud-journey-content">
            <h2 class="oud-journey-title">Your Journey Awaits</h2>
            <p>For those who desire the rare, the timeless, and the authentic — Rua El Oud is your gateway. Contact us to source the finest oud oil, curated agarwood, and bespoke fragrances.</p>
            <!-- <button class="oud-cta-button">Begin Your Oud Journey</button> -->
        </div>
    </section>

    <script>
        // Simple animation for product titles
        document.querySelectorAll('.oud-product-title').forEach((title, index) => {
            setTimeout(() => {
                title.style.opacity = '1';
                title.style.transform = 'translateY(0)';
            }, 300 * index);
            
            title.style.opacity = '0';
            title.style.transform = 'translateY(20px)';
            title.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        });
        
        // Fade in decoration elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0.1';
                    entry.target.style.transition = 'opacity 1.5s ease';
                }
            });
        }, {threshold: 0.1});
        
        document.querySelectorAll('.oud-decoration').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>
</body>
</html>

<?php
include 'footer.php'
?>