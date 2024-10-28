<?php get_header();?>


<main>
      <!-- page title -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-12">
              <h1 class="display-4 text-center" style="font-family: 'Coda Caption', sans-serif;"><?php the_title();?></h1>
            </div>
          </div>
        </div>
      </section>

      <!-- breadcrumb -->
      <section class="bg-primary">
        <div class="container mt-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 py-1 px-0">
              <li class="breadcrumb-item"><a href="#" class="text-light"><i class="fas fa-home te text-light"></i> Top</a></li>
              <li class="breadcrumb-item text-light active" aria-current="page"><?php the_title();?></li>
            </ol>
          </nav>
        </div>
      </section>

      <section class="bg-light">
        <div class="container py-5">
        <?php 
        if(have_posts()){
            echo "<section class=\"bg-light\">
            <div class=\"container py-5\">
              <div class=\"row featurette py-5 py-md-3 py-lg-3 py-xl-5\>
                <div class=\"col-12 pb-2 my-3 border-bottom border-primary text-dark\">
                  <h2 class=\"mb-0\">";
                  the_title();
                  echo "</h2>
                </div>
                <div class=\"col-md-5 pt-1\">
                  <img class=\"featurette-image img-fluid mx-auto d-none d-md-block d-lg-none\" src=\"img/world.png\" alt=\"Mitsui imag\">
                  <img class=\"featurette-image img-fluid mx-auto\" src=\"img/hanbai.jpg\" alt=\"shaken image\">
                </div>
                <div class=\"col-md-7 text-dark pt-3\">
                  <p class=\"lead mb-4 h6 text-secondary\" style=\"line-height: 28px;\">在庫車多数！在庫車多数！在庫車多数！在庫車多数！</p>
                  <p class=\"lead mb-4 h6 text-secondary\">Nulla ac ipsum nisi. Nunc sit amet placerat velit. Vestibulum sed sagittis turpis, eu iaculis nunc. Curabitur nec tempus massa.</p>
                  <a href=\"#\" class=\"btn btn-primary btn-lg text-light\" role=\"button\"><i class=\"fas fa-car fa-fw\"></i> View details <i class=\"fas fa-angle-double-right fa-fw\"></i></i></a>
                </div>
              </div>
            </div>
          </section>";
        }
        while(have_posts()){
                the_post();
                the_content();
            };
            
        echo "";
            ?>

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


<?php

get_footer();