<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name")?></title>

  <?php wp_head(); ?>
</head>

<body>

  <!--NAVIGATION BAR-->
  <header>
    <nav class="navbar navbar-expand-lg py-1">
        <div class="container">
          <!-- Logo -->
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/original/img/LekaLogoWhite.png" alt="Le Ka Logo" style="height: 70px;">
          </a>
          <!-- Mobil version -->
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Navbar content, right -->
          <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
              <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("men"))); ?>">For Men</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("women"))); ?>">For Woman</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("pricing"))); ?>">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("about"))); ?>">About us</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>">Contacts</a></li>
            </ul>
          </div>
        </div>
    </nav>
  </header>
  
    <!--END NAVIGATION BAR-->