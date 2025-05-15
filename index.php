<?php get_header(); ?>

  <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>  

        <?php
        $hero_title = get_field("hero_title");
        $hero_text = get_field("hero_text");
        //$hero_video = get_field("hero_video");
        $hero_img = get_field("hero_img");
        $hero_btn = get_field("hero_btn");

        $title_men = get_field("title_men");
        $text_men = get_field("text_men");
        $img_men = get_field("img_men");
        $btn_men = get_field("btn_men");
        $title_women = get_field("title_women");
        $text_women = get_field("text_women");
        $img_women = get_field("img_women"); 
        $btn_women = get_field("btn_women");   

        $process_section_title = get_field("process_section_title");
        $process_section_text = get_field("process_section_text");
        $process_btn = get_field("process_btn");

        $about_title = get_field("about_title");
        $about_text = get_field("about_text");
        $about_video = get_field("about_video");
        $about_btn = get_field("about_btn");

        $faq_title = get_field("faq_title");
        $faq_text = get_field("faq_text"); 

        $add_img = get_field("add_img");
        $add_text = get_field("add_text");

        $journal_title = get_field("journal_title");
        $journal_text = get_field("journal_text"); 

        $insta_btn = get_field("insta_btn")
        ?>

        <!-- HERO SECTION -->
        <section class="hero d-flex align-items-center section-first ">
          <div class="video-background">
            <img src="<?php echo $hero_img["url"]; ?>" alt=""class="video-background-content">            
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                <p class="hero-text mt-3"><?php echo $hero_text; ?></p>
                <a href="#" class="btn-primary btn" data-bs-toggle="modal" data-bs-target="#appointmentModal"><?php echo $hero_btn; ?></a>
                
              </div>
            </div>
          </div>
        </section>

        <!--FOR MEN-WOMEN SECTION-->
        <section class="men-women">
          <div class="container discover-entry">
            <div class="row no-gutters d-md-flex justify-content-start text-wrapper row-men-women">
              <!--imagen-->
              <div class="col-md-8 img-horiz" style="background-image: url('<?php echo $img_men["url"]; ?>');"></div>
              <!--text-->
              <div class="one-half half-text d-flex justify-content-end align-items-center">
                <div class="text-2 align-items-start d-flex col-md-6">
                  <div class="desc pt-5">
                    <div class="top">
                      <h1 class="mb-4"><?php echo $title_men; ?></h1>
                    </div>
                    <div class="absolute">
                      <p><?php echo $text_men; ?></p>
                      <p><a href="<?php echo esc_url(get_permalink(get_page_by_path("men"))); ?>" class="btn-secondary"><?php echo $btn_men; ?></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          

          <div class="container discover-entry">
            <div class="row no-gutters d-md-flex justify-content-end text-wrapper row-men-women">
              <!--imagen-->
              <div class="col-md-8 img-horiz" style="background-image: url('<?php echo $img_women["url"]; ?>');"></div>
              <!--text-->
              <div class="one-half half-text d-flex justify-content-end align-items-center">
                <div class="text-3 align-items-center d-flex">
                  <div class="desc pt-5 ">
                    <div class="top">
                      <h1 class="mb-4"><?php echo $title_women; ?></h1>
                    </div>
                    <div class="absolute col-lg-6">
                      <p><?php echo $text_women; ?></p>
                                              
                      <p><a href="<?php echo esc_url(get_permalink(get_page_by_path("women"))); ?>" class="btn-secondary"><?php echo $btn_women; ?></a></p>
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
                    <div class="col-md-6 process-space">
                        <h2><?php echo $process_section_title; ?></h2>
                        <p><?php echo $process_section_text; ?></p>
                        <a href="#" class="btn btn-primary mt-4 button-process-mobile" data-bs-toggle="modal" data-bs-target="#appointmentModal"><?php echo $process_btn; ?></a>                        
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
                <h2><?php echo $about_title; ?></h2>
                <p><?php echo $about_text; ?></p>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path("about"))); ?>" class="btn-secondary"><?php echo $about_btn; ?><i class="bi bi-chevron-right ms-2"></i></a>
              </div>
            </div>
          </div>          
        </section>
        <!--END ABOUT--> 
        
        <!-- FAQS --> 
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

        <!--ADD WEDINGS-->
        <section class="rotating-circle-section">
          <div class="background-image-wrapper">
            <img src="<?php echo $add_img["url"]; ?>" alt="" class="background-image">
            <div class="rotating-circle-container">
              <svg viewBox="0 0 200 200" class="rotating-svg">
                <defs>
                  <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                </defs>
                <text fill="white">
                  <textPath xlink:href="#circlePath"><?php echo $add_text; ?></textPath>
                </text>
              </svg>
            </div>
          </div>
        </section>
        <!--END ADD WEDINGS-->

        <!-- OUR JOURNAL - carrousel -->
        <section class="section-spacing">
          <div class="container">
              
            <div class="row pb-3">
                <div class="col-md-5 title-journal">
                  <h2 class="h2-journal"><?php echo $journal_title; ?></h2>
                </div>
                <div class="col-md-7">
                  <p><?php echo $journal_text; ?></p>
                </div>
            </div>

            <?php get_template_part("template-parts/journal"); ?> 

          </div>
        </section>  
        <!--END OUR JOURNAL-->
    
        <!--TESTIMONIALS-->

        <!--END TESTIMONIALS-->        

        <!--WHERE-->
        <?php get_template_part("template-parts/location"); ?>  
        <!--END WHERE-->   

        <!-- INSTAGRAM -->
        <section class="instagram position-relative">
            <?php get_template_part("template-parts/instagram"); ?>

            <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
                <a href="https://www.instagram.com/le_ka_toulouse/" target="_blank" class="btn btn-primary btn-instagram"><?php echo $insta_btn; ?></a>
            </div>
        </section>

    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>  
  
<?php get_footer() ?>
