<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata">
					<?php
					if($post->post_parent) {
						echo '&laquo; ';
						echo '<a href="'.get_permalink($post->post_parent).'" class="parentpage" title="Parent page: '.get_the_title($post->post_parent).'">'.get_the_title($post->post_parent).'</a>';
						echo ' | ';
					}
					?>
					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 
					<?php edit_post_link('Edit', ' | ', ''); ?>   
				</p>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<?php
				  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
				  if ($children) { ?>
				  <h3 class="subpages">Subpages</h3>
				  <ul class="subpages">
				  <?php echo $children; ?>
				  </ul>
				<?php } ?>
			</div><!--/post-->

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="pagetitle">Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

<?php get_footer(); ?>