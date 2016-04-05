<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >	
	<h3 class="widget-title">Search This Website</h3>
	<p id="search-p">
	<label id="s-label" for="s" style="clip: rect(1px 1px 1px 1px); position: absolute; height: 1px; width: 1px; overflow: hidden;"> Keyword(s) </label>
		<input type="text" value="" required="required" class="required" placeholder="Keyword(s)" name="s" id="s" />
	</p>
	<input type="submit" id="searchsubmit" value="" />
</form>