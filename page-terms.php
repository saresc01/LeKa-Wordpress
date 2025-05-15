<?php get_header() ?>

    <section>
        <div class="container section-first">
        </div>
    </section>

    <!--Terms and conditions-->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php
                $cond_text = get_field("cond_text");
                $cond_title = get_field("cond_title");           
            ?>

            <div class="container py-5">
                <div class="row">
                    

                    <!-- Text -->
                    <div class="container-plain">
                        <div class="sticky-top pt-4" style="top: var(--navbar-height);">
                            <h2><?php echo $cond_title; ?></h2>
                            <p><?php echo $cond_text; ?></p>
                            
                        </div>
                    </div>
                    
                </div>
             </div>

        <?php the_content(); ?>
        <?php endwhile; else: endif; ?>          


<?php get_footer() ?>