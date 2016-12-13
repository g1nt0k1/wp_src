<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width,initial-scale=1" name="viewport"/>
  <link href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/reset.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/clearfix.css" rel="stylesheet"/>
    <link href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/article.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Bungee|Montserrat|The+Girl+Next+Door" rel="stylesheet" />
  <title>article</title>
</head>
<body>
  <header class="first_view">
     <img src="assets/img/top_img.jpg">
     <h1 class="main_title heading f-monstserrat">
        Good Meal,Good Deal
     </h1>
  </header>
  <div class="article_wrapper">
    <div class="background">
      <section class="firstview f-next">
        <p>ShopName</p>
        <div class="firstview_data cf">
          <div class="data">
            <img class="img_top float_left" src="assets/img/dammy.jpg">
          </div>
          <div class="data_right float_left">
            <p class="f-next">price : $1200〜</p>
            <p class="f-next">type : meet</p>
            <p class="f-next">place : east</p>
          </div>
        </div>
      </section>
      <section class="contents">
        <?php the content(); ?>
      </section>
    </div>
  <div>
  <section class="mapdata f-next">
    <p>ShopData</p>
      <div class="firstview_data cf">
        <div class="data">
          <img class="img_top float_left" src="assets/img/map_dammy.png">
        </div>
        <div class="data_right float_left">
            <p class="f-next">price : $1200〜</p>
            <p class="f-next">type : meet</p>
            <p class="f-next">place : east</p>
        </div>
      </div>
  </section>
  </div>
  </div>
</body>
</html>
