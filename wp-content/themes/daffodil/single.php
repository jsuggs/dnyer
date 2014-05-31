<?php get_header(); ?>

			
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata">
					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 
					<?php edit_post_link('Edit', ' | ', ''); ?>   
				</p>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="tags">
					<?php the_tags('', ', ', ''); ?>
				</p>
			</div><!--/post-->

		<?php comments_template(); ?>

			<?php endwhile; ?>
				
				<div class="navigation">
					<div class="alignleft"><?php previous_post_link('%link'); ?></div>
					<div class="alignright"><?php next_post_link('%link'); ?></div>
					<br style="clear: both" />
				</div>

		<?php else : ?>

		<h2 class="pagetitle">Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

<?php get_footer(); ?>