<?php
$instagramLoop = new WP_Query(array(
    'post_type' => 'instagram',
    'posts_per_page' => -1
));

if ($instagramLoop->have_posts()) :
?>
    <div class="container-fluid px-0">
        <div class="row g-0 flex-nowrap justify-content-center">
            <?php while ($instagramLoop->have_posts()) : $instagramLoop->the_post();
                $insta_img = get_field('insta_img');
                $insta_url = get_field('insta_url');
                if ($insta_img && $insta_url) :
            ?>
                <div class="col-6 col-sm-4 col-md-2">
                    <div class="insta-item">
                        <a href="<?php echo esc_url($insta_url); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo esc_url($insta_img['url']); ?>" alt="Instagram" class="img-fluid">
                        </a>
                    </div>
                </div>
            <?php
                endif;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
<?php endif; ?>

