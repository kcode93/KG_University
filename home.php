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
      <p>This is a BLOG</p>
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
  
  <?php 
  $pageHasChildren = get_pages(array(
    'child_of' => get_the_ID()
  ));  

  if($PARENT_ID || $pageHasChildren){ ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_the_permalink($PARENT_ID); ?>"><?php echo get_the_title($PARENT_ID); ?></a></h2>
        <ul class="min-list">
          <?php
            if($PARENT_ID){
              $child_of = $PARENT_ID;
            }else{
              $child_of = get_the_ID();
            }  

            //Pulls list of available Pages
            wp_list_pages(array(
            'title_li'=> NULL,
            "child_of" => $child_of,
            "sort_column" => 'menu_order'
            ));
          ?>
        </ul>
      </div>
  <?php } ?>

  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>

<!--Closes the have_posts Loop -->
<?php } ?>

<!--invokes the footer -->
<?php get_cst_footer(); ?>