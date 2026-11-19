<?php include 'includes/header.php'; ?>


<main>
  <!-- START PRELOADER -->
  <!-- <div id="preloadhttps://github.com/Abdulai059/Ltech-Homes.giter">
    <img src="https://res.cloudinary.com/ltect-homes/image/upload/v1750615773/motion-blur-2_lpskmi.svg" alt="Loading..." class="svg-loader" />
  </div> -->

  <!-- START NAVIGATION BAR  -->
  <!-- <header class="navbar-wrapper" id="navbar-wrapper"></header> -->

   <?php include 'components/home/hero.php'; ?>

  <!-- WHY YOU CHOOSE US SECTION -->
  <div class="wcd-container">
    <?php include 'pages/about/why-choose-us.php'; ?>
  </div>

  <!-- START PROPERTIES SECTION-->
  <?php include 'components/home/facilities-section.php'; ?>

  <!-- START PORFOLIO SECTION-->
  <?php include 'components/home/faq-section.php'; ?>



  <!-- START SECTION TEAMS -->
  <?php if (false): ?>
    <section class="team-section">
      <?php include 'pages/about/our-team.php'; ?>
    </section>
  <?php endif; ?>

  
  <!-- START OUR PARTNES SECTION -->
  <!-- <?php include 'about-us/our-partners.php'; ?> -->


<!-- START FAQ SECTION -->
<section class="faq-section">
  <div class="faq-wrapper">
     <div class="faq-left" data-aos="fade-right" data-aos-delay="150">
        <div class="faq-tip">Buying Guide</div>
        <h2>Need Help? Explore Our FAQ Section!</h2>
        <p>
          Discover everything you need to know about Aisha Event Centre from our facilities, bookings or services.
        </p>
      </div>

    <div
      class="faq-container-flex"
      data-aos="fade-left"
      data-aos-delay="150">
      <div class="faq-list">
        <div class="faq-item">
          <input type="checkbox" id="faq1" name="faq" />
          <label class="faq-question" for="faq1">
            What facilities are available at Aisha Event Centre?
          </label>
          <div class="faq-answer">
            <p>
              Aisha Event Centre brings together event and conference
              facilities, hotel accommodation, restaurant dining and
              a bar, offering a complete hospitality destination.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <input type="checkbox" id="faq2" name="faq" />
          <label class="faq-question" for="faq2">
            How can I book a venue for my event?
          </label>
          <div class="faq-answer">
            <p>
              You can contact our team through our website or visit
              our contact page to make an enquiry. Share your event
              details and our team will assist you with the booking
              process.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <input type="checkbox" id="faq3" name="faq" />
          <label class="faq-question" for="faq3">
            What types of events can I host at Aisha?
          </label>
          <div class="faq-answer">
            <p>
              Our event facilities are designed for a range of
              occasions, including corporate meetings, conferences,
              seminars, weddings, private celebrations and social
              gatherings.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <input type="checkbox" id="faq4" name="faq" />
          <label class="faq-question" for="faq4">
            Can I access accommodation and dining at the centre?
          </label>
          <div class="faq-answer">
            <p>
              Yes. Aisha Event Centre brings accommodation and
              restaurant facilities together with its event spaces,
              giving guests access to multiple hospitality experiences
              in one destination.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <input type="checkbox" id="faq5" name="faq" />
          <label class="faq-question" for="faq5">
            How can I make an enquiry or get more information?
          </label>
          <div class="faq-answer">
            <p>
              Please visit our contact page or get in touch with
              our team directly. We will be happy to assist with
              your enquiries about our facilities and available
              booking arrangements.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- END FAQ SECTION -->
   <?php include __DIR__ . '/pages/shared/enquiry-cta.php'; ?>


  <!-- START CARRER SECTION -->
  <section id="carrer-section">
    <div class="job-container">
      <div class="job-header" data-aos="fade-up"
        data-aos-delay="120">>
        <h1>Start Your Careers</h1>
        <p>Want To Work With Us?</p>
      </div>

      <div class="job-card" data-aos="fade-left" data-aos-delay="120">
        <h2 class="job-title">Customer Service Associate</h2>
        <p class="job-description">
          Are you passionate about engaging with customers? Do you want to make
          an impact in the field of customer service? Then you should join our
          team.
        </p>
        <div class="job-options">
          <span class="work-type on-site">On-Site</span>
          <span class="work-type part-time">Part-time</span>
          <a href="#" class="apply-btn" onclick="handleApply()">Apply <span>→</span></a>
        </div>
      </div>
    </div>
  </section>




</main>



<?php include 'includes/footer.php'; ?>