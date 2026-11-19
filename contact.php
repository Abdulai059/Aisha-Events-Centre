<?php include __DIR__ . '/includes/header.php'; ?>
<link rel="stylesheet" href="/assets/css/pages/contact.css">

<main class="main-wrapper">

  <div class="contact-wrapper">

    <!-- MAP SECTION  -->
    <div class="contact-us-section">
      <h2 class="maps-title">Contact Us</h2>

      <div class="maps-frame">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4749.663959398098!2d-0.8444887999999998!3d9.509017099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd43fbf0534c5b5%3A0x1ec044f82f2f4cbb!2sAISHA%20EVENTS%20CENTRE%20-%20Airport%20Road!5e1!3m2!1sen!2sgh!4v1794405546578!5m2!1sen!2sgh"
          title="Map showing the location of Aisha Events Centre on Airport Road"
          width="100%"
          height="600"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"></iframe>
        <p class="maps-description">
         Find our location and contact details below, or complete the enquiry form and our team will be happy to assist you.
        </p>
      </div>
    </div>

    <!-- FORM SECTION  -->
 
<!-- FORM SECTION -->
<div class="contact-form-container">
  <h1 class="contact-form-title">Enquiry Form</h1>

  <p class="contact-form-description">
    Tell us about your event or service requirements. Our team will get back to you.
  </p>

  <form id="contact-enquiryForm">
    <div class="contact-form-grid">

      <div class="contact-form-group left-section">
        <input
          type="text"
          name="name"
          class="contact-form-input"
          placeholder="Full Name *"
          required
        />
      </div>

      <div class="contact-form-group right-section">
        <input
          type="tel"
          name="phone"
          class="contact-form-input"
          placeholder="Phone Number *"
          required
        />
      </div>

      <div class="contact-form-group left-section">
        <input
          type="email"
          name="email"
          class="contact-form-input"
          placeholder="Email Address *"
          required
        />
      </div>

      <div class="contact-form-group right-section">
        <select
          name="service"
          class="contact-form-select"
          required
        >
          <option value="" disabled selected>Select a Service *</option>
          <option value="wedding-receptions">Weddings & Receptions</option>
          <option value="corporate-events">Corporate Events</option>
          <option value="conferences-seminars">Conferences & Seminars</option>
          <option value="private-celebrations">Birthdays & Private Celebrations</option>
          <option value="outdoor-events">Outdoor Event Organisation</option>
          <option value="banquets-dinners">Banquets & Dinner Events</option>
          <option value="restaurant-services">Restaurant & Dining Services</option>
          <option value="vip-hosting">VIP Hosting & Executive Meetings</option>
          <option value="product-launches">Product Launches & Exhibitions</option>
          <option value="other">Other Enquiries</option>
        </select>
      </div>

      <div class="contact-form-group full-width">
        <textarea
          name="enquiry"
          class="contact-form-textarea"
          placeholder="Tell us more about your enquiry... *"
          rows="5"
          required
        ></textarea>
      </div>

    </div>

    <div class="contact-checkbox-container">
      <div class="contact-chackbox-gap">
        <input
          type="checkbox"
          id="contact-newsletter"
          class="contact-checkbox"
        />

        <label for="contact-newsletter" class="contact-checkbox-label">
          Subscribe to our email newsletter
        </label>
      </div>

      <div class="contact-newsletter-text">
        <p>
          Receive updates, announcements and information about
          Aisha Events Centre's services and upcoming events.
        </p>

        <p class="contact-newsletter-policy">
          We respect your privacy. See our
          <span>Privacy Policy</span>.
        </p>
      </div>
    </div>

    <button type="submit" class="contact-submit-btn">
      Send Enquiry
    </button>

  </form>
</div>



    <!-- CONTACT DETAILS SECTION -->

    <div class="contact-us-section">
      <div class="contact-section">
        <h2 class="details-title">Contact Details</h2>

        <div class="office-list-container">
          <ul class="office-list">
            <li class="office-item" data-office="mauritius">Tamale</li>
          </ul>
        </div>

        <div class="office-details" id="office-details">
  <div class="office-name">Ghana</div>
  <div class="office-subtitle">Aisha Events Centre</div>

  <div class="office-address">
    Airport Road<br />
    Tamale<br />
    Northern Region<br />
    Ghana
  </div>

  <div class="contact-info">
    <div class="contact-row">
      <span class="contact-label">Tel</span>
      <span class="contact-value">
        059 894 8931 <span class="contact-or">/</span>
        020 369 0506
      </span>
    </div>

    <div class="contact-row">
      <span class="contact-label">Email</span>
      <span class="contact-value">reservations@aishahomesgh.com</span>
    </div>

    <div class="contact-row">
      <span class="contact-label">Website</span>
      <a href="https://www.aishagroup.org/" class="contact-value website" target="_blank" rel="noopener noreferrer">
        aishaeventcenter.com
      </a>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>


</main>



<script src="/assets/js/pages/contact.js"></script>

<?php include __DIR__ . '/includes/footer.php'; ?>