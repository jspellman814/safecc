<?php get_header(); ?>

  <div id="interior">

    <div id="content">

      <div id="inner-content" class="row">

        <main id="main" class="large-12 medium-12 columns" role="main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('parts/loop', 'page'); ?>

          <?php endwhile; endif; ?>

        </main>
        <!-- end #main -->

        <?php if (get_field('custom_sidebar_content')):
          get_sidebar('custom');

        endif; ?>

        <?php get_sidebar(); ?>




      </div>
      <!-- end #inner-content -->

    </div>
    <!-- end #content -->

  </div>

<?php get_footer(); ?>