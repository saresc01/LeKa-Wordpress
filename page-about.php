<?php get_header() ?>
    <section>
        <div class="container section-first">
        </div>
    </section>
    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
            $presentation_title = get_field("presentation_title");
            $presentation_text = get_field("presentation_text");
            $presentation_img = get_field("presentation_img");
            $approach_title = get_field("approach_title");
            $approach_text = get_field("approach_text");
            $approach_img = get_field("approach_img");            
            ?>

            <!--PRESENTATION-->
            <section class="section-personal">
                <div class="container">
                    <div class="row">
                        <!-- Img -->
                        <div class="col-md-6">
                            <img src="<?php echo $presentation_img["url"]; ?>" alt="Rasa" class="portrait-image img-fluid">
                        </div>

                        <!-- Text -->
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="text-personal">
                                <h1><?php echo $presentation_title; ?></h1>
                                <p><?php echo $presentation_text; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END PRESENTATION-->

            <!--SECTION CARE FROM TEMPLATE PARTS-->
            <?php get_template_part("template-parts/care") ?>

            <!--APPROACH-->
            <section class="section-aproach">
                <div class="container">
                    <div class="row">
                        <!-- Text -->
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="px-">
                                <h2><?php echo $approach_title; ?></h2>
                                <p><?php echo $approach_text; ?></p>
                                <a href="#" class="btn-primary btn">Book a Consultation</a>
                            </div>
                        </div>
                        <!-- Img -->
                        <div class="col-md-6">
                            <img src="<?php echo $approach_img["url"]; ?>" alt="Rasa" class="portrait-aproach img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!--END APPROACH-->            


    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>


<?php get_footer() ?>