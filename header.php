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

          <?php 
            $link_navbarLoop = new WP_Query(array(
                "post_type" => "link_navbar",
                "posts_per_page" => 1
            ));
            ?>

            <?php if($link_navbarLoop->have_posts()): ?>
              <?php while($link_navbarLoop->have_posts()): $link_navbarLoop->the_post() ?>

              <?php
              $subpage_men = get_field("subpage_men");
              $subpage_women = get_field("subpage_women");
              $subpage_pricing = get_field("subpage_pricing");
              $subpage_about = get_field("subpage_about");
              $subpage_contacts = get_field("subpage_contacts");
              ?>

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
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("men"))); ?>"><?php echo $subpage_men; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("women"))); ?>"><?php echo $subpage_women; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("pricing"))); ?>"><?php echo $subpage_pricing; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("about"))); ?>"><?php echo $subpage_about; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path("contacts"))); ?>"><?php echo $subpage_contacts; ?></a></li>
                </ul>
              </div>

              <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>         
        </div>
    </nav>
    
  </header>  
  <!--END NAVIGATION BAR-->