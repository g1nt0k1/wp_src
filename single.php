<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width,initial-scale=1" name="viewport"/>
  <link href="<?php echo esc_url(get_template_directory_uri())?>/css/reset.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/clearfix.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/common.css" rel="stylesheet" />
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/article.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Montserrat|The+Girl+Next+Door" rel="stylesheet" />
    <script src="//maps.google.com/maps/api/js?key=AIzaSyCNOWpWAn3gorn4oqo9oPU2VspLkoa7jek"></script>
    <script src="<?php echo esc_url(get_template_directory_uri())?>/js/gmaps.js" charset="utf-8"></script>
  <title>article</title>
</head>
<body>

  <header>
     <img src="<?php echo esc_url(get_template_directory_uri())?>/img/article_img/ny_image4.jpg">
     <h1 class="main_title heading f-monstserrat">
        Good Meal,Good Deal
     </h1>
  </header>

  <div class="wrapper">
      <section class="article_data clearfix">
        <p class="article_title f_next"><?php the_field('shopname'); ?></p>
        <!-- write shopdata -->
        <div class="shopdata clearfix">
          <div class="data_left float_left">
            <?php if( get_field('image') ) { ?>
              <img src="<?php the_field('image'); ?>">
            <?php } ?>
          </div>
          <div class="data_right float_left">
            <!-- get price -->
            <p class="f_next">price <?php the_field('price'); ?></p>
            <!-- get type -->
            <p class="f_next">type
              <?php if( get_field('type') ) { ?>
                <?php $check = get_field('type');
                  foreach ( (array)$check as $value ) { ?>
                  <?php echo $value; ?>
                <?php } ?>
              <?php } ?>
            </p>
            <!-- get place -->
            <p class="f_next">place
              <?php if( get_field('place') ) { ?>
                <?php the_field('place'); ?>
              <?php } ?>
            </p>
          </div>
        </div>
        <!-- end shopdata -->
      </section>

      <section class="content">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
  　        <?php the_content(); ?>
        <?php endwhile;endif; ?>
      </p>
      </section>
    <!-- start mapdata -->
    <section class="mapdata f_next">
      <p class="title_shopdata">ShopData</p>
          <div class="google_maps">
            <img class="img_top" src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/map_dammy.png">
          </div>
              <p class="shop_address f_next">Address: 450 SW Yamhill Street Portland, OR 97204 (503) 265-2010</p>
    </section>
    <!-- end mapdata -->
  </div>
</body>
</html>
