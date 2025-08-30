<?php
include 'navbar.php';
?>

<body>
    <div class="blur-overlay top-blur"></div>
    <div class="blur-overlay bottom-blur"></div>
    <div class="hero-section">
        <video autoplay muted loop playsinline class="hero-video">
            <!-- Primary video source -->
            <source src="assets/videos/rua_about_background.mp4" type="video/mp4" id="aboutVideo">
            <script>
            document.addEventListener("DOMContentLoaded", function() {
                var videoSource = document.getElementById("aboutVideo");
                if (window.innerWidth <= 768) {
                    videoSource.src = "assets/videos/rua_about_us_mobile.mp4";
                    // Reload video to apply new source
                    videoSource.parentElement.load();
                }
            });
            </script>

            <!-- Fallback video source -->
            <source src="https://pixabay.com/videos/download/video-45707_large.mp4" type="video/mp4">

            <!-- Final fallback image -->
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&auto=format&fit=crop&w=1900&q=80" alt="Luxury gold texture">
        </video>
        <div class="hero-content">
            <!-- <h1 class="cinzel-font">WELCOME TO RUA (PVT) LTD</h1>
            <p>Discover Our World of Refined Experiences</p> -->
        </div>
    </div>
    <main class="about-page">

        <!-- Our Journey Section -->
        <section class="journey-section-about">
            <h1 class="page-title-about">Our Journey</h1>

            <!-- Main Intro Paragraph -->
            <div class="intro-text-about reveal-about">
                <p>
                    Rua is a multi-dimensional venture built on over a decade of experience across international education,
                    oud and agarwood craftsmanship, and curated recreation. With roots in Sri Lanka and a reach that extends
                    globally, we bring together ambition, well-being, and experience in ways that are both grounded and
                    quietly distinctive.
                </p>
            </div>

            <!-- The Three Pillars of Rua -->
            <!-- <div class="pillars-container-about">
                Rua Eduventure
                <div class="pillar-card-about reveal-about">
                    <div class="pillar-icon-about">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="pillar-content-about">
                        <h3 class="pillar-title-about">Rua Eduventure</h3>
                        <p class="pillar-description-about">
                            We guide students to global academic destinations with clarity and care. We are driven by a singular
                            purpose: to make quality education and career opportunities accessible to aspiring students
                            across the globe. Our strength lies in our personalized approach, meticulously matching each
                            student's ambitions with the right academic path.
                        </p>
                    </div>
                </div>

                Rua El Oud
                <div class="pillar-card-about reveal-about">
                    <div class="pillar-icon-about">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="pillar-content-about">
                        <h3 class="pillar-title-about">Rua El Oud</h3>
                        <p class="pillar-description-about">
                            We craft and source rare agarwood and oud oils that awaken the senses and hold centuries of quiet
                            tradition. Our commitment to sustainability ensures that every drop of our oil is a testament
                            to ethical craftsmanship and reverence for nature. We invite you to experience the silent luxury
                            of our hand-selected oud, a journey into tradition, and a celebration of purity.
                        </p>
                    </div>
                </div>

                Rua Recreation
                <div class="pillar-card-about reveal-about">
                    <div class="pillar-icon-about">
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="pillar-content-about">
                        <h3 class="pillar-title-about">Rua Recreation</h3>
                        <p class="pillar-description-about">
                            We offer spaces for movement, rest, and reconnection — from holiday rentals and Zumba fitness
                            to indoor sports and meditation. We believe that true well-being comes from finding balance in
                            your life. Our diverse range of recreational offerings is designed to help you recharge, reconnect
                            with yourself, and find joy in movement.
                        </p>
                    </div>
                </div>
            </div> -->

            <!-- Concluding Philosophy -->
            <div class="philosophy-text-about reveal-about">
                <p>
                    Each arm of Rua is connected by a simple idea: that a meaningful life isn’t loud, it’s intentional.
                    What we offer may seem different. But when you experience it, It just feels right.
                </p>
            </div>
        </section>

        <!-- Our Values Section -->
        <!-- Our Vision Section -->
        <section class="vision-section-about">
            <h2 class="section-title-about reveal-about">Our Vision</h2>
            <div class="vision-statement-about reveal-about">
                <p>
                    To inspire intentional living by creating seamless experiences in learning, wellness, and leisure globally and locally.
                </p>
            </div>
        </section>

        <!-- Our Mission Section -->
        <section class="mission-section-about">
            <h2 class="section-title-about reveal-about">Our Mission</h2>
            <div class="mission-container-about">
                <!-- Mission Point 1 -->
                <div class="mission-item-about reveal-about">
                    <div class="mission-icon-about">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <p class="mission-text-about">
                        To empower students through trusted, transparent study abroad support.
                    </p>
                </div>
                <!-- Mission Point 2 -->
                <div class="mission-item-about reveal-about">
                    <div class="mission-icon-about">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <p class="mission-text-about">
                        To preserve and promote the ancient art of agarwood and oud through ethically sourced, locally crafted products.
                    </p>
                </div>
                <!-- Mission Point 3 -->
                <div class="mission-item-about reveal-about">
                    <div class="mission-icon-about">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="mission-text-about">
                        To design and deliver recreational spaces that foster movement, stillness, and connection.
                    </p>
                </div>
            </div>
        </section>

        <!-- Our Values Section -->
        <section class="values-section-about">
            <h2 class="section-title-about reveal-about cinzel-font">Our Values</h2>
            <div class="values-container-about">
                <!-- Value Item 1 -->
                <div class="value-item-about reveal-about">
                    <span class="value-number-about">1</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">Purpose-Driven Growth</h3>
                        <p class="value-description-about">
                            We believe that every step  whether academic, personal, or professional, should be guided with clarity, intention, and the will to grow meaningfully.
                        </p>
                    </div>
                </div>
                <!-- Value Item 2 -->
                <div class="value-item-about reveal-about">
                    <span class="value-number-about">2</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">People-First Approach</h3>
                        <p class="value-description-about">
                            Behind every service is a human experience. We operate with empathy, responsibility, and care for students, clients & our partners.
                        </p>
                    </div>
                </div>
                <!-- Value Item 3 -->
                <div class="value-item-about reveal-about">
                    <span class="value-number-about">3</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">Curated Experience</h3>
                        <p class="value-description-about">
                            We don’t offer more, we offer what matters. Precision, quality, and authenticity define the way we work, everything is designed, not just delivered!
                        </p>
                    </div>
                </div>
                <!-- Value Item 4 -->
                <div class="value-item-about reveal-about">
                    <span class="value-number-about">4</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">Grounded Globalism</h3>
                        <p class="value-description-about">
                            We operate globally but stay deeply connected to our local roots, valuing cross-cultural insight while never losing our own voice.
                        </p>
                    </div>
                </div>
                <!-- Value Item 5 -->
                <div class="value-item-about reveal-about">
                    <span class="value-number-about">5</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">Simplicity with Depth</h3>
                        <p class="value-description-about">
                            We believe the most powerful things are often the simplest, when crafted with care, intention, and depth of thought.
                        </p>
                    </div>
                </div>

                <!-- Value Item 6 -->
                      <div class="value-item-about reveal-about">
                    <span class="value-number-about">6</span>
                    <div class="value-content-about">
                        <h3 class="value-title-about">Integrity in Action</h3>
                        <p class="value-description-about">
                            We do what’s right, even when no one is watching. Every decision, every recommendation, and every interaction is built on honesty, transparency, and trust.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Observer for Scroll-Based Animations ---
            const revealElementsAbout = document.querySelectorAll('.reveal-about');

            const optionsAbout = {
                root: null, // viewport
                rootMargin: '0px',
                threshold: 0.2 
            };

            const observerAbout = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible-about');
                        observer.unobserve(entry.target); // Stop observing once it's visible
                    }
                });
            }, optionsAbout);

            revealElementsAbout.forEach(el => {
                observerAbout.observe(el);
            });
        });
    </script>

</body>
<?php
include 'footer.php';
?>