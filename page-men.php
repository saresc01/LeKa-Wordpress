<?php get_header() ?>

    <section>
        <div class="container section-first">
        </div>
    </section>

    <!--PORTFOLIO MEN-->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
            $title_men_page = get_field("title_men_page");
            $description_men_page = get_field("description_men_page");
            $img_women_page = get_field("img_men_page");
            $text_img_men_page = get_field("text_img_men_page");
            ?>

            <div class="container py-5">
                <div class="row">
                    <!-- Img -->
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="project-sidebar">
                            
                            <figure class="portfolio-item">
                                <img src="<?php echo $img_men_page["url"]; ?>" alt=""class="portfolio-img">
                                <h3 class="portfolio-caption"><?php echo $text_img_men_page; ?></h3>
                            </figure>     
                                            
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="col-md-5 order-1 order-md-2">
                        <div class="sticky-top pt-4" style="top: var(--navbar-height);">
                            <h1><?php echo $title_men_page; ?></h1>
                            <p><?php echo $description_men_page; ?></p>
                            <div>
                                <a href="#" class="btn-primary btn">Book a Consultation</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
             </div>

        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>          


<?php get_footer() ?>