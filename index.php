<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <link href="https://fonts.googleapis.com/css?family=Bungee|Montserrat|The+Girl+Next+Door" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/reset.css" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/clearfix.css" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/common.css" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/top.css" rel="stylesheet" />
    <script src="common.js"></script>
    <title>Good Meal,Good Deal</title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
      <header class="first_view">
          <img src="<?php echo esc_url(get_template_directory_uri())?>/img/article_img/ny_image1.jpg" />
          <h1 class="main_title heading f_monstserrat">
          Good Meal,Good Deal
          </h1>
      </header>
      <div class="wrapper">
          <h2 class="contents_title heading f_monstserrat time">
              New Arrival <span>新着記事</span>
          </h2>
          <div class="contents_wrapper clearfix">
              <div class="content">
                  <?php if(have_posts()) :?>
                  <?php while(have_posts()) : ?>
                  <?php the_post();?>
                  <article>
                      <img class="article_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/article_img/ny_image2.jpg" />
                      <div class="title_wrapper">
                          <h3 class="article_title heading f_next">
                              <?php the_title();?>
                          </h3>
                          <h3 class="article_price heading f_next">
                              <?php echo get_field("price") ?>
                          </h3>
                      </div>
                      <a class="article_a" href="#"></a>
                  </article>
                  <?php endwhile; ?>
                  <?php else:?>
                  <?php endif;?>
              </div>
              <div class="content">
                  <article>
                      <img class="article_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/article_img/ny_image2.jpg" />
                      <div class="title_wrapper">
                          <h3 class="article_title heading f_next">
                              Article Title
                          </h3>
                          <h3 class="article_price heading f_next">
                              $XXXX
                          </h3>
                      </div>
                      <a class="article_a" href="#"></a>
                  </article>
              </div>
          </div>
          <!-- icon_zone -->
          <!-- Time 時間帯 -->
          <h2 class="contents_title heading f_monstserrat meal_type">
              Time <span>時間帯</span>
          </h2>
          <div class="nav_wrapper clearfix">
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_sun.png" />
                  <h4 class="icon_title f_bungee">
                      Lunch Time
                  </h4>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_moon.png" />
                  <h4 class="icon_title f_bungee">
                      Dinner Time
                  </h4>
              </div>
          </div>
          <!-- Meal Type 食事の種類 -->
          <h2 class="contents_title heading f_monstserrat meal_type">
              Meal Type <span>食事の種類</span>
          </h2>
          <div class="nav_wrapper clearfix">
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_meet.png" />
                  <h4 class="icon_title f_bungee f_bungee">
                      Meet
                  </h4>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_fish.png" />
                  <h4 class="icon_title f_bungee">
                      Fish
                  </h4>
              </div>
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_pizza.png" />
                  <h4 class="icon_title f_bungee">
                      Pizza
                  </h4>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_humberger.png" />
                  <h4 class="icon_title f_bungee">
                      Humberger
                  </h4>
              </div>
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_veg.png" />
                  <h4 class="icon_title f_bungee">
                      Vegetable
                  </h4>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/64/icon_dolce.png" />
                  <h4 class="icon_title f_bungee">
                      Dolce
                  </h4>
              </div>
          </div>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>
