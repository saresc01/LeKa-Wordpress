<?php wp_footer(); ?>

<!-- Footer -->
<footer class="bg-main pt-5 pb-4 footer-section">

      <?php 
      $linkfooterLoop = new WP_Query(array(
        "post_type" => "linkfooter",
        "posts_per_page" => 1
      ));
      ?>

      <?php if($linkfooterLoop->have_posts()): ?>
        <?php while($linkfooterLoop->have_posts()): $linkfooterLoop->the_post() ?>

        <?php
        $subpage_men = get_field("subpage_men");
        $subpage_women = get_field("subpage_women");
        $subpage_pricing = get_field("subpage_pricing");
        $subpage_about = get_field("subpage_about");
        $subpage_contacts = get_field("subpage_contacts");

        $newsletter_title = get_field("newsletter_title");       

        $terms = get_field("terms");
        $privacy_policy = get_field("privacy_policy");

        $subpage_men_link = get_field("subpage_men_link");
        $subpage_women_link = get_field("subpage_women_link");
        $subpage_pricing_link = get_field("subpage_pricing_link");
        $subpage_about_link = get_field("subpage_about_link");
        $subpage_contact_link = get_field("subpage_contact_link");
        $terms_link = get_field("terms_and_conditions_link");
        $privacy_link = get_field("privacy_link");
        ?>

        <div class="container footer-container">
          <!-- Logo -->
          <div class="row mb-4">
            <div class="col-12 col-md-6 footer-container">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Logo_leka.png" alt="Le Ka Logo" class="footer-logo">            
              </a>
            </div>
          </div>

          <!-- Second row, links and newsletter -->
          <div class="row">
            <!-- Left: Links and Button -->
            <div class="col-md-8 mb-4">
              <div class="footer-links d-flex flex-wrap gap-3">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_men_link))); ?>" class="footer-link"><?php echo $subpage_men; ?></a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_women_link))); ?>" class="footer-link"><?php echo $subpage_women; ?></a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_pricing_link))); ?>" class="footer-link"><?php echo $subpage_pricing; ?></a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_about_link))); ?>" class="footer-link"><?php echo $subpage_about; ?></a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_contact_link))); ?>" class="footer-link"><?php echo $subpage_contacts; ?></a>
              </div>
            </div>

            <!-- Right: Newsletter Form -->
            <div class="col-md-4 footer-space ">
              <p class="footer-text"><?php echo $newsletter_title; ?></p>

              <!--shortcode form nesletter-->
              <div class="flex-sm-row gap-2">  
                <?php echo do_shortcode('[contact-form-7 id="56c3bcb" title="Form Newsletter Footer"]'); ?>
              </div>  
              <div class="wpcf7-response-output"></div>            
          </div>

          <!-- Bottom Line -->
          <div class="footer-bottom d-flex justify-content-between align-items-center">
            <div class="footer-links-bottom">
              <a href="<?php echo esc_url(get_permalink(get_page_by_path($terms_link))); ?>" class="footer-link"><?php echo $terms; ?></a>
              <div class="vr vr-footer"></div>
              <a href="<?php echo esc_url(get_permalink(get_page_by_path($privacy_link))); ?>" class="footer-link"><?php echo $privacy_policy; ?></a>
            </div>            
            <div class="footer-rights"> 
              <?php pll_e("Design by")?><a href="https://www.linkedin.com/in/sara-escallon" target="_blank" class="footer-link-name"> Sara Escallon</a> <?php pll_e("and")?> <a href="https://www.linkedin.com/in/giedre-limantaite/" target="_blank" class="footer-link-name">Giedre Limantaite</a> 
              © 2025 Le Ka Project. <?php pll_e("All rights reserved.")?>
            </div>
          </div>

          <?php endwhile; ?>
          <?php endif;?>
          <?php wp_reset_postdata() ?>         

        </div>
    </div>
  </footer>

  <!--modal-->
  <?php
   $modalLoop = new WP_Query(array(
        "post_type" => "modal",
        "posts_per_page" => -1
    )); ?>
                
    <?php if($modalLoop->have_posts()): ?>
        <?php while($modalLoop->have_posts()): $modalLoop->the_post(); ?>

        <?php
        $modal_title = get_field("modal_title");
        ?>

        <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">              
                
              <div class="modal-header">          
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h3 class="modal-title" id="appointmentModalLabel"><?php echo esc_html($modal_title); ?></h3>   
                <?php echo do_shortcode('[contact-form-7 id="0836c92" title="Modal Form"]'); ?>
              </div>

            </div>
          </div>
        </div>

        <?php endwhile;?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>    


  <!--Scripts-->
  <!-- Bootstrap JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Activar swipe para carouseles -->
  <script> 

</script>

</body>

</html>
