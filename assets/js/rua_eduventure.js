// Sample JavaScript for interactive elements
document.addEventListener('DOMContentLoaded', function() {
  // Initialize interactive globe
  const countries = [
    { name: "Australia", top: "65%", left: "85%", universities: ["RMIT", "Deakin Uni", "La Trobe Uni"] },
    { name: "UK", top: "35%", left: "48%", universities: ["MDX", "Coventry Uni"] },
    // Add other countries...
  ];

  countries.forEach(country => {
    const marker = document.createElement('div');
    marker.className = 'country-marker';
    marker.style.top = country.top;
    marker.style.left = country.left;
    marker.dataset.country = country.name;
    document.getElementById('interactiveGlobe').appendChild(marker);
    
    marker.addEventListener('click', () => {
      document.getElementById('destinationInfo').innerHTML = `
        <h3 class="cinzel-font">${country.name}</h3>
        <p>Top Partner Universities:</p>
        <ul>${country.universities.map(uni => `<li>${uni}</li>`).join('')}</ul>
      `;
    });
  });

  // Initialize university grid
  const universities = ["RMIT", "MDX", "Deakin Uni"]; // Add all universities
  const grid = document.querySelector('.university-grid');
  
  universities.forEach(uni => {
    const card = document.createElement('div');
    card.className = 'university-card';
    card.innerHTML = `<h4>${uni}</h4><p>Partner since ${Math.floor(Math.random() * 10) + 2013}</p>`;
    grid.appendChild(card);
  });

  // Initialize testimonial carousel
  const testimonials = [
    { name: "Sarah K.", text: "Rua made my UK dream possible..." },
    { name: "Mohammed K.", text: "Rua made my UK dream possible..." },
    { name: "Sarah K.", text: "Rua made my UK dream possible..." },
    { name: "Mohammed K.", text: "Rua made my UK dream possible..." },
    { name: "Sarah K.", text: "Rua made my UK dream possible..." },
    // Add more testimonials...
  ];
  
  // Carousel implementation would go here...
});