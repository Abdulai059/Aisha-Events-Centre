
<?php include __DIR__ . '/../../includes/header.php'; ?>

<link rel="stylesheet" href="/assets/css/pages/booking.css">

<main class="booking-page">

  <!-- BOOKING HERO -->
  <section class="booking-hero">
    <div class="booking-hero-image"></div>
    <div class="booking-hero-overlay"></div>

    <div class="booking-hero-content" data-aos="fade-up" data-aos-delay="120">
      <span class="booking-eyebrow">AISHA EVENTS CENTRE</span>
      <h1>Let's make your<br><span>occasion extraordinary.</span></h1>
      <p>
        Tell us about your event and the space you have in mind.
        Our team will help you bring everything together.
      </p>

      <div class="booking-hero-meta">
        <span><i></i> Airport Road, Tamale</span>
        <span>Personalised event experiences</span>
      </div>
    </div>

    <div class="booking-hero-number">
      <span>01</span>
      <span>BOOKING ENQUIRY</span>
    </div>
  </section>

  <!-- BOOKING INTRO -->
  <section class="booking-intro">
    <div class="booking-container">
      <div data-aos="fade-up" data-aos-delay="120">
        <span class="booking-section-label">YOUR EVENT STARTS HERE</span>
        <h2>Plan your experience<br>with us.</h2>
      </div>

      <p>
        Whether you're planning a wedding, corporate gathering,
        private celebration or executive meeting, share a few details
        and let our team help you find the right space.
      </p>
    </div>
  </section>

  <!-- BOOKING FORM SECTION -->
  <section class="booking-main-section">
    <div class="booking-container booking-layout">

      <!-- FORM -->
      <div class="booking-form-column" data-aos="fade-up" data-aos-delay="120">

        <div class="booking-form-heading">
          <div>
            <span class="booking-section-label">BOOKING REQUEST</span>
            <h2>Tell us about your event</h2>
          </div>
          <span class="booking-required">* Required fields</span>
        </div>

        <form id="aishaBookingForm" novalidate>

          <!-- STEP INDICATOR -->
          <div class="booking-progress">
            <div class="booking-progress-step active" data-progress="1">
              <span>01</span>
              <div>
                <strong>Event details</strong>
                <small>Your occasion and space</small>
              </div>
            </div>

            <div class="booking-progress-line"></div>

            <div class="booking-progress-step" data-progress="2">
              <span>02</span>
              <div>
                <strong>Your information</strong>
                <small>How to reach you</small>
              </div>
            </div>
          </div>

          <!-- STEP ONE -->
          <div class="booking-step active" data-step="1">

            <div class="booking-step-heading">
              <span>01 / EVENT INFORMATION</span>
              <h3>What are you planning?</h3>
              <p>Start by telling us about your occasion.</p>
            </div>

            <div class="booking-field">
              <label for="eventType">Type of event <span>*</span></label>
              <select id="eventType" name="event_type" required>
                <option value="">Select your event type</option>
                <option>Wedding & Reception</option>
                <option>Corporate Event</option>
                <option>Conference & Seminar</option>
                <option>Birthday Celebration</option>
                <option>Private Party</option>
                <option>Religious & Cultural Event</option>
                <option>Product Launch & Exhibition</option>
                <option>Dinner & Banquet</option>
                <option>Executive Meeting</option>
                <option>Other</option>
              </select>
              <small class="field-error"></small>
            </div>

            <div class="booking-field">
              <label>Choose your preferred space <span>*</span></label>

              <div class="booking-space-grid">

                <label class="booking-space-card">
                  <input type="radio" name="space" value="Ground Floor Banquet Hall" required>
                  <span class="space-card-content">
                    <span class="space-card-number">01</span>
                    <strong>Ground Floor</strong>
                    <small>Banquet Hall</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

                <label class="booking-space-card">
                  <input type="radio" name="space" value="First Floor Banquet Hall">
                  <span class="space-card-content">
                    <span class="space-card-number">02</span>
                    <strong>First Floor</strong>
                    <small>Banquet Hall</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

                <label class="booking-space-card">
                  <input type="radio" name="space" value="VIP Restaurant">
                  <span class="space-card-content">
                    <span class="space-card-number">03</span>
                    <strong>VIP Restaurant</strong>
                    <small>Dining experience</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

                <label class="booking-space-card">
                  <input type="radio" name="space" value="Executive Restaurant">
                  <span class="space-card-content">
                    <span class="space-card-number">04</span>
                    <strong>Executive Restaurant</strong>
                    <small>Dining experience</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

                <label class="booking-space-card">
                  <input type="radio" name="space" value="Pergola Bar">
                  <span class="space-card-content">
                    <span class="space-card-number">05</span>
                    <strong>Pergola Bar</strong>
                    <small>Outdoor experience</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

                <label class="booking-space-card">
                  <input type="radio" name="space" value="Conference Room">
                  <span class="space-card-content">
                    <span class="space-card-number">06</span>
                    <strong>Conference Room</strong>
                    <small>Meetings & conferences</small>
                    <span class="space-card-select">Select space</span>
                  </span>
                </label>

              </div>
              <small class="field-error" id="spaceError"></small>
            </div>

            <div class="booking-fields-two">
              <div class="booking-field">
                <label for="eventDate">Preferred event date <span>*</span></label>
                <input type="date" id="eventDate" name="event_date" required>
                <small class="field-error"></small>
              </div>

              <div class="booking-field">
                <label for="guestCount">Expected guests <span>*</span></label>
                <input type="number" id="guestCount" name="guest_count"
                       min="1" max="10000" placeholder="e.g. 150" required>
                <small class="field-error"></small>
              </div>

              <div class="booking-field">
                <label for="startTime">Preferred start time <span>*</span></label>
                <input type="time" id="startTime" name="start_time" required>
                <small class="field-error"></small>
              </div>

              <div class="booking-field">
                <label for="eventDuration">Expected duration</label>
                <select id="eventDuration" name="event_duration">
                  <option value="">Select duration</option>
                  <option>Less than 2 hours</option>
                  <option>2–4 hours</option>
                  <option>4–6 hours</option>
                  <option>6–8 hours</option>
                  <option>Full day</option>
                  <option>Multiple days</option>
                </select>
              </div>
            </div>

            <div class="booking-field">
              <label for="eventRequirements">Additional requirements</label>
              <textarea id="eventRequirements" name="requirements"
                rows="4"
                placeholder="Tell us about catering, decoration, seating arrangements or any other special requirements..."></textarea>
            </div>

            <div class="booking-step-actions">
              <span>Step 1 of 2</span>
              <button type="button" class="booking-next-btn" id="toStepTwo">
                Continue to your details <span>→</span>
              </button>
            </div>

          </div>

          <!-- STEP TWO -->
          <div class="booking-step" data-step="2">

            <div class="booking-step-heading">
              <span>02 / YOUR INFORMATION</span>
              <h3>How can we reach you?</h3>
              <p>Provide your contact details so our team can follow up.</p>
            </div>

            <div class="booking-fields-two">

              <div class="booking-field">
                <label for="fullName">Full name <span>*</span></label>
                <input type="text" id="fullName" name="full_name"
                  placeholder="Enter your full name" required>
                <small class="field-error"></small>
              </div>

              <div class="booking-field">
                <label for="phoneNumber">Phone number <span>*</span></label>
                <input type="tel" id="phoneNumber" name="phone"
                  placeholder="e.g. 024 000 0000" required>
                <small class="field-error"></small>
              </div>

              <div class="booking-field full-width">
                <label for="emailAddress">Email address</label>
                <input type="email" id="emailAddress" name="email"
                  placeholder="you@example.com">
                <small class="field-error"></small>
              </div>

            </div>

            <div class="booking-consent">
              <input type="checkbox" id="bookingConsent" required>
              <label for="bookingConsent">
                I confirm that the information provided is accurate and
                agree to be contacted by Aisha Events Centre regarding
                this booking enquiry.
              </label>
            </div>

            <div class="booking-step-actions">
              <button type="button" class="booking-back-btn" id="backToStepOne">
                ← Back
              </button>

              <button type="button" class="booking-next-btn" id="reviewBooking">
                Review my enquiry <span>→</span>
              </button>
            </div>

          </div>

          <!-- STEP THREE: REVIEW -->
          <div class="booking-step" data-step="3">

            <div class="booking-step-heading">
              <span>03 / FINAL REVIEW</span>
              <h3>Review your enquiry</h3>
              <p>Please check your details before submitting your request.</p>
            </div>

            <div class="booking-review-box">
              <div class="booking-review-heading">
                <strong>Event information</strong>
                <button type="button" data-edit-step="1">Edit</button>
              </div>
              <div class="booking-review-grid" id="eventReview"></div>
            </div>

            <div class="booking-review-box">
              <div class="booking-review-heading">
                <strong>Contact information</strong>
                <button type="button" data-edit-step="2">Edit</button>
              </div>
              <div class="booking-review-grid" id="contactReview"></div>
            </div>

            <div class="booking-final-note">
              <span>!</span>
              <p>
                Submitting this form sends a booking enquiry only.
                Your booking is not confirmed until our management team
                contacts you and confirms availability.
              </p>
            </div>

            <div class="booking-step-actions">
              <button type="button" class="booking-back-btn" id="backToStepTwo">
                ← Back
              </button>

              <button type="submit" class="booking-submit-btn">
                Submit booking enquiry <span>→</span>
              </button>
            </div>

          </div>

        </form>

        <!-- FRONTEND SUCCESS MESSAGE -->
        <div class="booking-success" id="bookingSuccess" hidden>
          <div class="booking-success-icon">✓</div>
          <span class="booking-section-label">ENQUIRY READY</span>
          <h2>Your details are complete.</h2>
          <p id="successMessage">
            Your booking enquiry has been prepared. The online submission
            service still needs to be connected before it can reach our team.
          </p>
          <button type="button" id="startNewBooking">Start another enquiry</button>
        </div>

      </div>

      <!-- BOOKING SIDEBAR -->
      <aside class="booking-sidebar" data-aos="fade-left" data-aos-delay="150">

        <div class="booking-sidebar-image">
          <img
            src="https://www.aishagroup.org/aisha-event-center.webp"
            alt="Aisha Events Centre"
          >
          <div class="booking-sidebar-image-overlay">
            <span>YOUR EVENT. OUR SPACE.</span>
            <h3>Make it<br>memorable.</h3>
          </div>
        </div>

        <div class="booking-summary-card">
          <span class="booking-section-label">YOUR ENQUIRY</span>
          <h3>Booking summary</h3>
          <p class="booking-summary-intro">
            Your selected event details will appear here.
          </p>

          <div class="summary-divider"></div>

          <div class="summary-item">
            <span>Event type</span>
            <strong id="summaryEvent">Not selected</strong>
          </div>

          <div class="summary-item">
            <span>Selected space</span>
            <strong id="summarySpace">Not selected</strong>
          </div>

          <div class="summary-item">
            <span>Event date</span>
            <strong id="summaryDate">Not selected</strong>
          </div>

          <div class="summary-item">
            <span>Expected guests</span>
            <strong id="summaryGuests">Not specified</strong>
          </div>

          <div class="summary-item">
            <span>Start time</span>
            <strong id="summaryTime">Not selected</strong>
          </div>

          <div class="summary-divider"></div>

          <div class="summary-status">
            <span></span>
            <div>
              <strong>Enquiry status</strong>
              <small>Awaiting management review</small>
            </div>
          </div>
        </div>

        <div class="booking-help-card">
          <span>NEED ASSISTANCE?</span>
          <h3>Let's talk about your event.</h3>
          <p>Our team is happy to help you plan the details.</p>
          <a href="tel:0598948931">059 894 8931 <span>↗</span></a>
          <a href="mailto:reservations@aishahomesgh.com">
            reservations@aishahomesgh.com
          </a>
        </div>

      </aside>

    </div>
  </section>

</main>

<script src="/assets/js/pages/booking.js"></script>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
