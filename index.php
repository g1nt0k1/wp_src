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
          <h1 class="contents_title heading f_monstserrat time">
              New Arrival <span>新着記事</span>
          </h1>
          <div class="contents_wrapper clearfix">
              <div class="content">
                  <?php query_posts('posts_per_page=3'); ?>
                  <?php if(have_posts()) :?>
                  <?php while(have_posts()) : ?>
                  <?php the_post();?>
                  <article>
                      <?php
                        $image = get_field("image");
                        if(!$image){
                            $image = esc_url(get_template_directory_uri())."/img/icon/256/none_image.png";
                        }
                      ?>
                      <img class="article_img" src="<?php echo $image ?>" />
                      <div class="title_wrapper">
                          <h2 class="article_title heading f_bungee">
                                <?php
                                    // 12文字以上は「...」で表示させる
                                    $title = mb_substr($post->post_title,0,12);
                                    if(12 > strlen($title)){
                                        echo $title;
                                    }
                                    else{
                                        echo $title.'...';
                                    }
                                ?>
                          </h2>
                          <h2 class="article_price heading f_bungee">
                              <?php echo get_field("price") ?>
                          </h2>
                      </div>
                      <a class="article_a" href="<?php the_permalink()?>"></a>
                  </article>
                  <?php endwhile; ?>
                  <?php else:?>
                  <?php endif;?>
              </div>
          </div>
          <!-- icon_zone -->
          <!-- Time 時間帯 -->
          <h1 class="contents_title heading f_monstserrat meal_type">
              Time <span>時間帯</span>
          </h1>
          <div class="nav_wrapper clearfix">
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_sun.png" />
                  <h3 class="icon_title f_bungee">
                      Lunch Time
                  </h3>
                  <a href="/home/category/lunch" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_moon.png" />
                  <h3 class="icon_title f_bungee">
                      Dinner Time
                  </h3>
                  <a href="/home/category/dinner" class="category_list_a"></a>
              </div>
          </div>
          <!-- Meal Type 食事の種類 -->
          <h1 class="contents_title heading f_monstserrat meal_type">
              Meal Type <span>食事の種類</span>
          </h1>
          <div class="nav_wrapper clearfix">
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_meet.png" />
                  <h3 class="icon_title f_bungee f_bungee">
                      Meet
                  </h3>
                  <a href="/home/category/meet" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_fish.png" />
                  <h3 class="icon_title f_bungee">
                      Fish
                  </h3>
                  <a href="/home/category/fish" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_pizza.png" />
                  <h3 class="icon_title f_bungee">
                      Pizza
                  </h3>
                  <a href="/home/category/pizza" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_humberger.png" />
                  <h3 class="icon_title f_bungee">
                      Humberger
                  </h3>
                  <a href="/home/category/humberger" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_left">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_veg.png" />
                  <h3 class="icon_title f_bungee">
                      Vegetable
                  </h3>
                  <a href="vegetable" class="category_list_a"></a>
              </div>
              <div class="icon_wrapper float_right">
                  <img class="icon_img" src="<?php echo esc_url(get_template_directory_uri())?>/img/icon/128/icon_dolce.png" />
                  <h3 class="icon_title f_bungee">
                      Dolce
                  </h3>
                  <a href="/home/category/dolce" class="category_list_a"></a>
              </div>
          </div>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>
