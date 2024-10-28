<?php get_header(); ?>



<main role="main">
  
      <!-- Carousel -->
      <?php get_template_part( 'slider' ); ?>

      
      <!-- 3picup -->
      <section class="bg-light">
        <div class="container py-5">
          <div class="row pt-5">
            <h2 class="col-12 text-center font-weight-bold h1" style="font-family: 'Coda Caption', sans-serif;">MITSUI CO.,ltd</h2>
            <p class="col-12 text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia nulla vel nulla ornare, eu vulputate nunc cursus. Sed non porttitor risus, sed elementum nisl. Cras quis lacus hendrerit, efficitur lorem non, bibendum nulla. In maximus fermentum neque sed facilisis. Quisque ante quam, malesuada vel posuere vitae, imperdiet quis magna.</p>
          </div>
          <div class="row">
            <div class="col-12 col-md-4 text-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-7 col-md-11 col-lg-9 mx-auto p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="About Us" class="rounded-circle img-fluid">
                  </div>
                  <div class="col-12">
                    <h3 class="mt-5 h3 text-dark">About Us</h3>
                  </div>
                  <div class="col-12">
                    <p class="text-dark my-3">Aliquam auctor magna iaculis tellus iaculis porta. Nam pellentesque urna nisi, sed sagittis tortor lacinia sit amet. Nunc in tincidunt.</p>
                  </div>
                  <div class="col-12 col-sm-5 col-md-12 col-lg-9 mx-auto">
                    <a href="#" class="btn btn-primary btn-block" role="button"><i class="far fa-address-card fa-fw"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 text-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-7 col-md-11 col-lg-9 mx-auto p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service.jpg" alt="Service" class="rounded-circle img-fluid">
                  </div>
                  <div class="col-12">
                    <h3 class="mt-5 h3 text-dark">Service</h3>
                  </div>
                  <div class="col-12">
                    <p class="text-dark my-3">Integer sed auctor eros, nec tincidunt velit. Sed dignissim magna id congue molestie. Suspendisse et mauris sit amet diam posuere.</p>
                  </div>
                  <div class="col-12 col-sm-5 col-md-12 col-lg-9 mx-auto">
                    <a href="#" class="btn btn-primary btn-block" role="button"><i class="fas fa-wrench"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-4 text-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-7 col-md-11 col-lg-9 mx-auto p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zaiko.jpg" alt="在庫車両" class="rounded-circle img-fluid">
                  </div>
                  <div class="col-12">
                    <h3 class="mt-5 h3 text-dark">在庫車両</h3>
                  </div>
                  <div class="col-12">
                    <p class="text-dark my-3">Donec eget felis congue, pharetra risus sed, commodo risus. Maecenas eu ipsum odio. Aliquam condimentum egestas ante, quis viverra erat.</p>
                  </div>
                  <div class="col-12 col-sm-5 col-md-12 col-lg-9 mx-auto">
                    <a href="#" class="btn btn-primary btn-block" role="button"><i class="fas fa-car fa-fw"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- 紹介 -->
      <section class="bg-primary">
        <div class="container py-5">
          <div class="row featurette py-5 py-md-3 py-lg-3 py-xl-5">
            <div class="col-md-5 pt-5">
              <img class="featurette-image img-fluid mx-auto d-none d-md-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/images/world.png" alt="mitsui image">
              <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/goo.png" alt="zaiko image">
            </div>
            <div class="col-md-7 text-light pt-5">
              <h3 class="featurette-heading mb-4">見出し 見出し 見出し</h3>
              <p class="lead mb-4 h6" style="color: #aed6f1;">Nunc feugiat elit ex, vel maximus tellus gravida quis. Fusce ultrices faucibus ligula, eget finibus elit mattis eu. Proin sapien.</p>
              <p class="lead mb-4 h6" style="color: #aed6f1;">Cras consectetur consectetur quam ut sollicitudin. Nulla venenatis dolor nec ante ornare ullamcorper. Quisque eget aliquam lorem. Donec ac leo.</p>
              <a href="#" class="btn btn-light btn-lg" role="button" style="color: #3498db;"><i class="fas fa-car fa-fw"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
            </div>
          </div>
        </div>
      </section>
      
      <!-- 紹介 -->
      <section class="bg-light">
        <div class="container py-5">
          <div class="row featurette py-5 py-md-3 py-lg-3 py-xl-5">
            <div class="col-md-5 pt-5 order-md-2">
              <img class="featurette-image img-fluid mx-auto d-none d-md-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/images/world.png" alt="mitsui image image">
              <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/NEWS.png" alt="news image image">
            </div>
            <div class="col-md-7 text-dark pt-5 order-md-1">
              <h3 class="featurette-heading mb-4">Head Line Head Line</h3>
              <p class="lead mb-4 h6 text-secondary">Vestibulum congue fermentum risus vitae feugiat. Mauris a risus a tellus ullamcorper porttitor. Donec ullamcorper sagittis quam quis hendrerit. Nullam.</p>
              <p class="lead mb-4 h6 text-secondary">Nulla ac ipsum nisi. Nunc sit amet placerat velit. Vestibulum sed sagittis turpis, eu iaculis nunc. Curabitur nec tempus massa.</p>
              <a href="#" class="btn btn-primary btn-lg text-light" role="button"><i class="fas fa-car fa-fw"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
            </div>
          </div>
        </div>
      </section>

      <!-- 紹介 -->
      <section class="bg-primary">
        <div class="container py-5">
          <div class="row featurette py-5 py-md-3 py-lg-3 py-xl-5">
            <div class="col-md-5 pt-5">
              <img class="featurette-image img-fluid mx-auto d-none d-md-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/images/world.png" alt="mitsui image image">
              <img class="featurette-image img-fluid mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/mitsuinote.png" alt="note image image">
            </div>
            <div class="col-md-7 text-light pt-5">
              <h3 class="featurette-heading mb-4">Title Title Title</h3>
              <p class="lead mb-4 h6" style="color: #aed6f1;">Praesent lacus felis, tempus at rutrum ut, bibendum id sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
              <p class="lead mb-4 h6" style="color: #aed6f1;">In hac habitasse platea dictumst. Donec imperdiet gravida sapien accumsan cursus. Aenean malesuada condimentum quam, eget cursus nunc scelerisque sit.</p>
              <a href="#" class="btn btn-light btn-lg" role="button" style="color: #3498db;"><i class="fas fa-car fa-fw"></i> View details <i class="fas fa-angle-double-right fa-fw"></i></i></a>
            </div>
          </div>
        </div>
      </section>
      
      <!-- space -->
      <div style="height: 80px;">
      </div>
    
      <!-- social button -->
      <section class="py-5">
        <div class="container">
          <div class="row mx-0">
            <div class="col-6 col-md-3 p-1">
              <a class="btn btn-block btn-sm btn-facebook text-left text-white" href="#"><span class="fab fa-facebook-square"></span> Facebook</a>
            </div>
            <div class="col-6 col-md-3 p-1">
              <a class="btn btn-block btn-sm btn-twitter text-left text-white" href="#"><span class="fab fa-twitter-square"></span> Twitter</a>
            </div>
            <div class="col-6 col-md-3 p-1">
              <a class="btn btn-block btn-sm btn-google text-left text-white" href="#"><span class="fab fa-google"></span> Google</a>
            </div>
            <div class="col-6 col-md-3 p-1">
              <a class="btn btn-block btn-sm btn-instagram text-left text-white" href="#"><span class="fab fa-instagram"></span> Instagram</a>
            </div>
          </div>
        </div>
      </section>
    </main>





<?php get_footer(); ?>
