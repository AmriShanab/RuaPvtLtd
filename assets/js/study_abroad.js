// Country data
const countryData = {
  Australia: {
    title: "The Land Down Under!",
    description:
      "Australia is one of the most popular destinations for Sri Lankan students, offering worldclass universities, globally recognized degrees, and excellent career prospects. With programs in business, IT, engineering, health sciences, hospitality, and more, Australian qualifications are highly respected worldwide. Beyond academics, students enjoy a safe, multicultural society that values diversity and provides a strong Sri Lankan community for support—making Australia the ideal blend of quality education and rewarding lifestyle.",
    livingCost: 29710,
    tuitionRange: [20000, 50000],
    currency: "AUD",
    universities: [
      {
        name: "RMIT",
        logo: "assets/images/australia/rmit.png",
        desc: "Ranked among top 200 universities globally",
      },
      {
        name: "Deakin",
        logo: "assets/images/australia/deakin.png",
        desc: "Known for innovative teaching and research",
      },
      {
        name: "Victoria",
        logo: "assets/images/australia/victoria.png",
        desc: "Industry-connected education in Melbourne",
      },
      {
        name: "La Trobe",
        logo: "assets/images/australia/la_trobe.png",
        desc: "World-class research and teaching excellence",
      },
      {
        name: "Monash",
        logo: "assets/images/australia/monash.svg",
        desc: "One of Australia's leading research universities",
      },
      {
        name: "Southern Cross",
        logo: "assets/images/australia/southern_cross.png",
        desc: "Innovative learning with regional campuses",
      },
      {
        name: "Torrens",
        logo: "assets/images/australia/torrens.png",
        desc: "Australia's international university",
      },
      {
        name: "Uni of Canberra",
        logo: "assets/images/australia/uni_of_canberra.png",
        desc: "Practice-based education in the capital",
      },
      {
        name: "Swinburne Uni",
        logo: "assets/images/australia/swinburne.png",
        desc: "Technology, innovation and industry engagement",
      },
      {
        name: "Uni of Tasmania",
        logo: "assets/images/australia/tasmania.jpg",
        desc: "World-class research in a stunning location",
      },
      {
        name: "University of Newcastle",
        logo: "assets/images/australia/new_castle.png",
        desc: "Industry leaders with global impact",
      },
      {
        name: "Charles Sturt University",
        logo: "assets/images/australia/charles_sturt.png",
        desc: "Education for the professions since 1989",
      },
      {
        name: "ECU",
        logo: "assets/images/australia/ecu.jpg",
        desc: "World-class teaching and research",
      },
      {
        name: "Uni of Queensland",
        logo: "assets/images/australia/queensland.png",
        desc: "One of Australia's top research institutions",
      },
      {
        name: "Australian Catholic Uni",
        logo: "assets/images/australia/acu.png",
        desc: "Integrating teaching, research and community",
      },
      {
        name: "Murdoch Uni",
        logo: "assets/images/australia/murdoch.png",
        desc: "Free-thinking through innovative education",
      },
      {
        name: "Curtin Uni",
        logo: "assets/images/australia/curtin.jpg",
        desc: "A global university with industry connections",
      },
      {
        name: "Uni of Wollongong",
        logo: "assets/images/australia/wollongong.jpg",
        desc: "World-class education and research",
      },
    ],
    requirements: {
      undergraduate: "A/Ls with 3C passes",
      postgraduate: "Bachelor's degree with 65% or more",
      english: "IELTS or PTE",
      scholarships: "Various scholarships available for international students",
    },
    costBreakdown: {
      accommodation: 15000,
      food: 8000,
      transport: 3000,
      other: 3710,
    },
  },
  Canada: {
    title: "The Great White North!",
    description:
      "Canada is known for its high-quality education system, diverse culture, and welcoming environment for international students. Canadian degrees are recognized globally, and students can benefit from post-graduation work opportunities. With stunning natural landscapes and vibrant cities, Canada offers an exceptional study experience.",
    livingCost: 25000,
    tuitionRange: [15000, 40000],
    currency: "CAD",
    universities: [
      {
        name: "University of Toronto",
        logo: "assets/images/canada/toronto.png",
        desc: "Ranked among the top universities globally",
      },
      {
        name: "University of British Columbia",
        logo: "assets/images/canada/ubc.png",
        desc: "Beautiful campus with world-class programs",
      },
      {
        name: "McGill University",
        logo: "assets/images/canada/mcgill.png",
        desc: "Canada's Harvard with international reputation",
      },
    ],
    requirements: {
      undergraduate: "A/Ls with 3C passes",
      postgraduate: "Bachelor's degree with 70% or more",
      english: "IELTS or TOEFL",
      scholarships: "Limited scholarships available for international students",
    },
    costBreakdown: {
      accommodation: 12000,
      food: 6000,
      transport: 2000,
      other: 5000,
    },
  },
  "United Kingdom": {
    title: "The UK Experience!",
    description: `The United Kingdom is a leading destination for Sri Lankan students, offering world-class
education, globally recognised degrees, and centuries of academic excellence. Home to
some of the world's top universities, the UK provides programs across business,
engineering, medicine, law, arts, and more—qualifications that are highly valued by
employers worldwide. Beyond academics, students experience a vibrant, multicultural
environment with peers from over 180 countries, while a strong Sri Lankan community
ensures a welcoming home away from home.`,
    livingCost: 13347,
    tuitionRange: [10800, 30000],
    currency: "GBP",
    universities: [
      {
        name: "University of East London (UEL)",
        logo: "assets/images/uk/uel.png",
        desc: "Career-focused education in London",
      },
      {
        name: "Coventry University",
        logo: "assets/images/uk/coventry.png",
        desc: "Modern university with industry links",
      },
      {
        name: "University of Bedfordshire",
        logo: "assets/images/uk/beds.png",
        desc: "Supportive environment for international students",
      },
      {
        name: "University of Sunderland",
        logo: "assets/images/uk/sunderland.png",
        desc: "Practical learning with global opportunities",
      },
      {
        name: "Teesside University",
        logo: "assets/images/uk/teesside.png",
        desc: "Known for digital innovation and research",
      },
      {
        name: "Middlesex University London",
        logo: "assets/images/uk/middlesex.png",
        desc: "Diverse community with a global outlook",
      },
      {
        name: "University of Hertfordshire",
        logo: "assets/images/uk/hertfordshire.png",
        desc: "Strong links with business and industry",
      },
      {
        name: "University of Greenwich",
        logo: "assets/images/uk/greenwich.png",
        desc: "Beautiful riverside campus with rich history",
      },
      {
        name: "University of South Wales",
        logo: "assets/images/uk/southwales.png",
        desc: "Career-focused courses and strong industry ties",
      },
      {
        name: "London Metropolitan University",
        logo: "assets/images/uk/londonmet.png",
        desc: "Supportive teaching and real-world learning",
      },
      {
        name: "University of West London (UWL)",
        logo: "assets/images/uk/uwl.png",
        desc: "Known as 'the career university'",
      },
      {
        name: "Staffordshire University",
        logo: "assets/images/uk/staffordshire.png",
        desc: "Leading in digital technologies and esports",
      },
      {
        name: "Birmingham City University (BCU)",
        logo: "assets/images/uk/bcu.png",
        desc: "Practice-based learning in the heart of Birmingham",
      },
      {
        name: "De Montfort University (DMU)",
        logo: "assets/images/uk/dmu.png",
        desc: "Creative and innovative approach to teaching",
      },
      {
        name: "University of Wolverhampton",
        logo: "assets/images/uk/wolverhampton.png",
        desc: "Known for professional education and research",
      },
    ],

    requirements: {
      undergraduate: "A/Ls with 3C passes",
      postgraduate: "PG - 55% or more",
      english: "IELTS or PTE",
      scholarships: "Various scholarships and bursaries available",
    },
    costBreakdown: {
      accommodation: 7200,
      food: 3000,
      transport: 1047,
      other: 2100,
    },
  },
  "United States": {
    title: "Why USA?",
    description: `The United States is one of the most popular study destinations for Sri Lankan students,
offering world-class education, globally recognised degrees, and limitless opportunities.
With over 4,000 universities and colleges, the USA provides flexible study options,
cutting-edge research, and access to prestigious institutions. American qualifications are
highly respected worldwide, giving graduates a strong career advantage across fields like
business, IT, engineering, medicine, law, and the arts. As a Sri Lankan student, you'll also
thrive in the USA's diverse and welcoming culture, gaining both academic excellence and
enriching global experiences.`,
    livingCost: 15000,
    tuitionRange: [25000, 45000],
    currency: "USD",
    universities: [
      {
        name: "University of South Florida",
        logo: "assets/images/usa/usf.avif",
        desc: "Research university with diverse programs",
      },
      {
        name: "Illinois State University",
        logo: "assets/images/usa/illinois.svg",
        desc: "Comprehensive university with strong academics",
      },
      {
        name: "Wichita State University",
        logo: "assets/images/usa/wichitha.jpg",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Minnesota State University",
        logo: "assets/images/usa/minnesota.png",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Kent State University",
        logo: "assets/images/usa/kent.png",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Webster University",
        logo: "assets/images/usa/webster_university.png",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Concordia University",
        logo: "assets/images/usa/concordia-university-logo.png",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Eastern Michigan University",
        logo: "assets/images/usa/eastern_michigan.png",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Troy University",
        logo: "assets/images/usa/troy.webp",
        desc: "Innovative programs with industry connections",
      },
      {
        name: "Texas A&M University",
        logo: "assets/images/usa/texas.png",
        desc: "Innovative programs with industry connections",
      },
    ],
    requirements: {
      undergraduate: "A/Ls with 3B passes and SAT/ACT",
      postgraduate: "Bachelor's degree with 65% or more and GRE/GMAT",
      english: "TOEFL or IELTS",
      scholarships: "Merit-based and need-based scholarships available",
    },
    costBreakdown: {
      accommodation: 9000,
      food: 3500,
      transport: 1000,
      other: 1500,
    },
  },
  "New Zealand": {
    title: "New Zealand at a Glance!",
    description:
      "New Zealand is a fast-growing choice for Sri Lankan Students, Offering world-class universities, globally recognized degrees, and a safe, welcoming environment. With strong programs in business, IT, engineering, health sciences, hospitality, and more, New Zealand qualifications are highly respected worldwide. Beyond academics, students enjoy a high quality of life in a beautiful, multicultural society that values diversity and provides a strong Sri Lankan community for support—making New Zealand the ideal blend of quality education and rewarding lifestyle.",
    livingCost: 20000,
    tuitionRange: [20000, 35000],
    currency: "NZD",
    universities: [
      {
        name: "University of Auckland",
        logo: "assets/images/nz/auckland.png",
        desc: "New Zealand's leading university",
      },
      {
        name: "University of Canterbury",
        logo: "assets/images/nz/canterbury.png",
        desc: "Engineering and science programs excellence",
      },
      {
        name: "University of Otago",
        logo: "assets/images/nz/otago.png",
        desc: "Health sciences and research focus",
      },
      {
        name: "Massey University",
        logo: "assets/images/nz/massey.png",
        desc: "Innovative research and distance learning leader",
      },
      {
        name: "University of Waikato",
        logo: "assets/images/nz/waikato.png",
        desc: "Strong in management, education, and environmental sciences",
      },
      {
        name: "Auckland University of Technology",
        logo: "assets/images/nz/aut.png",
        desc: "Focus on applied learning and industry connections",
      },
      {
        name: "Toi Ohomai Institute of Technology",
        logo: "assets/images/nz/toiohomai.png",
        desc: "Practical vocational and technical education",
      },
      {
        name: "Le Cordon Bleu",
        logo: "assets/images/nz/lecordonbleu.png",
        desc: "World-renowned culinary and hospitality school",
      },
      {
        name: "Lincoln University",
        logo: "assets/images/nz/lincoln.png",
        desc: "Specialist in agriculture, land, and environmental studies",
      },
      {
        name: "Southern Institute of Technology",
        logo: "assets/images/nz/sit.png",
        desc: "Affordable education with zero tuition fees option",
      },
    ],
    requirements: {
      undergraduate: "A/Ls with 3C passes",
      postgraduate: "Bachelor's degree with 65% or more",
      english: "IELTS or PTE",
      scholarships: "Limited scholarships for international students",
    },
    costBreakdown: {
      accommodation: 10000,
      food: 5000,
      transport: 2000,
      other: 3000,
    },
  },
  "Dubai, UAE": {
    title: "UAE Awaits....",
    description: `UAE is a fast-growing study destination for Sri Lankan students, offering world-class
education in a safe, modern, and multicultural environment. Known as the education hub
of the Middle East, it hosts globally recognised universities and branch campuses from
the UK, USA, and Australia, giving you an international qualification closer to home. With
programs in business, IT, engineering, hospitality, and health sciences, UAE degrees are
highly respected worldwide. Beyond academics, students thrive in a vibrant, diverse
society with over 200 nationalities, while a strong Sri Lankan community ensures a
welcoming home away from home.`,
    livingCost: 4000,
    tuitionRange: [50000, 100000],
    currency: "Dirhams (AED)",
    universities: [
      {
        name: "Middlesex University Dubai",
        logo: "assets/images/uae/middlesex.png",
        desc: "UK education in the heart of Dubai",
      },
      {
        name: "University of Wollongong Dubai",
        logo: "assets/images/uae/wollongong.png",
        desc: "Australian quality education in Dubai",
      },
      {
        name: "De Montfort University Dubai",
        logo: "assets/images/uae/demontfort.png",
        desc: "British university offering global career opportunities",
      },
      {
        name: "Curtin University Dubai",
        logo: "assets/images/uae/curtin.png",
        desc: "Australian university with Dubai campus",
      },
      {
        name: "Heriot-Watt University Dubai",
        logo: "assets/images/uae/heriotwatt.png",
        desc: "Scottish university with focus on business, engineering, and design",
      },
    ],
    requirements: {
      undergraduate: "A/Ls with 3C passes",
      postgraduate: "Bachelor's degree with 55% or more",
      english: "IELTS or PTE",
      scholarships: "Limited scholarships for international students",
    },
    costBreakdown: {
      accommodation: 1500,
      food: 500,
      transport: 500,
      other: 1500,
    },
  },
};

