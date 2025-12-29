// ===== CAROUSEL SLIDE GALERIE (ACCORDION) =====
document.addEventListener("DOMContentLoaded", function () {
  initServiceCarousel();
});

// ===== SERVICE CAROUSEL =====
function initServiceCarousel() {
  const carousel = document.querySelector(".service-panels");
  if (!carousel) return;

  const panels = carousel.querySelectorAll(".service-panel");
  if (panels.length <= 3) return; // No need for carousel if 3 or fewer items

  // Check if we're on mobile
  const isMobile = () => window.innerWidth <= 768;

  // Don't show arrows on mobile
  if (isMobile()) return;

  let scrollPosition = 0;
  const panelWidth = 300; // Approximate width
  const gap = 30;
  const step = panelWidth + gap;

  // Create navigation buttons
  const prevBtn = document.createElement("button");
  prevBtn.className = "carousel-btn carousel-prev";
  prevBtn.innerHTML = "&#10094;";
  prevBtn.setAttribute("aria-label", "Previous services");

  const nextBtn = document.createElement("button");
  nextBtn.className = "carousel-btn carousel-next";
  nextBtn.innerHTML = "&#10095;";
  nextBtn.setAttribute("aria-label", "Next services");

  // Insert buttons
  carousel.parentElement.style.position = "relative";
  carousel.parentElement.appendChild(prevBtn);
  carousel.parentElement.appendChild(nextBtn);

  // Scroll functionality
  prevBtn.addEventListener("click", () => {
    scrollPosition = Math.max(0, scrollPosition - step);
    carousel.scrollLeft = scrollPosition;
  });

  nextBtn.addEventListener("click", () => {
    const maxScroll = carousel.scrollWidth - carousel.clientWidth;
    scrollPosition = Math.min(maxScroll, scrollPosition + step);
    carousel.scrollLeft = scrollPosition;
  });

  // Smooth scroll
  carousel.style.scrollBehavior = "smooth";

  // Mobile swipe support
  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  carousel.addEventListener("touchend", (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });

  function handleSwipe() {
    const swipeThreshold = 50;
    if (touchStartX - touchEndX > swipeThreshold) {
      // Swiped left
      nextBtn.click();
    } else if (touchEndX - touchStartX > swipeThreshold) {
      // Swiped right
      prevBtn.click();
    }
  }

  // Reinitialize carousel on window resize
  window.addEventListener("resize", () => {
    if (isMobile() && prevBtn.parentElement) {
      prevBtn.remove();
      nextBtn.remove();
    }
  });
}

// ===== SMOOTH SCROLL POUR LES LIENS INTERNES =====
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const href = this.getAttribute("href");
    if (href !== "#" && href !== "") {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    }
  });
});

// ===== ACTIVE NAVIGATION LINK =====
function updateActiveNav() {
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll("nav li a");

  window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (pageYOffset >= sectionTop - 200) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active");
      }
    });
  });
}
updateActiveNav();

// ===== FORM SUBMISSION =====
document.querySelectorAll("form").forEach((form) => {
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const data = Object.fromEntries(formData);

    // Log form data (replace with actual API call)
    console.log("Form submitted:", data);

    // Show success message
    showNotification("Merci ! Votre demande a été reçue.", "success");

    // Reset form
    this.reset();
  });
});

// ===== NOTIFICATION SYSTEM =====
function showNotification(message, type = "info") {
  const notification = document.createElement("div");
  notification.className = `notification notification-${type}`;
  notification.textContent = message;

  notification.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 1rem 1.5rem;
    background-color: ${type === "success" ? "#28a745" : "#073cbc"};
    color: white;
    border-radius: 5px;
    z-index: 10000;
    animation: slideIn 0.3s ease-in-out;
  `;

  document.body.appendChild(notification);

  setTimeout(() => {
    notification.style.animation = "slideOut 0.3s ease-in-out";
    setTimeout(() => notification.remove(), 300);
  }, 3000);
}
