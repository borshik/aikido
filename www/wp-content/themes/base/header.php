<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/all.css" type="text/css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-main.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<strong class="logo"><a href="index.php"></a></strong>
			<div class="header-holder">
				<div class="gallery">
					<div class="gallery-holder">
						<ul class="gallery-list">
							<li>
								<blockquote>
									<q>Айкидо – изучение конфликта  для понимания  гармонии</q>
									<cite>Годзо Сиода</cite>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<q>Цель тренировки заключается в том, чтобы укрепить слабые места, закалить тело и отшлифовать дух.</q>
									<cite>Морихэй Уэсиба</cite>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<q>Будо никак не связано с использованием каких–то уловок. Если мы будем честно практиковать будо, другие люди тоже придут его изучать.</q>
									<cite>Годзо Сиода</cite>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<q>Правильное положение тела отражает правильное состояние ума.</q>
									<cite>Морихэй Уэсиба</cite>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<q>Айкидо – изучение конфликта  для понимания  гармонии</q>
									<cite>Годзо Сиода</cite>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<q>Твой дух есть твой истинный щит.</q>
									<cite>Морихэй Уэсиба</cite>
								</blockquote>
							</li>
						</ul>
					</div>
				</div>
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
		</div>