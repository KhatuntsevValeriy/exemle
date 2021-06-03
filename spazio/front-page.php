<?php
/*
Template Name: front-page 
*/
?>

<?php get_header(); ?>


  <main class="main">


   <?php if(have_posts()) : while(have_posts()) : the_post();
      $top_slider = get_field('top_slider');
      endwhile;
      endif;
     ?>

    <div class="top_slider owl-carousel owl-theme">
      <?php if($top_slider){ ?>
        <?php foreach($top_slider as $k=>$item){ ?>   
         <div class="item" style='background-image: url(<?php echo $item["img"]["url"];?>)'>
	        <div class="text_slide">
	          <p><?php echo $item['text'] ?></p>
	        </div>
	      </div>
        <?php } ?>
       <?php } ?>
    </div>
    
    <div class="container">
      <div class="about_wr">
		<?php if(have_posts()) : while(have_posts()) : the_post();
	      $top_text = get_field('top_text');
	      endwhile;
	      endif;
	     ?>


	     <?php if($top_text){ ?>
        <?php foreach($top_text as $k=>$item){ ?>   
	       <div class="l_b">
            <div class="text_block"><?php echo $item['text_left'] ?></div>
            	<img src="<?= get_template_directory_uri().'/img/stul.png' ?>"  alt="alt">
        	</div>
            <div class="t_right"><?php echo $item['text_right'] ?></div>
        <?php } ?>
       <?php } ?>
      </div>

      <h2 class="title_box"><?php echo get_field('title_accii')?></h2>
      <div class="grid_box">
         <?php
            $query = new WP_Query('cat=2&orderby=date&posts_per_page=3'); // указываем категорию 3
            if( $query->have_posts() ){
                while( $query->have_posts() ){ $query->the_post();?>

		        <a href="<?php the_permalink();?>" class="link_box">
		         <div class="bg_item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">></div>
		         <p class="title_news"><?php the_title();?></p>
		        </a>
         <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            }
            ?>
      </div>

     </div>

    <div class="container">
      <h2 class="title_box"><?php echo get_field('title_blog')?></h2>
      <div class="grid_box">
      	<?php
            $query = new WP_Query('cat=3&orderby=date&posts_per_page=3'); // указываем категорию 3
            if( $query->have_posts() ){
                while( $query->have_posts() ){ $query->the_post();?>

		        <a href="<?php the_permalink();?>" class="link_box">
		         <div class="bg_item" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">></div>
		         <p class="title_news"><?php the_title();?></p>
		        </a>
         <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            }
            ?>
        </a>

      </div>
    </div>

    <div class="container">
      <div class="bottom_text">
	   <?php if(have_posts()) : while(have_posts()) : the_post();
	      $bottom_text = get_field('bottom_text');
	      endwhile;
	      endif;
	     ?>
       <div class="wr_flex">
      	<?php if($bottom_text){ ?>
        <?php foreach($bottom_text as $k=>$item){ ?>   
	          <?php echo $item['text_left'] ?>
	          <?php echo $item['text_right'] ?>
        <?php } ?>
       <?php } ?>
      </div>
     </div>
    </div>
  </main>

<?php get_footer(); ?>