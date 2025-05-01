<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>  

          <?php
          $hero_title = get_field("hero_title");
          $hero_text = get_field("hero_text");
          $hero_video = get_field("hero_video");

          $title_men = get_field("title_men");
          $text_men = get_field("text_men");
          $img_men = get_field("img_men");
          $title_women = get_field("title_women");
          $text_women = get_field("text_women");
          $img_women = get_field("img_women");    

          $process_section_title = get_field("process_section_title");
          $process_section_text = get_field("process_section_text");

          $about_title = get_field("about_title");
          $about_text = get_field("about_text");
          $about_video = get_field("about_video");
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
                <div class="col-md-7 img-horiz" style="background-image: url('<?php echo $img_men["url"]; ?>');"></div>
                <!--text-->
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                  <div class="text-2 align-items-start d-flex">
                    <div class="desc pt-5 ">
                      <div class="top">
                        <h1 class="mb-4"><?php echo $title_men; ?></h1>
                      </div>
                      <div class="absolute">
                        <p><?php echo $text_men; ?></p>
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
                <div class="col-md-7 img-horiz" style="background-image: url('<?php echo $img_women["url"]; ?>');"></div>
                <!--text-->
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                  <div class="text-3 align-items-center d-flex">
                    <div class="desc pt-5 ">
                      <div class="top">
                        <h1 class="mb-4"><?php echo $title_women; ?></h1>
                      </div>
                      <div class="absolute">
                        <p><?php echo $text_women; ?></p>
                        <p>We design made-to-measure suits and coats for women who value comfort, confidence, and timeless
                          style.Borramee
                          Each socorropiece is created in our atelier in Toulouse, crafted to reflect your shape, your taste, and your
                          lifestyle.<?php echo $text_women; ?></p>                        
                        <p><a href="women.html" class="btn-secondary">Discover now</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>          
          </section>
          <!--END FOR MEN-WOMEN SECTION-->    

          <!--PROCESS-->
          <?php 
          $process_section_title = get_field("process_section_title");
          $process_section_text = get_field("process_section_text");
          ?>

          <!--THE PROCESS-->
          <section class="section-process" id="process">
              <div class="container">
                  <div class="row">
                      <!--Text-->
                      <div class="col-md-6 pe-4">
                          <h2><?php echo $process_section_title; ?></h2>
                          <p><?php echo $process_section_text; ?></p>
                          <a href="#" class="btn btn-primary mt-4">Book a Consultation</a>
                      </div>

                      <!--List with icons-->
                      <div class="col-md-6 px-3">
                          <div class="timeline">
                              <!--PROCESS ITEMS-->
                              <?php get_template_part("template-parts/process"); ?>   

                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--END PROCESS-->

          

          <!--ABOUT -->
          <section class="position-relative overflow-hidden about-section d-flex flex-column flex-lg-row">
            <div class="container">
              <!--video-->
              <div class="row">
                <div class="col-lg-5 d-flex flex-column justify-content-start text-wrapper">
                  <video autoplay muted loop class="h-100" style="object-fit: cover;">
                    <source src="<?php echo $about_video['url']; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>                  
                </div>
                <!--text-->
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                  <h2><?php echo $hero_title; ?></h2>
                  <p><?php echo $about_text; ?></p>
                  <a href="#" class="btn-secondary">Learn more <i class="bi bi-chevron-right ms-2"></i></a>
                </div>
              </div>
            </div>
            </div>
          </section>
          <!--END ABOUT-->          

          <!--PROCESS test-->
          <!-- FAQS -->
          <?php 
            $faq_title = get_field("faq_title");
            $faq_text = get_field("faq_text");            
          ?>

          <section class="section-faqs">
              <div class="container">
                <div class="row">
                  <!-- Text -->
                  <div class="col-md-6 pe-4">
                    <h2><?php echo $faq_title; ?></h2>
                    <p><?php echo $faq_text; ?></p>
                  </div>

                  <!-- Accordion faqs-->
                  <div class="col-md-6 px-4">
                    <div class="accordion accordion-flush accordion-faq" id="accordionFaqs">
                      <!-- ITEMS -->
                      <?php get_template_part("template-parts/faqs"); ?>  

                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!--END PROCESS-->







    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>  
  
<?php get_footer() ?>