// Global chart instances
let livingCostChartInstance = null;
let tuitionFeeChartInstance = null;

// Initialize the page
document.addEventListener("DOMContentLoaded", function () {
  // Get country parameter from URL
  const urlParams = new URLSearchParams(window.location.search);
  let country = urlParams.get("destination");

  // Default to Australia if no country specified or invalid country
  if (!country || !countryData[country]) {
    country = "Australia";
  }

  // Set up navigation controls
  const nextBtn = document.getElementById("next-btn");
  const prevBtn = document.getElementById("prev-btn");

  nextBtn.addEventListener("click", () => {
    const container = document.getElementById("universities-container");
    container.scrollBy({ left: 300, behavior: "smooth" });
  });

  prevBtn.addEventListener("click", () => {
    const container = document.getElementById("universities-container");
    container.scrollBy({ left: -300, behavior: "smooth" });
  });

  // Update content with the selected country
  updateContent(country);
});

// Update page content based on country
function updateContent(country) {
  const data = countryData[country];

  // Update headings and descriptions
  document.getElementById("main-heading").textContent = data.title;
  document.getElementById("sub-heading").textContent = `Study in ${country}`;
  document.getElementById("country-description").textContent = data.description;

  // Update cost headings
  document.getElementById(
    "living-cost-title"
  ).textContent = `Living Cost Per Year (${data.currency})`;
  document.getElementById(
    "tuition-title"
  ).textContent = `Tuition Fee Range (${data.currency})`;

  // Update universities
  const universitiesContainer = document.getElementById(
    "universities-container"
  );
  universitiesContainer.innerHTML = "";

  data.universities.forEach((uni) => {
    const uniCard = document.createElement("div");
    uniCard.className = "uni-card";
    uniCard.innerHTML = `
            <div class="logo-container">
                <img src="${uni.logo}" alt="${uni.name} logo" class="uni-logo">
            </div>
            <h3 class="uni-name">${uni.name}</h3>
            <p class="uni-desc">${uni.desc}</p>
        `;
    universitiesContainer.appendChild(uniCard);
  });

  // Update university status text
  document.getElementById(
    "uni-status"
  ).textContent = `Showing ${data.universities.length} universities in ${country}`;

  // Update requirements
  document.getElementById("ug-requirements").innerHTML = `
        <li>${data.requirements.undergraduate}</li>
        <li>English Proficiency: ${data.requirements.english}</li>
    `;

  document.getElementById("pg-requirements").innerHTML = `
        <li>${data.requirements.postgraduate}</li>
        <li>English Proficiency: ${data.requirements.english}</li>
    `;

  document.getElementById("scholarships").innerHTML = `
        <li>${data.requirements.scholarships}</li>
    `;

  // Update charts
  updateCharts(data);
}

