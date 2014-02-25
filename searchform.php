<form class='searchform' action='<?php echo esc_url( home_url("/") ); ?>' method='get'>
	<div>
		<input type='text' name='s' class='search-box' value='<?php _e( "Enter search keyword", "reposter" ); ?>' />
		<input type='submit' class='search-button' value='<?php _e( "SEARCH", "reposter" ); ?>' />
	</div>
</form>
<div class='reposter_clear'></div>
