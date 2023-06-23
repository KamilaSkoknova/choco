<?php get_header(); ?>

<div class="magnet">
  <h1 class="magnet__header text-center">Najlepšia čokoládovňa v&nbsp;meste<br><span class="magnet__header--span">s&nbsp;vlastným eshopom</span></h1>
</div>
<div class="counts">
  <div class="container">
    <div class="row py-4">
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <h3>2700</h3>
        <p>predaných tort</p>
      </div>
      <div class="col-6 col-lg-3 mb-4 mb-lg-0">
        <h3>2700</h3>
        <p>predaných tort</p>
      </div>
      <div class="col-6 col-lg-3">
        <h3>2700</h3>
        <p>predaných tort</p>
      </div>
      <div class="col-6 col-lg-3">
        <h3>2700</h3>
        <p>predaných tort</p>
      </div>
    </div>
  </div>
</div>
<div class="chocobar fp-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6">
        <div class="chocobar__img">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/chocobar.jpg" alt="Zakazníčka so psom na terase v čokoládovni Choco" class="img-fluid">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="chocobar__text">
          <h2 class="chocobar__text--header pt-3 pt-lg-0 pb-2">Príjemné priestory<br> so schovanou terasou</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis architecto veritatis voluptatum. Voluptatibus 
            exercitationem molestias commodi magni placeat provident, quidem cum, voluptatem quia nemo ipsum perferendis dolore eum 
            amet molestiae? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque eligendi cum illum corporis odio facere 
            distinctio quia earum, qui delectus ipsum. Impedit distinctio suscipit eius ut aliquam cupiditate id facere!</p>
            <a href="<?php echo home_url() ?>/cokoladovna/" class="btn button-light"> Dozvedieť sa viac </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="chocoeshop fp-section">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-12 col-lg-6 d-block d-lg-none">
        <div class="chocoeshop__img">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/shop.jpg" alt="Chutné pralinky značky Choco a našich spolupracujúcich firiem" class="img-fluid">
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="chocoeshop__text">
          <h2 class="chocoeshop__text--header">Najchutnejší eshop<br> s donáškou do 48 hodín</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat accusantium excepturi a. Assumenda molestiae, sed quidem, 
            laborum itaque vel odit ea rerum voluptatibus consectetur labore ipsa odio optio vero ex. Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. Ad repellat aspernatur blanditiis rem. Neque enim nisi quae distinctio debitis cupiditate 
            est eius repudiandae, architecto atque, eligendi, animi et iusto cumque.</p>
            <a href="<?php echo home_url() ?>/eshop/" class="btn button-light"> Pustiť sa do nákupu </a>
        </div>
      </div>
      <div class="col-12 col-lg-6 d-none d-lg-block">
        <div class="chocoeshop__img">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/shop.jpg" alt="Chutné pralinky značky Choco a našich spolupracujúcich firiem" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>
<div id="fp-blog" class="fp-blog">
  <div class="container">
    <div class="row">
          <?php
            $args = array(
              'posts_per_page' => 3,
              'order' => 'DESC'
            );

            $rp = new WP_Query( $args );

            if($rp->have_posts()) :
                while($rp->have_posts()) : $rp->the_post();
                  get_template_part( 'partials/fp_content');
                endwhile;
                wp_reset_postdata(); 
            endif;
          ?>
     </div>
  </div>
</div>
<div class="fp-brands">
  <div class="container">
    <div class="row justify-content-center">
      <h2 class="fp-brands__header text-center my-3">Predávame najlepšie značky čokolády</h2>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_1.jpg" alt="Cholateur" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_2.jpg" alt="Chocolat" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_3.jpg" alt="Chocolateuse" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_4.jpg" alt="Chocofun" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_5.jpg" alt="Chocolaaaate" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_6.jpg" alt="Schocoladlich" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_7.jpg" alt="Čokoládovo" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_8.jpg" alt="Sladkovosti" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_9.jpg" alt="Bieláda" class="img-fluid">
        </div>
      </div>
      <div class="col-4 col-lg-2">
        <div class="fp-brands__brand">
          <img src="<?php echo home_url() ?>/wp-content/themes/Choco/assets/img/logo_10.jpg" alt="Coffeelate" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>