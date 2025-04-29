<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>  

          <?php
          $hero_title = get_field("hero_title");
          $hero_text = get_field("hero_text");
          $hero_video = get_field("hero_video");
          ?>
      
          <!-- HERO SECTION -->
          <section class="hero d-flex align-items-center section-first ">
            <div class="video-background">
              <video autoplay muted loop class="video-background-content">
                <source src="<?php echo $hero_video['url']; ?>" type="video/mp4">
                Your browser does not support the video element.
              </video>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                  <p class="hero-text mt-3"><?php echo $hero_text; ?></p>
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

    <?php get_template_part("template-parts/ejemplo") ?>
    

  

  <?php endwhile; ?>
  <?endif; ?>
  
<?php get_footer() ?>
