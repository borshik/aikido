		<?php get_header(); ?>
		<div id="main">
			<?php get_sidebar(); ?>
			<div id="content" class="main-col">
				<div class="content-holder">
					<div class="content-frame">
						<div class="content-section">
							<h1><?php the_title(); ?></h1>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(''); ?>
								<p><?php comments_popup_link('0 comments','1 comment','% comments','comments'); ?></p>

							<?php comments_template(); ?>

							<?php endwhile; ?>

							<?php else : ?>
							<div class="post">
								<div class="title">
									<h1>Not Found</h1>
								</div>
								<div class="content">
									<p>Sorry, but you are looking for something that isn't here.</p>
								</div>
							</div>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>