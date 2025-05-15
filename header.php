<!DOCTYPE html>
<html <?php language_attributes() ?>>
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
                $subpage_men_link = get_field("subpage_men_link");
                $subpage_women_link = get_field("subpage_women_link");
                $subpage_pricing_link = get_field("subpage_pricing_link");
                $subpage_about_link = get_field("subpage_about_link");
                $subpage_contact_link = get_field("subpage_contact_link");
              ?>

              <!-- Logo -->
              <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Logo_leka.png" alt="Le Ka Logo" style="height: 70px;">
              </a>

              <!-- Flag mobile version -->
              <div class="flag-container-mobile flag-mobile">
                <?php custom_single_language_switcher(); ?>
              </div>

              <!-- Menu mobile version -->
              <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <!-- Navbar content, right -->
              <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_men_link))); ?>"><?php echo $subpage_men; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_women_link))); ?>"><?php echo $subpage_women; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_pricing_link))); ?>"><?php echo $subpage_pricing; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_about_link))); ?>"><?php echo $subpage_about; ?></a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo esc_url(get_permalink(get_page_by_path($subpage_contact_link))); ?>"><?php echo $subpage_contacts; ?></a></li>
                </ul>       

              </div>

              <div class="flag-container-desktop flag-desktop">
                <?php custom_single_language_switcher(); ?>
              </div>

              <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata() ?>         
        </div>
    </nav>
    
  </header>  
  <!--END NAVIGATION BAR-->