<!-- invokes the header -->
<?php get_cst_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./resources/img/images/bus.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome to our Blog!</h1>
    <div class="page-banner__intro">
      <p>Keep up with our Latest News</p>
    </div>
  </div>
</div>

<
  <!-- Queries the Pages -->
  <?php while(have_posts()){
      the_post(); ?>
  <div class="container container--narrow page-section">
  <div class="post-item border-bottom border-secondary border-2">
    <h2 class="headline headline--medium headline--post-tile"><a class="blg-title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <div class="metabox">
      <p class="fw-bold">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Read More!</a></p>
    </div>
  </div>
</div>

<!--Closes the have_posts Loop -->
<?php } ?>

<!--invokes the footer -->
<?php get_cst_footer(); ?>