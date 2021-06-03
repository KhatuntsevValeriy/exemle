<?php get_header();?>
<main class="main">
  <div class="container">
      <div class="grid_box mt20">
        <?php
            if( have_posts() ){ while( have_posts() ){ the_post(); ?>
              <a href="<?php the_permalink();?>" class="link_box">
               <div class="bg_item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
               <p class="title_news"><?php the_title();?></p>
              </a>
        <?php
          }
          wp_reset_postdata(); // сбрасываем переменную $post
        }
        ?>
    </div>

    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

  </div>
</main>



<?php get_footer();?>
