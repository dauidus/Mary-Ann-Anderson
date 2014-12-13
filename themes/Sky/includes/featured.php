
<div style="width:507px; margin: 0px 30px 0px 228px;">
	<h1 id="title">Laid Off: </h1><span style="position:absolute; z-index:99; margin:-71px 0 0 358px; font-size:30px; line-height:30px; color:#65827D;">A Comprehensive<br>Job Search Guide</span>
</div>

<div id="main-content" class="et_shadow">
	<div class="content-top"></div>

	<div id="slider">
	
		<div id="book"></div>
		
		<div id="front_top_right">
			<h1 id="page-title"><?php echo esc_html( $et_page_title ); ?></h1>
			<?php get_template_part('loop','front'); ?>
		</div>
		
	</div> <!-- end #slider -->
	
	
	<div class="content-bottom"></div>
</div> <!-- end #main-content -->








<div id="main-content" class="et_shadow" style="margin-top:120px;">
<div class="single_container et_shadow">
	<div class="content-top"></div>
	<div class="single_content">
		<div class="entry post clearfix">

			<h1 id="page-title" style="margin-top:-100px; margin-bottom:20px;">What Can This Book Do For You?</h1>
			<?php
				$args=array(
				  'page_id' => 42,
				  'post_type' => 'page',
				  'post_status' => 'publish',
				  'posts_per_page' => 1,
				  'caller_get_posts'=> 1
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				    <?php
				    the_content();
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>

		</div> <!-- end .entry -->
	</div> <!-- end .single_content -->
	<div class="content-bottom"></div>
</div> <!-- end .single_container -->
</div> <!-- end #main-content -->





<!-- #blog_container -->

<div id="blog_container" class="clearfix">

	<?php get_template_part('includes/entry'); ?>
</div> <!-- end #blog_container -->
