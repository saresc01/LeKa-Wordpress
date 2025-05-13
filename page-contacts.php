<?php get_header() ?>
    <section>
        <div class="container section-first">
        </div>
    </section>
    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
            $contact_page_title = get_field("contact_page_title");
            $contact_img = get_field("contact_img");
            $contact_text = get_field("contact_text");
            $phone_title = get_field("phone_title");
            $contact_phone = get_field("contact_phone");
            $email_title = get_field("email_title");
            $contact_email = get_field("contact_email");
            $address_title = get_field("address_title");
            $contact_address = get_field("contact_address");
            $consultation_form = get_field("consultation_form");
            $facebook = get_field("facebook");
            $instagram = get_field("instagram");
            $consultation_btn = get_field("consultation_btn"); // FORM BUTTON

            $circle_text_add = get_field("circle_text_add");
            $img_add_contact = get_field("img_add_contact");
            ?>

            <!--FREE CONSULTATION-->
            <section class="consultation">
                <div class="container">

                    <!-- Title-->
                    <div class="row request-title">
                        <h2 class="text-center"><?php echo $contact_page_title; ?></h2>
                    </div>

                    <div class="row align-items-center">
                        <!-- img + text -->
                        <div class="col-md-6">
                            <figure><img src="<?php echo $contact_img["url"]; ?>" alt="" class="img-fluid mb-3"></figure>
                            <p><?php echo $contact_text; ?></p>
                            <hr class="my-3" />
                            <div class="row">
                                <div class="contact-info">
                                    <div class="info-row">
                                        <div class="info-label"><?php echo $phone_title; ?></div>
                                        <div class="info-value"><?php echo $contact_phone; ?></div>
                                    </div>
                                    <div class="info-row">
                                        <div class="info-label"><?php echo $email_title; ?></div>
                                        <div class="info-value"><?php echo $contact_email; ?></div>
                                    </div>
                                    <div class="info-row">
                                        <div class="info-label"><?php echo $address_title; ?></div>
                                        <div class="info-value"><?php echo $contact_address; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-icons">
                                <a href="<?php echo $facebook ?>" target="_blank" class="social-icon">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="<?php echo $instagram ?>" target="_blank" class="social-icon">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Vertical Line -->
                        <div class="col-md-1 d-none d-md-flex justify-content-center">
                            <div class="vr vr-vertical"></div>
                        </div>

                        <!-- Form  check after install plugin contact form 7-->
                        <div class="col-md-5 mt-5 mt-md-0">
                            <h3 class="text-start"><?php echo $consultation_form; ?></h3>
                            
                                <?php echo do_shortcode('[contact-form-7 id="f3a51be" title="Form Contact Page"]'); ?>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--END FREE CONSULTATION-->
            
            <!--ADD-->
            <section class="rotating-two-section">
                <div class="background-image-wrapper">
                    <img src="<?php echo $img_add_contact["url"]; ?>" alt="bg place" class="background-image">
                    <div class="rotating-circle-container">
                        <svg viewBox="0 0 200 200" class="rotating-svg">
                            <defs>
                                <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                            </defs>
                            <text fill="white">
                                <textPath xlink:href="#circlePath"><?php echo $circle_text_add; ?></textPath>
                            </text>
                        </svg>
                    </div>
                </div>
            </section>
            <!--END ADD-->

    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>


<?php get_footer() ?>