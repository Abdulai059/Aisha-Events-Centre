<link rel="stylesheet" href="/assets/css/footer.css">

<section class="Footer-section">
  <footer class="site-footer" id="footer-content">
    <div class="footer-grid">
      <!-- Company Information Section -->
      <div class="footer-container">
        <div class="brand-logo">
          <a href="#">
            <img src="https://res.cloudinary.com/ltect-homes/image/upload/v1795084478/logoaec_c3qpa9.jpg" alt="Ltech Homes Estate" />
          </a>
        </div>

        <p class="footer-left">
            Aisha Event Centre is a destination for exceptional events,
          hospitality and memorable experiences. We bring together conference and event facilities,
          accommodation, dining and entertainment in one place.
        </p>

        <ul class="contact-list">
          <li class="contact-list-item">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p class="contact-list-text">
               Airport Road, Tamale-NR, Ghana
            </p>
          </li>
          <li class="contact-list-item">
            <i class="fa fa-phone contact-list-icon" aria-hidden="true"></i>
            <p class="contact-list-text">+233 (0) 000 000 043</p>
          </li>
          <li class="contact-list-item">
            <i class="fa fa-envelope contact-list-icon" aria-hidden="true"></i>
            <p class="contact-list-text">info@aishaeventcenter.com</p>
          </li>
        </ul>
      </div>

      <!-- Navigation Section -->
      <div class="quiklinks-section">
        <h3 class="quiklinks-heading">Navigation</h3>

        <div class="quiklinks-grid">
          <ul class="quiklinks-menu">
            <li>
              <a href="#" class="quiklinks-menu-link">Home</a>
            </li>
            <!-- <li>
                  <a href="#" class="quiklinks-menu-link">Our Homes</a>
                </li> -->
            <li>
              <a href="#" class="quiklinks-menu-link">Our Services</a>
            </li>
            <li>
              <a href="#" class="quiklinks-menu-link">About Us</a>
            </li>
            <!-- <li>
                  <a href="#" class="quiklinks-menu-link">About Us</a>
                </li> -->
          </ul>

          <ul class="quiklinks-menu">
            <li>
              <a href="#" class="quiklinks-menu-link">Gallery</a>
            </li>
            <li>
              <a href="#" class="quiklinks-menu-link">Contact Us</a>
            </li>
            <li>
              <a href="#" class="quiklinks-menu-link">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Newsletter Section -->
      <div class="newsletter-area">
        <h3 class="section-heading">Stay Connected</h3>

        <p class="newsletter-text">
         Be part of the Aisha experience. Subscribe to receive updates,
          announcements and news about our facilities, events and
          hospitality experiences.
        </p>

        <form class="subscribe-form" method="post" novalidate="true">
          <div class="form-input-wrapper">
            <input
              type="email"
              id="subscribeEmail"
              name="EMAIL"
              placeholder="Enter Your Email"
              class="form-email-field"
              required />
            <button type="submit" class="form-submit-btn">Subscribe</button>
          </div>
          <p class="form-status-message"></p>
        </form>
      </div>
    </div>
  </footer>

  <div class="copyright-container" id="copyright-content">
    <div class="footer-wrapper">
      <div class="copyright">
        2026 Aisha Event Centre © All Rights Reserved.
      </div>
      <div class="social-icons">
        <a href="#" class="social-icon facebook" aria-label="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon linkedin" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="social-icon instagram" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="social-icon youtube" aria-label="YouTube">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- END OF FOOTER SECTION -->





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<!-- Load Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper for Facilities -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('.portfolio-swiper')) {
    new Swiper('.portfolio-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      loop: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
  }
});
</script>


<!-- Custom JS -->
<script src="/assets/js/components/testimonials.js"></script>
<script src="/assets/js/navbar.js" defer></script>
<script src="/assets/js/components/home.js" defer></script>
<script src="/assets/js/pages/team.js"></script>
<script src="/assets/js/pages/why-choose-us.js"></script>
<script src="/assets/js/components/video.js"></script>
<script src="/assets/js/pages/about.js"></script>
<script src="/assets/js/pages/gallery.js"></script>


</body>

</html>