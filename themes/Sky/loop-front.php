

		<div class="front_content">
			<div class="entry post clearfix">
				<?php if (get_option('sky_integration_single_top') <> '' && get_option('sky_integrate_singletop_enable') == 'on') echo(get_option('sky_integration_single_top')); ?>
				

			
							<?php
				$args=array(
				  'page_id' => 14,
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


				<?php wp_link_pages(array('before' => '<p><strong>'.esc_attr__('Pages','Sky').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php edit_post_link(esc_attr__('Edit this page','Sky')); ?>
			</div> <!-- end .entry -->

					</div> <!-- end .front_content -->


	

