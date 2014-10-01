		<?php get_header(); ?>
		<div id="main">
			<?php get_sidebar(); ?>
			<div id="content" class="main-col">
				<div class="content-holder">
					<div class="content-frame">
						<div class="content-section">
							<h1>ИНТЕРВЬЮ - СТАТЬИ - ОБЗОРЫ</h1>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="open-close">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php comments_popup_link('0 comments','1 comment','% comments','comments'); ?></p>
								<?php the_content('подробнее...'); ?>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>