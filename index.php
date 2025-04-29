<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>       
       


  
<!--NAVIGATION BAR-->
<nav class="navbar navbar-expand-lg py-1">
    <div class="container"> <!--container-fluid)-->
      <!-- Logo -->
      <a class="navbar-brand" href="index.html">
        <img src="img/LekaLogoWhite.png" alt="Le Ka Logo" style="height: 70px;">
      </a>
      <!-- Mobil version -->
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar content, right -->
      <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
        <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
          <li class="nav-item"><a class="nav-link" href="men.html">For Men</a></li>
          <li class="nav-item"><a class="nav-link" href="women.html">For Woman</a></li>
          <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVIGATION BAR-->

  <!-- HERO SECTION -->
  <section class="hero d-flex align-items-center section-first ">
    <div class="video-background">
      <video autoplay muted loop class="video-background-content">
        <source src="img/hero.mp4" type="video/mp4">
        Your browser does not support the video element.
      </video>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6"> <!--orginal 6-->
          <h1 class="hero-title">
            TAILORED CLOTHING THAT FEELS LIKE YOU
          </h1>
          <p class="hero-text mt-3">
            Made-to-measure suits, coats, and everyday pieces - carefully crafted to fit your shape, your pace, and your
            personal style. No trends. No rush. Just custom tailoring, made for one person at a time.
          </p>
          <a href="#" class="btn-primary btn">Book a Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <!--FOR MEN-WOMEN SECTION-->
  <section class="men-women">
    <div class="container px-0 discover-entry">
      <div class="row no-gutters d-md-flex justify-content-start text-wrapper">
        <!--imagen-->
        <div class="col-md-7 img-horiz" style="background-image: url('img/formen.png');"></div>
        <!--text-->
        <div class="one-half half-text d-flex justify-content-end align-items-center">
          <div class="text-2 align-items-start d-flex">
            <div class="desc pt-5 ">
              <div class="top">
                <h1 class="mb-4">for MEN</h1>
              </div>
              <div class="absolute">
                <p>Made-to-measure menswear, designed for real life.</p>
                <p>From tailored suits to casual pieces, we create clothing that fits you - not just your measurements,
                  but your style and routine too. Every piece is handcrafted in our Toulouse atelier, using high-quality
                  fabrics and traditional techniques.</p>
                <p>Looking for a perfect fit? You’re in the right place.</p>
                <p><a href="men.html" class="btn-secondary">Discover now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container px-0 discover-entry">
      <div class="row no-gutters d-md-flex justify-content-end text-wrapper">
        <!--imagen-->
        <div class="col-md-7 img-horiz" style="background-image: url('img/forwomen.png');"></div>
        <!--text-->
        <div class="one-half half-text d-flex justify-content-end align-items-center">
          <div class="text-3 align-items-center d-flex">
            <div class="desc pt-5 ">
              <div class="top">
                <h1 class="mb-4">for WOMAN</h1>
              </div>
              <div class="absolute col-lg-6">
                <p>Tailoring that’s made to move with you.</p>
                <p>We design made-to-measure suits and coats for women who value comfort, confidence, and timeless
                  style.
                  Each piece is created in our atelier in Toulouse, crafted to reflect your shape, your taste, and your
                  lifestyle.</p>
                <p>Elegant. Comfortable. Uniquely yours.</p>
                <p><a href="women.html" class="btn-secondary">Discover now</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!--THE PROCESS-->
  <section class="section-process">
    <div class="container">
      <div class="row">
        <!--Text-->
        <div class="col-md-6 pe-4">
          <h2>THE PROCESS</h2>
          <p>A simple, step-by-step approach to getting something made just for you.<br>
            Made-to-measure should feel personal, not complicated. This process is designed to be clear, collaborative,
            and focused on what fits — your style, your body, and your day-to-day life.</p>
          <a href="#" class="btn btn-primary mt-4">Book a Consultation</a>
        </div>

        <!--List with icons-->
        <div class="col-md-6 px-3">
          <div class="timeline">
            <!-- Step 1 -->
            <div class="timeline-step d-flex ">
              <div class="icon-wrapper text-center px-3">
                <i class="bi bi-calendar2-heart-fill fs-2 icon-colored"></i>
                <div class="timeline-line"></div>
              </div>
              <div class="ms-4">
                <h3>LET’S MEET</h3>
                <p>Start with a one-on-one appointment - at the atelier. It’s a relaxed setting to talk about what you
                  need, what you like, and explore fabric and style options together.</p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-step d-flex">
              <div class="icon-wrapper text-center px-3">
                <i class="bi bi-rulers fs-2 icon-colored"></i>
                <div class="timeline-line"></div>
              </div>
              <div class="ms-4">
                <h3>MEASUREMENTS & PLANNING</h3>
                <p>Precise measurements are taken, and garment details are noted. Fit, fabric, and feel all come
                  together here - no templates, just a piece shaped around you.</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-step d-flex">
              <div class="icon-wrapper text-center px-3">
                <i class="bi bi-scissors fs-2 icon-colored"></i>
                <div class="timeline-line"></div>
              </div>
              <div class="ms-4">
                <h3>TAILORING & CRAFTING</h3>
                <p>Once everything is confirmed, the garment is made from scratch. Each part is cut, sewn, and assembled
                  by hand with close attention to quality and detail.</p>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-step d-flex">
              <div class="icon-wrapper text-center px-3">
                <i class="bi bi-person-check-fill fs-2 icon-colored"></i>
                <div class="timeline-line"></div>
              </div>
              <div class="ms-4">
                <h3>FITTING & ADJUSTMENTS</h3>
                <p>When the piece is ready, it’s time for a fitting. Small adjustments are made to make sure the garment
                  feels good, moves well, and fits naturally.</p>
              </div>
            </div>

            <!-- Step 5 -->
            <div class="timeline-step d-flex">
              <div class="icon-wrapper text-center px-3">
                <i class="bi bi-stars fs-2 icon-colored"></i>
              </div>
              <div class="ms-4">
                <h3>READY TO WEAR</h3>
                <p>The final piece is finished, pressed, and ready to wear. Something that fits right - and feels right,
                  too.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--ABOUT -->
  <section class="position-relative overflow-hidden about-section d-flex flex-column flex-lg-row">
    <div class="container">
      <!--video-->
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-start text-wrapper">
          <video autoplay muted loop class="h-100" style="object-fit: cover;">
            <source src="img/video-720x1080.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <!--text-->
        <div class="col-lg-7 d-flex flex-column justify-content-center">
          <h2>ABOUT</h2>
          <p>At Le Ka, tailoring is more than fit - it’s a feeling. Every garment is made-to-measure by hand, shaped
            through conversation, and designed to reflect the client’s style, movement, and personality.

            Founded by Rasa, a tailor with a background in textile design and craftsmanship, the studio embraces slow
            fashion and honest, personal service. Nothing rushed. Nothing off the rack. Just timeless pieces, made to
            last.</p>
          <a href="#" class="btn-secondary">Learn more <i class="bi bi-chevron-right ms-2"></i></a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- FAQS -->
  <section class="section-faqs">
    <div class="container">
      <div class="row">
        <!-- Text -->
        <div class="col-md-6 pe-4">
          <h2>FAQs</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
            tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae
            erat.</p>
        </div>

        <!-- Accordion faqs-->
        <div class="col-md-6 px-4">
          <div class="accordion accordion-flush accordion-faq" id="accordionFaqs">

            <!-- ITEM 1 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-1">
                <button class="accordion-faqs-button collapsed d-flex justify-content-between align-items-center"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="false"
                  aria-controls="faq-collapse-1">
                  <span>How does the appointment process work?</span>
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Once you book an appointment, you’ll visit our atelier for a one-on-one consultation...
                </div>
              </div>
            </div>

            <!-- ITEM 2 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-2">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                  How long does the tailoring process take?
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  It usually takes 3 to 5 weeks from your first appointment to final delivery, depending on fabric
                  availability and garment complexity.
                  <i class="bi bi-chevron-down"></i>
                </div>
              </div>
            </div>

            <!-- ITEM 3 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-3">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                  How much does a made-to-measure suit cost?.
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Prices typically start at €800, depending on the fabric and design options you choose. We’ll give you
                  a
                  clear, personalized quote during your consultation.
                </div>
              </div>
            </div>

            <!-- ITEM 4 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-4">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                  Do you require a deposit?
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Yes, a 50% deposit is required to begin the tailoring process after your first consultation. The
                  remaining balance is paid at delivery.
                </div>
              </div>
            </div>

            <!-- ITEM 5 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-5">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                  Can I cancel or reschedule my appointment?
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Absolutely. You can cancel or reschedule your appointment up to 24 hours in advance. Just send us an
                  email or call — we’ll gladly help.
                </div>
              </div>
            </div>

            <!-- ITEM 6 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-6">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                  Do you use sustainable materials?
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Yes. We work with a curated selection of natural and eco-conscious fabrics, and we prioritize
                  long-lasting quality to support responsible fashion.
                </div>
              </div>
            </div>

            <!-- ITEM 7 -->
            <div class="accordion-faqs-item">
              <h2 class="accordion-faqs-header" id="faq-heading-7">
                <button class="accordion-faqs-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#faq-collapse-7" aria-expanded="false" aria-controls="faq-collapse-7">
                  Can I gift an appointment?
                  <i class="bi bi-chevron-down"></i>
                </button>
              </h2>
              <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7"
                data-bs-parent="#accordionFaqs">
                <div class="accordion-faqs-body">
                  Yes, tailored experiences make unique and meaningful gifts. We offer gift appointments for weddings,
                  birthdays, or other special occasions. Get in touch and we’ll personalize the offer.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--ADD WEDINGS-->
  <section class="rotating-circle-section">
    <div class="background-image-wrapper">
      <img src="img/place.png" alt="bg place" class="background-image">
      <div class="rotating-circle-container">
        <svg viewBox="0 0 200 200" class="rotating-svg">
          <defs>
            <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
          </defs>
          <text fill="white">
            <textPath xlink:href="#circlePath">
              For an unforgettable day, the ideal choice is a tailored suit.
            </textPath>
          </text>
        </svg>
      </div>
    </div>
  </section>

  <!-- OUR JOURNAL - carrousel -->
  <section class="section-spacing">
    <div class="container">
      <div class="row pb-3">
        <div class="col-md-5">
          <h2>OUR JOURNAL</h2>
        </div>
        <div class="col-md-7">
          <p>This is where made-to-measure meets real life - weddings, celebrations, milestones, and quiet moments in
            between - all wearing pieces made just for them. Every photo here tells a story of personal style, honest
            craftsmanship, and the joy of wearing something that fits in every sense.</p>
        </div>
      </div>

      <!-- Gallery for desktop (3 or more columns) -->
      <div class="row d-none d-lg-flex">
        <div class="col-lg-4 col-md-6 mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
            class="w-100 shadow-1-strong mb-4" alt="Boat on Calm Water" />
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="w-100 shadow-1-strong mb-4"
            alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" class="w-100 shadow-1-strong mb-4"
            alt="Mountains in the Clouds" />
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
            class="w-100 shadow-1-strong mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
            class="w-100 shadow-1-strong mb-4" alt="Waves at Sea" />
          <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" class="w-100 shadow-1-strong mb-4"
            alt="Yosemite National Park" />
        </div>
      </div>

      <!-- Carousel for mobile and tablet (2 columns) -->
      <div id="journalCarousel" class="carousel slide d-lg-none" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="d-block w-100"
              alt="Boat on Calm Water">
          </div>
          <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="d-block w-100"
              alt="Wintry Mountain Landscape">
          </div>
          <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" class="d-block w-100"
              alt="Waves at Sea">
          </div>
        </div>
        <!-- Carousel Controls 
        <button class="carousel-control-prev" type="button" data-bs-target="#journalCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#journalCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>-->
      </div>
    </div>
  </section>

  <!--TESTIMONIALS - PEOPLE OPINION PLUGIN WORDPRESS-->
  <section style="color: #000;background-color: #F1F1F1;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h2 class=" mb-4">PEOPLE OPINION</h2>
        </div>
      </div>

      <div class="row">
        <!-- Testimonial 1 -->
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card">
            <div class="card-body py-4 mt-2">              
              <ul class="list-unstyled d-flex justify-content-start mb-4">
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star-half-alt fa-sm text-dark"></i>
                </li>
              </ul>              
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                ad velit ab hic tenetur.
              </p>              
              <h4 class="text-left font-weight-bold mt-3">Teresa May</h4>              
              <p class="text-left">Founder at ET Company</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card">
            <div class="card-body py-4 mt-2">              
              <ul class="list-unstyled d-flex justify-content-start mb-4">
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
              </ul>              
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                labore laboriosam.
              </p>              
              <h4 class="text-left font-weight-bold mt-3">Maggie McLoan</h4>              
              <p class="text-left">Photographer at Studio LA</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-md-4 mb-0">
          <div class="card">
            <div class="card-body py-4 mt-2">              
              <ul class="list-unstyled d-flex justify-content-start mb-4">
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-dark"></i>
                </li>
                <li>
                  <i class="far fa-star fa-sm text-dark"></i>
                </li>
              </ul>              
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                nulla metus scelerisque ante sollicio,
                vestibulum in tempus viverra turpis.
              </p>              
              <h4 class="text-left font-weight-bold mt-3">Alexa Horwitz</h4>              
              <p class="text-left">Front-end Developer in NY</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--WHERE-->
  <section class="section-spacing">
    <div class="container">
      <div class="row align-items-center">
        <!-- Imagen -->
        <div class="col-md-6 order-md-2">
          <img src="img/horizontal.jpg" alt="map or office" class="img-fluid contact-img" />
        </div>

        <!-- Información -->
        <div class="col-md-6 mb-4 mb-md-0 order-md-1">
          <div class="contact-info">
            <!-- Email -->
            <div class="mb-4 d-flex align-items-start">
              <div class="icon-wrapper me-3 mt-1">
                <i class="bi bi-envelope-fill fs-3 icon-colored"></i>
              </div>
              <div>
                <h4>Email</h4>
                <p>info@leka.com</p>
              </div>
            </div>

            <!-- Phone -->
            <div class="mb-4 d-flex align-items-start">
              <div class="icon-wrapper me-3 mt-1">
                <i class="bi bi-telephone-fill fs-3 icon-colored"></i>
              </div>
              <div>
                <h4>Phone</h4>
                <p>+34 123 456 789</p>
              </div>
            </div>

            <!-- Office -->
            <div class="mb-4 d-flex align-items-start">
              <div class="icon-wrapper me-3 mt-1">
                <i class="bi bi-geo-alt-fill fs-3 icon-colored"></i>
              </div>
              <div>
                <h4>Office</h4>
                <p>Calle de Ejemplo 123, Madrid</p>
                <p><a href="#" class="btn-secondary ">Get direction</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--INSTAGRAM-->
  <section class="instagram position-relative">
    <!-- Main button to follow on Instagram -->
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
      <a href="https://www.instagram.com/le_ka_toulouse/?hl=es" target="_blank" class="btn btn-primary">Follow us on
        Instagram</a>
    </div>

    <!-- Image row -->
    <div class="row g-0 justify-content-center">
      <!-- First image row (visible in all views) -->
      <div class="col-6 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="img/insta-item1.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/p/DGFrCCvIS3S/?hl=es" target="_blank">
            <img src="img/insta-item2.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/p/DFpaVCZtvg5/?hl=es" target="_blank">
            <img src="img/insta-item3.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-6 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/p/DDMl8RoNjns/?hl=es" target="_blank">
            <img src="img/insta-item4.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>

      <!-- Hidden for mobile (second row) -->
      <div class="col-6 col-md-2 hidden-mobile">
        <div class="insta-item">
          <a href="https://www.instagram.com/p/DC9boiwNzDa/?hl=es" target="_blank">
            <img src="img/insta-item5.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-6 col-md-2 hidden-mobile">
        <div class="insta-item">
          <a href="https://www.instagram.com/p/DBvj3nXNcTK/?hl=es&img_index=1" target="_blank">
            <img src="img/insta-item6.jpg" alt="instagram" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>


  <?php endwhile; ?>
  <?endif; ?>
  
<?php get_footer() ?>
