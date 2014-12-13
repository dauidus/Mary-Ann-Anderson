
<?php if (have_posts()) : $i = 1; while (have_posts() && $i < 4) : the_post(); ?>
	<div class="blog_entry et_shadow" style="margin-bottom:-60px;">
		
		<div class="blog_entry_content">
		
			<?php if ( get_option('sky_postinfo1') ) { ?>
				
			<?php } ?>
			
			<?php
				$thumb = '';
				$width = 58;
				$height = 58;
				$classtext = 'post-thumb';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Entry');
				$thumb = $thumbnail["thumb"];
			?>
			<?php if ( $thumb <> '' && get_option('sky_thumbnails_index') == 'on' ) { ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
						<span class="post-overlay"></span>
					</a>	
				</div> 	<!-- end .post-thumbnail -->
			<?php } ?>
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="clear"></div>
			
			<?php if (get_option('sky_blog_style') == 'on') the_content(''); else { ?>
				<p><?php truncate_post(60); ?></p>
			<?php } ?>
		</div> <!-- end .blog_entry_content -->
	</div> <!-- end .blog_entry -->
<?php 
$i++; endwhile; 
	if (function_exists('wp_pagenavi')) { wp_pagenavi(); }
	else { get_template_part('includes/navigation','entry'); }
else:
	get_template_part('includes/no-results','entry');
endif; ?>