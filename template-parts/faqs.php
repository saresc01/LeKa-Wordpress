<?php $faqLoop = new WP_Query(array(
        "post_type" => "faq",
        "posts_per_page" => -1
    )); ?>
                
    <?php if($faqLoop->have_posts()): ?>
        <?php while($faqLoop->have_posts()): $faqLoop->the_post(); ?>

            <?php                                      
            $question = get_field("question");
            $answer = get_field("answer"); 
            $faq_id = get_the_ID();         
            ?>                                

            <div class="accordion-faqs-item">
                <h2 class="accordion-faqs-header" id="faq-heading-<?php echo $faq_id; ?>">
                    <button class="accordion-faqs-button collapsed d-flex justify-content-between align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-<?php echo $faq_id; ?>" aria-expanded="false"
                        aria-controls="faq-collapse-<?php echo $faq_id; ?>">
                        <span><?php echo $question; ?></span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                </h2>
                <div id="faq-collapse-<?php echo $faq_id; ?>" class="accordion-collapse collapse" aria-labelledby="faq-heading-<?php echo $faq_id; ?>" data-bs-parent="#accordionFaqs">
                    <div class="accordion-faqs-body"><?php echo $answer; ?></div>
                </div>
            </div>

        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>