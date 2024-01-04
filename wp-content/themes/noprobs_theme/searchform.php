<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
	<div class="form-row">
		<input type="text" type="search" name="s" class="form-control form-control-lg col-10 search-input" value="<?php the_search_query(); ?>"/>
		<input type="hidden" value="1" name="sentence" />
		<button type="submit" class="col-2 btn-search" value="Search"><i class="fa fa-search"></i></button>
	</div>
</form>
