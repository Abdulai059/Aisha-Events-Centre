// --------------------------------------
// NAVBAR INITIALIZATION
// --------------------------------------

document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.getElementById("siteNavbar");
  const navMenu = document.getElementById("navMenu");
  const toggleButton = document.getElementById("mobileToggle");
  const overlay = document.getElementById("menuOverlay");

  if (!navbar || !navMenu || !toggleButton || !overlay) return;

  const mobileBreakpoint = 850;
  const dropdowns = document.querySelectorAll(".nav-item.dropdown");

  // --------------------------------------
  // NAVBAR SCROLL EFFECT
  // --------------------------------------

  function handleScroll() {
    if (!navbar.classList.contains("navbar-home")) return;

    navbar.classList.toggle("scrolled", window.scrollY > 50);
  }

  let scrollScheduled = false;

  window.addEventListener("scroll", () => {
    if (!scrollScheduled) {
      window.requestAnimationFrame(() => {
        handleScroll();
        scrollScheduled = false;
      });

      scrollScheduled = true;
    }
  });

  handleScroll();

  // --------------------------------------
  // MOBILE MENU
  // --------------------------------------

  function openMobileMenu() {
    navMenu.classList.add("active");
    toggleButton.classList.add("active");
    overlay.classList.add("active");

    toggleButton.setAttribute("aria-expanded", "true");
    toggleButton.setAttribute("aria-label", "Close navigation menu");

    document.body.style.overflow = "hidden";
  }

  function closeMobileMenu() {
    navMenu.classList.remove("active");
    toggleButton.classList.remove("active");
    overlay.classList.remove("active");

    toggleButton.setAttribute("aria-expanded", "false");
    toggleButton.setAttribute("aria-label", "Open navigation menu");

    document.body.style.overflow = "";

    closeAllDropdowns();
  }

  toggleButton.addEventListener("click", () => {
    const isOpen = navMenu.classList.contains("active");

    if (isOpen) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  overlay.addEventListener("click", closeMobileMenu);

  // --------------------------------------
  // DROPDOWN MENU
  // --------------------------------------

  function closeAllDropdowns() {
    dropdowns.forEach((dropdown) => {
      dropdown.classList.remove("open");

      const button = dropdown.querySelector(".dropdown-toggle");

      if (button) {
        button.setAttribute("aria-expanded", "false");
      }
    });
  }

  dropdowns.forEach((dropdown) => {
    const button = dropdown.querySelector(".dropdown-toggle");

    if (!button) return;

    button.addEventListener("click", () => {
      if (window.innerWidth > mobileBreakpoint) return;

      const isOpen = dropdown.classList.contains("open");

      closeAllDropdowns();

      if (!isOpen) {
        dropdown.classList.add("open");
        button.setAttribute("aria-expanded", "true");
      }
    });
  });

  // --------------------------------------
  // CLOSE MENU AFTER NAVIGATION
  // --------------------------------------

  navMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      if (window.innerWidth <= mobileBreakpoint) {
        closeMobileMenu();
      }
    });
  });

  // --------------------------------------
  // CLOSE MENU WHEN CLICKING OUTSIDE
  // --------------------------------------

  document.addEventListener("click", (event) => {
    if (window.innerWidth > mobileBreakpoint) {
      if (!event.target.closest(".dropdown")) {
        closeAllDropdowns();
      }

      return;
    }

    if (
      navMenu.classList.contains("active") &&
      !navMenu.contains(event.target) &&
      !toggleButton.contains(event.target)
    ) {
      closeMobileMenu();
    }
  });

  // --------------------------------------
  // ESCAPE KEY
  // --------------------------------------

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeMobileMenu();
    }
  });

  // --------------------------------------
  // WINDOW RESIZE
  // --------------------------------------

  window.addEventListener("resize", () => {
    if (window.innerWidth > mobileBreakpoint) {
      closeMobileMenu();
    }
  });
});
