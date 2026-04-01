<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="images/favicon-mit.ico">
  <title>CSBE</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- PROJECT CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />

  <meta name="robots" content="index, follow">

  <meta name="description"
    content="Enhance your team's skills with MITSDE’s corporate upskilling solutions. Drive workforce excellence through flexible, industry-focused training programs." />
  <meta name="keywords"
    content="corporate training, corporate training courses, company training, corporate training programs for employees,corporate workshops, management training programs, leadership training,skill development, leadership development programs, skill development courses,upskilling programs, management development programs, executive training courses, leadership skills, leadership development classes, leadership programs" />

  <!-- CANONICAL TAG -->

  <link rel="canonical" href="https://mitsde.com/csbe/" />

  <!-- CANONICAL TAG -->

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <script>
    function enableSubmitBtn1() {
      document.getElementById("mysubmitBtn1").disabled = false;  //enable the submit button

    }
    function enableSubmitBtn2() {
      document.getElementById("mysubmitBtn2").disabled = false;  //enable the submit button

    }
  </script>

  <script>
    // Regex patterns
    const ck_name = /^[A-Za-z\s]{2,}$/;
    const ck_email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const ck_mob = /^[6-9]\d{9}$/;

    function validate(form) {
      const errors = [];

      // Detect which form is being submitted
      const isReferFriendForm = form.action.includes("process-form.php");

      if (isReferFriendForm) {
        // --- REFER FRIEND FORM ---
        const name = form.name.value.trim();
        const organization = form.organization.value.trim();
        const email = form.email.value.replace(/\s+/g, '').trim();
        const contactType = form.contactType.value.trim();
        const message = form.message.value.trim();

        form.name.value = name;
        form.organization.value = organization;
        form.email.value = email;
        form.message.value = message;

        if (!ck_name.test(name)) {
          errors.push("Please enter a valid name.");
        }

        if (!ck_name.test(organization)) {
          errors.push("Please enter a valid organization name.");
        }

        if (!ck_email.test(email)) {
          errors.push("Please enter a valid email address.");
        }

        if (contactType === "") {
          errors.push("Please select a contact type (Government or Corporate).");
        }

        if (message.length < 5) {
          errors.push("Please enter a proper message (minimum 5 characters).");
        }
      } else {
        // --- ORIGINAL FORM (example) ---
        const yourname = form.yourname.value.trim();
        const cname = form.cname.value.trim();
        const designation = form.designation.value.trim();
        const email = form.email.value.replace(/\s+/g, '').trim();
        const MobileNo = form.mobile.value.replace(/\s+/g, '').trim();

        form.yourname.value = yourname;
        form.cname.value = cname;
        form.designation.value = designation;
        form.email.value = email;
        form.mobile.value = MobileNo;

        if (!ck_name.test(yourname)) {
          errors.push("Please enter your full name");
        }

        if (!ck_name.test(cname)) {
          errors.push("Please enter your company name");
        }

        if (!ck_name.test(designation)) {
          errors.push("Please enter your designation");
        }

        if (!ck_email.test(email)) {
          errors.push("Please enter a valid email address.");
        }

        if (!ck_mob.test(MobileNo)) {
          errors.push("Please enter a valid 10-digit mobile number.");
        }

        if (/^(\d)\1{9}$/.test(MobileNo)) {
          errors.push("Mobile number cannot be all repeated digits like 1111111111.");
        }
      }

      // Show all errors
      if (errors.length > 0) {
        reportErrors(errors);
        return false;
      }

      return true;
    }

    function reportErrors(errors) {
      alert(errors.join("\n"));
    }
  </script>

</head>

