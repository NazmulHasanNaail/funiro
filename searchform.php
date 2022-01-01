<form class="input-group" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <button class="search-submit fa fa-search" type="submit" aria-label="search">
    </button>
    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'funiro' ); ?>" value="" name="s" id="s"/>
</form>