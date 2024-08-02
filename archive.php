<!-- invokes the header -->
<?php get_cst_header(); ?>

<!--Powers All Blog Posts -->
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('./resources/img/images/bus.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
        <?php the_archive_title();?>
    </h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description(); ?></p>
    </div>
  </div>
</div>

  <!-- Queries the Pages -->
  <div class="container container--narrow page-section">
    <!-- Meta Box -->
 <div class="metabox metabox--position-up metabox--with-home-link">
      <a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> 
    </p>
  </div>

    <?php while(have_posts()){
      the_post(); ?>
  <div class="post-item border-bottom border-secondary border-2">
    <h2 class="headline headline--medium headline--post-tile"><a class="blg-title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <div class="metabox my-3">
      <p class="fw-bold">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n/j/y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Read More!</a></p>
    </div>
  </div>
  <!--Closes the have_posts Loop -->
  <?php } 
    echo paginate_links();  
  ?>
</div>



<!--invokes the footer -->
<?php get_cst_footer(); ?>