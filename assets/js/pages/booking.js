document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("aishaBookingForm");

  if (!form) return;

  const steps = [...document.querySelectorAll(".booking-step")];
  const progressSteps = [
    ...document.querySelectorAll(".booking-progress-step"),
  ];

  const dateInput = document.getElementById("eventDate");
  const guestInput = document.getElementById("guestCount");

  let currentStep = 1;

  // ======================================
  // SET MINIMUM EVENT DATE
  // ======================================

  const today = new Date();
  const localToday = [
    today.getFullYear(),
    String(today.getMonth() + 1).padStart(2, "0"),
    String(today.getDate()).padStart(2, "0"),
  ].join("-");

  dateInput.min = localToday;

  // ======================================
  // GET FORM VALUES
  // ======================================

  function getValue(id) {
    return document.getElementById(id)?.value.trim() || "";
  }

  function getSelectedSpace() {
    return form.querySelector('input[name="space"]:checked')?.value || "";
  }

  function formatDate(value) {
    if (!value) return "Not selected";

    const date = new Date(value + "T12:00:00");

    return date.toLocaleDateString("en-GB", {
      day: "numeric",
      month: "long",
      year: "numeric",
    });
  }

  function formatTime(value) {
    if (!value) return "Not selected";

    const [hours, minutes] = value.split(":");
    const date = new Date();

    date.setHours(Number(hours), Number(minutes), 0, 0);

    return date.toLocaleTimeString("en-GB", {
      hour: "numeric",
      minute: "2-digit",
      hour12: true,
    });
  }

  // ======================================
  // UPDATE LIVE SUMMARY
  // ======================================

  function updateSummary() {
    document.getElementById("summaryEvent").textContent =
      getValue("eventType") || "Not selected";

    document.getElementById("summarySpace").textContent =
      getSelectedSpace() || "Not selected";

    document.getElementById("summaryDate").textContent = formatDate(
      getValue("eventDate"),
    );

    document.getElementById("summaryGuests").textContent = getValue(
      "guestCount",
    )
      ? Number(getValue("guestCount")).toLocaleString("en-GB")
      : "Not specified";

    document.getElementById("summaryTime").textContent = formatTime(
      getValue("startTime"),
    );
  }

  form.addEventListener("input", updateSummary);
  form.addEventListener("change", updateSummary);

  // ======================================
  // SHOW STEP
  // ======================================

  function showStep(stepNumber) {
    currentStep = stepNumber;

    steps.forEach((step) => {
      step.classList.toggle("active", Number(step.dataset.step) === stepNumber);
    });

    progressSteps.forEach((step) => {
      const number = Number(step.dataset.progress);

      step.classList.toggle("active", number === stepNumber);
      step.classList.toggle("completed", number < stepNumber);
    });

    updateSummary();

    document
      .querySelector(".booking-form-heading")
      ?.scrollIntoView({ behavior: "smooth", block: "start" });
  }

  // ======================================
  // FIELD VALIDATION
  // ======================================

  function clearErrors(stepNumber) {
    const step = document.querySelector(
      `.booking-step[data-step="${stepNumber}"]`,
    );

    step.querySelectorAll(".booking-field").forEach((field) => {
      field.classList.remove("invalid");

      const error = field.querySelector(".field-error");

      if (error) error.textContent = "";
    });

    const spaceError = document.getElementById("spaceError");

    if (spaceError) spaceError.textContent = "";
  }

  function showFieldError(input, message) {
    const field = input.closest(".booking-field");

    if (!field) return;

    field.classList.add("invalid");

    const error = field.querySelector(".field-error");

    if (error) error.textContent = message;
  }

  function validateStepOne() {
    clearErrors(1);

    let valid = true;

    const requiredFields = [
      {
        id: "eventType",
        message: "Please select your event type.",
      },
      {
        id: "eventDate",
        message: "Please select an event date.",
      },
      {
        id: "guestCount",
        message: "Please enter the expected number of guests.",
      },
      {
        id: "startTime",
        message: "Please select your preferred start time.",
      },
    ];

    requiredFields.forEach((item) => {
      const input = document.getElementById(item.id);

      if (!input.value.trim()) {
        showFieldError(input, item.message);
        valid = false;
      }
    });

    if (dateInput.value && dateInput.value < localToday) {
      showFieldError(dateInput, "Please select today or a future date.");
      valid = false;
    }

    const guests = Number(guestInput.value);

    if (
      guestInput.value &&
      (!Number.isInteger(guests) || guests < 1 || guests > 10000)
    ) {
      showFieldError(guestInput, "Enter a valid guest number.");
      valid = false;
    }

    const selectedSpace = getSelectedSpace();

    if (!selectedSpace) {
      document.getElementById("spaceError").textContent =
        "Please select your preferred space.";

      valid = false;
    }

    if (!valid) {
      document
        .querySelector('.booking-step[data-step="1"] .field-error:not(:empty)')
        ?.closest(".booking-field")
        ?.scrollIntoView({
          behavior: "smooth",
          block: "center",
        });

      return false;
    }

    return true;
  }

  function validateStepTwo() {
    clearErrors(2);

    let valid = true;

    const name = document.getElementById("fullName");
    const phone = document.getElementById("phoneNumber");
    const email = document.getElementById("emailAddress");
    const consent = document.getElementById("bookingConsent");

    if (name.value.trim().length < 2) {
      showFieldError(name, "Please enter your full name.");
      valid = false;
    }

    const cleanPhone = phone.value.replace(/[\s()-]/g, "");

    if (!/^\+?[0-9]{9,15}$/.test(cleanPhone)) {
      showFieldError(phone, "Please enter a valid phone number.");
      valid = false;
    }

    if (email.value.trim()) {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailPattern.test(email.value.trim())) {
        showFieldError(email, "Please enter a valid email address.");
        valid = false;
      }
    }

    if (!consent.checked) {
      consent.setCustomValidity("Please confirm your consent.");
      consent.reportValidity();
      valid = false;
    } else {
      consent.setCustomValidity("");
    }

    if (!valid) {
      document
        .querySelector('.booking-step[data-step="2"] .field-error:not(:empty)')
        ?.closest(".booking-field")
        ?.scrollIntoView({
          behavior: "smooth",
          block: "center",
        });
    }

    return valid;
  }

  // ======================================
  // REVIEW DETAILS
  // ======================================

  function addReviewItem(container, label, value) {
    const item = document.createElement("div");
    item.className = "review-item";

    const title = document.createElement("span");
    title.textContent = label;

    const detail = document.createElement("strong");
    detail.textContent = value || "Not provided";

    item.append(title, detail);
    container.appendChild(item);
  }

  function populateReview() {
    const eventReview = document.getElementById("eventReview");
    const contactReview = document.getElementById("contactReview");

    eventReview.replaceChildren();
    contactReview.replaceChildren();

    addReviewItem(eventReview, "Event type", getValue("eventType"));
    addReviewItem(eventReview, "Preferred space", getSelectedSpace());
    addReviewItem(eventReview, "Event date", formatDate(getValue("eventDate")));
    addReviewItem(eventReview, "Expected guests", getValue("guestCount"));
    addReviewItem(eventReview, "Start time", formatTime(getValue("startTime")));
    addReviewItem(eventReview, "Duration", getValue("eventDuration"));
    addReviewItem(
      eventReview,
      "Additional requirements",
      getValue("eventRequirements"),
    );

    addReviewItem(contactReview, "Full name", getValue("fullName"));
    addReviewItem(contactReview, "Phone number", getValue("phoneNumber"));
    addReviewItem(
      contactReview,
      "Email address",
      getValue("emailAddress") || "Not provided",
    );
  }

  // ======================================
  // NAVIGATION BUTTONS
  // ======================================

  document.getElementById("toStepTwo").addEventListener("click", function () {
    if (validateStepOne()) {
      showStep(2);
    }
  });

  document
    .getElementById("backToStepOne")
    .addEventListener("click", function () {
      showStep(1);
    });

  document
    .getElementById("reviewBooking")
    .addEventListener("click", function () {
      if (validateStepTwo()) {
        populateReview();
        showStep(3);
      }
    });

  document
    .getElementById("backToStepTwo")
    .addEventListener("click", function () {
      showStep(2);
    });

  document.querySelectorAll("[data-edit-step]").forEach((button) => {
    button.addEventListener("click", function () {
      showStep(Number(button.dataset.editStep));
    });
  });

  // ======================================
  // SUBMISSION PLACEHOLDER
  // ======================================

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    if (!validateStepOne()) {
      showStep(1);
      return;
    }

    if (!validateStepTwo()) {
      showStep(2);
      return;
    }

    populateReview();

    form.hidden = true;

    const success = document.getElementById("bookingSuccess");
    success.hidden = false;

    document.getElementById("successMessage").textContent =
      "Your details have been reviewed in this browser. The booking submission service has not yet been connected, so your enquiry has not been sent to Aisha Events Centre.";

    success.scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
  });

  // ======================================
  // START ANOTHER ENQUIRY
  // ======================================

  document
    .getElementById("startNewBooking")
    .addEventListener("click", function () {
      form.reset();
      form.hidden = false;

      document.getElementById("bookingSuccess").hidden = true;

      clearErrors(1);
      clearErrors(2);

      showStep(1);
      updateSummary();
    });

  updateSummary();
});
