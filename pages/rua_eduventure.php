<?php
include '../layouts/navbar.php';
?>

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
        <h1 class="cinzel-font">RUA EDUVENTURE</h1>
        <p>Discover Our World of Education Packages</p>
    </div>
</div>

<?php
include '../packages/world_map.php';
?>

<div class="partner-universities-section">
    <h2 class="section-title">Our Top Partner Universities</h2>
    <div class="universities-grid">
        <!-- University items will be added here -->
    </div>
</div>

<div class="testimonials-section">
    <div class="testimonial-curve"></div>
    <h2 class="section-title">Student Experiences</h2>
    <p class="section-subtitle">Hear from our global scholars</p>
    
    <div class="testimonials-container">
        <!-- Testimonial cards will be added here -->
    </div>
    
    <div class="google-badge">
        <img src="../assets/images/google-review-badge.png" alt="Google Reviews" width="150">
        <span>4.9/5 from 287+ reviews</span>
    </div>
</div>

<div class="alerts-section">
    <div class="section-header">
        <h2 class="section-title">Visa & Immigration Alerts</h2>
        <p class="section-subtitle">Latest updates for your study destination</p>
    </div>
    
    <div class="alert-cards-container">
        <!-- UK Alert -->
        <div class="alert-card autoBlur" data-country="uk">
            <div class="country-flag">
                <img src="https://flagcdn.com/w80/gb.png" alt="UK Flag" width="40">
            </div>
            <h3 class="country-name">UK</h3>
            <div class="alert-content">
                <p>Student visa requirements and application process for the UK</p>
                <div class="alert-badge">Updated June 2024</div>
            </div>
            <a href="https://www.gov.uk/student-visa" target="_blank" class="alert-button">
                View Requirements
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        
        <!-- Australia Alert -->
        <div class="alert-card autoBlur" data-country="australia">
            <div class="country-flag">
                <img src="https://flagcdn.com/w80/au.png" alt="Australia Flag" width="40">
            </div>
            <h3 class="country-name">Australia</h3>
            <div class="alert-content">
                <p>Student visa (subclass 500) information and processing times</p>
                <div class="alert-badge">Updated May 2024</div>
            </div>
            <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-500" target="_blank" class="alert-button">
                View Requirements
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        
        <!-- New Zealand Alert -->
        <div class="alert-card autoBlur" data-country="newzealand">
            <div class="country-flag">
                <img src="https://flagcdn.com/w80/nz.png" alt="New Zealand Flag" width="40">
            </div>
            <h3 class="country-name">New Zealand</h3>
            <div class="alert-content">
                <p>Student visa application process and required documents</p>
                <div class="alert-badge">Updated April 2024</div>
            </div>
            <a href="https://shorturl.at/kZxkc" target="_blank" class="alert-button">
                View Requirements
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        
        <!-- USA Alert -->
        <div class="alert-card autoBlur" data-country="usa">
            <div class="country-flag">
                <img src="https://flagcdn.com/w80/us.png" alt="USA Flag" width="40">
            </div>
            <h3 class="country-name">United States</h3>
            <div class="alert-content">
                <p>F-1 student visa process and interview preparation</p>
                <div class="alert-badge">Updated June 2024</div>
            </div>
            <a href="https://travel.state.gov/content/travel/en/us-visas/study/student-visa.html" target="_blank" class="alert-button">
                View Requirements
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
    
    <div class="alerts-footer">
        <p>For personalized visa assistance, contact our immigration experts</p>
        <a href="/contact" class="consultation-button">Book Free Consultation</a>
    </div>
</div>

<?php
    include '../layouts/footer.php';
?>

