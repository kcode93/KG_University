<!-- invokes the header -->
<?php get_cst_header(); ?>

<!-- Queries the Pages -->
<?php while(have_posts()){
    the_post();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./resources/img/images/bus.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>DON'T FORGET TO REPLACE ME LATER...!</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
      <a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> 
      <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?></span>
    </p>
  </div>

  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>

<!--Closes the have_posts Loop -->
<?php } ?>

<!--invokes the footer -->
<?php get_cst_footer(); ?>