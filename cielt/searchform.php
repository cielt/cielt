<form action="<?php bloginfo('url'); ?>" method="get">
    <fieldset>
        <label for="search" class="assistive-text">Search</label>
        <input type="text" name="s" id="search" class="text" value="<?php the_search_query(); ?>" placeholder="search" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'search', 'cielt' ); ?>" />
    </fieldset>
</form>