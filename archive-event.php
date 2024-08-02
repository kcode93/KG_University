<!-- invokes the header -->
<?php get_cst_header(); ?>

<!--Powers All Blog Posts -->
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./resources/img/images/bus.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
        All Events
    </h1>
    <div class="page-banner__intro">
      <p>Check out these Events</p>
    </div>
  </div>
</div>

  <!-- Queries the Pages -->
  <div class="container container--narrow page-section">
   <?php $pullEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event'
          )); ?>

          <?php while($pullEvents->have_posts()){
            $pullEvents->the_post();
          ?>
            <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php the_time('M'); ?></span>
              <span class="event-summary__day"><?php the_time('d'); ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_content(),18); ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <?php  } wp_reset_postdata(); ?>
</div>



<!--invokes the footer -->
<?php get_cst_footer(); ?>