<form method="get" action="<?php echo home_url( '/' ); ?>" class="search-form">
<input type="text" name="s" id="s" value="<?php the_search_query(); ?>" /><input type="image" src="<?php bloginfo('template_url'); ?>/images/btn_serch.gif"  alt="検索ボタン" />
</form>