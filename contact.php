<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | RUA International</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --maroon: #220000;
            --beige: #ccc0b2;
            --offwhite: #f8f9f7;
            --gold: #D4AF37;
            --darkgold: #c89f28;
        }
    </style>
</head>

<body class="contact-page-body">
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
    <section class="contact-hero-section">
        <div class="contact-main-container">
            <div class="contact-intro-section">
                <h1 class="contact-main-heading">Let's Connect</h1>
                <p class="contact-intro-text">We value every connection. Whether you're seeking guidance on studying abroad, exploring our oud collections, or inquiring about our recreational services, our team is here to assist you with clarity and care. Please feel free to get in touch — we look forward to hearing from you.</p>

                <div class="contact-method-item">
                    <div class="contact-method-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-method-text">
                        <strong>Call Us</strong>
                        <p style="text-align: center">+94 70 777 0883</p>
                    </div>
                </div>

                <div class="contact-method-item">
                    <div class="contact-method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-method-text">
                        <strong>Email Us</strong>
                        <p>ceo@rua.international</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <form id="contactForm">
                    <div class="contact-form-group">
                        <input type="text" id="contact-name" class="contact-form-input" placeholder=" " required>
                        <label for="contact-name" class="contact-form-label">Full Name</label>
                    </div>

                    <div class="contact-form-group">
                        <input type="email" id="contact-email" class="contact-form-input" placeholder=" " required>
                        <label for="contact-email" class="contact-form-label">Email Address</label>
                    </div>

                    <div class="contact-form-group">
                        <div class="contact-phone-group">
                            <select id="contact-country" class="contact-form-input contact-country-select">
                                <option value="+94">🇱🇰 +94</option>
                                <option value="+91">🇮🇳 +91</option>
                                <option value="+1">🇺🇸 +1</option>
                                <option value="+44">🇬🇧 +44</option>
                                <option value="+61">🇦🇺 +61</option>
                            </select>
                            <input type="tel" id="contact-phone" class="contact-form-input" placeholder=" " required style="flex: 1;">
                            <label for="contact-phone" class="contact-form-label" style="left: 120px;">Phone Number</label>
                        </div>
                    </div>

                    <div class="contact-form-group">
                        <select id="contact-inquiry" class="contact-form-input" required>
                            <option value="" disabled selected></option>
                            <option value="Study Abroad">Study Abroad</option>
                            <option value="Oud Collections">Oud Collections</option>
                            <option value="Recreational Services">Recreational Services</option>
                            <option value="Other">Other Inquiry</option>
                        </select>
                        <label for="contact-inquiry" class="contact-form-label">Inquiry Type</label>
                    </div>

                    <div class="contact-form-group">
                        <textarea id="contact-message" class="contact-form-input" rows="4" placeholder=" " required></textarea>
                        <label for="contact-message" class="contact-form-label">Your Message</label>
                    </div>

                    <button type="submit" class="contact-submit-btn">
                        Send Message
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="contact-details-section">
        <div class="contact-detail-card">
            <h3 class="contact-detail-heading">Visit Us</h3>
            <div class="contact-method-item">
                <div class="contact-method-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <p>No. 252 A, Galle Road,<br>Colombo 04, Sri Lanka</p>
                </div>
            </div>
        </div>

        <div class="contact-detail-card">
            <h3 class="contact-detail-heading">Social Media</h3>
            <div class="contact-social-links">
                <a href="https://wa.me/94707770883" class="contact-social-link" title="WhatsApp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/rua_eduventure?igsh=dGJkb2hnc2dkejI%3D&utm_source=qr" class="contact-social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/1Mtw2nNSu8/?mibextid=wwXIfr" class="contact-social-link" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="www.linkedin.com/in/rua-pvt-ltd-08767437a6" class="contact-social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <!-- <a href="#" class="contact-social-link" title="TikTok"><i class="fab fa-tiktok"></i></a> -->
            </div>
        </div>

        <div class="contact-detail-card">
            <h3 class="contact-detail-heading">Business Hours</h3>
            <div class="contact-method-item">
                <div class="contact-method-icon">
                    <i class="far fa-clock"></i>
                </div>
                <div>
                    <p>Monday - Sunday: By Appointment Only</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission handling with animation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Add submission animation
            const form = e.target;
            form.style.transform = 'translateY(10px)';
            form.style.opacity = '0.8';
            form.style.transition = 'all 0.3s ease';

            // Simulate processing
            setTimeout(() => {
                // Construct mailto link
                const name = document.getElementById('contact-name').value;
                const email = document.getElementById('contact-email').value;
                const country = document.getElementById('contact-country').value;
                const phone = document.getElementById('contact-phone').value;
                const inquiry = document.getElementById('contact-inquiry').value;
                const message = document.getElementById('contact-message').value;

                const subject = `Contact Form: ${inquiry}`;
                const body = `Name: ${name}%0D%0AEmail: ${email}%0D%0APhone: ${country} ${phone}%0D%0A%0D%0AMessage:%0D%0A${message}`;

                window.location.href = `mailto:ceo@rua.international?subject=${encodeURIComponent(subject)}&body=${body}`;

                // Reset form animation
                form.style.transform = 'translateY(0)';
                form.style.opacity = '1';
            }, 500);
        });

        // Animate form inputs on scroll
        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.contact-form-group, .contact-detail-card').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = `all 0.5s ease ${index * 0.1}s`;
            contactObserver.observe(el);
        });
    </script>
</body>

</html>

<?php
include 'footer.php';
?>