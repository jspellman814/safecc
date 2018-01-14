<?php get_header(); ?>

<div id="hero">
		    <?php
				$type = 'safecc_hero';
				$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				'posts_per_page' => 1,
				'orderby' => 'rand',
				'caller_get_posts'=> 1);

				$safe_query = null;
				$safe_query = new WP_Query($args);
				
				if( $safe_query->have_posts() ) {
					while ($safe_query->have_posts()) : $safe_query->the_post();
			?>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('hero2x'); } ?>
						<div class="max-width">
					<div class="quote"><?php the_content(); ?></div>
							<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( "hero-cta" ) ) : ?><?php endif; ?>
						</div>
			<?php
				endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>
</div>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-12 medium-12 columns" role="main">
			
			<div class="kicker"><div class="kicker-type">Our Mission</div></div>
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>
		    
		    <!-- Emergency Contact Number prior to blocks -->
		    <div class="crisis-line-body">
			    <div class="intro large-4 medium-4 columns">If you need immediate help right now, call our 24-hour help line:</div>
			    <div class="phone large-4 medium-4 columns">(503) 397-6161</div>
				<div class="alternate-phone large-4 medium-4 columns">1 (866) 397-6161 - Toll Free</div>
		    </div>
		    
		    <?php
				$type = 'safecc_blocks';
				$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				'posts_per_page' => -1,
				'caller_get_posts'=> 1);

				$safe_query = null;
				$safe_query = new WP_Query($args);
				
				if( $safe_query->have_posts() ) {
					while ($safe_query->have_posts()) : $safe_query->the_post(); 
			?>
				<div class="homepage-block">
					<div class="<?php echo sanitize_title_with_dashes(get_the_title()); ?>">
						<div class="kicker">
							<div class="kicker-type"><?php the_field('kicker'); ?></div>
						</div>
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					</div>
				</div>
			<?php
				endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>
		    
		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>