<body>
  <header>
    <section class="hero-section">
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg bg-transparent py-3" aria-label="Primary navigation">
        <div class="container">
          <a class="navbar-brand" href="#" aria-label="CSBE home">
            <img src="images/main-logo.png" alt="CSBE logo" decoding="async" loading="eager" />
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
            aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#aboutus" data-bs-toggle="modal"
                  data-bs-target="#aboutPopup">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="#training">Training Solutions</a></li>
              <li class="nav-item"><a class="nav-link" href="#industry">Industries</a></li>
              <li class="nav-item"><a class="nav-link" href="#leader">Leaders</a></li>
              <!-- <li class="nav-item"><a class="nav-link" href="#faculty">Faculty & Trainers</a></li> -->
              <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
              <li class="nav-item"><a class="nav-link" href="#event">Events &amp; Seminars</a></li>
            </ul>

            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-proposal-nav">Request a
              Proposal</a>
          </div>
        </div>
      </nav>

      <!-- HERO CONTENT -->
      <div class="container p-5 pt-0 position-relative">
        <img src="images/arrow-img.png" class="arrow-bg" alt="decorative arrow" decoding="async" loading="eager" />

        <div class="row align-items-center">
          <!-- TEXT -->
          <div class="col-md-6 mt-3 order-2 order-md-1">
            <h5 class="fw-bold text-dark position-relative z-3">Impact That Speaks For Itself</h5>

            <h1 class="hero-title mt-3">Real companies.<br />Real transformation.<br />Real numbers.</h1>

            <div class="d-flex align-items-center gap-3 mt-4 flex-nowrap">
              <!-- <a class="btn-white-outline" href="#case-studies">Read All Case-studies</a> -->
              <a class="btn-fill" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Request a proposal <i
                  class="fa-solid fa-arrow-right-long orange-fill ms-1" aria-hidden="true"></i></a>
            </div>
          </div>

          <!-- SLIDER -->
          <div class="col-md-5 offset-md-1 mt-4 order-1 order-md-2">
            <div class="owl-theme owl-carousel hero-slider events-grid" role="region" aria-label="Hero case studies">

              <article class="case-card p-2">
                <img src="images/case-studies/chitale-bandhu-img.jpg" class="img-fluid" alt="Chitale Bandhu workshop"
                  decoding="async" loading="eager" fetchpriority="high" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/chitale-logo.png" class="case-logo rounded-circle" alt="Chitale logo"
                      decoding="async" loading="eager" />

                    <div>
                      <p class="mb-0 fw-semibold">91% of Chitale Bandhu Participants Rated <span
                          class="fw-bold">‘CSBE’ Training ‘Highly Effective’</span></p>

                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal3"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="case-card p-2">
                <img src="images/case-studies/Technodry.jpg" class="img-fluid" alt="Technodry participants"
                  decoding="async" loading="lazy" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/Technodry-logo.png" class="case-logo rounded-circle" alt="Technodry logo"
                      decoding="async" loading="lazy" />

                    <div>
                      <p class="mb-0 fw-semibold">89% of participants rated the training as satisfactory and ready for real-world application</p>

                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal2"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="case-card p-2">
                <img src="images/case-studies/SmartMark.jpg" class="img-fluid" alt="SmartMark participants"
                  decoding="async" loading="lazy" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/SmartMark-logo.png" class="case-logo rounded-circle" alt="SmartMark logo"
                      decoding="async" loading="lazy" />

                    <div>
                      <p class="mb-0 fw-semibold">92% of participants rated the program as highly relevant and actionable</p>

                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal1"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="case-card p-2">
                <img src="images/case-studies/RCFL.jpg" class="img-fluid" alt="RCFL participants"
                  decoding="async" loading="lazy" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/RCFL-logo.png" class="case-logo rounded-circle" alt="RCFL logo"
                      decoding="async" loading="lazy" />

                    <div>
                      <p class="mb-0 fw-semibold">Participants demonstrated enhanced self-awareness and leadership readiness</p>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal4"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

              <!-- <article class="case-card p-2">
                <img src="images/case-studies/key-technologies.jpg" class="img-fluid" alt="Key Technologies participants"
                  decoding="async" loading="lazy" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/key-technologies-logo.png" class="case-logo rounded-circle" alt="Key Technologies logo"
                      decoding="async" loading="lazy" />

                    <div>
                      <p class="mb-0 fw-semibold">Participants gained confidence in interpreting financial statements and key ratios</p>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal5"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article> -->

              <article class="case-card p-2">
                <img src="images/case-studies/HSL.jpg" class="img-fluid" alt="HSL participants"
                  decoding="async" loading="lazy" />

                <div class="p-3">
                  <div class="d-flex align-items-center gap-lg-4 gap-3">
                    <img src="images/case-studies/HSL-logo.png" class="case-logo rounded-circle" alt="HSL logo"
                      decoding="async" loading="lazy" />

                    <div>
                      <p class="mb-0 fw-semibold">Teams collaborated more effectively, enabling faster decision execution</p>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#caseModal6"
                        class="d-block mt-2 text-decoration-underline orange-fill">
                        Read Full Case Study <i class="fa-solid fa-arrow-right orange-fill ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </article>

            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main>
    <!-- TRAINING SOLUTIONS -->
    <section class="training-section py-5" id="training">
      <div class="container text-center">
        <img src="images/arrow-img.png" class="arrow-bg-training" alt="decorative arrow" decoding="async"
          loading="lazy" />
        <h6 class="ts-subtitle">Training Solutions</h6>
        <h2 class="ts-title">Built for Business, Designed for Impact</h2>
        <p class="ts-desc">Every organisation is unique. Your training should be too.</p>

        <div class="row mt-2">
          <div class="col-md-5 text-center order-1 order-md-1">
            <h4><b><span style="color: #f48520;">CSBE's</span> programs</b> are built on ours</h4>

            <div class="mt-3 ms-lg-5">
              <a href="#" class="ts-top-btn" aria-label="Design-for-Impact Framework">
                Design-for-Impact <span class="inner-btn">Framework <i class="fa-solid fa-circle-arrow-right"
                    aria-hidden="true"></i></span>
              </a>
            </div>

            <img src="images/06.png" class="ts-main-img img-fluid ms-lg-5" alt="diagram for design-for-impact"
              decoding="async" loading="lazy" />
          </div>

          <div class="col-md-7 order-2 order-md-2 mt-0 mt-md-4">
            <div class="row g-3 card-container">
              <div class="col-6">
                <div class="ts-card">
                  <i class="fa-solid fa-magnifying-glass-chart ts-icon" aria-hidden="true"></i>
                  <h5>Diagnose</h5>
                  <p>We assess teams using psychometrics, competency mapping, behavioural diagnostics, and leadership
                    capability analysis to identify performance gaps.</p>
                </div>
              </div>

              <div class="col-6">
                <div class="ts-card">
                  <i class="fa-solid fa-pen-ruler ts-icon" aria-hidden="true"></i>
                  <h5>Design</h5>
                  <p>We craft customised learning journeys using simulations, real-world exercises, and
                    industry-aligned curriculum.</p>
                </div>
              </div>

              <div class="col-6">
                <div class="ts-card">
                  <i class="fa-solid fa-briefcase ts-icon" aria-hidden="true"></i>
                  <h5>Deliver</h5>
                  <p>High-impact learning through modules, government &amp; PSU training, and on-ground interventions.
                  </p>
                </div>
              </div>

              <div class="col-6">
                <div class="ts-card">
                  <i class="fa-solid fa-chart-line ts-icon" aria-hidden="true"></i>
                  <h5>Measure</h5>
                  <p>We track behavioural change &amp; business performance to ensure measurable ROI.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="text-center mt-4">
          <a class="ts-cta-btn" href="#" aria-label="Design your training roadmap">
            Design Your Training Roadmap <i class="fa-solid fa-arrow-right-long ms-1" aria-hidden="true"></i>
          </a>
        </div> -->

        <!-- new training popup -->
        <div class="text-center my-4">
          <button class="ts-popup-btn" data-bs-toggle="modal" data-bs-target="#trainingModal1">
            Tailored Corporate Training
          </button>

          <button class="ts-popup-btn" data-bs-toggle="modal" data-bs-target="#trainingModal2">
            Ready-to-Deliver Programs
          </button>

          <button class="ts-popup-btn" data-bs-toggle="modal" data-bs-target="#trainingModal3">
            Government & PSU Programs
          </button>
        </div>

        <!-- new training popup -->

        <!-- <div class="container mt-5 training-tabs-container">

          <div class="ts-tabs-nav">
            <button class="ts-tab-btn active" data-tab="tab1">Tailored Corporate Training</button>
            <button class="ts-tab-btn" data-tab="tab2">Ready-to-Deliver Programs</button>
            <button class="ts-tab-btn" data-tab="tab3">Government & PSU Programs</button>
          </div>

          <div class="ts-tabs-content">

            <div class="ts-tab-pane active" id="tab1">
              <p>
                Bespoke programs designed for your organizational DNA. We collaborate with leadership teams to design
                interventions in:
              </p>

              <ul class="ts-list">
                <li>✔ Strategic Leadership & Decision-Making</li>
                <li>✔ Sales & Negotiation Mastery</li>
                <li>✔ Operations Excellence (Lean, Six Sigma, Kaizen)</li>
                <li>✔ Change Management & Innovation Leadership</li>
                <li>✔ Digital Transformation for Managers</li>
                <li>✔ Communication & Executive Presence</li>
                <li>✔ BFSI Excellence Academy</li>
              </ul>

              <p>
                <i>Every program is contextualized to your business challenges, driving immediate, measurable
                  performance gains.</i>
              </p>

              <div class="text-center mt-4">
                <img src="images/our-approach.jpg" class="img-fluid rounded-3 shadow" alt="Process Flow">
              </div>
            </div>

            <div class="ts-tab-pane" id="tab2">
              <p>
                Comprehensive learning modules that are immediately deployable across industries, including:
              </p>

              <div class="row g-4 mt-3 ts-card-container">
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-user-tie"></i>
                    <p>Emerging Leader Development Program (ELDP)</p>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-laptop-code"></i>
                    <p>Digital-First Leadership</p>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-lightbulb"></i>
                    <p>Design Thinking for Innovation</p>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-globe"></i>
                    <p>Cross-Cultural Communication Masterclass</p>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-chart-line"></i>
                    <p>Finance for Non-Finance Leaders</p>
                  </div>
                </div>
                <div class="col-6 col-md-4">
                  <div class="ts-program-card"><i class="fa-solid fa-users-gear"></i>
                    <p>Team Performance Accelerator</p>
                  </div>
                </div>
              </div>

              <p class="mt-3">
                <i>Ideal for organizations seeking high-quality learning with quick turnaround and global-standard
                  design.</i>
              </p>
            </div>

            <div class="ts-tab-pane" id="tab3">
              <p>
                Capacity-building programs designed for governance excellence, efficiency, and public impact:
              </p>

              <ul class="ts-list">
                <li>✔ Leadership for Administrative Excellence</li>
                <li>✔ Digital Governance & E-Governance</li>
                <li>✔ Project Management for PSUs</li>
                <li>✔ Ethical Leadership and Accountability</li>
              </ul>

              <p>
                <i>Aligned with India’s vision for “Skill India” and “Atmanirbhar Bharat,” these programs enhance
                  institutional capacity for national progress.</i>
              </p>
            </div>

          </div>
        </div> -->


      </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="industry-section bg-orange-light py-5" id="industry">
      <div class="container text-center">
        <h6 class="ts-subtitle">Industries we serve</h6>
        <h2 class="ts-title">Impact Across Sectors</h2>

        <div class="row g-3 px-4 mt-4">
          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-graduation-cap ts-icon" aria-hidden="true"></i>
              <h5>Education &amp; Skill Development</h5>
            </div>
          </div>

          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-microchip ts-icon" aria-hidden="true"></i>
              <h5>Information Technology</h5>
            </div>
          </div>

          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-landmark ts-icon" aria-hidden="true"></i>
              <h5>Government &amp; Public Sector</h5>
            </div>
          </div>

          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-stethoscope ts-icon" aria-hidden="true"></i>
              <h5>Healthcare &amp; Life Sciences</h5>
            </div>
          </div>

          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-coins ts-icon" aria-hidden="true"></i>
              <h5>Banking &amp; Finance</h5>
            </div>
          </div>

          <div class="col-6 col-lg-2 d-flex justify-content-center">
            <div class="in-card">
              <i class="fa-solid fa-industry ts-icon" aria-hidden="true"></i>
              <h5>Manufacturing Industries</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CLIENTS -->
    <section class="client-section py-5" id="client">
      <div class="container text-center">
        <h2 class="ts-title">Our Clients</h2>

        <div class="logo-slider mt-4" aria-hidden="false" aria-label="Client logos">
          <div class="slider-track">
            <!-- 7 LOGOS (repeated to create infinite loop) -->
            <div class="img-card"><img src="images/client-logo/smart-mark.jpg" alt="Smart Mark" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/chitale.jpg" alt="Chitale" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/technodry.jpg" alt="TechnoDry" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/hsl.jpg" alt="HSL" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/csk.jpg" alt="CSK" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/mivit.jpg" alt="Mivit" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/rashtriya.jpg" alt="Rashtriya" decoding="async"
                loading="lazy" /></div>

            <!-- Repeated set for seamless loop -->
            <div class="img-card"><img src="images/client-logo/smart-mark.jpg" alt="Smart Mark" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/chitale.jpg" alt="Chitale" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/technodry.jpg" alt="TechnoDry" decoding="async"
                loading="lazy" /></div>
            <div class="img-card"><img src="images/client-logo/hsl.jpg" alt="HSL" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/csk.jpg" alt="CSK" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/mivit.jpg" alt="Mivit" decoding="async" loading="lazy" />
            </div>
            <div class="img-card"><img src="images/client-logo/rashtriya.jpg" alt="Rashtriya" decoding="async"
                loading="lazy" /></div>
          </div>
        </div>
      </div>
    </section>

    <!-- LEADERSHIP -->
    <section class="leadership-area bg-orange-light py-5" id="leader">
      <div class="container text-center">
        <h6 class="ts-subtitle">Our Leadership</h6>
        <h2 class="ts-title">The People Driving Strategic Excellence</h2>

        <p class="leadership-desc">MITSDE’s CSBE is led by innovators, educators, and industry strategists committed to
          redefining how organisations learn. Rooted in purpose-driven transformation, measurable business impact, and
          leadership that scales, the team brings 25+ years of academic excellence and cross-sector industry experience
          across public, private, and global enterprises.</p>

        <div class="leader-row">
          <div class="owl-theme owl-carousel leader-slider test-container1" role="region" aria-label="Leadership">
            <article class="leader-card">
              <img src="images/csbe-team-images/Suhrud-Neurgaonkar.jpg" class="leader-photo"
                alt="Dr. Suhrud Neurgaonkar" decoding="async" loading="lazy" />
              <h4 class="leader-name orange">Dr. Suhrud Neurgaonkar</h4>
              <p class="leader-role">Director, CSBE</p>
              <div class="leader-line" aria-hidden="true"></div>
              <p class="leader-quote">“CSBE represents the future of strategic learning, a platform where business
                imperatives meet human capability. Our vision is to make India a global hub for leadership and
                managerial
                excellence by integrating academic research with real-world impact.”</p>
            </article>

            <article class="leader-card">
              <img src="images/csbe-team-images/Rajesh-Raut.jpg" class="leader-photo" alt="Dr. Rajesh Raut"
                decoding="async" loading="lazy" />
              <h4 class="leader-name">Dr. Rajesh Raut</h4>
              <p class="leader-role">Head, CSBE</p>
              <div class="leader-line" aria-hidden="true"></div>
              <p class="leader-quote">“At CSBE, we go beyond conventional training. We design experiences that transform
                thinking,
                improve performance, and create leaders equipped for complexity. The next decade will belong
                to organizations that learn faster and we help them do just that.”</p>
            </article>

            <article class="leader-card">
              <img src="images/csbe-team-images/bonnie-rajesh.jpg" class="leader-photo" alt="Prof. Bonnie Rajesh"
                decoding="async" loading="lazy" />
              <h4 class="leader-name">Prof. Bonnie Rajesh</h4>
              <p class="leader-role">Head, Product Development</p>
              <div class="leader-line" aria-hidden="true"></div>
              <p class="leader-quote">“We build learning journeys, not just courses. Every CSBE program is engineered to
                create
                behavioral change and business impact. Our approach blends data, design, and dialogue to
                ensure transformation at scale.”</p>
            </article>

            <article class="leader-card">
              <img src="images/csbe-team-images/Vibha-Mishra.jpg" class="leader-photo" alt="Ms. Vibha Mishra"
                decoding="async" loading="lazy" />
              <h4 class="leader-name">Ms. Vibha Mishra</h4>
              <p class="leader-role">Manager, Corporate Relations &amp; Business Development</p>
              <div class="leader-line" aria-hidden="true"></div>
              <p class="leader-quote">“Our clients are partners in transformation. My goal is to ensure that every
                partnership with
                CSBE delivers measurable ROI, greater employee engagement, and lasting organizational value.”</p>
            </article>

            <article class="leader-card">
              <img src="images/csbe-team-images/monika.jpg" class="leader-photo" alt="Ms. Monika Pateriya"
                decoding="async" loading="lazy" />
              <h4 class="leader-name">Ms. Monika Pateriya</h4>
              <p class="leader-role">Executive, Operations &amp; Program Coordination</p>
              <div class="leader-line" aria-hidden="true"></div>
              <p class="leader-quote">“CSBE is defined by precision, performance, and purpose. We make sure every
                engagement runs
                seamlessly from design to delivery, ensuring an exceptional client experience every time.”</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- FACULTY & TRAINING -->
    <!-- <section class="faculty-section bg-orange-light py-5" id="faculty">
      <div class="container">
        <h6 class="ts-subtitle text-center">Faculty &amp; Trainers</h6>
        <h2 class="ts-title text-center">Where Expertise Meets Real-World Insight</h2>

        <p class="leadership-desc text-center">CSBE’s faculty brings together industry veterans, global consultants,
          researchers, and certified coaches with 15–30 years of deep domain expertise. They have driven large-scale
          transformations across Fortune 500 organisations, PSUs, high-growth startups, and government bodies.</p>

        <div class="owl-carousel owl-theme faculty-carousel">

          <div class="item">
            <div class="row d-flex justify-content-center mt-4">

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Kumawat-Sir.jpg" class="fi-img" alt="Jagdish Kumawat" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Jagdish Kumawat</h4>
                    <p class="fi-role"><span>Designation</span><br>Communication Coach & Corporate Skills Trainer</p>
                    <p class="fi-exp"><span>Experience</span><br>20+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Jayant-Sir.jpg" class="fi-img" alt="Jayant Kelkar" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Jayant Kelkar</h4>
                    <p class="fi-role"><span>Designation</span><br>Startup Sales Mentor & High-Impact Skills Trainer</p>
                    <p class="fi-exp"><span>Experience</span><br>20+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Visakh-Sir.jpg" class="fi-img" alt="R J Visakh" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">R J Visakh</h4>
                    <p class="fi-role"><span>Designation</span><br>BFSI Domain Expert & L&D Specialist</p>
                    <p class="fi-exp"><span>Experience</span><br>18 Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Amitabh-Sir.jpg" class="fi-img" alt="Amitabh Chattoraj" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Amitabh Chattoraj</h4>
                    <p class="fi-role"><span>Designation</span><br>Internationally Certified Public Speaker & Trainer
                    </p>
                    <p class="fi-exp"><span>Experience</span><br>14 Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Mamta-Maam.jpg" class="fi-img" alt="Mamta Mehta" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Mamta Mehta</h4>
                    <p class="fi-role"><span>Designation</span><br>Clinical Psychologist & School Training Expert</p>
                    <p class="fi-exp"><span>Experience</span><br>10+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Sonal-Maam.jpg" class="fi-img" alt="Sonal Bavadekar" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Sonal Bavadekar</h4>
                    <p class="fi-role"><span>Designation</span><br>Soft Skills Trainer & Visiting Faculty (L&D)</p>
                    <p class="fi-exp"><span>Experience</span><br>18+ Years of Experience</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="item">
            <div class="row d-flex justify-content-center mt-4">

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Arundhati-Katdare.jpg" class="fi-img" alt="Arundhati Katdare" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Arundhati Katdare</h4>
                    <p class="fi-role"><span>Designation</span><br>Visiting Faculty/Trainer at Educational Institutes</p>
                    <p class="fi-exp"><span>Experience</span><br>18+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Sameer-Shah.jpg" class="fi-img" alt="Sameer Shah" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Sameer Shah</h4>
                    <p class="fi-role"><span>Designation</span><br>Design Thinking Trainer & Management Educator</p>
                    <p class="fi-exp"><span>Experience</span><br>15+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Abhay-Chavan.jpg" class="fi-img" alt="Abhay Chavan" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Abhay Chavan</h4>
                    <p class="fi-role"><span>Designation</span><br>Motivational Speaker, Sales & Leadership Coach</p>
                    <p class="fi-exp"><span>Experience</span><br>13+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Vivek-Sinare.jpg" class="fi-img" alt="Vivek Sinare" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Vivek Sinare</h4>
                    <p class="fi-role"><span>Designation</span><br>Master Trainer & Assessor</p>
                    <p class="fi-exp"><span>Experience</span><br>20+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Meeta-Kanhere.jpg" class="fi-img" alt="Meeta Kanhere" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Meeta Kanhere</h4>
                    <p class="fi-role"><span>Designation</span><br>Coach & Mentor</p>
                    <p class="fi-exp"><span>Experience</span><br>20+ Years of Experience</p>
                  </div>
                </div>
              </div>

              <div class="col-4 col-lg-5">
                <div class="faculty-item">
                  <img src="images/faculty/Vijaya-Govindan.jpg" class="fi-img" alt="Vijaya Govindan" loading="lazy">
                  <div class="fi-content">
                    <h4 class="fi-name">Vijaya Govindan</h4>
                    <p class="fi-role"><span>Designation</span><br>Communication and Soft Skills Trainer</p>
                    <p class="fi-exp"><span>Experience</span><br>8+ Years of Experience</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- CASE STUDY SECTION -->

    <!-- <section class="case-section py-5 bg-orange-light" id="case-studies">
      <div class="container">
        <h6 class="ts-subtitle text-center">Real Impact. Proven Results.</h6>
        <h2 class="ts-title text-center">Case Studies & Impact</h2>
        <div class="owl-theme owl-carousel story-slider">

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/smart-mark.jpg" alt="Smart Mark">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Smart Mark</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> The company recognized the need to strengthen strategic thinking, people
                    leadership, and change management.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> A customized one-day leadership development intervention titled
                    Strategic Business Mastery for Emerging Leaders.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal1">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/technodry.jpg" alt="Technodry System Engineering Pvt. Ltd.">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Technodry System Engineering Pvt. Ltd.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> The organization identified that interpersonal and verbal communication
                    among cross-functional teams needed improvement.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> A customized one-day onsite workshop on Effective Workplace
                    Communication, focusing on practical techniques for technical teams.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal2">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/chitale.jpg" alt="Chitale Bandhu">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Chitale Bandhu</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> The management wanted to develop a more collaborative, adaptive, and
                    customer-focused sales culture.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> A one-day, in-person training program focused on Communication and
                    Analytical Skills for Franchisee Sales Teams.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal3">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/rashtriya.jpg" alt="RCFL">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Rashtriya Chemicals and Fertilizers Limited (RCFL)</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> To build leadership competencies, communication agility, and decision-making
                    confidence among first-line managers.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> Curated a complimentary leadership development program.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal4">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/key-technologies.jpg" alt="Key Technologies">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Key Technologies</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> Limitations to strategic decision-making at both individual and departmental
                    levels.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> A specialized Management Development Program (MDP) titled Finance for
                    Non-Finance Professionals.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal5">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

          <div class="story-card">
            <div class="story-box">

              <div class="story-logo">
                <img src="images/client-logo/hsl.jpg" alt="HSL">
              </div>

              <div class="story-body">
                <div class="story-row">
                  <i class="fa-solid fa-user-tie"></i>
                  <p><strong>Client:</strong> Hindustan Shipyard Limited (HSL)</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-square-poll-horizontal"></i>
                  <p><strong>Need:</strong> Communication gaps, reactive conflict management, and inconsistent
                    accountability.</p>
                </div>

                <div class="story-row">
                  <i class="fa-solid fa-lightbulb"></i>
                  <p><strong>Solution:</strong> One-day experiential MDP on Collaborative Leadership.</p>
                </div>
              </div>

              <a href="#" class="story-link" data-bs-toggle="modal" data-bs-target="#caseModal6">
                View Full Story <span>&rarr;</span>
              </a>

            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- TESTIMONIALS -->
    <section class="testimonial-section py-5" id="testimonials">
      <div class="container test-container">
        <h6 class="ts-subtitle text-center">Testimonials</h6>
        <h2 class="ts-title text-center">Our Success Stories</h2>

        <div class="owl-theme owl-carousel testi-slider" role="region" aria-label="Testimonials">
          <article class="testi-card">
            <div class="testi-rating" aria-hidden="true">★★★★★</div>
            <p class="testi-text">“The training sessions were extremely insightful and beneficial for our team. They
              helped us enhance team-building, time management, and planning skills — all of which are crucial for
              excelling in corporate life.”</p>

            <div class="testi-user">
              <div class="testi-img" aria-hidden="true"><img src="images/review.png" alt="profile-img" decoding="async"
                  loading="lazy" /></div>
              <div>
                <h4 class="testi-name">Harshada Gondhale</h4>
                <p class="testi-role">Employee, Smart Mark</p>
              </div>
            </div>
          </article>

          <article class="testi-card">
            <div class="testi-rating" aria-hidden="true">★★★★★</div>
            <p class="testi-text">“This workshop has been incredibly beneficial for our team. The structured modules and
              exercises made financial concepts easy to understand. Our employees now feel more confident in making
              informed investment decisions.”</p>

            <div class="testi-user">
              <div class="testi-img" aria-hidden="true"><img src="images/review.png" alt="profile-img" decoding="async"
                  loading="lazy" /></div>
              <div>
                <h4 class="testi-name">Nikhil Hiran</h4>
                <p class="testi-role">CEO — Key Technologies, Pune</p>
              </div>
            </div>
          </article>

          <article class="testi-card">
            <div class="testi-rating" aria-hidden="true">★★★★★</div>
            <p class="testi-text">“The workshop included excellent sessions — one focused on improving customer
              interaction and team-building, while the other enhanced our sales skills with practical tips for
              long-term growth.”</p>

            <div class="testi-user">
              <div class="testi-img" aria-hidden="true"><img src="images/review.png" alt="profile-img" decoding="async"
                  loading="lazy" /></div>
              <div>
                <h4 class="testi-name">Akansha Pratap Rathore</h4>
                <p class="testi-role">Sales Incharge, Smart Mark</p>
              </div>
            </div>
          </article>

          <article class="testi-card">
            <div class="testi-rating" aria-hidden="true">★★★★★</div>
            <p class="testi-text">“We thank MITSDE for conducting this workshop. We found it very helpful and would
              like to have more such sessions.”</p>

            <div class="testi-user">
              <div class="testi-img" aria-hidden="true"><img src="images/review.png" alt="profile-img" decoding="async"
                  loading="lazy" /></div>
              <div>
                <h4 class="testi-name">Mohan Chaudhari</h4>
                <p class="testi-role">Director, TechnoSys Engineering</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- EVENTS -->
    <section class="events-section bg-orange-light py-5 position-relative z-1" id="event">
      <div class="container text-center">
        <img src="images/arrow-img.png" class="arrow-event" alt="decorative arrow" decoding="async" loading="lazy" />
        <p class="ts-subtitle">Learn. Engage. Transform.</p>
        <h2 class="ts-title">Events &amp; Workshops</h2>

        <div class="owl-theme owl-carousel event-slider events-grid" role="region" aria-label="Events">
          <article class="event-card">
            <img src="images/digital-leadership.jpg" alt="Digital Leadership event" class="event-img" decoding="async"
              loading="lazy" />
            <p class="event-meta">Pune | Nov 5, 2025 | Registration Open</p>
            <a class="event-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquire Now <i
                class="fa-solid fa-arrow-right-long ms-1" aria-hidden="true"></i></a>
          </article>

          <article class="event-card">
            <img src="images/innovation-mindset.jpg" alt="Innovation Mindset event" class="event-img" decoding="async"
              loading="lazy" />
            <p class="event-meta">Mumbai | Dec 10, 2025 | Registration Open</p>
            <a class="event-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquire Now <i
                class="fa-solid fa-arrow-right-long ms-1" aria-hidden="true"></i></a>
          </article>
        </div>

        <a href="#" class="view-events">View All Events</a>
      </div>
    </section>
  </main>

  <footer class="footer-section footer-bg py-5 position-relative z-1" id="contact">
    <div class="container">
      <img src="images/arrow-img.png" class="arrow-footer" alt="decorative arrow" decoding="async" loading="lazy" />
      <h2 class="ts-title text-dark text-center">Let’s Talk About Your Organisation’s Future</h2>
      <p class="leadership-desc text-center text-dark">Whether you’re upskilling a department or transforming your
        entire workforce, CSBE partners with you to build capabilities that last.</p>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex justify-content-center">
          <ul class="list-unstyled cta-list">
            <li class="mb-2"><a href="" style="color: black;"><i class="fa-solid fa-location-dot me-2"
                  aria-hidden="true"></i> MIT Alandi Campus, Pune</a></li>
            <li class="mb-2"><a href="mailto:corporate@mitsde.com" style="color: black;"><i
                  class="fa-solid fa-envelope me-2" aria-hidden="true"></i> corporate@mitsde.com</a></li>
            <li class="mb-2"><a href="tel:+919730736531" style="color: black;"><i class="fa-solid fa-phone me-2"
                  aria-hidden="true"></i> +91 9730736531</a></li>
          </ul>
        </div>

        <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
          <a class="cs-cta-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
            aria-label="Talk to expert">
            Talk to Expert <i class="fa-regular fa-comments ms-2" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md ">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="container-fluid">
            <div class="row gy-4">
              <div class="col-lg-12">
                <form action="sendreferfriend.php" class="p-lg-4 row p-3 g-3" onsubmit="return validate(this);"
                  novalidate method="post">
                  <div class="row mt-4">
                    <div class="col-md-10 ">
                      <h4>Get in touch</h4>
                    </div>
                    <div class="col-md-2">
                      <div class="d-flex  justify-content-end">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    </div>
                  </div>




                  <div class="col-lg-12">

                    <input type="text" class="form-control" placeholder="Enter Your Name" name="yourname"
                      id="firstName">
                  </div>

                  <!-- <div class="col-lg-12">
                                        <select class="form-select " name="gender" id="backgroundid" aria-label="Default select example">
                                            <option selected>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                    </div> -->

                  <div class="col-12">

                    <input type="text" class="form-control" placeholder="Enter Your Company Name" name="cname"
                      id="cname">

                  </div>

                  <div class="col-12">

                    <input type="text" class="form-control" placeholder="Enter Your Designation" name="designation"
                      id="designation">

                  </div>

                  <div class="col-lg-12">

                    <input type="text" class="form-control" placeholder="Enter Your Mobile" name="mobile">
                  </div>


                  <div class="col-12">

                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" id="email">
                  </div>

                  <div class="col-12">
                    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required=""
                      data-callback="enableSubmitBtn2">
                      <!-- 6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI -->
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn ts-cta-btn" id="mysubmitBtn2" disabled="disabled"
                      value="Save">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="aboutPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content border-0 rounded-4">

        <!-- Modal Header -->
        <div class="modal-header border-0 pb-3">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body p-0">

          <!-- ✅ YOUR SECTION START -->
          <section class="about-section bg-orange-light py-5 position-relative" id="aboutus">
            <div class="container text-center d-flex flex-column justify-content-center align-items-center">

              <h6 class="ts-subtitle">About Us</h6>
              <h2 class="ts-title">About Centre for Strategic Business Excellence (CSBE)</h2>

              <div class="about-container">
                <div class="row mt-2">
                  <div class="col-12">
                    <p class="text-center">
                      At the <b>Centre for Strategic Business Excellence (CSBE)</b>, an initiative by
                      the <b>MIT School of Distance Education (MITSDE)</b> under the
                      <b>MIT Group of Institutions, Pune</b>, we redefine the way organizations learn,
                      lead, and grow. We collaborate with forward-looking enterprises, both public and
                      private to build leadership pipelines, develop strategic capabilities, and
                      foster cultures of continuous improvement.
                    </p>

                    <p class="text-center">
                      Our purpose is to translate learning into measurable business impact. Each
                      engagement is designed to align with organizational goals, strengthen
                      decision-making, and prepare leaders for the challenges of tomorrow’s dynamic
                      markets. By integrating the latest in management science, digital transformation,
                      and behavioural insights, CSBE serves as a trusted partner to organizations
                      striving for sustainable, scalable excellence, across India and beyond.
                    </p>

                    <p class="text-center">
                      With a philosophy grounded in <b>purpose-driven transformation</b>, CSBE stands at
                      the intersection of academia and industry, empowering businesses to achieve
                      strategic outcomes that endure.
                    </p>
                  </div>
                </div>

                <h2 class="ts-title mt-4">Who Are We</h2>

                <div class="row mt-2">
                  <div class="col-12">
                    <p class="text-center">
                      <b>CSBE</b> was founded with a simple yet powerful vision — to bridge the gap
                      between knowledge and execution, and to help organizations transform not just
                      their people, but their purpose. Conceived under the umbrella of the
                      <b>MIT School of Distance Education (MITSDE)</b>, a legacy institution with over
                      <b>2 decades of educational leadership</b>, CSBE was created as a strategic arm
                      focused on <i>applied corporate learning and organizational excellence.</i>
                    </p>

                    <p class="text-center">
                      Over the next <b>25 years</b>, our vision is to become the leading center of
                      excellence in Asia for strategic capability development, recognized for shaping
                      organizations that are agile, ethical, and globally competitive. CSBE’s mission
                      extends beyond training; it’s about
                      <i>building leadership cultures, enhancing strategic resilience, and creating
                        value-based impact ecosystems</i> across industries and geographies.
                    </p>

                    <p class="text-center">
                      Founded during a time when industries were accelerating toward digital
                      transformation, CSBE emerged as a platform where academic rigour meets business
                      pragmatism. Today, we have impacted
                      <b>over 5,000 professionals</b>, partnered with <b>25+ industries</b>, and
                      developed <b>100+ specialized programs</b> that have reshaped the way
                      organizations approach leadership, innovation, and change management.
                    </p>

                    <p class="text-center">
                      We believe that <i>business excellence is not an event</i>, but an evolution and
                      at CSBE, we partner with leaders to make that evolution measurable, meaningful,
                      and sustainable.
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </section>
          <!-- ✅ YOUR SECTION END -->

        </div>

      </div>
    </div>
  </div>


  <?php include "training-modals.php" ?>
  <?php include "casemodals.php" ?>

  <!-- Back to Top Button -->
  <button id="backToTop" aria-label="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

  <script>
    // Combined document ready + carousel initializations (preserves original behavior)
    $(function () {
      // Hero carousel (kept same settings)
      $('.hero-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false, // preserved from original file
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
          0: { items: 1 },
          768: { items: 1 },
          992: { items: 1 }
        }
      });

      // Leader slider
      $('.leader-slider').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
          0: { items: 2 },
          768: { items: 3 },
          992: { items: 5 }
        }
      });

      $('.faculty-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        items: 1,   // ✅ ONE FULL ROW PER SLIDE
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
      });


      // story slider
      $(document).ready(function () {
        $('.story-slider').owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          dots: true,        // ← Make sure this is true
          responsive: {
            0: {
              items: 1
            },
            768: {
              items: 2
            },
            992: {
              items: 3
            }
          }
        });
      });

      // Testimonials slider
      $('.testi-slider').owlCarousel({
        loop: false,
        margin: 2,
        nav: false,
        dots: true,
        responsive: {
          0: { items: 1 },
          768: { items: 3 },
          992: { items: 4 }
        }
      });

      // Events slider
      $('.event-slider').owlCarousel({
        loop: false,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          992: { items: 2 }
        }
      });
    });
  </script>

  <script>
    document.querySelectorAll(".ts-tab-btn").forEach(btn => {
      btn.addEventListener("click", () => {
        document.querySelectorAll(".ts-tab-btn").forEach(b => b.classList.remove("active"));
        document.querySelectorAll(".ts-tab-pane").forEach(tab => tab.classList.remove("active"));

        btn.classList.add("active");
        document.getElementById(btn.dataset.tab).classList.add("active");
      });
    });
  </script>

  <script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        backToTop.classList.add("show");
      } else {
        backToTop.classList.remove("show");
      }
    });

    backToTop.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  </script>


</body>

</html>