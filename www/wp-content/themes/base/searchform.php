<?php $sq = get_search_query() ? get_search_query() : 'Поиск по сайту...'; ?>
<form method="get" class="search" id="searchform" action="<?php bloginfo('url'); ?>" >
	<fieldset>
		<input type="submit" value="Начали" />
		<div class="field">
			<input type="text" name="s" placeholder="<?php echo $sq; ?>" />
		</div>
	</fieldset>
</form>