// Update charts with country data
function updateCharts(data) {
  // Living Cost Chart
  const livingCostCtx = document
    .getElementById("livingCostChart")
    .getContext("2d");

  if (livingCostChartInstance) {
    livingCostChartInstance.destroy();
  }

  livingCostChartInstance = new Chart(livingCostCtx, {
    type: "pie",
    data: {
      labels: ["Accommodation", "Food", "Transport", "Other Expenses"],
      datasets: [
        {
          data: [
            data.costBreakdown.accommodation,
            data.costBreakdown.food,
            data.costBreakdown.transport,
            data.costBreakdown.other,
          ],
          backgroundColor: ["#220000", "#8B0000", "#A52A2A", "#ccc0b2"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "bottom",
        },
        tooltip: {
          callbacks: {
            label: function (context) {
              return (
                context.label +
                ": " +
                data.currency +
                " " +
                context.raw.toLocaleString()
              );
            },
          },
        },
      },
    },
  });

  // Tuition Fee Chart
  const tuitionFeeCtx = document
    .getElementById("tuitionFeeChart")
    .getContext("2d");

  if (tuitionFeeChartInstance) {
    tuitionFeeChartInstance.destroy();
  }

  tuitionFeeChartInstance = new Chart(tuitionFeeCtx, {
    type: "bar",
    data: {
      labels: ["Minimum", "Average", "Maximum"],
      datasets: [
        {
          label: data.currency,
          data: [
            data.tuitionRange[0],
            (data.tuitionRange[0] + data.tuitionRange[1]) / 2,
            data.tuitionRange[1],
          ],
          backgroundColor: "#220000",
          borderColor: "#220000",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: `${data.currency}`,
          },
        },
      },
      plugins: {
        tooltip: {
          callbacks: {
            label: function (context) {
              return data.currency + " " + context.raw.toLocaleString();
            },
          },
        },
      },
    },
  });
}
