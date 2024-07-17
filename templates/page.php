<!-- invokes the header -->
<?php get_cst_header(); ?>

<!-- Queries the Pages -->
<?php while(have_posts()){
    the_post();
?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./resources/img/images/bus.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
    $PARENT_ID = wp_get_post_parent_id(get_the_ID());  
    if($PARENT_ID){ ?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($PARENT_ID); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($PARENT_ID); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
    <?php }
  ?>
  

  <div class="page-links">
    <h2 class="page-links__title"><a href="<?php echo site_url('/about-us'); ?>">About Us</a></h2>
    <ul class="min-list">
      <li class="current_page_item"><a href="<?php echo site_url('/our-history'); ?>">Our History</a></li>
      <li><a href="<?php echo site_url('/our-goals'); ?>">Our Goals</a></li>
    </ul>
  </div>

  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>

<!--Closes the have_posts Loop -->
<?php } ?>

<!--invokes the footer -->
<?php get_cst_footer(); ?>