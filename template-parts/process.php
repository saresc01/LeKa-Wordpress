<?php $processLoop = new WP_Query(array(
    "post_type" => "process",
    "posts_per_page" => -1
)); ?>

    <?php if($processLoop->have_posts()): ?>
        <?php while($processLoop->have_posts()): $processLoop->the_post(); ?>

            <?php                                      
            $icon_process= get_field("icon_process");
            $title_process = get_field("title_process"); 
            $text_process = get_field("text_process");          
            ?>                                

            <div class="timeline-step d-flex px-3">
                <div class="timeline-icon-wrapper">
                    <img src="<?php echo esc_url($icon_process['url']); ?>" alt="" class="timeline-icon-image">
                    <div class="timeline-line"></div>
                </div>
                
                <div class="ms-4">
                    <h3><?php echo $title_process; ?></h3>
                    <p><?php echo $text_process; ?></p>
                </div>
            </div>            

        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>      

