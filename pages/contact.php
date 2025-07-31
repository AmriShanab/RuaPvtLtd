<?php
include '../layouts/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | RUA International</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Segoe+UI:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
    

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
        <h1 class="cinzel-font">CONTACT US</h1>
        <p>We value every connection. Whether you're seeking guidance on studying abroad, exploring our oud collections, or inquiring about our recreational services, our team is here to assist you with clarity and care. Please feel free to get in touch — we look forward to hearing from you.</p>
    </div>
</div>
    <div class="contact-container">
        <!-- <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We value every connection. Whether you're seeking guidance on studying abroad, exploring our oud collections, or inquiring about our recreational services, our team is here to assist you with clarity and care. Please feel free to get in touch — we look forward to hearing from you.</p>
        </div> -->
        
        <div class="contact-form">
            <form id="contactForm" action="mailto:ceo@rua.international" method="post" enctype="text/plain">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <div class="phone-input-group">
                        <select id="country" name="country" class="form-control country-selector">
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+1">USA/Canada (+1)</option>
                            <option value="+44">UK (+44)</option>
                            <option value="+61">Australia (+61)</option>
                            <!-- Add more countries as needed -->
                        </select>
                        <input type="tel" id="phone" name="phone" class="form-control phone-input" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inquiry">Your Inquiry</label>
                    <select id="inquiry" name="inquiry" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Study Abroad">Study Abroad</option>
                        <option value="Oud Collections">Oud Collections</option>
                        <option value="Recreational Services">Recreational Services</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    Send Message
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </div>
        
        <div class="contact-info">
            <div class="info-section">
                <h3>Contact Details</h3>
                
                <div class="contact-detail">
                    <div class="contact-icon">📞</div>
                    <div>
                        <strong>Phone:</strong><br>
                        +94 70 777 0883
                    </div>
                </div>
                
                <div class="contact-detail">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <strong>Email:</strong><br>
                        ceo@rua.international
                    </div>
                </div>
                
                <div class="contact-detail">
                    <div class="contact-icon">📍</div>
                    <div>
                        <strong>Address:</strong><br>
                        No. 78, Havelock Road,<br>
                        Colombo 05, Sri Lanka
                    </div>
                </div>
            </div>
            
            <div class="info-section">
                <h3>Connect With Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link" title="WhatsApp">💬</a>
                    <a href="#" class="social-link" title="Email">📧</a>
                    <a href="#" class="social-link" title="Instagram">📸</a>
                    <a href="#" class="social-link" title="Facebook">👍</a>
                    <a href="#" class="social-link" title="LinkedIn">👔</a>
                    <a href="#" class="social-link" title="TikTok">🎵</a>
                </div>
            </div>
            
            <div class="info-section">
                <h3>Business Hours</h3>
                <div class="contact-detail">
                    <div class="contact-icon">🕒</div>
                    <div>
                        Monday - Friday: 9:00 AM - 5:00 PM<br>
                        Saturday: 10:00 AM - 2:00 PM<br>
                        Sunday: Closed
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const country = document.getElementById('country').value;
            const phone = document.getElementById('phone').value;
            const inquiry = document.getElementById('inquiry').value;
            const message = document.getElementById('message').value;
            
            // Construct mailto link
            const subject = `Contact Form: ${inquiry}`;
            const body = `Name: ${name}%0D%0AEmail: ${email}%0D%0APhone: ${country} ${phone}%0D%0A%0D%0AMessage:%0D%0A${message}`;
            
            window.location.href = `mailto:amrishanab@gmail.com?subject=${encodeURIComponent(subject)}&body=${body}`;
            
            // Optional: Show confirmation message
            alert('Thank you for your message! Your email client will now open.');
        });
    </script>
</body>
</html>