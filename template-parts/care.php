<section class="section-care">
    <div class="container">
        <h2 class="text-center mb-4">WHAT I CARE ABOUT</h2>

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
