		<?php get_header(); ?>
		<div id="main">
			<?php get_sidebar(); ?>
			<div id="content" class="main-col">
				<div class="content-holder">
					<div class="content-frame">
						<div class="content-section">
							<h1><?php the_title(); ?></h1>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="open-close">
								<?php the_content(''); ?>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>