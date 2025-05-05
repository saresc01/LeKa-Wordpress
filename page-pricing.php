<?php get_header() ?>

    <section>
        <div class="container section-first">
        </div>
    </section>

    <!--COST -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <?php
        $title_cost = get_field("title_cost");
        $text_cost = get_field("text_cost"); 
        $img_add_pricing = get_field("img_add_pricing");  
        $add_btn = get_field("add_btn");                           
        ?>

        <section class="section-cost">
            <div class="container ">
                <div class="row">
                    <!--Text-->
                    <div class="col-md-6 cost-space">
                        <h2><?php echo $title_cost; ?></h2>
                        <p><?php echo $text_cost; ?></p>
                    </div>
                    <!--ACCORDION -->
                    <div class="col-md-6 mb-4">
                        <div class="accordion accordion-flush" id="accordionFit">

                            <?php $priceLoop = new WP_Query(array(
                                "post_type" => "price",
                                "posts_per_page" => -1
                            )); ?>
                            
                            <?php if($priceLoop->have_posts()): ?>
                                <?php while($priceLoop->have_posts()): $priceLoop->the_post(); ?>

                                    <?php
                                    $item_title = get_field("item_title");
                                    $item_price = get_field("item_price");
                                    $post_id = get_the_ID(); // unque ID for each post
                                    ?>

                                    <div class="accordion-item">
                                        <h3 class="accordion-header" id="process-heading-<?php echo $post_id; ?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#process-collapse-<?php echo $post_id; ?>" aria-expanded="false" 
                                                aria-controls="process-collapse-<?php echo $post_id; ?>">
                                                <?php echo $item_title; ?>                                                
                                            </button>
                                        </h3>

                                        <div id="process-collapse-<?php echo $post_id; ?>" class="accordion-collapse collapse"
                                            aria-labelledby="process-heading-<?php echo $post_id; ?>" data-bs-parent="#accordionFit">
                                            <div class="accordion-body">
                                                <?php echo $item_price; ?>
                                            </div>
                                        </div>
                                    </div>                             

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>

                        </div>                            
                    </div>
                    <!--END ACCORDION-->
                </div>
            </div>
        </section>
        <!--END COST-->

        <!--ADD + button-->
        <section class="cta-section">
            <div class="cta-image-wrapper">
                <img src="<?php echo $img_add_pricing["url"]; ?>" alt="background image" class="cta-background-image">
                <div class="cta-button-wrapper">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="btn btn-primary"><?php echo $add_btn; ?></a>
                </div>
            </div>
        </section>
        <!--END ADD + button-->

        <!--PROCESS-->
        <?php 
        $process_section_title = get_field("process_section_title");
        $process_section_text = get_field("process_section_text");
        $process_btn = get_field("process_btn");
        ?>

            <!--THE PROCESS-->
            <section class="section-process" id="process">
                <div class="container">
                    <div class="row">
                        <!--Text-->
                        <div class="col-md-6 process-space">
                            <h2><?php echo $process_section_title; ?></h2>
                            <p><?php echo $process_section_text; ?></p>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="btn btn-primary mt-4 button-process-mobile"><?php echo $process_btn; ?></a>
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
            

            
    <?php the_content(); ?>
    <?php endwhile; else: endif; ?>  


<?php get_footer() ?>