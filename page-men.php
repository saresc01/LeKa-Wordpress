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
            $men_btn = get_field("men_btn");
            ?>

            <div class="container py-5">
                <div class="row">
                    <!-- Img -->
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="project-sidebar">

                            <?php $imgMenPictureLoop = new WP_Query(array(
                                "post_type" => "picture-men-page",
                                "posts_per_page" => -1
                            )); ?>
                            
                                <?php if($imgMenPictureLoop->have_posts()): ?>
                                    <?php while($imgMenPictureLoop->have_posts()): $imgMenPictureLoop->the_post(); ?>

                                        <?php                                      
                                        $img_men_page = get_field("img_men_page");
                                        $text_img_men_page = get_field("text_img_men_page");         
                                        ?>                                

                                        <figure class="portfolio-item">
                                            <img src="<?php echo $img_men_page["url"]; ?>" alt=""class="portfolio-img">
                                            <h3 class="portfolio-caption"><?php echo $text_img_men_page; ?></h3>
                                        </figure>  

                                    <?php endwhile;?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?> 
                                            
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="col-md-5 order-1 order-md-2">
                        <div class="sticky-top pt-4" style="top: var(--navbar-height);">
                            <h1><?php echo $title_men_page; ?></h1>
                            <p><?php echo $description_men_page; ?></p>
                            <div>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="btn-primary btn"><?php echo $men_btn; ?></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
             </div>

        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>          


<?php get_footer() ?>