<script src="../assets/js/rua_eduventure.js"></script>
<script>
    const universities = [
        "RMIT University",
        "Middlesex University (MDX)",
        "Deakin University",
        "La Trobe University",
        "University of Tasmania",
        "University of New South Wales",
        "Coventry University",
        "Heriot-Watt University",
        "University of Law",
        "Anglia Ruskin University",
        "Teeside University",
        "Auckland University of Technology",
        "University of Waikato",
        "ICN Business School",
        "Emirates Maritime Academy (EMA)",
        "Curtin University Dubai",
        "University of Hertfordshire"
    ];

    const universityLogos = {
        "RMIT University": "../assets/images/logos/rmit-logo.png",
        "Middlesex University (MDX)": "../assets/images/logos/mdx-logo.png",
        "Deakin University": "../assets/images/logos/deakin-logo.png",
        "La Trobe University": "../assets/images/logos/latrobe-logo.png",
        "University of Tasmania": "../assets/images/logos/tasmania-logo.png",
        "University of New South Wales": "../assets/images/logos/unsw-logo.png",
        "Coventry University": "../assets/images/logos/coventry-logo.png",
        "Heriot-Watt University": "../assets/images/logos/heriotwatt-logo.png",
        "University of Law": "../assets/images/logos/law-logo.png",
        "Anglia Ruskin University": "../assets/images/logos/anglia-logo.png",
        "Teeside University": "../assets/images/logos/teeside-logo.png",
        "Auckland University of Technology": "../assets/images/logos/aut-logo.png",
        "University of Waikato": "../assets/images/logos/waikato-logo.png",
        "ICN Business School": "../assets/images/logos/icn-logo.png",
        "Emirates Maritime Academy (EMA)": "../assets/images/logos/ema-logo.png",
        "Curtin University Dubai": "../assets/images/logos/curtin-logo.png",
        "University of Hertfordshire": "../assets/images/logos/hertfordshire-logo.png"
    };

    const testimonials = [{
            name: "Sarah Johnson",
            avatar: "https://randomuser.me/api/portraits/women/44.jpg",
            program: "Business at RMIT University",
            rating: 5,
            text: "The support I received from the study abroad team was exceptional. They helped me transition smoothly to life in Melbourne and the academic quality at RMIT exceeded my expectations."
        },
        {
            name: "Michael Chen",
            avatar: "https://randomuser.me/api/portraits/men/32.jpg",
            program: "Engineering at Deakin University",
            rating: 5,
            text: "Studying in Australia through this program was life-changing. The hands-on learning approach and industry connections gave me a huge advantage in my career."
        },
        {
            name: "Priya Patel",
            avatar: "https://randomuser.me/api/portraits/women/68.jpg",
            program: "Law at University of Hertfordshire",
            rating: 4,
            text: "The cultural immersion experience was invaluable. I've grown both academically and personally, making friends from all over the world."
        },
        {
            name: "David Müller",
            avatar: "https://randomuser.me/api/portraits/men/75.jpg",
            program: "Maritime Studies at EMA",
            rating: 5,
            text: "The faculty at EMA are industry leaders who provided real-world insights. Dubai's location offered unique opportunities in the maritime sector."
        }
    ];

    const gridContainer = document.querySelector('.universities-grid');

    universities.forEach(university => {
        const card = document.createElement('div');
        card.className = 'university-card autoBlur';

        // Check if we have a logo for this university
        const logoUrl = universityLogos[university];

        card.innerHTML = `
        <div class="university-logo">
            ${logoUrl 
                ? `<img src="${logoUrl}" alt="${university} logo">` 
                : `<span>${university.split(' ').map(w => w[0]).join('').substring(0,2).toUpperCase()}</span>`
            }
        </div>
        <p class="university-name">${university}</p>
    `;

        gridContainer.appendChild(card);
    });

    const container = document.querySelector('.testimonials-container');

    testimonials.forEach((testimonial, index) => {
        const card = document.createElement('div');
        card.className = 'testimonial-card autoBlur';

        // Create star rating
        const stars = '★'.repeat(testimonial.rating) + '☆'.repeat(5 - testimonial.rating);

        card.innerHTML = `
        <div class="testimonial-header">
            <img src="${testimonial.avatar}" alt="${testimonial.name}" class="testimonial-avatar">
            <div>
                <h3 class="testimonial-author">${testimonial.name}</h3>
                <div class="testimonial-meta">
                    <div>${stars}</div>
                    <div>${testimonial.program}</div>
                </div>
            </div>
        </div>
        <p class="testimonial-text">${testimonial.text}</p>
    `;

        container.appendChild(card);
    });

    // Create floating bubbles
    for (let i = 0; i < 5; i++) {
        const bubble = document.createElement('div');
        bubble.className = 'testimonial-bubble';
        document.querySelector('.testimonials-section').appendChild(bubble);
    }
</script>