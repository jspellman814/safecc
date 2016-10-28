<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="max-width">
		<div class="top-bar-right leave-site">
			<ul class="menu">
				<li><a href="http://www.google.com">Leave This Site! <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="top-bar-left float-left">
			<?php joints_top_nav(); ?>
			<?php //joints_take_action_nav(); ?>
		</div>

	</div>
	<div class="top-bar-right show-for-small-only">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>