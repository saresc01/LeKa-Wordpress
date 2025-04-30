<?php 
  $process_title = get_field("process_title");
  $process_text = get_field("process_text");
?>

    <!--THE PROCESS-->
    <section class="section-process" id="process">
        <div class="container">
            <div class="row">
                <!--Text-->
                <div class="col-md-6 pe-4">
                    <h2>THE PROCESS</h2>
                    <p>A simple, step-by-step approach to getting something made just for you.<br>
                        Made-to-measure should feel personal, not complicated. This process is designed to be clear,
                        collaborative,
                        and focused on what fits — your style, your body, and your day-to-day life.</p>
                    <a href="#" class="btn btn-primary mt-4">Book a Consultation</a>
                </div>

                <!--List with icons-->
                <div class="col-md-6 px-3">
                    <div class="timeline">

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

                                    <div class="timeline-step d-flex ">
                                        <div class="icon-wrapper text-center px-3">
                                            <i class="bi bi-calendar2-heart-fill fs-2 icon-colored"></i>
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
                        
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
