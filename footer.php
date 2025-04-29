<?php wp_footer(); ?>

<!-- Footer -->
<footer class="bg-main pt-5 pb-4">
    <div class="container">
      <!-- Logo -->
      <div class="row align-items-center mb-4">
        <div class="col-12 col-md-6">
          <a href="index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/original/img/LekaLogoWhite.png" alt="Le Ka Logo" class="footer-logo">            
          </a>
        </div>
      </div>

      <!-- Second row, links and newsletter -->
      <div class="row">
        <!-- Left: Links and Button -->
        <div class="col-md-8 mb-4">
          <div class="footer-links d-flex flex-wrap gap-3">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path("men"))); ?>" class="footer-link">For Men</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path("women"))); ?>" class="footer-link">For Women</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path("pricing"))); ?>" class="footer-link">Pricing</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="footer-link">About Us</a>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>" class="footer-link">Contacts</a>
          </div>
        </div>

        <!-- Right: Newsletter Form -->
        <div class="col-md-4 mb-4">
          <p class="footer-text">Get the freshest news from us</p>
          <form class="footer-form d-flex flex-column flex-sm-row gap-2">
            <input type="email" class="footer-input" placeholder="Your email address" required>
            <button type="submit" class="btn-third">Subscribe</button>
          </form>
        </div>
      </div>

      <!-- Bottom Line -->
      <div class="footer-bottom d-flex justify-content-between align-items-center">
        <div class="footer-links-bottom">
          <a href="#" class="footer-link">Terms & Conditions</a>
          <div class="vr vr-footer"></div>
          <a href="#" class="footer-link">Privacy Policy</a>
        </div>
        <div class="footer-rights">
          © 2025 Le Ka Project. All rights reserved.
        </div>
      </div>
    </div>
  </footer>

  <!--Scripts-->
  <!-- Bootstrap JS Bundle (incluye Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>