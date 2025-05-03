<?php 
    $location_img = get_field("location_img");
    $email_title = get_field("email_title");
    $email = get_field("email");    
    $phone_title = get_field("phone_title");       
    $phone = get_field("phone");   
    $street_title = get_field("street_title"); 
    $street = get_field("street");        
?>

<section class="section-location">
  <div class="container">            
    <div class="row align-items-center">
      <!-- Imagen -->
      <div class="col-md-6 order-md-2">
        <img src="<?php echo $location_img["url"]; ?>" alt="" class="img-fluid contact-img" />
      </div>

      <!-- Information -->
      <div class="col-md-6 mb-4 mb-md-0 order-md-1">
        <div class="contact-info">
          <!-- Email -->
          <div class="mb-4 d-flex align-items-start">
            <div class="icon-wrapper me-3 mt-1">
              <i class="bi bi-envelope-fill fs-3 icon-colored"></i>
            </div>
            <div>
              <h4><?php echo $email_title; ?></h4>
              <p><?php echo $email; ?></p>
            </div>
          </div>

          <!-- Phone -->
          <div class="mb-4 d-flex align-items-start">
            <div class="icon-wrapper me-3 mt-1">
              <i class="bi bi-telephone-fill fs-3 icon-colored"></i>
            </div>
            <div>
              <h4><?php echo $phone_title; ?></h4>
              <p><?php echo $phone; ?></p>
            </div>
          </div>

          <!-- Address -->
          <div class="mb-4 d-flex align-items-start">
            <div class="icon-wrapper me-3 mt-1">
              <i class="bi bi-geo-alt-fill fs-3 icon-colored"></i>
            </div>
            <div>
              <h4><?php echo $street_title; ?></h4>
              <p><?php echo $street; ?></p>
              <p><a href="#" class="btn-secondary">Get direction</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>            
</section>