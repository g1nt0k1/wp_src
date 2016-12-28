<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width,initial-scale=1" name="viewport"/>
	<link href="<?php echo esc_url(get_template_directory_uri())?>/css/reset.css" rel="stylesheet"/>
	<link href="<?php echo esc_url(get_template_directory_uri())?>/css/clearfix.css" rel="stylesheet"/>
	<link href="<?php echo esc_url(get_template_directory_uri())?>/css/common.css" rel="stylesheet" />
	<link href="<?php echo esc_url(get_template_directory_uri())?>/css/list.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Bungee|Montserrat|The+Girl+Next+Door" rel="stylesheet" />
	<title>list</title>
</head>
<body>
	<header class="first_view">
		 <img src="<?php echo esc_url(get_template_directory_uri())?>/img/article_img/ny_image4.jpg">
		 <h1 class="main_title heading f-monstserrat">
				Good Meal,Good Deal
		 </h1>
	</header>
	<div class="list_wrapper">
		<div class="list_header .clearfix">
			<p class="list_header_ja">記事一覧</p>
			<p class="list_header_en f_next">ArticleList</p>
			<!-- <div class="tag_box"></div> -->
		</div>
		<div class="list_contents .clearfix">
		<div class="column_wrapper">
	

				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- each column -->
				<div class="column .clearfix">
					<a class="f_next" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php if( get_field('image') ) { ?>
						    <img src="<?php the_field('image'); ?>">
				        <?php } ?>
					<ul>
						<!-- get time -->
						<li class="f_next">Time
        					<?php if( get_field('time') ) { ?>
        						<?php the_field('time'); ?>
        					<?php } ?>
						</li>
						<!-- get place -->
						<li class="f_next">Place
    						<?php if( get_field('place') ) { ?>
    							<?php the_field('place'); ?>
    						<?php } ?>
						</li>
						<!-- get type -->
						<li class="f_next">Type
							<?php if( get_field('type') ) { ?>
								<?php $check = get_field('type');
									foreach ( (array)$check as $value ) { ?>
									<?php echo $value; ?>
								<?php } ?>
							<?php } ?>
						</li>
						<!-- get price -->
						<li class="f_next">Price
							<?php the_field('price'); ?>
						</li>
					</ul>
				</div>
				<!-- end each column -->
				<?php endwhile; endif; ?>


		</div>
	</div>
</body>
</html>