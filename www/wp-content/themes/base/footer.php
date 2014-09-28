		<div id="footer">
			<strong class="logo"><a href="index.html"></a></strong>
			<div class="header-holder">
				<blockquote>
					<q>Айкидо – изучение конфликта  для понимания  гармонии</q>
					<cite>Годзо Сиода</cite>
				</blockquote>
				<div id="nav">
					<?php
					wp_nav_menu(array(
								'container' => false,
								'theme_location' => 'primary',
								'menu_class' => 'nav',
								'link_before' => '<span>',
								'link_after' =>  '</span>'
							));
					?>
				</div>
			</div>
			<a href="#header" class="btn-top"><<<</a>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>