					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
		    				<div class="large-12 medium-12 columns">
			    				<div class="tagline">SAFE <span class="nobold">stands for</span> Support, Advocacy, Freedom & Empowerment</div>
								<div class="site-info">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widgets") ) : ?><?php endif;?>
								</div><!-- .site-info -->
							</div>
						</div> <!-- end #inner-footer -->
						<div class="large-12 medium-12 columns copyright">
							<div id="inner-footer" class="row">
								<p class="source-org copyright">&copy; Copyright <?php echo date("Y") ?> SAFE of Columbia County, 501(c)3 non-profit agency.</p>
							</div>
						</div>
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->