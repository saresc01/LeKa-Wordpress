<?php
$galleryLoop = new WP_Query([
    'post_type' => 'gallery',
    'posts_per_page' => -1
]);

$images = [];

if ($galleryLoop->have_posts()) {
    while ($galleryLoop->have_posts()) {
        $galleryLoop->the_post();
        $picture = get_field('picture');
        if ($picture) {
            $images[] = $picture;
        }
    }
    wp_reset_postdata();
}
?>

<?php if (!empty($images)): ?>

<!-- GALLERY DESKTOP -->
<div class="row d-none d-lg-flex">
    <?php
    // Dividir imágenes en grupos de 2 para cada columna
    $chunks = array_chunk($images, 2);
    foreach ($chunks as $chunk): ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <?php foreach ($chunk as $img): ?>
                <img src="<?php echo esc_url($img['url']); ?>"
                     alt="<?php echo esc_attr($img['alt']); ?>"
                     class="w-100 shadow-1-strong mb-4" />
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<!-- CAROUSEL MOBILE/TABLET -->
<div id="journalCarousel" class="carousel slide d-lg-none" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($images as $index => $img): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo esc_url($img['url']); ?>"
                     alt="<?php echo esc_attr($img['alt']); ?>"
                     class="d-block w-100">
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php endif; ?>
