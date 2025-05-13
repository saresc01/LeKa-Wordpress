<?php get_header() ?>

    <section>
        <div class="container section-first">
        </div>
    </section>

    <!--Privacy policy-->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
            $privacy_text = get_field("privacy_text");
            $privacy_title = get_field("privacy_title");           
            ?>

            <div class="container py-5">
                <div class="row">                    

                    <!-- Text -->
                    <div class="col-md-5 order-1 order-md-2">
                        <div class="sticky-top pt-4" style="top: var(--navbar-height);">
                            <h1><?php echo $privacy_title; ?></h1>
                            <p><?php echo $privacy_text; ?></p>
                            
                        </div>
                    </div>
                    
                </div>
             </div>

        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>          


<?php get_footer() ?>