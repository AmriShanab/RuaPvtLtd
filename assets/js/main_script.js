document.addEventListener("DOMContentLoaded", () => {
  // Elements
  const navbarContainer = document.querySelector(".navbar-container");
  const navbarToggle = document.getElementById("navbarToggle");
  const navbarLinks = document.getElementById("navbarLinks");
  const navAnchors = navbarLinks?.querySelectorAll("a") || [];
  const loaderWrapper = document.getElementById("loaderWrapper");
  const loaderLogoImg = document.querySelector(".loader-logo-img");

  // Responsive helper
  const isMobileView = () => window.innerWidth <= 768;

  // Loader functionality
  const initLoader = () => {
    if (!loaderWrapper) return;
    document.body.style.overflow = "hidden";

    setTimeout(() => {
      if (loaderLogoImg) loaderWrapper.classList.add("loading-done");
    }, 500);

    setTimeout(() => {
      loaderWrapper.classList.add("hidden");
      document.body.style.overflow = "";
      setTimeout(() => loaderWrapper.remove(), 1000);
    }, 3000);
  };

  // Navbar scroll effect
  const handleScroll = () => {
    const threshold = isMobileView() ? 30 : 50;
    navbarContainer?.classList.toggle("scrolled", window.scrollY > threshold);
  };

  // Mobile menu toggle
  const toggleMobileMenu = () => {
    if (!navbarLinks || !navbarToggle) return;
    navbarLinks.classList.toggle("active");
    document.body.style.overflow = navbarLinks.classList.contains("active")
      ? "hidden"
      : "";

    const icon = navbarToggle.querySelector("i");
    if (icon) {
      icon.classList.toggle("fa-bars");
      icon.classList.toggle("fa-times");
    }
  };

  // Event handlers
  const setupEventListeners = () => {
    window.addEventListener("scroll", handleScroll);
    navbarToggle?.addEventListener("click", toggleMobileMenu);

    navAnchors.forEach((link) => {
      link.addEventListener("click", () => {
        if (isMobileView() && navbarLinks.classList.contains("active")) {
          toggleMobileMenu();
        }
      });
    });

    // Throttled resize handler
    let resizeTimeout;
    window.addEventListener("resize", () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        if (!isMobileView() && navbarLinks.classList.contains("active")) {
          toggleMobileMenu();
        }
        handleScroll();
      }, 200);
    });
  };

  // Blur on scroll (IntersectionObserver)
  const setupAutoBlur = () => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          } else {
            entry.target.classList.remove("visible");
          }
        });
      },
      {
        threshold: 0.4, // More natural reveal – try 0.5 for slower
      }
    );

    document
      .querySelectorAll(".autoBlur")
      .forEach((el) => observer.observe(el));
  };

  // Initialize all
  initLoader();
  setupEventListeners();
  handleScroll();
  setupAutoBlur();
});
