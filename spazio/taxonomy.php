<?php get_header();?>
<main class="main">
  
<div class="container">


<div class="grid_box mt20">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <a href="<?php the_permalink();?>" class="link_box">
       <div class="bg_item" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
       <p class="title_news"><?php the_title();?></p>
      </a>
    <?php 
      endwhile;
      endif;
    ?>
    </div>
  
  <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>

</main>
<?php get_footer();?>
