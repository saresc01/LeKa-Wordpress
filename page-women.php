<?php get_header() ?>

    <section>
        <div class="container section-first">
        </div>
    </section>

    <!--PORTFOLIO WOMEN-->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
            $title_women_page = get_field("title_women_page");
            $description_women_page = get_field("description_women_page");
            $women_btn = get_field("women_btn");                        
            ?>

            <div class="container py-5">
                <div class="row">
                    <!-- Img -->
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="project-sidebar">

                            <?php $imgWomenPictureLoop = new WP_Query(array(
                                    "post_type" => "picture-women-page",
                                    "posts_per_page" => -1
                            )); ?>
                                
                                <?php if($imgWomenPictureLoop->have_posts()): ?>
                                    <?php while($imgWomenPictureLoop->have_posts()): $imgWomenPictureLoop->the_post(); ?>

                                        <?php                                      
                                        $img_women_page = get_field("img_women_page");
                                        $text_img_women_page = get_field("text_img_women_page");         
                                        ?>                                

                                        <figure class="portfolio-item">
                                            <img src="<?php echo $img_women_page["url"]; ?>" alt=""class="portfolio-img">
                                            <h3 class="portfolio-caption"><?php echo $text_img_women_page; ?></h3>
                                        </figure>  

                                    <?php endwhile;?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?> 
                                                
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="col-md-5 order-1 order-md-2">
                        <div class="sticky-top pt-4" style="top: var(--navbar-height);">
                            <h1><?php echo $title_women_page; ?></h1>
                            <p><?php echo $description_women_page; ?></p>
                            <div>
                                <a href="#" class="btn-primary btn" data-bs-toggle="modal" data-bs-target="#appointmentModal"><?php echo $women_btn; ?></a>                                                               
                            </div>
                        </div>
                    </div>
                    
                </div>
             </div>

        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>          


<?php get_footer() ?>