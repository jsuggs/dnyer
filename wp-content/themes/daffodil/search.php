<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results for &#8216;<?=$_GET['s']?>&#8217;</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata">
					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 
					<?php edit_post_link('Edit', ' | ', ''); ?>   
				</p>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

				<p class="tags">
					<?php the_tags('', ', ', ''); ?>
				</p>
				<ul class="postmetadata">
					<li class="comments">
						<a class="comments" href="<?php comments_link(); ?>"><span><?php comments_number('No Comment','1 Comment','% Comments'); ?></span></a>
					</li>
				</ul>
			</div><!--/post-->

		<?php endwhile; ?>

		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries') ?></div>
			<br style="clear: both" />
		</div>

	<?php else : ?>

		<h2 class="pagetitle">No Posts Found</h2>
		<p>Search for something else.</p>

	<?php endif; ?>

<?php get_footer(); ?>