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
            $care_section_title = get_field("care_section_title");
            $approach_title = get_field("approach_title");
            $approach_text = get_field("approach_text");
            $approach_img = get_field("approach_img");
            $approach_btn = get_field("approach_btn");            
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

            <!--SECTION CARE-->
            <section class="section-care">
                <div class="container">
                    <h2 class="text-center mb-4"><?php echo $care_section_title; ?></h2>

                    <?php 
                    $care_items = [];

                    $CareLoop = new WP_Query(array(
                        "post_type" => "thing-to-care",
                        "posts_per_page" => -1
                    ));

                    if ($CareLoop->have_posts()):
                        while ($CareLoop->have_posts()): $CareLoop->the_post();
                            $care_items[] = array(
                                'icon' => get_field("care_icon"), 
                                'title' => get_field("care_title"),
                                'text'  => get_field("care_text")
                            );
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                    <!-- DESKTOP -->
                    <div class="row text-center d-none d-md-flex">
                        <?php foreach ($care_items as $item): ?>
                            <div class="col-md-3 mb-4">
                                <div class="py-4 px-3 h-100">
                                    <div class="icon-wrapper mb-3">                            
                                    <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="" style="height: 50px;">

                                    </div>
                                    <h4><?php echo esc_html($item['title']); ?></h4>
                                    <p><?php echo esc_html($item['text']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- MOBILE VERSION -->
                    <div id="why-carousel" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
                        <div class="carousel-inner text-center">
                            <?php foreach ($care_items as $index => $item): ?>
                                <div class="carousel-item <?php if ($index === 0) echo 'active'; ?>">
                                    <div class="py-4 px-3">
                                        <div class="icon-wrapper mb-3">                                
                                        <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="" style="height: 50px;">
                                        </div>
                                        <h4><?php echo esc_html($item['title']); ?></h4>
                                        <p><?php echo esc_html($item['text']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </section>
            <!--END SECTION CARE-->           

            <!--APPROACH-->
            <section class="section-aproach">
                <div class="container">
                    <div class="row">
                        <!-- Text -->
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="px-">
                                <h2><?php echo $approach_title; ?></h2>
                                <p><?php echo $approach_text; ?></p>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="btn-primary btn"><?php echo $approach_btn; ?></a>
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